<div class="col-md-12">
<div class="row">

<div class=" col-md-12 col-md-12_note" id="divcontent">

<div class="row">
    <div class="arrow">
        <h4>Tủ sách</h4>
    </div>
    <div class="arrow-right"></div>
    <div class="clear"></div>
    <div class="col-md-12" style="background-color: #B8763A;height: 1px;"></div>
    <div class="clear1"></div>

</div>
    <?php $dataItem=$dataPage["dataItem"]; ?>
    <?php foreach($dataItem as $value):?>

        <div class="row boxproduct rev<?php echo $value["id"]?>">
            <table class="auto-style1">
                <tr>
                    <td class="auto-style2">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td style="text-align: left" valign="top"><a href="javascript:DeleteRead('<?php echo $value["id"]?>')">Xóa</a></td>
                </tr>
                <tr>
                    <td class="auto-style2"><img src="/images/item.jpg" width="150px" height="200px"></td>
                    <td valign="top" style="vertical-align:top">
                        <table class="auto-style1" style="vertical-align:top">
                            <tr>
                                <td>Giới thiệu sách</td>
                                <td>Thông tin chi tiết</td>
                                <td>Đánh giá bình luận</td>
                                <td>Sách liên quan</td>
                            </tr>
                            <tr>
                                <td colspan="4"><?php echo $value["book_name"]?></td>
                            </tr>
                            <tr>
                                <td colspan="4" width="580px" ><?php echo nl2br($value["introduction"])?></td>
                            </tr>
                        </table>
                    </td>
                    <td  valign="top" style="vertical-align:top;width:180px" >&nbsp;Đã đọc <?php echo $value["date_read"]?> ngày trước&nbsp;</td>
                </tr>
            </table>

            <div class="clear rev<?php echo $value["id"]?>" ></div>

        </div>
        <div class="clear1"></div>


    <?php endforeach?>



</div>
</div>
      </div>
<script>

    function DeleteRead(booid){
        var confr = confirm("Bạn có chắc là muốn xóa ra khỏi tủ sách?");
        if(confr){
                $.ajax({
                    type:"POST",
                    url:'/Site/RemoveBook?ID_BOOK='+booid,
                    data:{},
                    success:function(result){
                        var keyV = '.rev'+booid;
                        $(keyV).remove();
                        alert('Đã bỏ ra tủ sách của bạn thành công!');
                    }
                });

            }
    }
</script>