<style>
    .commentit{
        background-color:#fff;padding-left:5px;padding-top:5px;
        border-radius: 2px;margin-left: 15px;
        /*box-shadow: 1px 1px 12px 1px #B1956D;*/
    }
    .headerc {
        color: #5066B7;
        font-weight: 600;
    }
    .mycomment{
        color: #464040;
    }
    .commentit1{
        background-color: #F1F1F1;
        padding-left: 0px;
        padding-top: 5px;
        box-shadow: 1px 1px 12px 1px #B1956D;
        /* border-radius: 11px; */
        margin-left: 2px;
        width: 922px;
    }
    #txtComment{
        width: 832px; margin: 0px; height: 40px;
    }
    .btndangky{
        background-color: #2D57CA;;font-size:12px;
        color: #fff;float:right !important;font-weight:700;
    }
    .ocomment{
        padding-right: 5px;
        width: 866px;
    }
    .clsheight {height: 10px}
</style>
<form id="registration-form" method="post" onsubmit="return validateForm();"  action="/Site/LoadInfo">
<div class="row container1" >

    <?php $dataItem=$dataPage["dataItem"]; ?>
    <?php foreach($dataItem as $value):?>

<!--        <table style="width: 100%;padding-right: 5px;padding-left: 5px">-->
<!--            <tbody><tr>-->
<!--                <td class="auto-style2" rowspan="2" style=" width: 114px;background-color: #fff;text-align: center;vertical-align: middle"><img src="/images/logo.png"></td>-->
<!--                <td  rowspan="2" style=" width: 14px;">&nbsp;</td>-->
<!--                <td style=" background-color: #fff;">  --><?php //echo $value["display_name"]?><!--(--><?php //echo Common::formatDateShowDDMMYYYY($value['comment_date']) ?><!--)</td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td style="padding-right:5px;background-color: #fff;">  --><?php //echo nl2br($value["content"])?>
<!--                </td>-->
<!--            </tr>-->
<!---->
<!--            </tbody></table>-->
        <div class="row " >
            <div class=" col-md-2" style="width:65px">
                <img src="/img/logobook.png">

            </div>
            <div class=" col-md-10 commentit" style="">
                <div class="row">
                    <div class="col-md-12"> <span class="headerc"> <?php echo $value["display_name"]?>:</span>
                        <?php echo Common::formatDateShowDDMMYYYY($value['comment_date']) ?> </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mycomment ocomment" >
                        <?php echo nl2br($value["content"])?>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear clsheight" ></div>
    <?php endforeach?>


<!--    <div class="row " >-->
<!--        <div class=" col-md-2" style="width:65px">-->
<!--            <img src="/img/logobook.png">-->
<!---->
<!--        </div>-->
<!--        <div class=" col-md-10 commentit" style="">-->
<!--            <div class="row">-->
<!--                <div class="col-md-12"> <span class="headerc"> Xuân bảo:</span>-->
<!--                    10/03/2015 </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-md-12 mycomment ocomment" >-->
<!--                    Nguyễn Chân  Nguyễn Chân Nguyễn Chân Nguyễn Chân Nguyễn Chân Nguyễn Chân Nguyễn Chân Nguyễn Chân Nguyễn Chân-->
<!--                    Nguyễn Chân Nguyễn Chân Nguyễn Chân Nguyễn Chân Nguyễn Chân-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="clear clsheight" ></div>-->
<!--    <div class="row " >-->
<!--        <div class=" col-md-2" style="width:65px">-->
<!--            <img src="/img/logobook.png">-->
<!---->
<!--        </div>-->
<!--        <div class=" col-md-10 commentit" style="">-->
<!--            <div class="row">-->
<!--                <div class="col-md-12"> <span class="headerc"> Xuân bảo:</span>-->
<!--                    10/03/2015 </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-md-12 mycomment ocomment" >-->
<!--                    Nguyễn Chân  Nguyễn Chân Nguyễn Chân Nguyễn Chân Nguyễn Chân Nguyễn Chân Nguyễn Chân Nguyễn Chân Nguyễn Chân-->
<!--                    Nguyễn Chân Nguyễn Chân Nguyễn Chân Nguyễn Chân Nguyễn Chân-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="clear clsheight" ></div>-->
<!--    <div class="row " >-->
<!--        <div class=" col-md-2" style="width:65px">-->
<!--            <img src="/img/logobook.png">-->
<!---->
<!--        </div>-->
<!--        <div class=" col-md-10 commentit" style="">-->
<!--            <div class="row">-->
<!--                <div class="col-md-12"> <span class="headerc"> Xuân bảo:</span>-->
<!--                    10/03/2015 </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-md-12 mycomment ocomment" >-->
<!--                    Nguyễn Chân  Nguyễn Chân Nguyễn Chân Nguyễn Chân Nguyễn Chân Nguyễn Chân Nguyễn Chân Nguyễn Chân Nguyễn Chân-->
<!--                    Nguyễn Chân Nguyễn Chân Nguyễn Chân Nguyễn Chân Nguyễn Chân-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="clear clsheight" ></div>-->

    <div class="row commentit1 " >
        <div class=" col-md-2" style="width:65px">
            <img src="/img/logobook.png">

        </div>
        <div class=" col-md-10 " style="width:832px">
<!--            <div class="row">-->
<!--                <div class="col-md-12"> <span class="headerc"> --><?php //echo Common::getSession('display_name') ?><!--:</span>-->
<!--                    10/03/2015 </div>-->
<!--            </div>-->
            <div class="row">
                <div class="col-md-12 mycomment" >
                    <textarea  id="txtComment" name="txtComment"  ></textarea>
                </div>
            </div><div class="row">
                <div class="col-md-12 mycomment" style="padding-top: 5px;padding-bottom: 5px;width:862px" >
				<?php if(isset(Yii::app()->session['id_user'])): ?>
                        <button type="submit" class="btndangky" value="Bình luận"  id="btnsave" name="btnsave" >
                        Bình luận
                    </button>

                    <?php else: ?>
                        <div alt="0" class=""  >
                         <a target="_blank" href="/dang-nhap" style="color: #C0703D">   Đăng nhập   </a>để bình luận
                        </div>
                    <?php endif; ?>
					
                    
                </div>
            </div>
        </div>
    </div>
</div>
</form>


<div class="row">



        <br/>
<!--    <table class="auto-style1" style="width: 80%;background-color: #F1DDC2;padding-right: 5px;padding-left: 5px">-->
<!--        <tr>-->
<!--            <td class="auto-style2" rowspan="2" style=" width: 114px;text-align: center;vertical-align: middle"><img src="/images/logo.png"></td>-->
<!--            <td></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td style="padding-right:5px"><textarea style="width: 100%; margin-top: 0px; margin-bottom: 0px; height: 81px;"></textarea>-->
<!--            <br/>-->
<!--                <button type="submit" class="btn btn-green pull-right btn-epub" value="Đăng ký"  >-->
<!--                   Bình luận-->
<!--                </button>-->
<!--            </td>-->
<!--        </tr>-->
<!---->
<!--    </table>-->

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