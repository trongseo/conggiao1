<div class="row">
    <div class="arrow">
        <h4>Tạo tài khoản</h4>
    </div>
    <div class="arrow-right"></div>
    <div class="clear"></div>
    <div class="col-md-12" style="background-color: #B8763A;height: 1px;"></div>
    <div class="clear1"></div>
    <div class="main-login col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
	
       
		<div class=" row box-login">
          <div class="col-md-4">
			<img class="" width="100%" src="<?php echo Yii::app()->baseUrl?>/img/thongtintaikhoanimg.png" />
		 </div>
		<div class="col-md-8">
			
            <fieldset>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="form-field-1">Tên hiển thị</label>
					<span class="col-md-12 input-icon">
                        <input type="text" class="form-control" id="username" name="username" value="Mỹ Linh" placeholder="* Tên hiển thị">
                    </span>
					<div class="clear1"></div>
                </div>
				<div class="form-group">	   
					<label class="col-md-4 control-label" for="form-field-1"> Ngày sinh  </label>
					<div class="col-md-8">
						<input type="text" class="form-control" id="birthday" name="birthday" value="18/01/1987" placeholder="">
					</div>
					<div class="clear"></div>
				</div>
				<div class="form-group">	   
					<label class="col-md-5 control-label" for="form-field-1">Giới tính  </label>
					<div class="col-md-2 radio-inline ">
					  <label><input type="radio" name="optradio">Nam</label>
					</div>
					<div class="col-md-2  radio-inline">
					  <label><input type="radio" name="optradio">Nữ</label>
					</div>
					<div class="clear"></div>
				</div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="form-field-1">Địa chỉ email </label>
                    <label class="col-md-8 control-label" for="form-field-1">linhlinh@gmail.com </label>
					<div class="clear1"></div>
                </div>
                <div class="form-group ">
                    <label class="col-md-4 control-label" for="form-field-1">Mật khẩu </label>
                    <label class="col-md-8 control-label" for="form-field-1"><a href="#"><i>Click vào đây để đổi mật khẩu </i></a></label>
					<div class="clear1"></div>
                </div>              
                  <div class="form-group ">
						<label class="col-md-4 control-label" for="form-field-1">Facebook </label>      
						<div class="col-md-8 control-label" style="border: 1px solid #C9BBAA;border-radius: 5px;padding: 5px 30px;background: #fff;cursor: pointer;">
							<img src="<?php echo Yii::app()->baseUrl.'/images/facebook.jpg'?>" />
						</div>
						<div class="clear1"></div>
                 </div>               
                <div class="form-actions">
                    <button type="button" class="btn btn-green pull-right btn-epub" id="btn_login" onclick="actionLogin();">
                       Cập nhật
                    </button>
                </div>
            </fieldset>
        </div>
        </div>
    </div>
</div>
