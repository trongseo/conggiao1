<script type="text/javascript" src="/js/datetime/lib/jquery.timepicker.js"></script>
<link rel="stylesheet" type="text/css" href="/js/datetime/lib/jquery.timepicker.css" />
<script type="text/javascript" src="/js/datetime/lib/bootstrap-datepicker.js"></script>
<link rel="stylesheet" type="text/css" href="/js/datetime/lib/bootstrap-datepicker.css" />
<style>
    .control-label{
        padding-top: 7px;
        padding-right: 0px;
        height: 35px;
        font-weight: 500;
    }
    .radio-inline, .checkbox-inline {
        display: inline-block;
        padding-left: 5px;
        margin-bottom: 0;
        font-weight: normal;
        vertical-align: middle;
        cursor: pointer;
        padding-top: 8px;
    }
    .textcolor1{
        font-weight: 500;
    }
    .rowpad{
        margin-left: 5px;
        margin-right: 15px;
        padding-top: 5px;
    }
</style>
<form id="registration-form" method="post" onsubmit="return validateForm();"  action="/thong-tin-tai-khoan">

<div class="row">
    <div class="arrow colorconggiao">
        <h4>Thông tin tài khoản</h4>
    </div>
    <div class="arrow-right"></div>
    <div class="clear" style="padding-top:2px"></div>
    <div class="col-md-12" style="background-color: #B8763A;height: 1px;"></div>

    <div class="clear1"></div>
    <div class="main-login col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
	
       
		<div class=" row box-login onlybox" >
            <div class=" row">
          <div class="col-md-4" style="text-align:center">
			<img class="" width="80%" src="<?php echo Yii::app()->baseUrl?>/img/thongtintaikhoanimg.png" />
		 </div>
		<div class="col-md-8">
			
            <fieldset>
                <div class="form-group">
                    <label class="col-md-4 control-label textcolor1"  style="" for="form-field-1">Tên hiển thị</label>
					<span class="col-md-8 input-icon">
                        <input type="text"  class="form-control" id="display_name" name="display_name" value="<?php echo $dataUser["display_name"] ?>" placeholder="* Tên hiển thị">
                    </span>

                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label textcolor1" for="form-field-1">Địa chỉ email </label>
                    <label class="col-md-8 control-label textcolor1" for="form-field-1"><?php echo $dataUser["email"] ?> </label>

                </div>
                <div class="form-group ">
                    <label class="col-md-4 control-label textcolor1" for="form-field-1">Mật khẩu </label>
                    <label class="col-md-8 control-label textcolor1" for="form-field-1"><a style="text-decoration: underline;" class="textcolor1" target="_blank" href="/update-password">Click vào đây để đổi mật khẩu </a></label>

                </div>
                <div class="form-group">
					<label class="col-md-4 control-label textcolor1" for="form-field-1"> Ngày sinh  </label>
					<div class="col-md-8">
						<input type="text" class="form-control"  id="birthday" name="birthday" value="<?php echo Common::converYYYYMMDDtoDaymonyyyyPara($dataUser["birthday"] ) ?>" placeholder="">
					</div>

				</div>
				<div class="form-group">	   
					<label class="col-md-5 control-label textcolor1" for="form-field-1">Giới tính  </label>
					<div class="col-md-2 radio-inline ">
                        <?php
                        $isCheckFe =  $dataUser["sex"]==1?"":"checked";
                        $isCheckMale =$dataUser["sex"]==1?"checked":"";
                        ?>
					  <label  class="textcolor1"><input <?php echo $isCheckMale ?> type="radio" name="optradio" value="1">Nam</label>
					</div>
					<div class="col-md-2  radio-inline">
					  <label class="textcolor1"><input <?php echo $isCheckFe ?> type="radio" name="optradio" value="0">Nữ</label>
					</div>

				</div>


<!--                  <div class="form-group ">-->
<!--						<label class="col-md-4 control-label" for="form-field-1">Facebook </label>      -->
<!--						<div class="col-md-8 control-label" style="border: 1px solid #C9BBAA;border-radius: 5px;padding: 5px 30px;background: #fff;cursor: pointer;">-->
<!--							<img src="--><?php //echo Yii::app()->baseUrl.'/images/facebook.jpg'?><!--" />-->
<!--						</div>-->
<!--						<div class="clear1"></div>-->
<!--                 </div>               -->
                <div class="form-actions">

                </div>
            </fieldset>
        </div>
            </div>

            <div class="row rowpad" style="border-top: 1px solid #EDBE99;"> </div>
            <div class="row rowpad">
                <button type="submit" style="width: 150px" class="btn btn-green pull-right btn-epub" id="btn_login">
                    Cập nhật
                </button>
            </div>
        </div>

    </div>
</div>
    <div class="clear1"></div>
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

</script>
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

