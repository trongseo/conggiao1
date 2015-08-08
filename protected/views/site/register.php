<script type="text/javascript" src="/js/datetime/lib/jquery.timepicker.js"></script>
<link rel="stylesheet" type="text/css" href="/js/datetime/lib/jquery.timepicker.css" />
<script type="text/javascript" src="/js/datetime/lib/bootstrap-datepicker.js"></script>
<link rel="stylesheet" type="text/css" href="/js/datetime/lib/bootstrap-datepicker.css" />
<form id="registration-form" method="post" onsubmit="return validateForm();"  action="/dang-ky">
<div class="row">
    <div class="arrow">
        <h4>Tạo tài khoản</h4>
    </div>
    <div class="arrow-right"></div>
    <div class="clear"></div>
    <div class="col-md-12" style="background-color: #B8763A;height: 1px;"></div>
    <div class="clear1"></div>
    <div class="main-login col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
        <div class="box-login boxborder">
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
                        <input type="text" class="form-control" id="display_name" name="display_name" placeholder="* Tên hiển thị">
                    </span>
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
                <div class="form-group">
                    <label class="col-md-2 control-label" for="form-field-1">
                        <div class="row" style="margin-top:5px">
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
                        <label><input type="radio" value="0"  name="optradio">Nam</label>
                    </div>
                    <div class="col-md-2  radio-inline">
                        <label><input type="radio" value="1" checked name="optradio">Nữ</label>
                    </div>
                    <div class="clear"></div>
                </div>
               <div class="form-group" >
					
					<label style="border-top: 1px solid #EDBE99; text-align: left; color:#AE7418" class="col-sm-12 control-label" for="form-field-1">* Thông tin bắt buộc nhập.</label>

                   <label style="width: 500px;color:#AE7418" class="col-sm-12 control-label" for="form-field-1">Bằng cách nhấp vào nút Đăng ký, bạn sẽ đồng ý với các
                       <a class="linUnder" target="_blank" href="/dieu-khoan-su-dung"><i>điều khoản sử dụng</i></a>
                       của chúng tôi </label>
                   <button type="submit" class="btn btn-green pull-right btn-epub" value="Đăng ký"  id="btnsave" name="btnsave"  >
                       Đăng ký
                   </button>
               </div>
			   <div class="form-actions">

                </div>
            </fieldset>
        </div>
    </div>
</div>
</form>

<script src="http://malsup.github.com/jquery.form.js"></script>

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
    var MA_SP_valid=true;
    $( "#email" )
        .focusout(function() {

        })
        .blur(function() {
            $email1=$('#email').val()+"";
            if($email1!="")
            $.get("/dang-ky?ischeck=1&email="+$(this).val() +"&guid_id=", function (data, status) {
                if(data=="0"){
                    MA_SP_valid=false;
                }else{
                    MA_SP_valid=true;
                }

            });
        });


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
        resO =  checkEmpty("email","[Email]");
        if(resO==false){
            return false;
        }
        var email = $("#email").val();
        if ((/(.+)@(.+){2,}\.(.+){2,}/.test(email)) || email=="" || email==null) { } else {
            alert("Email chưa chính xác!");
            $("#email").focus();
            return false;
        }
        resO =  checkEmpty("password","[Mật khẩu]");
        if(resO==false){
            return false;
        }
        resO =  checkEmpty("re-password","[Nhập lại mật khẩu]");
        if(resO==false){
            return false;
        }
        resO =  checkSamePass("password","re-password");
        if(resO==false){
            return false;
        }
        if(MA_SP_valid==false){
            alert("Email đã tồn tại.Vui lòng nhập Email khác!");
            $('#email').focus();
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
                alert("Đã đăng ký thành công.Vui lòng đăng nhập để dùng!");
                window.location='/dang-nhap';
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