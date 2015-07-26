<div class="row">
<?php
require('leftmenu.php');
?>

    <div class="col-md-10" id="divcontent">

    </div>
</div>

<script>

    $(document).ready(function() {
        LoadContent(0,0);
    });
    function LoadContent(myid,mylevel){
        if(mylevel==2){
            $.ajax({
                type:"POST",
                url:'/Site/SubLibaryTieuMuc?mylevel='+mylevel+'&myid='+myid,
                data:{},
                success:function(result){
                    $("#divcontent").empty().append(result);
                }
            });
        }else //SubLibaryTieuMuc
        $.ajax({
            type:"POST",
            url:'/Site/SubLibary?mylevel='+mylevel+'&myid='+myid,
            data:{},
            success:function(result){
                $("#divcontent").empty().append(result);
            }
        });
    }

</script>