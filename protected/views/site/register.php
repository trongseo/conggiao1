<div class="row">
    <div class="arrow">
        <h4>Tạo tài khoản</h4>
    </div>
    <div class="arrow-right"></div>
    <div class="clear"></div>
    <div class="col-md-12" style="background-color: #B8763A;height: 1px;"></div>
    <div class="clear1"></div>
    <div class="main-login col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
        <div class="box-login">
            <p>
                <span style="color:#D5A16F;">Chào mừng bạn đến với </span>
                <span style="color: #D5904D;font-weight: bold;">Thư Viện</span>
                <span style="color: #492E14;font-weight: bold;">Công Giáo</span>
                <span style="color: #D5904D;font-weight: bold;">Việt Nam</span>
                <br/>
                Vui lòng điền thông tin dưới đây để tạo tài khoản. Nếu bạn đã có tài khoản, <a href="<?php echo Yii::app()->baseUrl.'/dang-nhap'?>">Đăng nhập</a>
            </p>
            <div class="clear1"></div>
            <fieldset>
                <div class="form-group">
                    <span class="input-icon">
                        <input type="text" class="form-control" id="username" name="username" placeholder="* Tên hiển thị">
                    </span>
                </div>
                <div class="form-group">	   
                    <label class="col-md-2 control-label" for="form-field-1">
                        <div class="row">
                            Ngày sinh *
                        </div>
                    </label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="birthday" name="birthday" placeholder="">
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="form-group">	   
                        <label class="col-md-2 control-label" for="form-field-1">Giới tính * </label>
                        <div class="radio-pading col-md-2 radio-inline ">
                          <label><input type="radio" name="optradio">Nam</label>
                        </div>
                        <div class="col-md-2  radio-inline">
                          <label><input type="radio" name="optradio">Nữ</label>
                        </div>
                        <div class="clear"></div>
                </div>
                <div class="form-group">
                    <span class="input-icon">
                        <input type="text" class="form-control" id="email" name="email" placeholder="* Địa chỉ email">
                    </span>
                </div>
                <div class="form-group form-actions">
                    <span class="input-icon">
                        <input type="password" class="form-control password" id="password" name="password" placeholder="* Mật khẩu">
                    </span>
                </div>
                <div class="form-group form-actions">
                    <span class="input-icon">
                        <input type="password" class="form-control password" id="re-password" name="re-password" placeholder="* Nhập lại mật khẩu">
                    </span>
                </div>
               <div class="form-group" >
					
					<label style="border-top: 1px solid #EDBE99; text-align: left; color:#AE7418" class="col-sm-12 control-label" for="form-field-1">* Thông tin bắt buộc nhập.</label>
					
					
				</div>
			   <div class="form-actions">
                    <button type="button" class="btn btn-green pull-right btn-epub" id="btn_login" onclick="actionLogin();">
                        Tạo tài khoản
                    </button>
                </div>
            </fieldset>
        </div>
    </div>
</div>
