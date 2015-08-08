<form id="registration-form" method="post" onsubmit="return validateForm();"  action="/dang-nhap">
<div class="row">
    <div class="arrow">
        <h4><b>Đăng nhập</b></h4>
    </div>
    <div class="arrow-right"></div>
    <div class="clear" style="padding-top:2px"  ></div>
    <div class="col-md-12" style="background-color: #B8763A;height: 1px;"></div>
    <div class="clear1"></div>
    <div class="main-login col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
        <div class="row">
            <div class="box-login boxborder">
                <p>
                    <span style="color:#D5A16F;"><i>Chào mừng bạn đến với</i> </span>
                    <span style="color: #D5904D;font-weight: bold;">Thư Viện</span>
                    <span style="color:#5A2E0B;font-weight: bold;">Công Giáo</span>
                    <span style="color: #D5904D;font-weight: bold;">Việt Nam</span>
                    <br/>
                </p>
                <div class="clear1"></div>
                <fieldset>
                    <div class="col-md-12" style=""></div>
                    <div class="clear1"></div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
<!--                        <span style="float: left;"><h4 >Đăng nhập</h4></span> <span style="float: right;">(* Thông tin bắt buộc nhập)</span>
                        <div class="clear1"></div>-->
                        <div class="form-group form-actions">
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
                            <span style="float: left;"><a href="/quen-mat-khau" class="linUnder">Quên mật khẩu</a></span>
                            <span style="float: right;"><b>* Thông tin bắt buộc nhập </b></span>
                        </div>
                        <div class="clear1"></div>
                        <div class="form-group form-actions">
                            <div class="col-xs-12 col-md-8" style="text-align: right;">
                                <div class="row">
                                    <button type="submit" class="btn btn-green btn-epub" id="btn_login" onclick="actionLogin();">
                                        Đăng nhập
                                    </button>
                                    <a class="btn btn-green btn-epub" href="<?php echo Yii::app()->baseUrl.'/dang-ky'?>">
                                       Đăng ký
                                    </a>
                                </div>
                            </div>                 
                            <div class="clear"></div>
                        </div>
                    </div>
<!--                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <h4>Kết nối đến</h4>
                        <div class="clear1"></div>
                        <div class="form-group form-actions">
                            <div style="border: 1px solid #C9BBAA;border-radius: 5px;padding: 5px 30px;background: #fff;cursor: pointer;">
                                <img src="<?php echo Yii::app()->baseUrl.'/images/google.jpg'?>" />
                            </div>
                        </div>
                        <div class="form-group form-actions">
                            <div style="border: 1px solid #C9BBAA;border-radius: 5px;padding: 5px 30px;background: #fff;cursor: pointer;">
                                <img src="<?php echo Yii::app()->baseUrl.'/images/facebook.jpg'?>" />
                            </div>
                        </div>
                        <div class="form-group form-actions">
                            <div style="border: 1px solid #C9BBAA;border-radius: 5px;padding: 5px 30px;background: #fff;cursor: pointer;">
                                <img src="<?php echo Yii::app()->baseUrl.'/images/twitter.jpg'?>" />
                            </div>
                        </div>
                    </div>       -->
                </fieldset>
            </div>
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

    function validateForm()
    {

       var resO =  checkEmpty("email","[Email]");
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

        return true;
    }
    $(document).ready(function()
    {
        $('#email').focus();
        var options = {
            beforeSend: function()
            {
            },
            uploadProgress: function(event, position, total, percentComplete)
            {

            },
            success: function(responseText, statusText, xhr, $form)
            {
               if(responseText=="1"){
                   window.location='/welcome';
               }else{
                   alert(responseText); $('#email').focus();

               }

            },
            complete: function(response)
            {

               // window.location='/thu-vien';
            },
            error: function()
            {
            }
        };
        $("#registration-form").ajaxForm(options);
    });

</script>