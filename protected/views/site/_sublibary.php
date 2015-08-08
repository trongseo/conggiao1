
<div class="row">
    <div class="arrow">
        <h4><?php
            if($_REQUEST["myid"]!="0")
            {
                echo CommonDB::GetDataRow("tbl_index","id=".$_REQUEST["myid"]." and type=".$_REQUEST["mylevel"])["name"] ;
            }else{
                echo "Tất Cả" ;
            }
           $cateId= $_REQUEST["myid"];
            $mylevel =$_REQUEST["mylevel"];

            $subQuery=" and parent_id in (
            SELECT id FROM tbl_index
WHERE parent_id in (SELECT id FROM tbl_index
WHERE parent_id=$cateId ) and type=2 )" ;
            if($cateId==0){
                $subQuery="";
            }
            if($mylevel==1){
                $subQuery=" and parent_id in (
                    SELECT id FROM tbl_index
                        WHERE parent_id =$cateId  )" ;
            }

            ?></h4>
    </div>
    <div class="arrow-right"></div>
    <div class="clear"></div>
    <div class="col-md-12" style="background-color: #B8763A;height: 1px;"></div>
    <div class="clear1"></div>

</div>
<?php

// 0:sắp phát hành; 1: mới phát hành; 2: là bình thuờng
//SELECT * FROM tbl_book WHERE book_type=1 AND delete_logic_flg=0
//        good_book_flg
$queryNew ="SELECT * FROM tbl_book WHERE book_type=1 and active=1 AND delete_logic_flg=0 ".$subQuery;
$queryPrepare ="SELECT * FROM tbl_book WHERE book_type=0 and active=1 AND delete_logic_flg=0 ".$subQuery;
$queryGood ="SELECT * FROM tbl_book WHERE good_book_flg=1 and active=1 AND delete_logic_flg=0 ".$subQuery;

$dataNewBook = CommonDB::GetAll($queryNew,[]);
$dataPrepareBook = CommonDB::GetAll($queryPrepare,[]);
$dataGoodBook = CommonDB::GetAll($queryGood,[]);
?>

<script type="text/javascript" src="scroll/assets/73ff6cfc/jquery.slides.min.js"></script>
<script type="text/javascript" src="scroll/assets/73ff6cfc/main.min.js"></script>


<style>
* {
    margin:0;
    padding:0
}
ul, li {
    list-style:none
}
fieldset, img {
    border:0
}
.content-box {
    z-index:1
}
.content-box {
    width:825px;
    padding-bottom: 15px;

}
.floatRight {
    font-family:Arial, Helvetica, sans-serif;
}
div.container-box-book-preview {
    height:240px;
    background:url('/images/bg_layer_1.jpg') repeat-x top #eceeef;
    background-color: #f1f1f1;
}
.box {
    /*position:relative;*/
    /*border:1px solid #9BA1A5;*/
    /*-webkit-border-radius: 8px;*/
    /*-moz-border-radius: 8px;*/
    /*border-radius: 8px;*/
    /*margin:0 0 8px 0;*/
    /*padding: 5px 0;*/
    padding: 9px;
    background: url(../images/bg-slider.png);
    border-radius: 5px;
    box-shadow: 1px 1px 8px 1px #333;

}
.box .corner, .box .corner-featured, .box .corner-featured-typeWhite {
    position:absolute;
    width:8px;
    height:8px
}
.box .tl {
    top:-1px;
    left:-1px;
    background-position:top left!important
}
.box .tr {
    top:-1px;
    right:-1px;
    background-position:top right!important
}
.box .br {
    bottom:-1px;
    right:-1px;
    background-position:bottom right!important
}
.box .bl {
    bottom:-1px;
    left:-1px;
    background-position:bottom left!important
}
.box .w_tl {
    top:-1px;
    left:-1px;
    background-position:0 -16px!important
}
.box .w_tr {
    top:-1px;
    right:-1px;
    background-position:-8px -16px!important
}
.box .w_br {
    bottom:-1px;
    right:-1px;
    background-position:-8px -24px!important
}
.box .w_bl {
    bottom:-1px;
    left:-1px;
    background-position:0 -24px!important
}
.box .l {
    left:0;
    background-position:top left!important
}
.box .r {
    right:0;
    background-position:top right!important
}
div.container-box-book-preview .corner {
    background:url(http://www.ybook.vn/themes/newclassic/images/light-blue-container-preview.png) no-repeat
}
div.container-box-book-preview h3.title{
    font-size:16px;
    color:#4c575f;
    font-weight:normal;
    padding:0 18px 8px;
    /*	line-height:29px;*/
    /*	background:url(images/container-box-title-shadow.png) no-repeat bottom left*/
}
div.container-box-book-preview h3.title a {
    font-size:16px;
    color:#4c575f;
    font-weight:normal;
}
div.container-box-book-preview .preview-box {
    float:left;
    padding:7px 10px 0 18px;
    width:335px
}
div.container-box-book-preview .preview-box span {
    display:block;
    font-size:13px;
    padding:0 0 0 10px;
    line-height:18px;
    color:#444343
}
div.container-box-book-preview .preview-box span.preview {
    max-height:none;
    padding-bottom:0
}
div.container-box-book-preview .preview-box span.dots {
    line-height:1px;
    float:left
}
div.container-box-book-preview .preview-box .preview-img {
    float:left;
    width:100px;
    /*height: 150px;*/
    height: auto;
    /*position: absolute;*/
    bottom: 0;
}
div.container-box-book-preview .preview-box .preview-img-a {
    float:left;
    width:100px;
    /*height: 150px;*/
    height: auto;
    position: absolute;
    bottom: 0;
}
div.container-box-book-preview .preview-box .preview-img img {
    /*height:146px;*/
    padding:0 2px 4px;
    width:96px;
}
div.container-box-book-preview .preview-box .preview-text {
    float:left;
    width:215px;
    height:144px;
    overflow:hidden
}
div.container-box-book-preview .preview-box .book-title {
    font-weight:bold
}
div.container-box-book-preview .preview-box .author a {
    font-size:13px;
    color:#015279
}
div.container-box-book-preview .preview-box .author {
    font-size:13px;
    color:#015279
}
div.container-box-book-preview .preview-box div.slider {
    padding:0;
    height:160px
}
div.container-box-book-preview .preview-box div.slider ul li {
    width:545px
}
.slider ul {
    position:relative;
    list-style-type:none;
    z-index:1;
    width:10000px
}
.slider ul li {
    float:left
}
.slider .slider-item {
    cursor:pointer;
    position:relative;
    display:block;
    width:145px
}
.slider span {
    display:block;
    font-size:13px
}
.slider .slider-item img {
    /*position:absolute*/
}
.slider .slider-item div {
    position:relative;
    background:#fff
}
.slider .slider-item .link {
    line-height:20px;
    font-size:20px;
    display:block;
    color:#015279;
    font-weight:bold;
    margin:0 0 1px
}
.slider .preview {
    padding-left:23px;
    padding-right:23px;
    color:#444343;
    display:block;
    line-height:16px;
    overflow:hidden;
    max-height:32px
}
.slider .author {
    padding:0 23px;
    overflow:hidden;
    color:#444343;
    display:block;
    line-height:13px;
    max-height:32px
}
.slider .author a {
    color:#015279;
    text-decoration:none;
    font-size:13px;
    line-height:16px
}
.slider .price {
    padding:0 23px;
    color:#3a6d0f;
    display:block;
    line-height:13px;
    height:13px
}
.tab-box .slider .book-css3-shadow, .book-container-box .slider .slider-item .book-css3-shadow, .books-list .slider-item .book-css3-shadow, .two-column-box .right .img-link .book-css3-shadow, div.container-box-book-preview .preview-box .preview-img .book-css3-shadow, #results li.search-row .img .book-css3-shadow, .rightSide .adv .book-css3-shadow {
    /*    -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.9);
        -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.9);
        box-shadow:0 1px 4px rgba(0, 0, 0, 0.9);
        -webkit-box-shadow:0 8px 12px -8px rgba(0, 0, 0, 0.8), 0 1px 4px rgba(0, 0, 0, 0.6), 0 0 40px rgba(0, 0, 0, 0.4) inset;
        -moz-box-shadow:0 8px 12px -8px rgba(0, 0, 0, 0.8), 0 1px 4px rgba(0, 0, 0, 0.6), 0 0 40px rgba(0, 0, 0, 0.4) inset;
        box-shadow:0 8px 12px -8px rgba(0, 0, 0, 0.8), 0 1px 4px rgba(0, 0, 0, 0.6), 0 0 40px rgba(0, 0, 0, 0.4) inset*/

    -moz-box-shadow: 0px 3px 3px 0px #5f5f5f,0px 3px 8px #ababab;
    -webkit-box-shadow: 0px 3px 3px 0px #5f5f5f,0px 3px 8px #ababab;
    box-shadow: 0px 3px 3px 0px #5f5f5f,0px 3px 8px #ababab;
}
.more-box li .img .book-css3-shadow, .book-shadow .book-css3-shadow {
    /*    -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.9);
        -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.9);
        box-shadow:0 1px 4px rgba(0, 0, 0, 0.9);
        -webkit-box-shadow:0 6px 8px -6px rgba(0, 0, 0, 0.8), 0 1px 4px rgba(0, 0, 0, 0.6), 0 0 20px rgba(0, 0, 0, 0.4) inset;
        -moz-box-shadow:0 6px 8px -6px rgba(0, 0, 0, 0.8), 0 1px 4px rgba(0, 0, 0, 0.6), 0 0 20px rgba(0, 0, 0, 0.4) inset;
        box-shadow:0 6px 8px -6px rgba(0, 0, 0, 0.8), 0 1px 4px rgba(0, 0, 0, 0.6), 0 0 20px rgba(0, 0, 0, 0.4) inset*/

    -moz-box-shadow: 0px 3px 3px 0px #5f5f5f,0px 3px 8px #ababab;
    -webkit-box-shadow: 0px 3px 3px 0px #5f5f5f,0px 3px 8px #ababab;
    box-shadow: 0px 3px 3px 0px #5f5f5f,0px 3px 8px #ababab;
}

.book-shadow {
    background:url(http://i1.ebkimg.com/images/book_shadow.png) no-repeat left bottom
}
div.container-box-book-preview .preview-box .preview-img img {
    padding:0
}
div.container-box-book-preview .preview-box .preview-img {
    /*padding:0 0 9px 4px;*/
    margin-bottom: 2px;
}
.slider {
    position:relative;
    padding:0 29px;
    overflow:hidden
}
.slider-box {
    position:relative;
    overflow:hidden;
    margin-top:21px;
}
div.slider-box div.slider {
    padding:0 40px;
    background:url(http://www.ybook.vn/themes/newclassic/images/slider-box-bg.png);
    height:125px
}
/*div.slider-box div.slider .slider-item a.book-picture-shadow-ff-sf{*/
/*background:url(../images/slider-item-sm-new.png) no-repeat left bottom;*/
/*}*/

/*div.slider-box div.slider .slider-item a.book-picture-shadow{*/
/*background:url(../images/slider-item-sm-new.png) no-repeat left bottom;*/
/*}*/
/*div.slider-box div.slider .slider-item a {*/
/*display:block;*/
/*width:75px;*/
/*height:105px;*/
/*    margin-left:6px;*/
/*margin-top:7px*/
/*position: absolute;*/
/*bottom: 0;*/
/*left: 4px;*/
/*}*/
.slider-button {
    cursor:pointer;
    z-index:3;
    position:absolute;
    display:block;
    width:21px;
    height:21px;
    background:url(http://www.ybook.vn/themes/newclassic/images/slider-arrow1.png) no-repeat
}
.slider-button-left {
    left:8px;
    top:50%;
    margin-top:-10px;
    background-position:left top;
    z-index: 1;
}
.slider-button-right {
    right:8px;
    top:50%;
    margin-top:-10px;
    background-position:right top
}
.book-container-box .slider-item {
    height:175px
}
.book-container-box .slider .slider-item img {
    /*    top:14px;
        left:26px;
        height:146px;*/
    width:96px
}
.book-container-box li {
    height:auto;
    float:left;
    background:0;
    width:145px;
    display:block;
    position: relative;
}
.book-container-box li img.watermark{
    width: 55px !important;
    height: 55px !important;
    position: absolute;
    /*top: 95px;*/
    bottom:0;
    right: 45px;
    box-shadow: none !important;
}
.book-container-box li img.ratingmark{
    width: 43px !important;
    height: 39px !important;
    position: absolute;
    top: -6px;
    right: -5px;
    box-shadow: none !important;
}
.book-container-box li span.ratingmark-span{
    width: 43px !important;
    text-align: center;
    font-size: 12px;
    font-weight: bolder;
    color: #FFF;
    position: absolute;
    top: 2px;
    left: 53px;
}
.book-container-box li .cmtmark-all{
    position: absolute;
    bottom: -9px;
    right: -2px;
    display: block !important;
}
.book-container-box li .cmtmark-all .cmtmark-left{
    background: url(http://www.ybook.vn/themes/newclassic/images/cmtmark-left.png) no-repeat;
    width: 8px; height: 19px;
    float: left;
}
.book-container-box li .cmtmark-all .cmtmark-loop{
    background: url(http://www.ybook.vn/themes/newclassic/images/cmtmark-loop.png) repeat-x;
    height: 19px;
    float: left;
}
.book-container-box li .cmtmark-all .cmtmark-right{
    background: url(http://www.ybook.vn/themes/newclassic/images/cmtmark-right.png) no-repeat;
    width: 8px; height: 19px;
    float: left;
}
/*.book-container-box li img.cmtmark{
    width: 27px !important;
    height: 19px !important;
    position: absolute;
    bottom: 10px;
    right: 240px;
} */
.book-container-box li span.cmtmark-span{
    /*width: 27px !important;*/
    text-align: center;
    font-size: 11px;
    font-weight: bolder;
    color: #354E75;
    padding: 0;
    /*    position: absolute;
        bottom: 11px;
        left: 68px;*/
}
div.container-box-book-preview .slider .slider-item img.discountmark-mini {
    position: absolute;
    left: 42px;
    top: -5px;
    width: 32px !important;
    height: 30px !important;
    box-shadow: none !important;
}

div.container-box-book-preview .slider .slider-item span.discountmark-mini-span{
    width: 30px !important;
    text-align: center;
    font-size: 9px;
    font-weight: bolder;
    color: #FFF;
    position: absolute;
    top: 4px;
    left: 44px;
}
div.container-box-book-preview .slider .slider-item img.cmtmark-mini{
    /*position: absolute;*/
    width: 20px !important;
    height: 13px !important;
    /*top: 104px;*/
    /*left: 62px;*/
}
div.container-box-book-preview .slider .slider-item span.cmtmark-mini-span{
    width: 20px !important;
    text-align: center;
    font-size: 9px;
    font-weight: bolder;
    color: #354E75;
    position: absolute;
    top: 105px;
    left: 61px;
}

.book-container-box li.slider-item img.watermark{
    width: 38px !important;
    height: 38px !important;
    position: absolute;
    /*top: 91px;*/
    /*right: 286px;*/
}
div.container-box-book-preview .slider-item {
    width:84px;
}
div.container-box-book-preview .slider .slider-item img {
    /*    left:4px;
        top:4px;
        height:101px;*/
    width:67px;
    box-shadow: 0 3px 3px 0 #5F5F5F, 0 3px 8px #ABABAB;
}

div.container-box-book-preview .slider .slider-item img.watermark {
    position: absolute;
    left: 0;
    bottom:0;
    /*top: 67px;*/
    box-shadow: none !important;
}

div.container-box-book-preview .slider-box .corner {
    background:url(http://www.ybook.vn/themes/newclassic/images/slider-box-bg-corner.png) no-repeat scroll 0 0 transparent;
    height:100%;
    width:3px
}
div.container-box-book-preview .preview-box a.preview-img.book-picture-shadow-ff-sf {
    /*background:url(../images/preview-img-new.png) no-repeat left bottom;*/
}
div.container-box-book-preview .preview-box .preview-img img {
    display:block;
    box-shadow: 0 3px 3px 0 #5F5F5F, 0 3px 8px #ABABAB;
}
div.container-box-book-preview .preview-box a.preview-img.book-picture-shadow {
    /*background:url(../images/preview-img-new2.png) no-repeat left bottom*/
}
.Border-BottomH3 {
    background: url(/images/line_shadow.png) no-repeat scroll 40% 100% transparent;
    clear: both;
    height: 11px;
    margin: 0 auto;

}
.sliderNewYorkTimes{
    left: 34px !important;
    width:410px !important;
}
.slider-shadow {
    background: transparent url("scroll/images/shadow.png") no-repeat scroll center bottom;

    width: 100%;
    margin-bottom: -20px;
}
</style>

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10" />


<div class="content-box" style="float: right;">
    <div class="book-container-box container-box-book-preview box clearfix">
        <div class="arrow-home" style="margin-left: 5px">
            <h4>Sách mới đưa vào thư viện</h4>
        </div>
        <div class="arrow-slide-right">(Có <?php echo count($dataNewBook) ?> quyển sách)</div>
        <div class="clear"></div>
        <div class="Border-BottomH3"></div>
        <div class="preview-box clearfix">
            <div class="slider clearfix slider-init slider-init-1" id="sliderNewYorkTimesPreview">
                <ul>
                    <?php foreach($dataNewBook as $value):?>
                        <li>
                            <div id="img-block">
                                <a target="_blank" href="/chi-tiet/<?php echo $value["id"]?>"  class="preview-img">
                                    <div class="main-imgintro">
                                        <img alt="<?php echo $value["book_name"]?>" WIDTH="96" height="144" src="<?php echo PATH_IMAGE.$value["bookimage_link"] ?>" class="img-hover-action book-css3-shadow" />

                                    </div>

                                </a>
                            </div>
                            <div class="preview-text">
                                <span class="book-title"> <a target="_blank" href="/chi-tiet/<?php echo $value["id"]?>" > <?php echo $value["book_name"]?></a></span> <span class="author"><?php echo $value["author"]?></span> <span class="preview">
                    <?php echo $value["introduction"]?>
                </span>
                            </div>
                            <span class="dots">...</span>

                        </li>
                    <?php endforeach?>
                </ul>
            </div>
        </div>
        <div class="slider-box">
            <a class="slider-button slider-button-left" id="sliderNewYorkTimes_bl"></a> <a class="slider-button slider-button-right" id="sliderNewYorkTimes_br"></a>
            <div class="slider clearfix  slider-hover-action slider-init slider-init-1 sliderNewYorkTimes" id="sliderNewYorkTimes" >
                <ul>
                    <?php foreach($dataNewBook as $value):?>
                        <li class="slider-item">
                            <div id="img-block">
                                <a class="book-picture-shadow" target="_blank" href="/chi-tiet/<?php echo $value["id"]?>" >
                                    <div class="imgintro">
                                        <img alt="<?php echo $value["book_name"]?>" WIDTH="67" height="100" src="<?php echo PATH_IMAGE.$value["bookimage_link"] ?>" class="img-hover-action book-css3-shadow" />
                                    </div>

                                </a>
                            </div>
                        </li>
                    <?php endforeach?>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="clear1"></div>
<div class="content-box" style="float: right;">
    <div class="book-container-box container-box-book-preview box clearfix">
        <div class="arrow-home" style="margin-left: 5px">
            <h4>Sách sắp đưa vào thư viện</h4>
        </div>
        <div class="arrow-slide-right">(Có <?php echo count($dataPrepareBook) ?> quyển sách)</div>
        <div class="clear"></div>
        <div class="Border-BottomH3"></div>
        <div class="preview-box clearfix">
            <div class="slider clearfix slider-init slider-init-1" id="sliderNewYorkTimesPreview">
                <ul>
                    <?php foreach($dataPrepareBook as $value):?>
                        <li>
                            <div id="img-block">
                                <a target="_blank" href="/chi-tiet/<?php echo $value["id"]?>"  class="preview-img">
                                    <div class="main-imgintro">
                                        <img alt="<?php echo $value["book_name"]?>" WIDTH="96" height="144" src="<?php echo PATH_IMAGE.$value["bookimage_link"] ?>" class="img-hover-action book-css3-shadow" />

                                    </div>

                                </a>
                            </div>
                            <div class="preview-text">
                                <span class="book-title"> <a target="_blank" href="/chi-tiet/<?php echo $value["id"]?>" > <?php echo $value["book_name"]?></a></span> <span class="author"><?php echo $value["author"]?></span> <span class="preview">
                    <?php echo $value["introduction"]?>
                </span>
                            </div>
                            <span class="dots">...</span>

                        </li>
                    <?php endforeach?>
                </ul>
            </div>
        </div>
        <div class="slider-box">
            <a class="slider-button slider-button-left" id="sliderNewYorkTimes_bl"></a> <a class="slider-button slider-button-right" id="sliderNewYorkTimes_br"></a>
            <div class="slider clearfix  slider-hover-action slider-init slider-init-1 sliderNewYorkTimes" id="sliderNewYorkTimes" >
                <ul>
                    <?php foreach($dataPrepareBook as $value):?>
                        <li class="slider-item">
                            <div id="img-block">
                                <a class="book-picture-shadow" target="_blank" href="/chi-tiet/<?php echo $value["id"]?>" >
                                    <div class="imgintro">
                                        <img alt="<?php echo $value["book_name"]?>" WIDTH="67" height="100" src="<?php echo PATH_IMAGE.$value["bookimage_link"] ?>" class="img-hover-action book-css3-shadow" />
                                    </div>

                                </a>
                            </div>
                        </li>
                    <?php endforeach?>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="clear1"></div>

<div class="content-box" style="float: right;">
    <div class="book-container-box container-box-book-preview box clearfix">
        <div class="arrow-home" style="margin-left: 5px">
            <h4>Sách hay nên đọc</h4>
        </div>
        <div class="arrow-slide-right">(Có <?php echo count($dataGoodBook) ?> quyển sách)</div>
        <div class="clear"></div>
        <div class="Border-BottomH3"></div>
        <div class="preview-box clearfix">
            <div class="slider clearfix slider-init slider-init-1" id="sliderNewYorkTimesPreview">
                <ul>
                    <?php foreach($dataGoodBook as $value):?>
                        <li>
                            <div id="img-block">
                                <a target="_blank" href="/chi-tiet/<?php echo $value["id"]?>"  class="preview-img">
                                    <div class="main-imgintro">
                                        <img alt="<?php echo $value["book_name"]?>" WIDTH="96" height="144" src="<?php echo PATH_IMAGE.$value["bookimage_link"] ?>" class="img-hover-action book-css3-shadow" />

                                    </div>

                                </a>
                            </div>
                            <div class="preview-text">
                                <span class="book-title"> <a target="_blank" href="/chi-tiet/<?php echo $value["id"]?>" > <?php echo $value["book_name"]?></a></span> <span class="author"><?php echo $value["author"]?></span> <span class="preview">
                    <?php echo $value["introduction"]?>
                </span>
                            </div>
                            <span class="dots">...</span>

                        </li>
                    <?php endforeach?>
                </ul>
            </div>
        </div>
        <div class="slider-box">
            <a class="slider-button slider-button-left" id="sliderNewYorkTimes_bl"></a> <a class="slider-button slider-button-right" id="sliderNewYorkTimes_br"></a>
            <div class="slider clearfix  slider-hover-action slider-init slider-init-1 sliderNewYorkTimes" id="sliderNewYorkTimes" >
                <ul>
                    <?php foreach($dataGoodBook as $value):?>
                        <li class="slider-item">
                            <div id="img-block">
                                <a class="book-picture-shadow" target="_blank" href="/chi-tiet/<?php echo $value["id"]?>" >
                                    <div class="imgintro">
                                        <img alt="<?php echo $value["book_name"]?>" WIDTH="67" height="100" src="<?php echo PATH_IMAGE.$value["bookimage_link"] ?>" class="img-hover-action book-css3-shadow" />
                                    </div>

                                </a>
                            </div>
                        </li>
                    <?php endforeach?>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="clear1"></div>

<script type="text/javascript">
    /*<![CDATA[*/
    (function() {
        var readyFunc = function() {
            if (window.ready) {
                window.ready();
            }
            else
                setTimeout(readyFunc, 10);
        };
        readyFunc();
    })();
    (function() {
        var readyFunc = function() {
            if (window.ready) {
                window.ready();
            }
            else
                setTimeout(readyFunc, 10);
        };
        readyFunc();
    })();
    $(document).ready(function(){

    });
    //    jQuery(function($) {
    //        jQuery('#bookTab').tabs({'cache':true,'select':function(event, ui){var $panel = $(ui.panel); if($panel.is(":empty")){$("#ajax-loading").removeClass("hidden");}},'load':function(){$("#ajax-loading").addClass("hidden"); $(".tooltip").hide(); $(".atooltip[title]").tooltip({position: ['center', 'right']});}});
    //        jQuery('#ebookTab').tabs({'cache':true,'select':function(event, ui){var $panel = $(ui.panel); if($panel.is(":empty")){$("#ajax-loading").removeClass("hidden");}},'load':function(){$("#ajax-loading").addClass("hidden"); $(".tooltip").hide(); $(".atooltip[title]").tooltip({position: ['center', 'right']});}});
    //
    //        $("#menu li .deadline, #menu li .deadline-span").hover(
    //            function() {
    //                var temp1 = $(this).parent().find("a");
    //                temp1.addClass("menu-recuitment-hover");
    //            },
    //            function () {
    //                var temp2 = $(this).parent().find("a");
    //                temp2.removeClass("menu-recuitment-hover");
    //            }
    //        );
    //
    //
    //    });
    /*]]>*/
</script>
