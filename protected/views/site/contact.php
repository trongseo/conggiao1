<?php
    $this->pageTitle = $c->title;
    Yii::app()->clientScript->registerMetaTag($c->description, 'description');
    Yii::app()->clientScript->registerMetaTag($c->keyword, 'keywords');
    if($type == 1){
        echo '<div class="alert alert-success">
            <strong>Thông báo!</strong>
            Bạn đã gửi yêu cầu thành công
            </div>';
    }
?>
<div class="row box-login">
    <div class="arrow">
        <h4>Liên hệ</h4>
    </div>
    <div class="arrow-right"></div>
    <div class="clear"></div>
    <div class="col-md-12" style="background-color: #B8763A;height: 1px;"></div>
    <div class="clear1"></div>
	<div class="col-md-6 contact-left">
	
	<div class="form-group">
		<label class="col-sm-12 control-label" style="font-weight:bold;" for="form-field-1"> Thư Viện Công Giáo Việt Nam </label>
		<div class="col-sm-12">
			 <img class="boximg" style="100%" u="image" src="<?php echo Yii::app()->baseUrl?>/img/lienhe.png" />
		</div>
		<div class="col-sm-12">
			 
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label" style="text-align:right" for="form-field-1">Địa chỉ:</label>
		<div class="col-sm-9">
			 Số 70, Nguyễn Trãi, Phường 2, Quận 5, TP.Hồ Chí Minh
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label" style="text-align:right" for="form-field-1">Email:</label>
		<div class="col-sm-9">
			thuvienconggiaovietnam@gmail.com
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label" style="text-align:right" for="form-field-1">Điện thoại:</label>
		<div class="col-sm-9">
			083 8369945
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label" style="text-align:right" for="form-field-1">Mobile:</label>
		<div class="col-sm-9">
			0913896099
		</div>
	</div>
</div>
<div class="col-xs-18 col-sm-12 col-md-6 p-item" style="border-left:1px solid #5A2D0C">
    <form id="form_contact" class="form-horizontal" method="POST" action="<?php echo Yii::app()->baseUrl.'/contact';?>" role="form" enctype="multipart/form-data">
        <div class="form-group">           
            <label class="col-sm-12 control-label" style="text-align:center;padding:20px;" for="form-field-1">
				Quý khách vui lòng điền đầy đủ thông tin dưới đây</br>
				Chúng tôi sẽ phản hồi cho Quý khách trong thời gian sớm nhất.
			</label>
            <div class="clear"></div>
        </div> 
		<div class="form-group">
           
            <div class="col-sm-12">
                <input id="name" name="name" value="" class="form-control" type="text" placeholder="* Họ và tên">
            </div>
            <div class="clear"></div>
        </div>
        <div class="form-group">
            
            <div class="col-sm-12">
                <input id="phone" name="phone" value="" class="form-control" type="text" placeholder="* Số điện thoại">
            </div>
            <div class="clear"></div>
        </div>
        <div class="form-group">
           
            <div class="col-sm-12">
                <input id="email" name="email" value="" class="form-control" type="email" placeholder="* Email">
            </div>
            <div class="clear"></div>
        </div>
        <div class="form-group">           
            <div class="col-sm-12">
                <input id="address" name="address" value="" class="form-control" type="text" placeholder="* Địa chỉ">
            </div>
            <div class="clear"></div>
        </div>
        <div class="form-group">
           
            <div class="col-sm-12">
                <input id="title" name="title" value="" class="form-control" type="text" placeholder="* Tiêu đề">
            </div>
            <div class="clear"></div>
        </div>
        <div class="form-group">
            
            <div class="col-sm-12">
                <textarea name="content" id="content" class="autosize form-control" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 69px;" placeholder="* Nội dung"></textarea>
            </div>
            <div class="clear"></div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label" for="form-field-1">Mã Captcha </label>
            <div class="col-sm-2" id="frm-capcha">
				
				 <img class="" style="100%" u="image" src="<?php echo Yii::app()->baseUrl?>/img/capcha.png" />
		   </div>
            <div class="clear"></div>
        </div>
        <div class="form-group">           
            <div class="col-sm-6" id="frm-capcha">
                <input id="captcha" name="captcha" value="" class="form-control" type="text" placeholder="* Nhập mã captcha">
            </div>
            <div class="clear"></div>
        </div>
       <div class="form-group" >
			<label  class="col-sm-1 control-label" for="form-field-1"></label>
            <label style="border-top:1px solid #BE7339; text-align: left; color:#AE7418" class="col-sm-11 control-label" for="form-field-1">* Thông tin bắt buộc nhập.</label>
            
            
        </div>
	   <div class="form-group">
	   
            <label class="col-sm-4 control-label" for="form-field-1">  </label>
            <div class="col-sm-8">
                <input class="btn btn-red" type="button" onclick="isSend();return false;" value="Gửi" style="float:right;background-color: #be7339;color: #fff;width: 100px;">
            </div>
            <div class="clear"></div>
        </div>
    </div>
 </div>

<script>
    jQuery(document).ready(function() {
        LoadCapcha();
        $("#phone").keyup(function(e) {
            var value = $("#phone").val();
            value = value.replace(/[^0-9]+/g, '');
            $("#phone").val(value);
        });
        $("#captcha").keyup(function(e) {
            $("#captcha").btOff();
        });
    })
    function LoadCapcha(){
        $.ajax({
            type:"POST",
            url:'<?php echo Yii::app()->baseUrl ?>/Site/LoadCapcha',
            data:{},
            success:function(result){
                $("#frm-capcha").empty().append(result);
            }
        })
    }
    function isEmail(email)
    {
        var rule = /^[a-zA-Z]{1}[a-zA-z0-9._]+\@[a-zA-Z0-9._-]{3,}\.[a-z.]{2,}$/;
        if(email.match(rule))
            return true;
        else
            return false;
    }
    function isSend(){
        var name = $("#name").val();
        var phone = $("#phone").val();
        var email = $("#email").val();
        var address = $("#address").val();
        var title = $("#title").val();
        var content = $("#content").val();

        var captcha = $("#captcha").val();

        $("#name").btOff();
        $("#phone").btOff();
        $("#email").btOff();
        $("#address").btOff();
        $("#title").btOff();
        $("#content").btOff();
        $("#captcha").btOff();
        if(name == ""){
            $('#name').bt('Vui lòng nhập tên',{
                trigger: 'none',
                clickAnywhereToClose : false,
                positions: ['top'],
                fill: 'rgba(33, 33, 33, .8)',
                spikeLength: 10,
                spikeGirth: 10,

                cssStyles: {color: '#FFF', fontSize: '11px',textAlign:'justify',width:'auto'}
            });
            $("#name").btOn();
            $("#name").focus();
            return false;
        }
        if(phone == ""){
            $('#phone').bt('Vui lòng nhập điện thoại',{
                trigger: 'none',
                clickAnywhereToClose : false,
                positions: ['top'],
                fill: 'rgba(33, 33, 33, .8)',
                spikeLength: 10,
                spikeGirth: 10,

                cssStyles: {color: '#FFF', fontSize: '11px',textAlign:'justify',width:'auto'}
            });
            $("#phone").btOn();
            $("#phone").focus();
            return false;
        }
        if(email == ""){
            $('#email').bt('Vui lòng nhập email',{
                trigger: 'none',
                clickAnywhereToClose : false,
                positions: ['top'],
                fill: 'rgba(33, 33, 33, .8)',
                spikeLength: 10,
                spikeGirth: 10,

                cssStyles: {color: '#FFF', fontSize: '11px',textAlign:'justify',width:'auto'}
            });
            $("#email").btOn();
            $("#email").focus();
            return false;
        }
        if(!isEmail(email)){
            $('#email').bt('Email không đúng định dạng',{
                trigger: 'none',
                clickAnywhereToClose : false,
                positions: ['top'],
                fill: 'rgba(33, 33, 33, .8)',
                spikeLength: 10,
                spikeGirth: 10,

                cssStyles: {color: '#FFF', fontSize: '11px',textAlign:'justify',width:'auto'}
            });
            $("#email").btOn();
            $("#email").focus();
            return false;
        }

        if(address == ""){
            $('#address').bt('Vui lòng nhập địa chỉ',{
                trigger: 'none',
                clickAnywhereToClose : false,
                positions: ['top'],
                fill: 'rgba(33, 33, 33, .8)',
                spikeLength: 10,
                spikeGirth: 10,

                cssStyles: {color: '#FFF', fontSize: '11px',textAlign:'justify',width:'auto'}
            });
            $("#address").btOn();
            $("#address").focus();
            return false;
        }
        if(title == ""){
            $('#title').bt('Vui lòng nhập tiêu đề',{
                trigger: 'none',
                clickAnywhereToClose : false,
                positions: ['top'],
                fill: 'rgba(33, 33, 33, .8)',
                spikeLength: 10,
                spikeGirth: 10,

                cssStyles: {color: '#FFF', fontSize: '11px',textAlign:'justify',width:'auto'}
            });
            $("#title").btOn();
            $("#title").focus();
            return false;
        }
        if(content == ""){
            $('#content').bt('Vui lòng nhập nội dung',{
                trigger: 'none',
                clickAnywhereToClose : false,
                positions: ['top'],
                fill: 'rgba(33, 33, 33, .8)',
                spikeLength: 10,
                spikeGirth: 10,

                cssStyles: {color: '#FFF', fontSize: '11px',textAlign:'justify',width:'auto'}
            });
            $("#content").btOn();
            $("#content").focus();
            return false;
        }
        if(captcha == ""){
            $('#captcha').bt('Vui lòng nhập captcha',{
                trigger: 'none',
                clickAnywhereToClose : false,
                positions: ['top'],
                fill: 'rgba(33, 33, 33, .8)',
                spikeLength: 10,
                spikeGirth: 10,

                cssStyles: {color: '#FFF', fontSize: '11px',textAlign:'justify',width:'auto'}
            });
            $("#captcha").btOn();
            $("#captcha").focus();
            return false;
        }
        var ctc = $("#ctc").val();
        LoadCapcha();
        if(captcha != ctc){
            $('#captcha').bt('captcha không đúng',{
                trigger: 'none',
                clickAnywhereToClose : false,
                positions: ['top'],
                fill: 'rgba(33, 33, 33, .8)',
                spikeLength: 10,
                spikeGirth: 10,

                cssStyles: {color: '#FFF', fontSize: '11px',textAlign:'justify',width:'auto'}
            });
            $("#captcha").btOn();
            $("#captcha").focus();
            return false;
        }
        $("#form_contact").submit();
    }
</script>