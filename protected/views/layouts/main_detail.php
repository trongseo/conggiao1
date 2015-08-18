<?php
    $c = TblConfig::model()->find();
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
        <script src="/js/jquery.form.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <style>
            .contact-head {

                text-align: center;
                height: 50px;
                /*margin-top: -15px;*/
                background-color: #F1DDC2;

            }
            .contact-head1 {
                max-width: 1040px;
                margin: 0 auto;

                background-color: #F1DDC2;

            }
            .btn_tab {
                height: 50px;
                border-right: 1px solid rgb(192, 112, 61);
                /*color: #5A2D0C;*/
                /*font-weight: bold;*/
                margin-left: -5px;
                background: transparent none repeat scroll 0% 0%;
                /*border-right: 1px solid rgb(192, 112, 61);*/
                /*border-bottom: 1px solid rgb(192, 112, 61);*/
                border-top: none;
                padding-left: 15px;
                padding-right: 15px;
                float: left;
                line-height:50px;
                font-weight:bold;;
                color: #C0703D ;cursor: pointer;
            }
            .btn_tab_active {
                color: #5A2D0C ;
            }
            .logo {
                margin-left: 130px;
                float: left;
            }
            .logoleft {

                margin-right: 30px;

            }
            body {
                line-height: 20px;
                height: 100%;
                background: #F1DDC2;
            }
            .logo-login {
                /* width: 182px; */
                float: left;
                position: relative;
                top: 6px;
                padding-left: 30px;
            }
            .download {
                height: 36px;
                border: 1px solid #be7338;
                border-radius: 4px;
                font-weight: bold;
                color: #be7338;
                padding: 8px 10px 1px 10px;margin-top:10px;margin-left:-10px;
            }
            .logo-login .register {
                /* background: url('../images/ic_register.png') left center no-repeat #ecd1b5; */
                float: left;
            }
        </style>
    </head>
    <body>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Yêu cầu đăng nhập</h4>
                </div>
                <div class="modal-body">
                    <p>Vui lòng <a target="_blank" href="/dang-nhap" style="color: #C0703D" > đăng nhập  </a>để sử dụng chức năng này</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>

        <div class="container-wp-fullwidth">


            <div class="col-md-12">
<!--                <div class="col-md-12 container-content">-->
<!--                    <div class="logo">-->
<!--                        <a  href="--><?php //echo Yii::app()->baseUrl.'/' ?><!--"><img src="--><?php //echo Yii::app()->baseUrl.'/images/logo.jpg'?><!--" /></a>-->
<!--                        <div style="float: left;position: relative;top:20px;padding-left: 20px;">-->
<!--                            <div alt="0" class="item-book active-item">-->
<!--                                Đọc sách-->
<!--                            </div>-->
<!--                            <div alt="1" class="item-book ">-->
<!--                                Thông tin sách-->
<!--                            </div>-->
<!--                            <div alt="2" class="item-book ">-->
<!--                                Đánh giá & Bình luận-->
<!--                            </div>-->
<!--                            <div alt="3" class="item-book ">-->
<!--                                Sách liên quan-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                   -->
<!--					 <div class="logo-login">-->
<!--                        <a class="register" href="javascript:AddBookToMe()">-->
<!--                            <img src="--><?php //echo Yii::app()->baseUrl.'/images/bookstore.png'?><!--" /> Thêm vào tủ sách-->
<!--                        </a>-->
<!--                        -->
<!--                    </div>-->
<!--                    <div class="clear"></div>-->
<!--                </div>-->

                <div class="clear"></div>
                <div class="row contact-head1">

                <div class="col-md-12 contact-head">
                    <div class="logo">

                        <a href="<?php echo Yii::app()->baseUrl.'/' ?>">
                            <img class="logoleft"  src="/img/logobook.png" /></a>
                    </div>

                    <?php if(isset(Yii::app()->session['id_user'])): ?>
                        <div alt="0" class="btn_tab btn_tab_active" >
                            Đọc sách
                        </div>

                    <?php else: ?>
                        <div alt="0" class="btn_tab btn_tab_active"  data-toggle="modal" data-target="#myModal">
                            Đọc sách
                        </div>
                    <?php endif; ?>

                        <div alt="1" class="btn_tab">
                            Thông tin sách
                        </div>
                    <div alt="2" class="btn_tab">
                        Đánh giá & Bình luận
                    </div>  <div alt="3" class="btn_tab">
                        Sách liên quan
                    </div>
                    <div class="logo-login">
                        <?php if(isset(Yii::app()->session['id_user'])): ?>

                        <a class="register" href="javascript:AddBookToMe()">
                            <img src="<?php echo Yii::app()->baseUrl.'/images/bookstore.png'?>" /> Thêm vào tủ sách
                        </a>
                        <?php else: ?>
                            <a class="register" href="javascript:void(0)"  data-toggle="modal" data-target="#myModal">
                                <img src="<?php echo Yii::app()->baseUrl.'/images/bookstore.png'?>" /> Thêm vào tủ sách
                            </a>
                        <?php endif; ?>

                    </div>
                </div>
                <div class="col-md-12">
                   <img src="/images/line_shadow.png" />

                </div>

                </div>

                <div class="col-md-12">
                    <div class="row" id="slide-warp"></div>
                </div>
                <div class="clear1"></div>
                <div class="col-md-12" id="content-wp">
                    <?php echo $content?>
                </div>
            </div>
            <div class="clear1"></div>
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
    </body>
    <script>
	var ID_BOOK='<?php echo $this->ID_BOOK; ?>';
        $(document).ready(function() {
            $("#fabric").select2();
            $(".btn_tab").click(function(){
//                $(".btn_tab").removeClass('btn_tab_active');
//                $(this).addClass('btn_tab_active');
                var id = $(this).attr('alt');
                LoadInfo(id);
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
        function LoadItem(id){
            $.ajax({
                type:"POST",
                url:'<?php echo Yii::app()->baseUrl ?>/Site/LoadItem',
                data:{id:id},
                success:function(result){
                    $("#item-book").empty().append(result);
                }
            })
        }
    function AddBookToMe(){
        $.ajax({
            type:"POST",
            url:'<?php echo Yii::app()->baseUrl ?>/Site/AddBook?ID_BOOK='+ID_BOOK,
            data:{},
            success:function(result){
               alert('Đã thêm vào tủ sách của bạn thành công!');
            }
        })
    }
        function LoadInfo(id){

           // var id = $(this).attr('alt');
           $obcc =  $( ".btn_tab[alt='"+id+"']" );
            $(".btn_tab").removeClass('btn_tab_active');
            $obcc.addClass('btn_tab_active');
            $.ajax({
                type:"POST",
                url:'<?php echo Yii::app()->baseUrl ?>/Site/LoadInfo?ID_BOOK='+ID_BOOK,
                data:{id:id},
                success:function(result){
                    $("#content-wp").empty().append(result);
                }
            })
        }
    </script>
</html>