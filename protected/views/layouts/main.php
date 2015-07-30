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
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/main.css" type="text/css"/>
    <script src="<?php echo Yii::app()->baseUrl?>/js/jquery-1.9.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.bt.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl?>/js/jssor.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl?>/js/jssor.slider.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl?>/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl?>/css/admin/plugins/font-awesome/css/font-awesome.min.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container-wp">
    <div class="col-md-12">
        <div class="col-md-12 container-content head-content">
            <div class="logo">
                <a href="<?php echo Yii::app()->baseUrl.'/' ?>"><img src="<?php echo Yii::app()->baseUrl.'/images/logo.png'?>" /></a>
                <div style="float: left;position: relative;top:20px;padding-left: 20px;">
                    <span style="font-size:34px;font-weight: bold;color: #D5904D;">Thư Viện</span>
                    <span style="font-size:34px;font-weight: bold;color: #492E14;">Công Giáo</span>
                    <span style="font-size:34px;font-weight: bold;color: #D5904D;">Việt Nam</span>
                </div>
            </div>
            <div class="logo-login" >
                <?php if(isset(Yii::app()->session['id_user'])): ?>
                    <?php echo Yii::app()->session['display_name']; ?>
                <a class="register1" href="<?php echo Yii::app()->baseUrl.'/update-account'?>">Thông tin tài khoản </a>
                   <a class="register2" href="<?php echo Yii::app()->baseUrl.'/update-password'?>" > Đổi mật khẩu</a>
                    <a class="register3" href="<?php echo Yii::app()->baseUrl.'/dang-xuat'?>"> Thoát </a>
					<style>
					.logo-login{
						margin-top:-43px;
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
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <a href="<?php echo Yii::app()->baseUrl.'/'?>" class="menu" style="width: 13%;">
                            <img src="<?php echo Yii::app()->baseUrl.'/images/ic_home.png'?>" />
                        </a>



                        <a href="<?php echo Yii::app()->baseUrl.'/thu-vien'?>" class="menu" style="width: 29%;">
                            Thư viện
                        </a>

                        <?php if(isset(Yii::app()->session['id_user'])): ?>
                            <a href="<?php echo Yii::app()->baseUrl.'/tham-khao'?>" class="menu" style="width: 29%;">
                                Tủ sách
                            </a>
                        <?php else: ?>
                            <a href="javascript:alert('Vui lòng đăng nhập!')" class="menu" style="width: 29%;">
                                Tủ sách
                            </a>
                        <?php endif; ?>
                        <a href="<?php echo Yii::app()->baseUrl.'/gioi-thieu'?>" class="menu" style="width: 29%;">
                            Giới thiệu
                        </a>

                    </div>
                </div>
                <div class="col-md-4 menu-search">
                    <div class="row searchbox">
                        <input type="text" id="txtKeySearch" placeholder="Nhập từ khóa tìm kiếm" />
                    </div>
                </div>
                <div class="col-md-3 menu-search">


                    <div class="row">
                        <select id="fabric">
                            <option value="0">Xem tất cả sách</option>
                            <?php  $comboData=$this->comboData;

                            ?>

                            <?php foreach($comboData as $value):?>
                                <?php

                                ?>
                                <option value="<?php echo $value["id"]?>"><?php echo $value["name"]?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                </div>
                <div class="col-md-1 menu right">
                    <div class="row" id="divsearch">
                        Tìm kiếm
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12" >
            <div class="row" id="slide-warp"></div>
        </div>
        <div class="clear1"></div>
        <div class="col-md-12">
            <?php echo $content?>
        </div>
    </div>
    <div class="clear1"></div>
    <div class="col-md-12">
        <div class="col-md-12 footer-wp">
            <div class="row">
                <div class="col-md-4 form-group">
                    <h4>Thông tin</h4>

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
                    <h4>Phần mềm đọc sách</h4>
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
                    <h4>Hỗ trợ</h4>
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
</body>
<script>
    $(document).ready(function() {
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

</script>

</html>