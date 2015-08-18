<div class="row container-wp">
	<div class="main-login col-xs-12 col-sm-12 col-md-12" style="">
        <div class="row">
            <div class="box-login" style="border-radius:none;">
                <h4 style="text-decoration: underline;">
                    Thông tin chi tiết
                </h4>
                <div class="clear1"></div>
        		<div class="col-md-4">
                	<div class="form-group">
	                	<div class="col-md-4">
	                		<div class="row">
		                		Tác giả:
		                	</div>
	                	</div>
	                	<div class="col-md-8" style="text-align:left;">
	                		<div class="row">
                                <?php echo  $arrBook['author']; ?>
		                	</div>
	                	</div>
                	</div>
                </div>
                <div class="col-md-4">
                	<div class="form-group">
	                	<div class="col-md-4">
	                		<div class="row">
		                		Ngôn ngữ:
		                	</div>
	                	</div>
	                	<div class="col-md-8" style="text-align:left;">
	                		<div class="row">
                                <?php echo  $arrBook['language']==1?'Việt':'Anh'; ?>
		                	</div>
	                	</div>
                	</div>
                </div>
                <div class="col-md-4">
                	<div class="form-group">
	                	<div class="col-md-4">
	                		<div class="row">
		                		Quyền sở hữu:
		                	</div>
	                	</div>
	                	<div class="col-md-8" style="text-align:left;">
	                		<div class="row">
                                <?php echo  $arrBook['owner']; ?>
		                	</div>
	                	</div>
                	</div>
                </div>
                <div class="col-md-4">
                	<div class="form-group">
	                	<div class="col-md-4">
	                		<div class="row">
		                		Người dịch:
		                	</div>
	                	</div>
	                	<div class="col-md-8" style="text-align:left;">
	                		<div class="row">
                                <?php echo  $arrBook['translator']; ?>
		                	</div>
	                	</div>
                	</div>
                </div>
                <div class="col-md-4">
                	<div class="form-group">
	                	<div class="col-md-4">
	                		<div class="row">
		                		Số trang:
		                	</div>
	                	</div>
	                	<div class="col-md-8" style="text-align:left;">
	                		<div class="row">
                                <?php echo  $arrBook['pages_num']; ?>
		                	</div>
	                	</div>
                	</div>
                </div>
                <div class="col-md-4">
                	<div class="form-group">
	                	<div class="col-md-4">
	                		<div class="row">
		                		Người tặng:
		                	</div>
	                	</div>
	                	<div class="col-md-8" style="text-align:left;">
	                		<div class="row">
                                <?php echo  $arrBook['giver']; ?>
		                	</div>
	                	</div>
                	</div>
                </div>
                <div class="col-md-4">
                	<div class="form-group">
	                	<div class="col-md-4">
	                		<div class="row">
		                		Nhà xuất bản:
		                	</div>
	                	</div>
	                	<div class="col-md-8" style="text-align:left;">
	                		<div class="row">
                                <?php echo  $arrBook['publisher']; ?>
		                	</div>
	                	</div>
                	</div>
                </div>
                <div class="col-md-4">
                	<div class="form-group">
	                	<div class="col-md-5">
	                		<div class="row">
		                		Ngày phát hành:
		                	</div>
	                	</div>
	                	<div class="col-md-7" style="text-align:left;">
	                		<div class="row">
                                <?php echo Common::converYYYYMMDDtoDaymonyyyyPara($arrBook['issue_date']) ; ?>
		                	</div>
	                	</div>
                	</div>
                </div>
                <div class="clear1"></div>
                <h4 style="text-decoration: underline;">
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
                                    <a class="register" href="<?php echo PATH_DOWNLOAD.'/'.$arrBook['download_file_link']; ?>">
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