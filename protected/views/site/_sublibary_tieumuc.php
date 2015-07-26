  <div class="col-md-10">

    <div class="row">
        <div class="arrow">
            <h4>
                <?php
                if($_REQUEST["myid"]!="0")
                {
                    echo CommonDB::GetDataRow("tbl_index","id=".$_REQUEST["myid"]." and type=".$_REQUEST["mylevel"])["name"] ;
                }else{
                    echo "Tất Cả" ;
                }
                $comboData =$dataItem;

                ?></h4>

        </div>
        <div class="arrow-right"></div>
        <div class="clear"></div>
        <div class="col-md-12" style="background-color: #B8763A;height: 1px;"></div>
        <div class="clear1"></div>
    </div>
    <div class="col-md-12" style="height: 80px;">
        <div class="row">
            <table>
                <tr><td style="width: 50px"> Hiển thị</td><td style="width: 80px"><select id="comboPerPage" style="width: 30%">

                            <?php $ITEM_PER_PAGE = unserialize (ITEM_PER_PAGE); ?>
                            <?php for($i = 0;$i<count($ITEM_PER_PAGE);$i++):?>
                                selected="selected"
                                <?php
                                $strselected ="";
                                if($ITEM_PER_PAGE[$i]==20){
                                    $strselected ="selected";
                                } ?>
                                <option <?php echo $strselected; ?>  value="<?php echo $ITEM_PER_PAGE[$i]; ?>">
                                    <?php echo $ITEM_PER_PAGE[$i]; ?></option>
                            <?php endfor;?>
                        </select></td><td style="width: 100px"> <?php
                    // $dataPage =array('totalPage'=>$totalPage,'pageSize'=>$pageSize,'itemCount'=>$itemCount,'page'=>$page);

                    $totalPage= $arrDataPage['totalPage'];
                    $pageSize= $arrDataPage['pageSize'];
                    $page= $arrDataPage['page'];
                    $itemCount= $arrDataPage['itemCount'];
                    // var_dump($arrDataPage);
                   // echo(   Common::getPagging($totalPage,$pageSize,$page,$itemCount));
                    ?>

                        <select id="comboPage1" style="width: 50%"> <option value="1">Trang 1 của 2</option><option value="2">Trang 2 của 2 </option> </select>



                              </td></tr>
            </table>

            <div class="col-md-4" style="min-width: 100px">  </div>

            <div class="col-md-3 ">



            </div>

        </div>


        <script>

            $(document).ready(function() {
                //$("#comboPage").attr('width','20%');
                //$("#comboPerPage").select2();
                $("#comboPerPage").select2({
                    minimumResultsForSearch: Infinity
                }); $("#comboPage").select2({
                    minimumResultsForSearch: Infinity
                });$("#comboPage1").select2({
                    minimumResultsForSearch: Infinity
                });
            });
        </script>


    </div>
    <div class="row">
<!--// `id`,`book_code`,`parent_id`,`,`book_name`,`introduction`,`bookimage_link`,`active`,`create_date`,`good_book_flg`,`book_type`,`content_link`,`viewer_count`,`reader_count`,`relate_book_id`,`download_flg`,`download_file_link`,`admin_id`,`delete_logic_flg`,`user_id_delete`,`date_delete`-->
        <?php foreach($comboData as $value):?>
            <div style="float:left;width: 157px;height: 229px; margin:5px 5px 80px 5px;">
                <div style="">
                    <img class="boximg" style="width: 157px;height: 229px;" u="image" src="<?php echo Yii::app()->baseUrl?>/images/item.jpg" />
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