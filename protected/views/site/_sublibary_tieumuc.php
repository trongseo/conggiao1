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
</style>
<div class="col-md-12">

    <div class="row">
        <div class="arrow">
            <h4>
                <?php
                if(Common::getSession("parent_id")!="0")
                {
                    echo CommonDB::GetDataRow("tbl_index","id=".Common::getSession("parent_id"))["name"] ;
                }else{

                }
                $comboData =$dataItem;

                ?></h4>

        </div>
        <div class="arrow-right"></div>
        <div class="clear"></div>
        <div class="col-md-12" style="background-color: #B8763A;height: 1px;"></div>
        <div class="clear1"></div>
    </div>
    <div class="row">
    <div class="col-md-12 borderpage" style="background:rgb(248, 226, 198);" >
        <div class="row">


            <?php $ORDER_BY_KEY = unserialize (ORDER_BY_KEY); ?>
            <?php $ORDER_BY = unserialize (ORDER_BY); ?>


            <div class="col-md-5 "  style="width:180px"> <div class=" form-inline" style="width:180px">Sắp xếp:
                <select id="comboOrderBy" class="form-control combopage"  >
                    <?php for($i = 0;$i<count($ORDER_BY);$i++):?>
                        <?php
                        $strselected1 ="";
                        $keyShow = $ORDER_BY_KEY[$i];
                        $valueShow = $ORDER_BY[$i];
                        if($keyShow== $arrView['orderbyid']){
                            $strselected1 ="selected";
                        }
                        ?>
                        <option <?php echo $strselected1; ?>  value="<?php echo$keyShow; ?>">
                            <?php echo $valueShow; ?></option>
                    <?php endfor;?>
                </select></div>
            </div>
            <div class="col-md-3 "><div class=" form-inline"  >Hiển thị
                <select id="comboPerPage" class="form-control combopage"  >

                    <?php $ITEM_PER_PAGE = unserialize (ITEM_PER_PAGE); ?>
                    <?php for($i = 0;$i<count($ITEM_PER_PAGE);$i++):?>

                        <?php
                        $strselected ="";
                        if($ITEM_PER_PAGE[$i]==$arrView['perpageshow']){
                            $strselected ="selected";
                        } ?>
                        <option <?php echo $strselected; ?>  value="<?php echo $ITEM_PER_PAGE[$i]; ?>">
                            <?php echo $ITEM_PER_PAGE[$i]; ?></option>
                    <?php endfor;?>
                </select>
            </div> </div>
            <div class="col-md-6 form-inline " style="text-align:right;padding:0 0 0 0">
                <input type="button" class="btnPre" style="" value="<" />
                <?php
                // $dataPage =array('totalPage'=>$totalPage,'pageSize'=>$pageSize,'itemCount'=>$itemCount,'page'=>$page);

                $totalPage= $arrDataPage['totalPage'];

                $pageSize= $arrDataPage['pageSize'];
                $page= $arrDataPage['page'];
                $itemCount= $arrDataPage['itemCount'];
                // var_dump($arrDataPage);
                echo(   Common::getPagging($totalPage,$pageSize,$page,$itemCount));
                ?>
                <input type="button" class="btnNext" style="" value=">" />
            </div>



        </div>


        <script>

            $(document).ready(function() {
                //$("#comboPage").attr('width','20%');
                //$("#comboPerPage").select2();
                $("#comboPerPage1").select2({
                    minimumResultsForSearch: Infinity
                }); $("#comboPage111").select2({
                    minimumResultsForSearch: Infinity
                });

                $( "#comboOrderBy" ).change(function() {
                    showOrderBy(0);
                });
                $( "#comboPage" ).change(function() {
                    showOrderBy(1);
                });
                $( "#comboPerPage" ).change(function() {
                    showOrderBy(0);
                });
            });

            function showOrderBy(isPage){
              var  gotopage =$( "#comboPage").val();
                var  perpageshow =$( "#comboPerPage").val();
                var  orderbyid =$( "#comboOrderBy").val();
                if(isPage==0){
                    gotopage=1;
                }
                $.ajax({
                    type:"POST",
                    url:'/Site/SubLibaryTieuMuc?from=order&gotopage='+gotopage+'&orderbyid='+orderbyid+'&perpageshow='+perpageshow,
                    data:{},
                    success:function(result){
                        $("#divcontent").empty().append(result);
                    }
                });

            }


        </script>


    </div>
    </div>


    <div class="row">
<!--// `id`,`book_code`,`parent_id`,`,`book_name`,`introduction`,`bookimage_link`,`active`,`create_date`,`good_book_flg`,`book_type`,`content_link`,`viewer_count`,`reader_count`,`relate_book_id`,`download_flg`,`download_file_link`,`admin_id`,`delete_logic_flg`,`user_id_delete`,`date_delete`-->
        <?php foreach($comboData as $value):?>
            <div style="float:left;width: 140px;height: 200px; margin:5px 5px 80px 5px;">
                <div style="">
                    <img class="boximg" style="width: 140px;height: 200px;" u="image" src="<?php echo Yii::app()->baseUrl?>/images/item.jpg" />
                    <span style="font-size: 11px;font-weight: bold;line-height: 15px;"> <?php echo $value["book_name"]?></span>

                    <a target="_blank" href="<?php echo Yii::app()->baseUrl.'/chi-tiet'?>/<?php echo $value["id"]?>">
                        <div class="read-book">
                            Đọc
                        </div>
                    </a>
                </div>
            </div>

        <?php endforeach?>
    </div>

    <div class="col-md-12" style="height: 80px;">

        <img  style="width: 100%" u="image" src="<?php echo Yii::app()->baseUrl?>/img/tieu-muc-title-bottom.png" />
    </div>
    <div class="clear1"></div>

</div>

<style>

    .selectMin{
        width: 40%;
    }
</style>