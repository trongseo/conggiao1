<div class="row">
<?php
require('leftmenu.php');
?>

    <div class="col-md-10" id="divcontent">

    </div>
</div>

<script>
var FROM_TIEUMUC='tieumuc';
    $(document).ready(function() {
            <?php if(isset($arrSearch)): ?>
       var daiMuc ='<?php echo $arrSearch[0]; ?>';
        var keySearch ='<?php echo $arrSearch[1]; ?>';
            <?php else: ?>
        var daiMuc ='';

        <?php endif; ?>
        if(daiMuc!=''){
            FROM_TIEUMUC ='tim';
            LoadContentSearch(daiMuc,keySearch);
        }else
        LoadContent(0,0);
    });
function LoadContentSearch(daimuc,keysearch){
   var  urlGet = '/Site/SubLibaryTieuMucSearch?daimuc='+daimuc+'&keysearch='+keysearch;
    $.ajax({
        type:"POST",
        url:urlGet,
        data:{},
        success:function(result){
            $("#divcontent").empty().append(result);
        }
    });

}
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