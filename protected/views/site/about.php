<?php
    $this->pageTitle = $page->title;
    Yii::app()->clientScript->registerMetaTag($page->description, 'description');
    Yii::app()->clientScript->registerMetaTag($page->keyword, 'keywords');
var_dump($page1);
?>
<div class="row">
    <div class="main-login col-xs-12 col-sm-12 col-md-12">
        <div class="row">
            <div class="box-login">
                <div class="col-md-offset-4 col-md-8">
                    <button alt="tab_1" class="btn btn-green btn-epub btn_tab click_active" type="button">Giới thiệu</button>
                    <button alt="tab_2" class="btn btn-green btn-epub btn_tab" >Danh sách nhà tài trợ</button>
                </div>
                <div id="tab_1" class="tab">
                   
                    <?php echo $page->content?>
                </div>
                <div id="tab_2" class="tab" style="display: none;">
                    
                    <?php echo $page->content?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(".btn_tab").click(function(){
            var id = $(this).attr('alt');
            $(".btn_tab").removeClass('click_active');
            $(this).addClass('click_active');
            $(".tab").hide();
            $("#"+id).show();
        });
    });
</script>