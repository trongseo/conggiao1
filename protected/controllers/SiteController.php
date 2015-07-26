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

    public function actionSubLibary() {

        $this->renderPartial('_sublibary');
    }
    public function actionSubLibaryTieuMuc() {

        $parent_id= (isset($_GET['myid']) ? $_GET['myid'] : "");
        $page = (isset($_GET['page']) ? $_GET['page'] : 1);
        $pageSize = (isset($_GET['pagesize']) ? $_GET['pagesize'] : 3);

        $query1 = Yii::app()->db->createCommand() //this query contains all the data
            ->select(array('*'))
            ->from(array('tbl_book'))
            ->where('delete_logic_flg =0 and parent_id=:parent_id')
            ->order(' book_name')
            ->limit($pageSize,  ($page-1) * $pageSize); // the trick is here!

        $query1->bindParam(':parent_id',  $parent_id, PDO::PARAM_STR);
        $dataItem= $query1->queryAll();

        $item_count = Yii::app()->db->createCommand() // this query get the total number of items,
            ->select(' count(id) as count ')
            ->from(array('tbl_book'))
            ->where(' delete_logic_flg =0  and parent_id=:parent_id');
        $item_count->bindParam(':parent_id',   $parent_id, PDO::PARAM_STR);
       $itemCount= $item_count->queryScalar(); // do not LIMIT it, this must count all items!

        $totalPage = $itemCount / $pageSize;

        //add the last page, ugly
        if ($pageSize % $pageSize != 0) $totalPage++;

        $dataPage =array('totalPage'=>$totalPage,'pageSize'=>$pageSize,'itemCount'=>$itemCount,'page'=>$page);

        $this->renderPartial('_sublibary_tieumuc',array('dataItem'=>$dataItem,'arrDataPage'=>$dataPage));
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
        $c="";//$c = TblConfig::model()->find();
        $this->render('register',array('c'=>$c));
    }
    public function actionLogin() {
        $c="";//$c = TblConfig::model()->find();
        $this->render('login',array('c'=>$c));
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