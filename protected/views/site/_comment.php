<div class="row">
    <form id="registration-form" method="post" onsubmit="return validateForm();"  action="/Site/LoadInfo">
        <table style="width: 100%;padding-right: 5px;padding-left: 5px">
            <tbody><tr>
                <td class="auto-style2" rowspan="2" style=" width: 114px;background-color: #fff;text-align: center;vertical-align: middle"><img src="/images/logo.png"></td>
                <td  rowspan="2" style=" width: 14px;">&nbsp;</td>
                <td style=" background-color: #fff;">aaaaaaaaaaaaa</td>
            </tr>
            <tr>
                <td style="padding-right:5px;background-color: #fff;">asddfsdfsd
                </td>
            </tr>

            </tbody></table>
        <br/>
        <table style="width: 100%;padding-right: 5px;padding-left: 5px">
            <tbody><tr>
                <td class="auto-style2" rowspan="2" style=" width: 114px;background-color: #fff;text-align: center;vertical-align: middle"><img src="/images/logo.png"></td>
                <td  rowspan="2" style=" width: 14px;">&nbsp;</td>
                <td style=" background-color: #fff;">aaaaaaaaaaaaa</td>
            </tr>
            <tr>
                <td style="padding-right:5px;background-color: #fff;">asddfsdfsd
                </td>
            </tr>

            </tbody></table>
        <br/>
    <table class="auto-style1" style="width: 100%;background-color: #a6e1ec;padding-right: 5px;padding-left: 5px">
        <tr>
            <td class="auto-style2" rowspan="2" style=" width: 114px;text-align: center;vertical-align: middle"><img src="/images/logo.png"></td>
            <td><?php echo Common::getSession('display_name') ?></td>
        </tr>
        <tr>
            <td style="padding-right:5px"><textarea id="txtComment" name="txtComment" style="width: 100%; margin-top: 0px; margin-bottom: 0px; height: 81px;"></textarea>
            <br/>
                <button type="submit" class="btn btn-green pull-right btn-epub" value="Đăng ký"  id="btnsave" name="btnsave"  >
                   Bình luận
                </button>
            </td>
        </tr>

    </table>
        </form>
</div>


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



    function validateForm()
    {
        // Validate Title
        var resO =  checkEmpty("txtComment","[Nội dung bình luận]");
        if(resO==false){
            return false;
        }

        return true;
    }
    $(document).ready(function()
    {
        $('#txtComment').focus();
        var options = {
            beforeSend: function()
            {
            },
            uploadProgress: function(event, position, total, percentComplete)
            {

            },
            success: function()
            {
                $('#txtComment').val('');
                alert("Cám ơn bạn đã gửi bình luận!Bình luận sẽ được hiển thị sau khi quản lý duyệt.");
                //window.location='/dang-nhap'; ;
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