<div class="col-md-2 menu_box">
<div class="row">
<div style="width:100%;padding-right:20px;">
<ul class="menu1">
<?php  $comboData=$this->comboData;

?>

<?php foreach($comboData as $value):?>
    <?php
    $comboData1 = CommonDB::GetAll('SELECT * FROM tbl_index WHERE delete_logic_flg=0 AND TYPE=1 AND parent_id='.$value['id'].' ORDER BY NAME',[]);
    ?>
    <li class="item<?php echo $value["id"]?>">
        <a><?php echo $value["name"]?> <i class="fa fa-plus-square"></i></a>
        <ul class="cute">
    <?php foreach($comboData1 as $value1):?>
            <li class="subitem1"><a class="trung"> <?php echo $value1["name"]?>  <i class="fa fa-plus-square"></i></a>

                <?php
                $comboData2 = CommonDB::GetAll('SELECT * FROM tbl_index WHERE delete_logic_flg=0 AND TYPE=2 AND parent_id='.$value1['id'].' ORDER BY NAME',[]);
                ?>  <ul class="cute">
        <?php foreach($comboData2 as $value2):?>

                    <li class="subitem1 sublittle"><a class="tieu">  <?php echo $value2["name"]?> </a></li>


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
<!--initiate accordion-->
<script type="text/javascript">
    $(function() {
        /*<i class="fa fa-plus-square"></i>
         <i class="fa fa-minus-square"></i>*/
        var menu_ul = $('.menu1 > li > ul'),
            menu_a  = $('.menu1 > li > a');
        menu_ul.hide();
        menu_a.click(function(e) {
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
        });
        /*<i class="fa fa-plus-square"></i>
         <i class="fa fa-minus-square"></i>*/
        var menu_ul_ul = $('.menu1 > li > ul > li > ul'),
            menu_a_ul  = $('.menu1 > li > ul > li > a');
        menu_ul_ul.hide();
        menu_a_ul.click(function(e) {
            e.preventDefault();
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
            }

        });

    });
</script>

