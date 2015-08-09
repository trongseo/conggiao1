<script type="text/javascript" src="/js/datetime/lib/jquery.timepicker.js"></script>
<link rel="stylesheet" type="text/css" href="/js/datetime/lib/jquery.timepicker.css" />
<script type="text/javascript" src="/js/datetime/lib/bootstrap-datepicker.js"></script>
<link rel="stylesheet" type="text/css" href="/js/datetime/lib/bootstrap-datepicker.css" />

<form id="registration-form" method="post" onsubmit="return validateForm();"  action="/thong-tin-tai-khoan">

<div class="row">
    <div class="arrow">
        <h4>Thông tin tài khoản</h4>
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
                        <input type="text" class="form-control" id="display_name" name="display_name" value="<?php echo $dataUser["display_name"] ?>" placeholder="* Tên hiển thị">
                    </span>
					<div class="clear1"></div>
                </div>
				<div class="form-group">	   
					<label class="col-md-4 control-label" for="form-field-1"> Ngày sinh  </label>
					<div class="col-md-8">
						<input type="text" class="form-control" id="birthday" name="birthday" value="<?php echo Common::converYYYYMMDDtoDaymonyyyyPara($dataUser["birthday"] ) ?>" placeholder="">
					</div>
					<div class="clear"></div>
				</div>
				<div class="form-group">	   
					<label class="col-md-5 control-label" for="form-field-1">Giới tính  </label>
					<div class="col-md-2 radio-inline ">
                        <?php
                        $isCheckFe =  $dataUser["sex"]==1?"":"checked";
                        $isCheckMale =$dataUser["sex"]==1?"checked":"";
                        ?>
					  <label><input <?php echo $isCheckMale ?> type="radio" name="optradio" value="1">Nam</label>
					</div>
					<div class="col-md-2  radio-inline">
					  <label><input <?php echo $isCheckFe ?> type="radio" name="optradio" value="0">Nữ</label>
					</div>
					<div class="clear"></div>
				</div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="form-field-1">Địa chỉ email </label>
                    <label class="col-md-8 control-label" for="form-field-1"><?php echo $dataUser["email"] ?> </label>
					<div class="clear1"></div>
                </div>
                <div class="form-group ">
                    <label class="col-md-4 control-label" for="form-field-1">Mật khẩu </label>
                    <label class="col-md-8 control-label" for="form-field-1"><a target="_blank" href="/update-password"><i>Click vào đây để đổi mật khẩu </i></a></label>
					<div class="clear1"></div>
                </div>              
<!--                  <div class="form-group ">-->
<!--						<label class="col-md-4 control-label" for="form-field-1">Facebook </label>      -->
<!--						<div class="col-md-8 control-label" style="border: 1px solid #C9BBAA;border-radius: 5px;padding: 5px 30px;background: #fff;cursor: pointer;">-->
<!--							<img src="--><?php //echo Yii::app()->baseUrl.'/images/facebook.jpg'?><!--" />-->
<!--						</div>-->
<!--						<div class="clear1"></div>-->
<!--                 </div>               -->
                <div class="form-actions">
                    <button type="submit" class="btn btn-green pull-right btn-epub" id="btn_login">
                       Cập nhật
                    </button>
                </div>
            </fieldset>
        </div>
        </div>
    </div>
</div>
</form>
<script type="text/JavaScript">

    function validateURL(url) {
        var reurl = /^(http[s]?:\/\/){0,1}(www\.){0,1}[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,5}[\.]{0,1}/;
        return re.test(url);
    }

    function checkSamePass( objid, objid1){
        var title = $("#"+objid).val();
        var title1 = $("#"+objid1).val();
        var reVal=true;
        if (title!=title1) {
            alert("Vui lòng nhập nội dung mật khẩu giống nhau !");
            $("#"+objid).focus();
            reVal=false;

        }
        return reVal;
    }

    function checkEmpty( objid, textval){
        var title = $("#"+objid).val();
        var reVal=true;
        if (title=="" || title==null) {
            alert("Vui lòng nhập nội dung "+textval+" !");
            $("#"+objid).focus();
            reVal=false;

        }
        return reVal;
    }



    $('#birthday').datepicker({
        'format': 'dd/mm/yyyy',
        'autoclose': true
    });
    function validateForm()
    {
        // Validate Title
        var resO =  checkEmpty("display_name","[Tên hiển thị]");
        if(resO==false){
            return false;
        }
        resO =  checkEmpty("birthday","[Ngày sinh]");
        if(resO==false){
            return false;
        }


        return true;
    }
    $(document).ready(function()
    {
        $('#display_name').focus();
        var options = {
            beforeSend: function()
            {
            },
            uploadProgress: function(event, position, total, percentComplete)
            {

            },
            success: function()
            {
                alert("Đã cập nhật thành công!");

            },
            complete: function(response)
            {

            },
            error: function()
            {
            }
        };
        $("#registration-form").ajaxForm(options);
    });

</script>        </div>
</div>
<div class="clear1"></div>
<div class="col-md-12">
    <div class="col-md-12 footer-wp">
        <div class="row">
            <div class="col-md-4 form-group">
                <h4>Thông tin</h4>

                <a href="/dieu-khoan-su-dung">
                    <div class="items items-1">
                        Điều khoản sử dụng
                    </div>
                </a>
                <a href="/lien-he">
                    <div class="items items-2">
                        Liên hệ
                    </div>
                </a>
            </div>
            <div class="col-md-4 form-group">
                <h4>Phần mềm đọc sách</h4>
                <a href="/ung-dung-cho-pc">
                    <div class="items items-7">
                        Ứng dụng cho PC
                    </div>
                </a>
                <a href="/ung-dung-cho-ios">
                    <div class="items items-3">
                        Ứng dụng cho IOS
                    </div>
                </a>
                <a href="/ung-dung-cho-android">
                    <div class="items items-4">
                        Ừng dụng cho Android
                    </div>
                </a>
            </div>
            <div class="col-md-4 form-group">
                <h4>Hỗ trợ</h4>
                <a href="/huong-dan">
                    <div class="items items-5">
                        Hướng dẫn
                    </div>
                </a>
                <a href="/cau-hoi-thuong-gap">
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
<script type="text/JavaScript">

    function validateURL(url) {
        var reurl = /^(http[s]?:\/\/){0,1}(www\.){0,1}[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,5}[\.]{0,1}/;
        return re.test(url);
    }

    function checkSamePass( objid, objid1){
        var title = $("#"+objid).val();
        var title1 = $("#"+objid1).val();
        var reVal=true;
        if (title!=title1) {
            alert("Vui lòng nhập nội dung mật khẩu giống nhau !");
            $("#"+objid).focus();
            reVal=false;

        }
        return reVal;
    }

    function checkEmpty( objid, textval){
        var title = $("#"+objid).val();
        var reVal=true;
        if (title=="" || title==null) {
            alert("Vui lòng nhập nội dung "+textval+" !");
            $("#"+objid).focus();
            reVal=false;

        }
        return reVal;
    }



    $('#birthday').datepicker({
        'format': 'dd/mm/yyyy',
        'autoclose': true
    });
    function validateForm()
    {
        // Validate Title
        var resO =  checkEmpty("display_name","[Tên hiển thị]");
        if(resO==false){
            return false;
        }
        resO =  checkEmpty("birthday","[Ngày sinh]");
        if(resO==false){
            return false;
        }


        return true;
    }
    $(document).ready(function()
    {
        $('#display_name').focus();
        var options = {
            beforeSend: function()
            {
            },
            uploadProgress: function(event, position, total, percentComplete)
            {

            },
            success: function()
            {
                alert("Đã cập thành công.");
            },
            complete: function(response)
            {

            },
            error: function()
            {
            }
        };
        $("#registration-form").ajaxForm(options);
    });

</script>

