<?php

class SiteController extends CController {
    public $comboData = 'value';
    public $comboSelect = '';
    public $textSearch = '';
    public $ID_BOOK="";
    public $curPage="";
    function init() {
        parent::init();
        $main_type = 0;
        $this->layout = "main";
        $this->comboData = CommonDB::GetAll('SELECT * FROM tbl_index WHERE delete_logic_flg=0 AND TYPE=0 ORDER BY INDEX_CODE',[]);
    }
    public function actions() {
        return array(
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    public function actionIndex() {
        //background: #5A2D0C;
$this->curPage="home";
         $this->render('index',array('c'=>''));
    }

    public function actionGetListFriend(){
        $sql = "select * from friend";
        $connection=Yii::app()->db;
        $command=$connection->createCommand($sql);
        $result=$command->queryAll();
        $array['items'] = $result;
        echo json_encode($result);
    }
    public function actionGetList(){
        $sql = "select e.id, e.firstName, e.lastName, e.title, e.picture, count(r.id) as reportCount from employee e left join employee r on r.managerId = e.id group by e.id order by e.lastName, e.firstName";
        $connection=Yii::app()->db;
        $command=$connection->createCommand($sql);
        $result=$command->queryAll();
        $array['items'] = $result;
        echo json_encode($result);
    }
    public function actionGetListSearch(){
        $data = $_GET['data'];
        $sql = "select e.id, e.firstName, e.lastName, e.title, e.picture, count(r.id) as reportCount from employee e left join employee r on r.managerId = e.id
                where e.title like '%".$data."%'
                group by e.id order by e.lastName, e.firstName";
        $connection=Yii::app()->db;
        $command=$connection->createCommand($sql);
        $result=$command->queryAll();
        // $array['items'] = $result;
        echo json_encode($result);
    }
    public function actionGetItem(){
        $id = $_GET['id'];
        $sql = "select e.id, e.firstName, e.lastName, e.managerId, e.title, e.department, e.city, e.officePhone, e.cellPhone, " .
            "e.email, e.picture, m.firstName managerFirstName, m.lastName managerLastName, count(r.id) reportCount " .
            "from employee e left join employee r on r.managerId = e.id left join employee m on e.managerId = m.id " .
            "where e.id=".$id." group by e.lastName order by e.lastName, e.firstName";
        echo $sql;
        $connection=Yii::app()->db;
        $command=$connection->createCommand($sql);
        $result=$command->query();
        $array['items'] = $result;
        echo json_encode($array);
    }
    public function actionLoadSlide(){
        $slide = Slide::model()->findAll();
        $this->renderPartial('_slide',array('slide'=>$slide));
    }
    public function actionLoadSlideProduct(){


        $this->renderPartial('_slide_product');
    }
    public function actionLibary() {
        $this->curPage="thuvien";
        $c="";//$c = TblConfig::model()->find();

        $this->layout = "";
        $this->render('libary',array('c'=>$c));
    }
    public function actionLibarySearch($key_search) {

        $this->curPage="menusearch";
        $arrSearch = explode('-',$key_search);
        $daimucId =$arrSearch[0];
        $keySearch =$arrSearch[1];
        $this->comboSelect=$daimucId;
        $this->textSearch=$keySearch;
        $c="";//$c = TblConfig::model()->find();
        $this->layout = "";
        $this->render('libary',array('arrSearch'=>$arrSearch));
    }
    public function actionSubLibaryTieuMucSearchFlg() {

//and parent_id in('.$subQuery.')



        $parent_id=Common::getPara("daimuc");

        $keysearch=Common::getPara("keysearch");


//        $dataNewBook = CommonDB::GetAll("SELECT * FROM tbl_book WHERE book_type=1 and active=1 AND delete_logic_flg=0",[]);
//        $dataPrepareBook = CommonDB::GetAll("SELECT * FROM tbl_book WHERE book_type=0 and active=1 AND delete_logic_flg=0",[]);
//        $dataGoodBook = CommonDB::GetAll("SELECT * FROM tbl_book WHERE good_book_flg=1 and active=1 AND delete_logic_flg=0",[]);
        if(Common::getPara("from")=="order"){
            $parent_id = Common::getSession("parent_id");
            $keysearch= Common::getSession("book_name");
        }else{
            Common::setSession("parent_id",$parent_id);
            Common::setSession("book_name",$keysearch);
        }

        // from=order&gotopage='+gotopage+'&orderbyid='+orderbyid+'&perpageshow='+perpageshow,
        $gotopage = Common::getPara("gotopage");
        $orderbyid = Common::getPara("orderbyid");
        $perpageshow = Common::getPara("perpageshow");

        $page = ($gotopage!="") ? $gotopage : 1;
        $pageSize = ($perpageshow!="") ? $perpageshow : 1;
        $arrView["gotopage"]=$gotopage;
        $arrView["orderbyid"]=$orderbyid;
        $arrView["perpageshow"]=$perpageshow;
        $flgSachHay =1;
        $queryMore ="";
        $subQuery=" and parent_id in (
            SELECT id FROM tbl_index
WHERE parent_id in (SELECT id FROM tbl_index
WHERE parent_id=:parent_id ) and type=2 )" ;
        if($parent_id==0){
            $subQuery='';
        }
        $queryMore=" ";
        if($keysearch=="sachhaynendoc"){
            $flgSachHay=1;
            $queryMore=" and good_book_flg=1 ".$subQuery;
        }
        if($keysearch=="sachsapduavaothuvien"){
            $flgSachHay=2;
            $queryMore=" and book_type=0 ".$subQuery;
        }
        if($keysearch=="sachmoiduavaothuvien"){
            $flgSachHay=2;
            $queryMore=" and book_type=1 ".$subQuery;
        }


        $query1 = Yii::app()->db->createCommand() //this query contains all the data
            ->select(array('*'))
            ->from(array('tbl_book'))
            ->where("delete_logic_flg =0 and  active=1  ".$queryMore)
            ->limit($pageSize,  ($page-1) * $pageSize); // the trick is here!

        if ($orderbyid==0){
            $query1=   $query1->order('book_name ');
        }else
            if ($orderbyid==1){
                $query1=  $query1->order('viewer_count ');
            }

        if($parent_id!=0){
            $query1->bindParam(':parent_id',  $parent_id, PDO::PARAM_INT);
        }
//        $keyword = "%".$keysearch."%";
//        $query1->bindParam(':book_name',  $keyword, PDO::PARAM_STR);

        $dataItem= $query1->queryAll();

        $item_count = Yii::app()->db->createCommand() // this query get the total number of items,
            ->select(' count(id) as count ')
            ->from(array('tbl_book'))
            ->where(' delete_logic_flg =0 and active=1 '.$queryMore);

        if($parent_id!=0){
            $item_count->bindParam(':parent_id',  $parent_id,  PDO::PARAM_INT);
        }
//        $keyword = "%".$keysearch."%";
//        $item_count->bindParam(':book_name',  $keyword, PDO::PARAM_STR);

        $itemCount= $item_count->queryScalar();
        $totalPage = ceil($itemCount / $pageSize);

        $dataPage =array('totalPage'=>$totalPage,'pageSize'=>$pageSize,'itemCount'=>$itemCount,'page'=>$page);
        $this->renderPartial('_sublibary_tieumuc_search',array('dataItem'=>$dataItem,'arrDataPage'=>$dataPage,'arrView'=>$arrView));
    }

    public function actionSubLibaryTieuMucSearch() {

//and parent_id in('.$subQuery.')
$subQuery=" and parent_id in (
            SELECT id FROM tbl_index
WHERE parent_id in (SELECT id FROM tbl_index
WHERE parent_id=:parent_id ) and type=2 )" ;


        $parent_id=Common::getPara("daimuc");

        $keysearch=Common::getPara("keysearch");
        if($keysearch=="sachhaynendoc"){
            $clsview = new ClsViewAllBook();

        }
        if(Common::getPara("from")=="order"){
            $parent_id = Common::getSession("parent_id");
            $keysearch= Common::getSession("book_name");
        }else{
            Common::setSession("parent_id",$parent_id);
            Common::setSession("book_name",$keysearch);
        }
        if($parent_id==0){
            $subQuery='';
        }
        // from=order&gotopage='+gotopage+'&orderbyid='+orderbyid+'&perpageshow='+perpageshow,
        $gotopage = Common::getPara("gotopage");
        $orderbyid = Common::getPara("orderbyid");
        $perpageshow = Common::getPara("perpageshow");

        $page = ($gotopage!="") ? $gotopage : 1;
        $pageSize = ($perpageshow!="") ? $perpageshow : 1;
        $arrView["gotopage"]=$gotopage;
        $arrView["orderbyid"]=$orderbyid;
        $arrView["perpageshow"]=$perpageshow;

        $query1 = Yii::app()->db->createCommand() //this query contains all the data
            ->select(array('*'))
            ->from(array('tbl_book'))
            ->where("delete_logic_flg =0 and ( book_name like :book_name or author like :book_name or introduction like :book_name )".$subQuery)
            ->limit($pageSize,  ($page-1) * $pageSize); // the trick is here!

        if ($orderbyid==0){
            $query1=   $query1->order('book_name ');
        }else
            if ($orderbyid==1){
                $query1=  $query1->order('viewer_count ');
            }

        if($parent_id!=0){
            $query1->bindParam(':parent_id',  $parent_id, PDO::PARAM_INT);
        }
        $keyword = "%".$keysearch."%";
        $query1->bindParam(':book_name',  $keyword, PDO::PARAM_STR);

        $dataItem= $query1->queryAll();

        $item_count = Yii::app()->db->createCommand() // this query get the total number of items,
            ->select(' count(id) as count ')
            ->from(array('tbl_book'))
            ->where(' delete_logic_flg =0  and book_name like :book_name '.$subQuery);

        if($parent_id!=0){
            $item_count->bindParam(':parent_id',  $parent_id,  PDO::PARAM_INT);
        }
        $keyword = "%".$keysearch."%";
        $item_count->bindParam(':book_name',  $keyword, PDO::PARAM_STR);

        $itemCount= $item_count->queryScalar();
        $totalPage = ceil($itemCount / $pageSize);

        $dataPage =array('totalPage'=>$totalPage,'pageSize'=>$pageSize,'itemCount'=>$itemCount,'page'=>$page);
        $this->renderPartial('_sublibary_tieumuc_search',array('dataItem'=>$dataItem,'arrDataPage'=>$dataPage,'arrView'=>$arrView));
    }

    public function actionSubLibary() {
        $this->curPage="thuvien";
        $cateId= $_REQUEST["myid"];
        $mylevel =$_REQUEST["mylevel"];
        Common::setSession("parent_id","");
        Common::setSession("book_name","");
        if($mylevel==1){
            $this->renderPartial('_sublibary_trungmuc');
        }else{
            $this->renderPartial('_sublibary');
        }

    }

    public function actionSubLibaryTieuMuc() {

        Common::setSession("book_name","");
        $parent_id= (isset($_GET['myid']) ? $_GET['myid'] : "");
        if(Common::getPara("from")=="order"){
            $parent_id = Common::getSession("parent_id");
        }else{
            Common::setSession("parent_id",$parent_id);
        }
       // from=order&gotopage='+gotopage+'&orderbyid='+orderbyid+'&perpageshow='+perpageshow,
        $gotopage = Common::getPara("gotopage");
        $orderbyid = Common::getPara("orderbyid");
        $perpageshow = Common::getPara("perpageshow");

        $page = ($gotopage!="") ? $gotopage : 1;
        $pageSize = ($perpageshow!="") ? $perpageshow : 3;
        $arrView["gotopage"]=$gotopage;
        $arrView["orderbyid"]=$orderbyid;
        $arrView["perpageshow"]=$perpageshow;

        $query1 = Yii::app()->db->createCommand() //this query contains all the data
            ->select(array('*'))
            ->from(array('tbl_book'))
            ->where('delete_logic_flg =0 and parent_id=:parent_id')
            ->limit($pageSize,  ($page-1) * $pageSize); // the trick is here!
        if ($orderbyid==0){
            $query1=   $query1->order('book_name ');
        }else
            if ($orderbyid==1){
                $query1=  $query1->order('viewer_count ');
            }
        $query1->bindParam(':parent_id',  $parent_id, PDO::PARAM_STR);
        $dataItem= $query1->queryAll();

        $item_count = Yii::app()->db->createCommand() // this query get the total number of items,
            ->select(' count(id) as count ')
            ->from(array('tbl_book'))
            ->where(' delete_logic_flg =0  and parent_id=:parent_id');

        $item_count->bindParam(':parent_id',   $parent_id, PDO::PARAM_STR);
       $itemCount= $item_count->queryScalar();
        $totalPage = ceil($itemCount / $pageSize);

        $dataPage =array('totalPage'=>$totalPage,'pageSize'=>$pageSize,'itemCount'=>$itemCount,'page'=>$page);
        $this->renderPartial('_sublibary_tieumuc',array('dataItem'=>$dataItem,'arrDataPage'=>$dataPage,'arrView'=>$arrView));
    }
    //phuong
    public function actionLibaryHight() {
        $c="";//$c = TblConfig::model()->find();
        $this->render('libary_hight',array('c'=>$c));
    }
    public function actionLibaryNormal() {
        $c="";//$c = TblConfig::model()->find();
        $this->render('libary_normal',array('c'=>$c));
    }
    public function actionLibarySlow() {
        $c="";//$c = TblConfig::model()->find();
        $this->render('libary_slow',array('c'=>$c));
    }
    //phuong
    public function actionRegister() {
        //dang-ky
        $email= Common::getPara("email");
        $isCheckEmail= Common::getPara("ischeck");
        if($isCheckEmail!=""){
            $query="Select * from tbl_users where email=:email";
            $hsTable["email"]=$email;
            $data = CommonDB::GetAll($query,$hsTable);
            if(count($data)>0){
                echo "0";Yii::app()->end();
                return;
            }
            echo "1";Yii::app()->end();
            return;
        }

        $btnsave= Common::getPara("password");

        //regist
        if($btnsave!=""){
            $query1="Select * from tbl_users where email=:email";
            $hsTable1["email"]=$email;
            $data = CommonDB::GetAll($query1,$hsTable1);
            if(count($data)>0){
                echo "0";Yii::app()->end();
                return;
            }
            $queryIn="insert into tbl_users(display_name,birthday,sex,email,password)
             values(:display_name,:birthday,:sex,:email,:password)";
            $hsTable["display_name"]=Common::getPara("display_name");
            $hsTable["birthday"]=Common::converDDMMYYToYYYYMMDDPara(Common::getPara("birthday"));
            $hsTable["sex"]= Common::getPara("sex");
            $hsTable["email"]= Common::getPara("email");
            $hsTable["password"]= md5( Common::getPara("password"));
            CommonDB::runSQL($queryIn,$hsTable);
            echo "1";Yii::app()->end();
            return;
        }
        $c="";//$c = TblConfig::model()->find();
        $this->render('register',array('c'=>$c));
    }
    public function actionLogin() {
        $password= Common::getPara("password");
        //regist
        if($password!=""){
            $email= Common::getPara("email");
            $passwordmd = md5($password);
            $hsTable["email"]= $email;
            $hsTable["password"]= $passwordmd;
            $dataTable = CommonDB::GetAll("Select * from tbl_users where email=:email and password=:password",$hsTable);
            if(count($dataTable)>0){
                $arrInfo=$dataTable[0];
                Yii::app()->session['id_user'] = $arrInfo['id'];
                Yii::app()->session['email'] = $arrInfo['email'];
                Yii::app()->session['display_name'] = $arrInfo['display_name'];
                echo "1";Yii::app()->end();
            }else{
                echo "Đăng nhập không thành công!Vui lòng đăng nhập lại.";
                Yii::app()->end();
            }
            return;
        }
        $c="";//$c = TblConfig::model()->find();
        $this->render('login',array('c'=>$c));
    }
    public function actionLogout() {
        Yii::app()->session->destroy();
        $this->redirect('/');
    }
    public function actionGetPassword() {
        //quen-mat-khau
        $check = TblConfig::model()->find();

        $email= Common::getPara("email");
        //regist
        if($email!=""){
            $hsTable["email"]= $email;
            $dataTable = CommonDB::GetAll("Select * from tbl_users where email=:email",$hsTable);
            if(count($dataTable)>0){
                $frommail=ADMIN_EMAIL;
                 $guidactive =  Common::guid();
                $queryUpdate = "Update tbl_users set code_active=:code_active where  email=:email";
                $hsTable["code_active"]=$guidactive;
                CommonDB::runSQL($queryUpdate,$hsTable);
                $mail = new JPhpMailer;
                $linkActive = WEB_URL.'/lay-lai-mat-khau/'.$guidactive;
                $contentLink="Vào đây để <a href='".$linkActive."' >Đổi mật khẩu mới</a>. hoặc ".$linkActive;
                $mail->sendMailSmtp( $frommail,$email,"info", $email,"[Thu vien cong giao]Lay mat khau" , $contentLink);
               // SendMail($frommail,$email,"[Thu vien cong giao]","Mat khau cua ban la:".$guidactive,$fromfullname="info");
                echo "1";Yii::app()->end();
            }else{
                echo "Email không tồn tại.";
                Yii::app()->end();
            }
            return;
        }

        $this->render('get_password',array('page'=>$check));
    }
    public function actionChangeForgetPass($code_active) {
      $issubmit =  Common::getPara('issubmit');
        if($issubmit=="1"){
            $hsTable["code_active"]=Common::getPara("code_active");
            $dataTable = CommonDB::GetAll("Select * from tbl_users where code_active=:code_active",$hsTable);
            if(count($dataTable)==0){
                echo "Mã đổi mật khẩu bị sai!";Yii::app()->end();
                return;
            }

            $queryUpdate = "Update tbl_users set password=:password where  code_active=:code_active";
            $hsTable["password"]=md5( Common::getPara('password'));
            CommonDB::runSQL($queryUpdate,$hsTable);
            echo "1";Yii::app()->end();
            return;
        }
        $check = TblConfig::model()->find();
        $hsTable["code_active"]=$code_active;
        $dataTable = CommonDB::GetAll("Select * from tbl_users where code_active=:code_active",$hsTable);
        if(count($dataTable)==0){
            $this->redirect('/');
            return;
        }
        $this->render('change_forget_pass',array('code_active'=>$code_active));
    }
    public function actionWelcome() {
        $check = TblConfig::model()->find();
        $this->render('welcome',array('page'=>$check));
    }
    public function actionAboutUs() {
       $check = array('aaa'=>123,'bb'=>array('dd','kkk')); $check2 = TblConfig::model()->find();
        $this->curPage="gioithieu";
        $queryG ="SELECT * FROM `tbl_introduce`
WHERE active =1 ORDER BY show_order";
        $dataIntro = CommonDB::GetAll($queryG,[]);
        $this->render('about',array('page1'=>$check,'comboData1'=>$dataIntro));
    }
    public function actionContact() {
        $type = 0;
        if(Common::getPara("name")!=""){
            $sqlin="INSERT INTO `tbl_contact`
            (
             `name`,
             `phone`,
             `email`,
             `title`,
             `content`,
             `create_date`)
VALUES (:name,
             :phone,
             :email,
             :title,
             :content,
             :create_date
             );";
            $hsPara["name"]=$_POST['name']; ;
            $hsPara["phone"]=$_POST['phone']; ;
            $hsPara["email"]=$_POST['email']; ;
            $hsPara["title"]=$_POST['title']; ;
            $hsPara["content"]=$_POST['content']; ;
            $hsPara["create_date"]= date("Y-m-d H:i:s");
            CommonDB::runSQL($sqlin,$hsPara);
        }


        $c="";//$c = TblConfig::model()->find();
        $this->render('contact',array('c'=>$c,'type'=>$type));
    }

    public function actionDetail($id){
        $this->layout = "main_detail";
        $this->ID_BOOK=$id;
        $c = TblConfig::model()->find();
        $this->render('detail',array('id'=>$id,'c'=>$c));
    }

    public function actionLoadCapcha(){
        $this->renderPartial('_capcha');
    }

    public function actionLoadInfo(){
        //comment udpate
      // $this->LoadInfoCommentUpdate();
        $readBook = new ClsReadBook();
        $readBook->InsertComment();
        $id = $_POST['id'];
       $idbook = Common::getPara('ID_BOOK');
        Common::setSession('idbook',$idbook);
        $arrBook = CommonDB::GetDataRow('tbl_book','delete_logic_flg=0 AND active=1 AND id='.$idbook);
        if($id == 0){
            $userId =Common::getSession(USER_ID);
            $deleteQuery =" delete from tbl_tusach where book_id=$idbook  and user_id=$userId ";
            CommonDB::runSQL($deleteQuery,[]);

            $query ="INSERT INTO `tbl_tusach`
            (
             `book_id`,
             `user_id`,
             `date_read`)
VALUES (
        :book_id,
        :user_id,
        :create_date); ";
            $hsTable["book_id"]= $idbook;
            $hsTable["user_id"]= $userId;
            $hsTable["create_date"]= Common::getCurrentDateYYYYDDMM();
            CommonDB::runSQL($query,$hsTable);
            $this->renderPartial('_readbook');
        }
        $_SESSION["pdf"] = $arrBook['download_file_link'];
        if($id == 1){

            $this->renderPartial('_info',array('arrBook'=>$arrBook));
        }
        if($id == 2){
            $dataPage= $readBook->LoadComment($idbook);
            $this->renderPartial('_comment',array('dataPage'=>$dataPage));
        }
        if($id == 3){
          $queryU=" UPDATE `tbl_book`
            SET reader_count = reader_count+1
            WHERE id=".$idbook;
            CommonDB::runSQL($queryU,[]);
            $this->renderPartial('_book');
        }
    }
    public function actionRemoveBook(){
        $idbook = Common::getPara('ID_BOOK');
        $userId =Common::getSession(USER_ID);
        $deleteQuery =" delete from tbl_bookcase where book_id=$idbook and user_id=$userId ";
        CommonDB::runSQL($deleteQuery,[]);
        echo "1";
        Yii::app()->end();
    }

    public function actionAddBook(){

        $idbook = Common::getPara('ID_BOOK');
        $hsTable["book_id"]=$idbook;
        $hsTable["user_id"]= Common::getSession(USER_ID);
        $userId =Common::getSession(USER_ID);
        $hsTable["create_date"]= Common::getCurrentDateYYYYDDMMNotime();
        $deleteQuery =" delete from tbl_bookcase where book_id=$idbook and user_id=$userId ";
        CommonDB::runSQL($deleteQuery,[]);
        $deleteQuery =" delete from tbl_tusach where book_id=$idbook  and user_id=$userId ";
        CommonDB::runSQL($deleteQuery,[]);

        $query ="INSERT INTO `tbl_bookcase`
            (
             `book_id`,
             `user_id`,
             `create_date`)
VALUES (
        :book_id,
        :user_id,
        :create_date); ";
        CommonDB::runSQL($query,$hsTable);

        $query ="INSERT INTO `tbl_tusach`
            (
             `book_id`,
             `user_id`,
             `date_read`)
VALUES (
        :book_id,
        :user_id,
        :create_date); ";
        $hsTable["create_date"]= Common::getCurrentDateYYYYDDMM();
        CommonDB::runSQL($query,$hsTable);

        echo "1";
        Yii::app()->end();
    }
    public function actionLoadItem(){
        $id = $_POST['id'];
        $this->renderPartial('_item',array('id'=>$id));
    }

    public function actionUpdatePassword(){
        //update-password
        $password =Common::getPara("password");
        if($password!=""){
            $queryIn="update   tbl_users  set password=:password
                where id=".Common::getSession(USER_ID);
            $hsTable["password"]= md5( Common::getPara("password"));
            CommonDB::runSQL($queryIn,$hsTable);
            echo "1";
            Yii::app()->end();
        }
        $this->render('change_password',array('dataUser'=>1));
    }
    public function actionAccountInfo(){
        $displayName =Common::getPara("display_name");
        if($displayName!=""){
            $queryIn="update   tbl_users  set display_name=:display_name,birthday=:birthday,sex=:sex
                where id=".Common::getSession(USER_ID);
            $hsTable["display_name"]=Common::getPara("display_name");
            $hsTable["birthday"]=Common::converDDMMYYToYYYYMMDDPara(Common::getPara("birthday"));
            $hsTable["sex"]= Common::getPara("sex");
            CommonDB::runSQL($queryIn,$hsTable);
            echo "1";
            Yii::app()->end();
        }


        $dataUser = CommonDB::GetDataRowKeyInt("tbl_users",Common::getSession(USER_ID));
        $this->render('account',array('dataUser'=>$dataUser));
    }
    public function actionTuSach(){
        if(Common::getSession(USER_ID)==""){
            $this->curPage="tusach";
            $this->render('tu_sach_no_login',array('dataPage'=>""));
            return;
        }
        $clsBook = new ClsReadBook();
        $arrBook= $clsBook->LoadBookRead();
        $this->curPage="tusach";
        $this->render('tu_sach',array('dataPage'=>$arrBook));
    }

    public function actionGuide(){
        //huong-dan
        $queryG ="SELECT * FROM `tbl_help`
WHERE active =1 ORDER BY show_order";
        $dataIntro = CommonDB::GetAll($queryG,[]);
       // $this->render('about',array('page1'=>$check,'comboData1'=>$dataIntro));

        $this->render('guide',array('comboData1'=>$dataIntro));
    }
    public function actionQuestion(){
        //cau-hoi-thuong-gap

        $queryG ="SELECT question as title,answer as content,id FROM `tbl_question`
WHERE active =1 ORDER BY show_order";
        $dataIntro = CommonDB::GetAll($queryG,[]);

        $this->render('question',array('comboData1'=>$dataIntro));

    }

function random($length) {
    $characters = "0123456789abcdefghijklmnopqrstuvwxyz";
    $string = "";
    for ($x = 0; $x < $length; $x++):
        $string .= $characters[mt_rand(0, strlen($characters))];
    endfor;
    return $string;
}
    public function actionError() {

        $this->pageTitle = "Lỗi truy cập";
        $this->render('error',  array('hsTable'=>''));
    }


}