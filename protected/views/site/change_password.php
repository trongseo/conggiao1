<script type="text/javascript" src="/js/datetime/lib/jquery.timepicker.js"></script>
<link rel="stylesheet" type="text/css" href="/js/datetime/lib/jquery.timepicker.css" />
<script type="text/javascript" src="/js/datetime/lib/bootstrap-datepicker.js"></script>
<link rel="stylesheet" type="text/css" href="/js/datetime/lib/bootstrap-datepicker.css" />
<form id="registration-form" method="post" onsubmit="return validateForm();"  action="/update-password">
<div class="row">
    <div class="arrow">
        <h4>Đổi mật khẩu</h4>
    </div>
    <div class="arrow-right"></div>
    <div class="clear" style="padding-top:2px"></div>
    <div class="col-md-12" style="background-color: #B8763A;height: 1px;"></div>
    <div class="clear1"></div>
    <div class="main-login col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
        <div class="box-login">
            <p>

                Vui lòng điền thông tin dưới đây để thay đổi mật khẩu
            </p>
            <div class="clear1"></div>
            <fieldset>


                <div class="form-group form-actions">
                    <span class="input-icon">
                        <input type="password" class="form-control password" id="oldpassword" name="oldpassword" placeholder="* Mật khẩu cũ">
                    </span>
                </div>

                <div class="form-group form-actions">
                    <span class="input-icon">
                        <input type="password" class="form-control password" id="password" name="password" placeholder="* Mật khẩu mới">
                    </span>
                </div>
                <div class="form-group form-actions">
                    <span class="input-icon">
                        <input type="password" class="form-control password" id="re-password" name="re-password" placeholder="* Nhập lại mật khẩu mới">
                    </span>
                </div>
               <div class="form-group" >
					
					<label style="border-top: 1px solid #EDBE99; text-align: left; color:#AE7418" class="col-sm-12 control-label" for="form-field-1">* Thông tin bắt buộc nhập.</label>


                   <button type="submit" class="btn btn-green pull-right btn-epub" value="Đăng ký"  id="btnsave" name="btnsave"  >
                      Đổi mật khẩu
                   </button>
               </div>
			   <div class="form-actions">

                </div>
            </fieldset>
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
            alert("Vui lòng nhập nội dung mật khẩu mới giống nhau !");
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



    function validateForm()
    {

       var resO =  checkEmpty("oldpassword","[Mật khẩu cũ]");
        if(resO==false){
            return false;
        }
        resO =  checkEmpty("password","[Mật khẩu mới]");
        if(resO==false){
            return false;
        }
        resO =  checkEmpty("re-password","[Nhập lại mật khẩu mới]");
        if(resO==false){
            return false;
        }
        resO =  checkSamePass("password","re-password");
        if(resO==false){
            return false;
        }


        return true;
    }
    $(document).ready(function()
    {
       $('#oldpassword').focus();
        var options = {
            beforeSend: function()
            {
            },
            uploadProgress: function(event, position, total, percentComplete)
            {

            },
            success: function()
            {
                alert("Đã cập nhật mật khẩu mới thành công!");
                $('#oldpassword').focus();
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