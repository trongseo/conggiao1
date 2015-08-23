<?php
//$c = TblConfig::model()->find();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


    <meta name="language" content="en" />
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="shortcut icon" href="<?php echo Yii::app()->baseUrl?>/images/layout/favicon.ico"  />
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/bootstrap.css" type="text/css"/>
    <link href="/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/main.css" type="text/css"/>
    <script src="<?php echo Yii::app()->baseUrl?>/js/jquery-1.9.1.min.js"></script>
    <script src="/css/select2.min.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.bt.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl?>/js/jssor.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl?>/js/jssor.slider.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl?>/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl?>/css/admin/plugins/font-awesome/css/font-awesome.min.css">
    <script src="/js/jquery.form.js"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="/scroll/assets/73ff6cfc/jquery.slides.min.js"></script>
    <script type="text/javascript" src="/scroll/assets/73ff6cfc/main.min.js"></script>

    <style>
        .hrtext {
            margin-top: 4;
            margin-bottom: 4;
            border: 0;
            border-top: 1px solid #D8BE9E;
        }
        .menu-search {

            height: 35px;
        }
        .select2-selection--single {
            height: 35px;
        }
        .topright a{
            float: right;
            margin: 10px 2px -10px 1px;
            font-style: italic;
            color: #C27B42 !important;
            font-weight: 500 !important;
        }

    </style>
    <style>
        .readbooknew {
            background: url('/images/ic_book.png') no-repeat scroll 0 0;
            padding-left: 30px;
            cursor: pointer;
            color: #B27D47;
            clear: both;
            margin-left: 20;
            margin-top: 150;
            position: absolute;
        }

        .lefmenuw {
            width: 22.5%;
        }

        .col-md-10 {
            width: 77.2%;
            padding-right: 0px;padding-left:16px;
        }
        .menu1 > li > a {
            width: 100%;
        }
        .content-box{
            width: 100%;
        }
        .menu-left-top {
            background: url("/img/menu-left-bg.png") no-repeat scroll center bottom;
            width: 100%;
            height: 26px;
            color: #5a2e0b;
            margin-top: 15px;
            margin-left: -10px;
        }
        #divsearch {
            color: #FCE4BE !important;
            font-size: 14px;
        }
        .home  {
            height: 37px;
        }
        .menu-search input{
            height: 33px;
        }
        .menu {
             height: 35px;
         }
        .menu-left-top h5 {
            color: #51391d;
            font-weight: bold;
            text-align: center;
            width: 100%;
        }

        .borderright{
            border-right:1px #be7338 solid;
        }
        .menu1 > li > a i {
            float: right;
            margin: 10px 7px 3px 1px;
        }
        .fa {
            float: right; margin: 10px 7px 3px 1px;
        }
        .select2-selection--single {
            border:0;
        }
        .select2-selection--single {
            border-left: 1px solid #aaa;
            border-right: 1px solid #aaa;
        }
    </style>
</head>
<body>
<div class="container-wp">
    <div class="col-md-12">

        <div class="col-md-12 container-content head-content onlybox" style="border-radius:0px">
		
            <div class="logo">
                <a  href="<?php echo Yii::app()->baseUrl.'/' ?>"><img src="<?php echo Yii::app()->baseUrl.'/images/logo.png'?>" /></a>
                <div style="float: left;position: relative;top:20px;padding-left: 20px;">
                    <span  style="font-size:34px;font-weight: bold;color: #D5904D;">Thư Viện</span>
                    <span style="font-size:34px;font-weight: bold;color: rgb(90,46,11);">Công Giáo</span>
                    <span style="font-size:34px;font-weight: bold;color: #D5904D;">Việt Nam</span>
                </div>
            </div>
            <div class="logo-login" >
                <?php if(isset(Yii::app()->session['id_user'])): ?>

                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle user-avatar" type="button" data-toggle="dropdown"><?php echo Yii::app()->session['display_name']; ?>
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu user-dropdown">
                                <li><a class="user-info" href="/thong-tin-tai-khoan">Thông tin tài khoản</a></li>
                                <li><a class="user-changepass" href="/update-password">Đổi mật khẩu</a></li>
                                <li><a class="user-logout" href="/dang-xuat">Đăng xuất</a></li>
                            </ul>
                        </div>




					<style>
                        .logo-login{
                            /*width: 182px;*/
                            float: right;
                            position: relative;
                            top: 23px;
                        }
                        .logo-login a{
                            height:36px;
                            border:1px solid #be7338;
                            border-radius: 4px;
                            font-weight: bold;
                            color: #be7338;
                            padding: 8px 10px 1px 10px;
                        }
                        .logo-login .register{
                            /*background: url('../images/ic_register.png') left center no-repeat #ecd1b5;*/
                            float: left;
                        }
                        .logo-login .login{
                            /*background: url('../images/ic_login.png') left center no-repeat #ecd1b5;*/
                            float: right;
                        }
                        .logo-login .user-avatar{
                            background: url('/img/avarta.png') left center no-repeat !important;
                            float: left;
                            width:150px;
                            height:50px;
                            color:#5A2D0C;
                            border:1px solid transparent !important;
                            text-align:right;
                        }
                        .logo-login .user-info{
                            background: url('/img/ic_profile_16px.png') left center no-repeat !important;
                            color:#D5A16F;
                            text-align:left;
                            border:1px solid transparent !important;
                            padding: 5px 0px 0px 20px;
                        }
                        .logo-login .user-info:hover{
                            background: url('/img/ic_profile_16px_on.png') left center no-repeat !important;
                            border:1px solid transparent !important;
                            color:#D5A16F;
                            text-align:left;
                            padding: 5px 0px 0px 20px;
                        }
                        .logo-login .user-changepass{
                            background: url('/img/ic_password.png') left center no-repeat !important;
                            color:#D5A16F;
                            text-align:left;
                            border:1px solid transparent !important;
                            padding: 5px 0px 0px 20px;
                        }
                        .logo-login .user-changepass:hover{
                            background: url('/img/ic_password_on.png') left center no-repeat !important;
                            color:#D5A16F;
                            text-align:left;
                            border:1px solid transparent !important;
                            padding: 5px 0px 0px 20px;
                        }
                        .logo-login .user-logout{
                            background: url('/img/ic_logout.png') left center no-repeat !important;
                            color:#D5A16F;
                            text-align:left;
                            border:1px solid transparent !important;
                            padding: 5px 0px 0px 20px;
                        }
                        .logo-login .user-logout:hover{
                            background: url('/img/ic_logout_on.png') left center no-repeat !important;
                            color:#D5A16F;
                            text-align:left;
                            border:1px solid transparent !important;
                            padding: 5px 0px 0px 20px;
                        }
                        .user-dropdown{
                            top:50px;
                            left:30px;
                            background-color:#5A2D0C;
                        }
                        .logo-login .active, .logo-login a:hover {
                            color:#C0703D;
                        }
					</style>
                <?php else: ?>
                    <a class="register" href="<?php echo Yii::app()->baseUrl.'/dang-ky'?>">
                        <img src="<?php echo Yii::app()->baseUrl.'/images/ic_register.png'?>" />Đăng ký
                    </a>
                    <a class="login" href="<?php echo Yii::app()->baseUrl.'/dang-nhap'?>" style="margin-left: 10px;">
                        <img src="<?php echo Yii::app()->baseUrl.'/images/ic_login.png'?>" /> Đăng nhập
                    </a>
                <?php endif; ?>



            </div>
<!--            Yii::app()->session['id_user'] = $arrInfo['id'];-->
<!--            Yii::app()->session['email'] = $arrInfo['email'];-->
<!--            Yii::app()->session['display_name'] = $arrInfo['display_name'];-->
            <div class="clear"></div>

            <div class="col-md-12" style="height:36px;padding:0px" >
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <a  href="<?php echo Yii::app()->baseUrl.'/'?>" class="menu home" style="width: 13%;border-left:0px">
                                <img src="<?php echo Yii::app()->baseUrl.'/images/ic_home.png'?>" />
                            </a>



                            <a  href="<?php echo Yii::app()->baseUrl.'/thu-vien'?>" class="menu thuvien" style="width: 29%;">
                                Thư Viện
                            </a>


                            <a    href="<?php echo Yii::app()->baseUrl.'/tu-sach'?>" class="menu tusach" style="width: 29%;">
                                Tủ Sách
                            </a>

                            <a href="<?php echo Yii::app()->baseUrl.'/gioi-thieu'?>" class="menu gioithieu" style="width: 29%;">
                                Giới Thiệu
                            </a>

                        </div>
                    </div>
                    <div class="col-md-4 menu-search">
                        <div class="row searchbox">
                            <input type="text" value="<?php echo $this->textSearch?>" id="txtKeySearch" placeholder="Nhập từ khóa tìm kiếm" />
                        </div>
                    </div>
                    <div class="col-md-3 menu-search" style="background:#fff;margin-right:0px;border-left: 1px #5A2D0C">


                        <div class="row">
                            <select id="fabric">
                                <option value="0">Xem tất cả sách</option>
                                <?php  $comboData=$this->comboData;


                                ?>

                                <?php foreach($comboData as $value):?>
                                    <?php
                                    $selecttedd="";
                                    if($this->comboSelect==$value["id"]){
                                        $selecttedd="selected";
                                    }
                                    ?>
                                    <option value="<?php echo $value["id"]?>" <?php echo $selecttedd?> ><?php echo $value["name"]?></option>
                                <?php endforeach?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-1 menu right" style="background-color: #5A2D0C;width: 83px;margin-left: 0.9px;border-bottom: 1px #C48B56 solid;border-top: 1px #C48B56 solid;">
                        <div class="row" id="divsearch" >
                            Tìm kiếm
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-12" >
            <div class="row" id="slide-warp"></div>
        </div>
        <div class="clear"></div>
        <div class="col-md-12" id="divcontentmain">
            <?php echo $content?>
        </div>
    </div>
   
    <div class="col-md-12">
        <div class="col-md-12 footer-wp">
            <div class="row">
                <div class="col-md-4 form-group">
                    <h4 class="headings1">Thông tin</h4>

                    <a href="<?php echo Yii::app()->baseUrl.'/dieu-khoan-su-dung'?>">
                        <div class="items items-1">
                            Điều khoản sử dụng
                        </div>
                    </a>
                    <a href="<?php echo Yii::app()->baseUrl.'/lien-he'?>">
                        <div class="items items-2">
                            Liên hệ
                        </div>
                    </a>
                </div>
                <div class="col-md-4 form-group">
                    <h4 class="headings1">Phần mềm đọc sách</h4>
                    <a href="<?php echo Yii::app()->baseUrl.'/ung-dung-cho-pc'?>">
                        <div class="items items-7">
                            Ứng dụng cho PC
                        </div>
                    </a>
                    <a href="<?php echo Yii::app()->baseUrl.'/ung-dung-cho-ios'?>">
                        <div class="items items-3">
                            Ứng dụng cho IOS
                        </div>
                    </a>
                    <a href="<?php echo Yii::app()->baseUrl.'/ung-dung-cho-android'?>">
                        <div class="items items-4">
                            Ừng dụng cho Android
                        </div>
                    </a>
                </div>
                <div class="col-md-4 form-group">
                    <h4 class="headings1">Hỗ trợ</h4>
                    <a href="<?php echo Yii::app()->baseUrl.'/huong-dan'?>">
                        <div class="items items-5">
                            Hướng dẫn
                        </div>
                    </a>
                    <a href="<?php echo Yii::app()->baseUrl.'/cau-hoi-thuong-gap'?>">
                        <div class="items items-6">
                            Những câu hỏi thường gặp
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<style>
    .slider-box {
        position: relative;
        overflow: hidden;
        margin-top: 21px;
        background-color: #D8BE9E;
        border-radius: 10px;

    }
	div.slider-box div.slider {
    padding: 0 40px;
    height: 125px;
}
div.slider-box div.slider {
   
    background: rgb(216,190,158);
  
}
.slider .slider-item {
 
    margin-top: 12px;
}
    .tieu {

        font-style: italic;
    }
    .slider .slider-item div {

        background: #D8BE9E;
    }
</style>
</body>
<script>
    $(document).ready(function() {
		var curPage ='<?php echo $this->curPage; ?>';
        if(curPage!='')
		 $("."+curPage).addClass('activeMenu');
        $("#fabric").select2();

        $( "#divsearch" ).click(function() {
            if($('#txtKeySearch').val().length==0){
                alert("Vui lòng nhập nội dung cần tìm!");
                return;
            }
            var daimucid = $('#fabric').val();
           window.location='/thu-vien/'+daimucid+'-'+$('#txtKeySearch').val();
        });
    });
    function LoadSLide(){
        $.ajax({
            type:"POST",
            url:'<?php echo Yii::app()->baseUrl ?>/Site/LoadSLide',
            data:{},
            success:function(result){
                $("#slide-warp").empty().append(result);
            }
        })
    }
    function LoadSLideProduct(){
        $.ajax({
            type:"POST",
            url:'<?php echo Yii::app()->baseUrl ?>/Site/LoadSLideProduct',
            data:{},
            success:function(result){
                $("#slide-product").empty().append(result);
            }
        })
    }
    function openNewWindow(openid){
        window.open('/chi-tiet/'+openid,'_blank');
    }
</script>

</html>