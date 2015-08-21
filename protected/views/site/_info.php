<style>
    .headerc{
        color: #5A2D0C;font-weight:600;
    }
    .infofont{
        color: orangered;
    }
</style>
<div class="row container-wp">
	<div class="main-login col-xs-12 col-sm-12 col-md-12" style="">
        <div class="row">
            <div class="box-login" style="border-radius:none;">
                <h4 style="text-decoration: underline;color: #5A2D0C;">
                    Thông tin chi tiết
                </h4>

                <div class="clear1"></div>
                <div class="row infofont" style="padding-left:15px">
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-12"> <span class="headerc"> Tác giả:</span>
                                <?php echo  $arrBook['author']; ?> </div>
                    </div>
                        <div class="row">
                            <div class="col-md-12">   <span class="headerc"> Người dịch:</span>  <?php echo  $arrBook['translator']; ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">  <span class="headerc"> Nhà xuất bản:</span> <?php echo  $arrBook['publisher']; ?></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-12">  <span class="headerc">  Ngôn ngữ:</span>
                                <?php echo  $arrBook['language']==1?'Việt':'Anh'; ?> </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12"> <span class="headerc"> Số trang: </span> <?php echo  $arrBook['pages_num']; ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12"> <span class="headerc"> Ngày phát hành:</span><?php echo Common::converYYYYMMDDtoDaymonyyyyPara($arrBook['issue_date']) ; ?></div>
                        </div>
                    </div>
                    <div class="col-md-3">

                        <div class="row">
                            <div class="col-md-12"> <span class="headerc">  Quyền sở hữu:</span>
                                <?php echo  $arrBook['owner']; ?> </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12"> <span class="headerc"> Người tặng:</span>  <?php echo  $arrBook['giver']; ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12"></div>
                        </div>
                        </div>
                    <div class="col-md-3">

                        <div class="row">
                            <div class="col-md-12">  <span class="headerc"> Số người xem:</span>
                                <?php echo  $arrBook['viewer_count']; ?>  </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12"> <span class="headerc"> Số người đọc:</span>
                                <?php echo  $arrBook['reader_count']; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12"></div>
                        </div>

                        </div>
                    </div>
                </div>
                <div class="clear1"></div>

                <h4 style="text-decoration: underline;padding:5px 0 0 10px">
                    Nội dung sách
                </h4>
                <div class="clear1"></div>
                <div class="col-md-12">
                	<div class="form-group">
	                	<div class="col-md-2">
	                		<div class="row">
		                		<img src="<?php echo PATH_IMAGE.$arrBook["bookimage_link"] ?>" width="150px" height="200px">
		                	</div>
                            <?php if(isset(Yii::app()->session['id_user'])): ?>
                                <div class="download">
                                    <a class="register" href="<?php echo PATH_IMAGE_bookFile.'/'.$arrBook['download_file_link']; ?>">
                                        Lấy về miễn phí
                                    </a>
                                </div>
                            <?php else: ?>

                            <?php endif; ?>


	                	</div>						
	                	<div class="col-md-8" style="text-align:left;">
	                		<div class="row">
                                <?php echo  $arrBook['introduction']; ?>
		                	</div>
	                	</div>
                	</div>
                </div>
                <div class="clear1"></div>
            </div>
        </div>
    </div>
</div>