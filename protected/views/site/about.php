<style>
    .contact-head {
        background: transparent url("images/line_shadow.png") no-repeat scroll center bottom;
        text-align: center;
        height: 39px;
        margin-top: -15px;
    }
    .contact-head button{
        height: 30px;
        border-left: 1px solid rgb(192, 112, 61);
        color: #5A2D0C;
        font-weight: bold;
        margin-left: -5px;
        background: transparent none repeat scroll 0% 0%;
        border-right: 1px solid rgb(192, 112, 61);
        border-bottom: 1px solid rgb(192, 112, 61);
        border-top: none;
    }
    .click_active{
        color:#C0703D !important;
    }
    .btn-epub{
        background: #BE7339;
        color:#FCE4BE;
        height: 36px;
    }
    .btn-epub:hover,.click_active{
        background: #5A2D0C;

    }
</style>
<div class="clear1"></div>
<div class="main-login col-xs-12 col-sm-12 col-md-12">
    <div class="row">
        <div class="box-login">
            <div class="col-md-12 contact-head">
                <?php $noShow="click_active";
                ?>
            <?php foreach($comboData1 as $value1):?>


                    <button alt="tab_<?php echo $value1["id"]?>" class=" btn_tab <?php echo $noShow ?>" type="button"><?php echo $value1["title"]?></button>

                <?php $noShow="";
                ?>
            <?php endforeach?>
                </div>
            <?php $noShow="";
            ?>
            <?php foreach($comboData1 as $value1):?>

            <div id="tab_<?php echo $value1["id"]?>" class="tab"  style="<?php echo $noShow ?>">
                <?php echo $value1["content"]?>
            </div>
                <?php $noShow="display: none;";
                ?>
            <?php endforeach?>

        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(".btn_tab").click(function() {
            var id = $(this).attr('alt');
            $(".btn_tab").removeClass('click_active');
            $(this).addClass('click_active');
            $(".tab").hide();
            $("#" + id).show();
        });
    });
</script>