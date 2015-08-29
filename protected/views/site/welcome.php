<style>

    .wel{
        margin-top: 43px;
        width: 767px;
        margin-left: 15px;
    }
    .hrcolor{
        background-color: #D5904D;
        width: 360px;
        height: 1px;
        margin-left: 187px;
        margin-top: 12px; margin-bottom: 12px;
    }
</style>
<div class="row">
    <?php
    require('leftmenu.php');
    ?>

    <div class="col-md-10 box-login onlybox wel" id="divcontent" >
	
	
	<div class="col-md-12" style="text-align:center" >
        <div class="col-md-12" >   <img src="/img/smile.png" /> </div>
        <p style="padding-left:15px;padding-top: 70px">
            <span class="textcolor1"><i>Chào mừng bạn đến với</i> </span>
            <span style="color: #D5904D;font-weight: bold;">Thư Viện</span>
            <span style="font-weight: bold;" class="colorconggiao">Công Giáo</span>
            <span style="font-weight: bold;" class="textcolor1">Việt Nam</span>
            <br>
        <p class="hrcolor" >    </p>
        </p>



        <p class="colorconggiao" style="padding-left:15px;padding-top: 0px">
           Chọn vào các mục bên trái để tìm sách cần đọc
            <br>
        </p>

    </div>
    </div>
</div>
<script>

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