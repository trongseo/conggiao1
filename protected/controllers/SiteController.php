<?php

class SiteController extends CController {
    public $comboData = 'value';
    function init() {
        parent::init();
        $main_type = 0;
        $this->layout = "main";
        $this->comboData = CommonDB::GetAll('SELECT * FROM tbl_index WHERE delete_logic_flg=0 AND TYPE=0 ORDER BY NAME',[]);
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

        $c="";//$c = TblConfig::model()->find();
        $this->layout = "";
        $this->render('libary',array('c'=>$c));
    }
    public function actionLibarySearch($key_search) {

        $arrSearch = explode('-',$key_search);
        $daimucId =$arrSearch[0];
        $keySearch =$arrSearch[1];
        $c="";//$c = TblConfig::model()->find();
        $this->layout = "";
        $this->render('libary',array('arrSearch'=>$arrSearch));
    }
    public function actionSubLibaryTieuMucSearch() {
//
//        select * from `tbl_book`
//where parent_id in (
//
//            SELECT id FROM tbl_index
//WHERE parent_id in (SELECT id FROM tbl_index
//WHERE parent_id=1 ) and type=2 )
//
//
        $parent_id=Common::getPara("daimuc");
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

        if($parent_id!=0){
            $query1->bindParam(':parent_id',  $parent_id, PDO::PARAM_STR);
        }

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

    public function actionSubLibary() {

        $this->renderPartial('_sublibary');
    }

    public function actionSubLibaryTieuMuc() {

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
            $hsTable["password"]= Common::getPara('password');
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
       $check = TblConfig::model()->find();
        $this->render('about',array('page'=>$check));
    }
    public function actionContact() {
        $type = 0;
        if(isset($_POST['name'])){
            $data = new Contact();
            $data->name = $_POST['name'];
            $data->phone = $_POST['phone'];
            $data->email = $_POST['email'];
            $data->address = $_POST['address'];
            $data->title = $_POST['title'];
            $data->content = $_POST['content'];
            $data->created_date = date("Y-m-d H:i:s");
            $data->save();
            $type = 1;
        }
        $c="";//$c = TblConfig::model()->find();
        $this->render('contact',array('c'=>$c,'type'=>$type));
    }
    public function actionDetail($id){
        $this->layout = "main_detail";
        $c = TblConfig::model()->find();
        $this->render('detail',array('c'=>$c));
    }

    public function actionLoadCapcha(){
        $this->renderPartial('_capcha');
    }
    public function actionLoadInfo(){
        $id = $_POST['id'];
        if($id == 0){
            $this->renderPartial('_readbook');
        }
        if($id == 1){
            $this->renderPartial('_info');
        }
        if($id == 2){
            $this->renderPartial('_comment');
        }
        if($id == 3){
            $this->renderPartial('_book');
        }
    }
    public function actionLoadItem(){
        $id = $_POST['id'];
        $this->renderPartial('_item',array('id'=>$id));
    }
    public function actionAccountInfo(){
        $this->render('account');
    }
    public function actionGuide(){
        $this->render('guide');
    }
    public function actionQuestion(){
        $this->render('question');
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