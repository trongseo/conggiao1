<style>
    .combopage{
        height: 30px;
    }
    .btnPre{
        border-radius: 10px 0px 0 10px;
        height: 30px;
        width: 30px;
        border-color: rgb(211, 155, 103);
    }
    .btnNext{
        border-radius: 0px 10px 10px 0px;
        height: 30px;
        width: 30px;
        border-color: rgb(211, 155, 103);
    }
    .borderpage{
        border-radius: 10px 10px 10px 10px;

        border:1px solid #be682f;
        height: 37px;padding-top: 2px;
    }
    .keyword{

        font-style: italic;
        color: #000000 !important;
        font-weight: 400 !important;
        padding-top: 8px;
        padding-bottom: 4px;
        padding-left:0px;
    }
    .mybox {
        background: #FAE5C8 none repeat scroll 0 0;
        border-radius: 5px;
        padding: 15px;
        box-shadow: 1px 1px 8px 1px #333;
    }
    .center-block {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
</style>
<?php

$comboData =$dataItem;

?>
<div class="col-md-12 ">




    <div class="row">

        <div class="clear"></div>
    </div>
    <?php if(count($comboData)==0):?>

        <div class="row mybox" style="padding:0px;padding-left:5px;height:200px;margin-top:20px">
            <div class="row" style="padding-top:20px">
                <div class="span4"></div>
                <div class="span4"><img class="center-block" style="width:40px;" src="/img/sad.jpg"></div>
                <div class="span4"></div>
            </div>
            <div class="col-md-12" style=";height: 10px;padding-top: 10px;padding-bottom: 10px;">
            <div class="col-md-12" style="background-color: rgb(183,161,136);height: 1px;"></div>
            </div>
            <div class="col-md-12" style="text-align: center">Không tìm thấy sách nào phù hợp với từ khóa  <b>"<?php echo Common::getSession("book_name"); ?>"</b></div>
        </div>

    <?php else: ?>

    <div class="row">
        <div class="col-md-12 keyword " style=""  >
            Sách nổi bật phù hợp với từ khóa <span style=" font-style: normal;">"
                <?php echo Common::getSession("book_name"); ?>"</span>
        </div></div>

   <?php require_once "_sublibary_tieumuc_search_template.php" ?>
    <?php endif; ?>
</div>

<style>

    .selectMin{
        width: 40%;
    }
</style>