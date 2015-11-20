<?php

class ServiceController extends CController {
    public $comboData = 'value';
    public $comboSelect = '';
    public $textSearch = '';
    public $ID_BOOK="";
    public $curPage="";
    public $isLoad="0";


    public function actionIndex() {
        //background: #5A2D0C;
        $this->curPage="home";
        $this->render('index',array('c'=>''));
    }

    public function actionLogin(){
        $password= Common::getPara("password");
        //regist

        $email= Common::getPara("email");
        $passwordmd = md5($password);
        //var_dump($email,$passwordmd);
        $hsTable["email"]= $email;
        $hsTable["password"]= $passwordmd;
        $dataTable = CommonDB::GetAll("Select * from tbl_users where email=:email and password=:password",$hsTable);
        if(count($dataTable)>0){
            echo 1;
        }else{
            echo 0;
        }

        //header('Content-type: application/json');

        //echo json_encode($result);

    }

    function random($length) {
        $characters = "0123456789abcdefghijklmnopqrstuvwxyz";
        $string = "";
        for ($x = 0; $x < $length; $x++):
            $string .= $characters[mt_rand(0, strlen($characters))];
        endfor;
        return $string;
    }
    public function actionCache() {

        // Storing $value in Cache

//        $id    = "myValue";
//        $time  = 15; // in seconds
//
//
//        $val = Yii::app()->cache->get($id);
//        if (!$val){
//            $dataTable = CommonDB::GetAll("Select * from tbl_users",[]);
//            Yii::app()->cache->set($id, $dataTable, $time);
//            var_dump($dataTable);
//        }else{
//            var_dump($val);
//        }

        $postdata = http_build_query(
            array(
                'var1' => 'some content',
                'var2' => 'doh'
            )
        );

        $opts = array('http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-type: application/x-www-form-urlencoded',
                'content' => $postdata
            )
        );

        $context  = stream_context_create($opts);


        $id    = "myValue";
        $time  = 1115; // in seconds


        $result = Yii::app()->cache->get($id);
        if (!$result){
            $result = file_get_contents('http://localhost:8222/index.php', false, $context);

            Yii::app()->cache->set($id, $result, $time);

        }

        echo $result;


    }


}