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
    </head>
    <body>
        <div class="container-wp-fullwidth">
            <div class="col-md-12">
                <div class="col-md-12 container-content">
                    <div class="logo">
                        <a href="<?php echo Yii::app()->baseUrl.'/' ?>"><img src="<?php echo Yii::app()->baseUrl.'/images/logo.jpg'?>" /></a>
                        <div style="float: left;position: relative;top:20px;padding-left: 20px;">
                            <div alt="0" class="item-book active-item">
                                Đọc sách
                            </div>
                            <div alt="1" class="item-book ">
                                Thông tin sách
                            </div>
                            <div alt="2" class="item-book ">
                                Đánh giá & Bình luận
                            </div>
                            <div alt="3" class="item-book ">
                                Sách liên quan
                            </div>
                        </div>
                    </div>
                   
					 <div class="logo-login">
                        <a class="register" href="javascript:AddBookToMe()">
                            <img src="<?php echo Yii::app()->baseUrl.'/images/bookstore.png'?>" /> Thêm vào tủ sách
                        </a>
                        
                    </div>
                    <div class="clear"></div>
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
	var ID_BOOK='<?php echo $this->ID_BOOK; ?>';
        $(document).ready(function() {
            $("#fabric").select2();
            $(".item-book").click(function(){
                $(".item-book").removeClass('active-item');
                $(this).addClass('active-item');
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