<section class="content-header">
    <h1>
        <?php echo $this->pageTitle; ?>

    </h1>

</section>
<section class="content  bordertop">
    <div class="row">
        <div class="col-md-6" style="width: 80%">
            <a href="index.php?r=ajaxadmin/nvkinhdoanh&add=1"> <b>Thêm mới </b></a>
            <div class="panel panel-default">
<form id="myForm" action="index.php?r=ajaxadmin/nvkinhdoanh" method="post" enctype="multipart/form-data">
<div class="box-body">
    <table class="table table-bordered">
        <tbody><tr>
            <th style="width: 10px">#</th>
            <th>Tên</th>
			 <th>Email</th>
            <th>SĐThoại</th>
            <th>Xóa</th>

        </tr>
        <?php $numst=1; ?>
        <?php foreach($data as $value):?>

            <tr class="remove<?php echo $value["nvkinhdoanh_id"]?>">
                <td> <?php echo $numst++; ?></td>
                <td>
       <input type="text" value="<?php echo $value["ten"]?>" id="ten_<?php echo $value["nvkinhdoanh_id"]?>" name="ten_<?php echo $value["nvkinhdoanh_id"]?>" />
                    </td>
					<td>
                      <input type="text" value="<?php echo $value["email"]?>" id="email_<?php echo $value["nvkinhdoanh_id"]?>" name="email_<?php echo $value["nvkinhdoanh_id"]?>" />
     
                </td>
                <td><input type="text" value="<?php echo $value["sodienthoai"]?>" id="sodienthoai_<?php echo $value["nvkinhdoanh_id"]?>" name="sodienthoai_<?php echo $value["nvkinhdoanh_id"]?>" />
                </td>
                <td>
                    <button class="btn btn-info btn-sm cssdelete"  nvkinhdoanh_id="<?php echo $value["nvkinhdoanh_id"]?>" type="button" >Xóa</button>
                </td>

            </tr>

        <?php endforeach?>


        </tbody></table> <input class="btn btn-danger btn-lg" name="bsubmit" value=" Lưu " type="submit" />
</div>
</form>
            </div>

        </div>

    </div>
    </div>
</section>
<!--<script src="http://120.72.106.146:66/themes/user-templete/js/jquery.min.js"></script>-->
<script>
    $(document).ready(function()
    {

        var options = {
            beforeSend: function()
            {
                $("#progress").show();
                //clear everything
                $("#bar").width('0%');
                $("#message").html("");
                $("#percent").html("0%");
            },
            uploadProgress: function(event, position, total, percentComplete)
            {
                $("#bar").width(percentComplete+'%');
                $("#percent").html(percentComplete+'%');


            },
            success: function()
            {
                $("#bar").width('100%');
                $("#percent").html('100%');
                //  listImage();
                // $("#myForm").reset();
                //document.getElementById("myForm").reset();
                alert("Đã lưu thành công");

            },
            complete: function(response)
            {
                $("#message").html("<font color='green'>"+response.responseText+"</font>");
            },
            error: function()
            {
                $("#message").html("<font color='red'> ERROR: unable to upload files</font>");

            }

        };

       /// $("#myForm").ajaxForm(options);


    });

$(document).on('click', '.cssdelete', function () {
    color_id = $(this).attr("color_id");
    var confirm1 = confirm("Các sản phẩm theo màu này sẽ bị xóa theo?Bạn có chắc?");
    if(confirm1){
        var confirm2 = confirm("Khi xóa rồi không thể phục hồi?Bạn có chắc không?");
        if(confirm2){
            $.get("index.php?r=ajaxadmin/ColorDelete&color_id="+color_id , function (data, status) {
                $('.remove'+color_id).hide()  ;

            });
        }
    }



});
</script>
