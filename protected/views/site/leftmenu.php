<div class="col-md-3 lefmenuw borderright menu_box">
<div class="row">
<div class="menu-left-top">
    <h5>DANH MỤC - THỂ LOẠI</h5>
</div>
<div style="width:100%;padding-right:16px;">
    <ul class="menu1">
        <?php  $comboData=$this->comboData;

        ?>

        <?php foreach($comboData as $value):?>
            <?php

            $comboData1 = CommonDB::GetAll('SELECT * FROM tbl_index WHERE delete_logic_flg=0 AND TYPE=1 AND parent_id='.$value['id'].' ORDER BY NAME',[]);
            ?>
            <li class="item<?php echo $value["id"]?>">

                <a class="aitem<?php echo $value["id"]?>" title="<?php echo $value["name"]?>" href="javascript:void(0);" myid="<?php echo $value["id"]?>"><?php echo Common::truncate($value["name"],36,'.') ;?> <i class="fa fa-plus-square"></i></a>
                <ul class="cute">
                    <?php foreach($comboData1 as $value1):?>
                        <li class="subitem1">

                            <a  title="<?php echo $value1["name"]?>" class="trung" href="javascript:void(0);" myid="<?php echo $value1["id"]?>" > <?php echo Common::truncate($value1["name"],30,'.');?>  <i class="fa fa-plus-square"></i></a>

                            <?php
                            $comboData2 = CommonDB::GetAll('SELECT * FROM tbl_index WHERE delete_logic_flg=0 AND TYPE=2 AND parent_id='.$value1['id'].' ORDER BY NAME',[]);
                            ?>  <ul class="cute">
                                <?php foreach($comboData2 as $value2):?>

                                    <li class="subitem1 sublittle"><a  title="<?php echo $value2["name"]?>" class="tieu" href="javascript:void(0);" myid="<?php echo $value2["id"]?>" >  <?php echo Common::truncate($value2["name"],34,'.')?> </a></li>


                                <?php endforeach?>
                            </ul>
                        </li>
                    <?php endforeach?>
                </ul>
            </li>

        <?php endforeach?>

    </ul>
</div>
</div>
</div>

<script>
    //divcontentmain
    var MAX_WIDTHMENU =800;
    var IFS_F=1;
    $(document).ready(function() {
        sayHi();

        function sayHi() {
            setTimeout(sayHi,1000);
            var meIt = $('#divcontent').height();
            var leftMenu = $('.menu1').height();
            if(IFS_F==1)leftMenu=MAX_WIDTHMENU;IFS_F=0;
            if(meIt> leftMenu){
                $('.lefmenuw').height(meIt);
            }else{
                $('.lefmenuw').height(leftMenu+50);
            }
            console.log($('.menu1').height());
        }

//        $("#divcontent").bind("DOMSubtreeModified", function() {
//
//
//        });
//        $(".lefmenuw").bind("DOMSubtreeModified", function() {
//
//
//
//        });
//        $(".lefmenuw ").bind("DOMSubtreeModified", function() {
//            var ctWidth = $('#lefmenuw ').height();
//            if(ctWidth>MAX_WIDTHMENU){
//                $('.lefmenuw').height(ctWidth);
//            }
//
//        });
    });

</script>

<!--initiate accordion-->
<script type="text/javascript">
    $(function() {
        /*<i class="fa fa-plus-square"></i>
         <i class="fa fa-minus-square"></i>*/
        var menu_ul = $('.menu1 > li > ul'),
            menu_a  = $('.menu1 > li > a');
        var tieu_muc =$('.tieu');
        tieu_muc.click(function(e) {
            console.log(  $('.lefmenuw').height())  ;
            LoadContent($(this).attr('myid'),2);
        });
        menu_ul.hide();
        menu_a.click(function(e) {
          console.log(  $('.lefmenuw').height())  ;
            e.preventDefault();
            if(!$(this).hasClass('active')) {
                menu_a.removeClass('active');
                menu_a.find( "i" ).removeClass('fa-minus-square').addClass('fa-plus-square');
                menu_ul.filter(':visible').slideUp('normal');
                $(this).addClass('active').next().stop(true,true).slideDown('normal');
                $(this).find( "i" ).removeClass('fa-plus-square').addClass('fa-minus-square');

            } else {
                $(this).removeClass('active');
                $(this).next().stop(true,true).slideUp('normal');
                $(this).find( "i" ).removeClass('fa-minus-square').addClass('fa-plus-square');
            }

            LoadContent($(this).attr('myid'),0);
        });
        /*<i class="fa fa-plus-square"></i>
         <i class="fa fa-minus-square"></i>*/
        var menu_ul_ul = $('.menu1 > li > ul > li > ul'),
            menu_a_ul  = $('.menu1 > li > ul > li > a');
        menu_ul_ul.hide();
        menu_a_ul.click(function(e) {
            e.preventDefault(); console.log(  $('.lefmenuw').height())  ;
            if(!$(this).hasClass('active')) {
                menu_a_ul.removeClass('active');
                menu_a_ul.find( "i" ).removeClass('fa-minus-square').addClass('fa-plus-square');
                menu_ul_ul.filter(':visible').slideUp('normal');
                $(this).addClass('active').next().stop(true,true).slideDown('normal');
                $(this).find( "i" ).removeClass('fa-plus-square').addClass('fa-minus-square');
            } else {
                $(this).removeClass('active');
                $(this).next().stop(true,true).slideUp('normal');
                $(this).find( "i" ).removeClass('fa-minus-square').addClass('fa-plus-square');
//                var ctWidth = $('.lefmenuw ').height();
//                if(ctWidth>MAX_WIDTHMENU){
//                    $('.lefmenuw').height(ctWidth);console.log(ctWidth);
//                }
            }
            LoadContent($(this).attr('myid'),1);

        });

    });
</script>