<?php

// 0:sắp phát hành; 1: mới phát hành; 2: là bình thuờng
//SELECT * FROM tbl_book WHERE book_type=1 AND delete_logic_flg=0
//        good_book_flg
$dataNewBook = CommonDB::GetAll("SELECT * FROM tbl_book WHERE book_type=1 AND delete_logic_flg=0",[]);
$dataPrepareBook = CommonDB::GetAll("SELECT * FROM tbl_book WHERE book_type=0 AND delete_logic_flg=0",[]);
$dataGoodBook = CommonDB::GetAll("SELECT * FROM tbl_book WHERE good_book_flg=1 AND delete_logic_flg=0",[]);
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
    width:1010px;
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
    position:relative;
    border:1px solid #9BA1A5;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
    /*margin:0 0 8px 0;*/
    padding: 5px 0;

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
    background: url(http://www.ybook.vn/themes/newclassic/images/shadows.png) no-repeat scroll 80% 100% transparent;
    clear: both;
    height: 11px;
    margin: 0 auto;
    width: 751px;
}
#sliderNewYorkTimes{
    left: 34px !important;
    width: 600px !important;
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
                <a href="<?php echo $value["id"]?>" class="preview-img">
                    <div class="main-imgintro">
                        <img alt="Cung bậc tình yêu" src="scroll/uploads/books/img-6599-1429254522.jpg" class="img-hover-action book-css3-shadow" />

                    </div>

                </a>
            </div>
            <div class="preview-text">
                <span class="book-title"><?php echo $value["book_name"]?></span> <span class="author"><?php echo $value["author"]?></span> <span class="preview">
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
<div class="slider clearfix  slider-hover-action slider-init slider-init-1" id="sliderNewYorkTimes" >
    <ul>
        <?php foreach($dataNewBook as $value):?>
        <li class="slider-item">
            <div id="img-block">
                <a class="book-picture-shadow" href="goi-sach-in/6595/nhung-y-tuong-kinh-doanh-tuyet-hay.html">
                    <div class="imgintro">
                        <img alt="<?php echo $value["book_name"]?>" src="scroll/uploads/books/img-6595-1429253696.jpg" class="img-hover-action book-css3-shadow" />
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





<div class="content-box" style="float: right;">
<div class="book-container-box container-box-book-preview box clearfix">
<div class="arrow-home" style="margin-left: 5px">
    <h4>Sách mới đưa vào thư viện</h4>
</div>
<div class="arrow-slide-right">(Có 30 quyển sách)</div>
<div class="clear"></div>
<div class="Border-BottomH3"></div>
<div class="preview-box clearfix">
<div class="slider clearfix slider-init slider-init-1" id="sliderNewYorkTimesPreview">
<ul>
<li>
    <div id="img-block">
        <a href="goi-sach-in/6599/cung-bac-tinh-yeu.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Cung bậc tình yêu" src="scroll/uploads/books/img-6599-1429254522.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Cung bậc tình yêu</span> <span class="author">Sylvia Day</span> <span class="preview">Bộ tiểu thuyết CROSSFIRE gồm 3 tập: CHẠM MỞ - SOI CHIẾU - HÒA QUYỆN, thuộc thể loại tiểu thuyết tình cảm dành cho người trưởng thành.
Nhân vật chính là Gideon Cross, người đàn ông đẹp trai, giàu có, quyền lực bậc nhất New York, và Eva Tramell, cô tiểu thư tóc vàng xinh đẹp, thông minh, con nhà dòng dõi.
Hai con người tưởng chừng như hoàn hảo ấy lại có một quá khứ đau đớn vì bị lạm dụng tình dục từ chính những người gần gũi. Họ đã phải trải qua nhiều thử thách để dần dà hiểu biết tâm hồn nhau để rồi đi đến một kết thúc viên mãn.</span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/6595/nhung-y-tuong-kinh-doanh-tuyet-hay.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Những ý tưởng kinh doanh tuyệt hay" src="scroll/uploads/books/img-6595-1429253696.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Những ý tưởng kinh doanh tuyệt...</span> <span class="author">Nhiều tác giả</span> <span class="preview">Bạn muốn bước vào lĩnh vực kinh doanh? Việc kinh doanh đang gặp khó khăn? Hay muốn phát triển theo hướng mới? Điều đầu tiên bạn cần làm là hãy đến với gói sách "Những ý tưởng tuyệt hay" gồm 5 cuốn sách: 100 ý tưởng kinh doanh tuyệt hay, 100 ý tưởng tiếp thị tuyệt hay, 100 ý tưởng viết quảng cáo tuyệt hay, 100 ý tưởng PR tuyệt hay và 100 ý tưởng bán hàng tuyệt hay. Ý tưởng được chắt lọc từ các công ty hàng đầu trên thế giới để đúc kết thành những bài học, những kinh nghiệm quý báu truyền đạt cho bạn đọc. Có ý tưởng dựa trên sự nghiên cứu khoa học, cũng có ý tưởng đơn giản đến kinh ngạc, nhưng tất cả đều rất thú vị và kích thích suy nghĩ.
Nếu bạn chưa có kinh nghiệm, gói sách sẽ cung cấp cho bạn những ý tưởng nền tảng. Nếu là một chuyên gia giàu kinh nghiệm, bộ sách sẽ mang đến vài ý tưởng mà bạn chưa mường tượng đến. Gói sách chính là một tiền đề để khơi dậy niềm cảm hứng sáng tạo mới mẻ cho công việc kinh doanh của bạn. Có "ý tưởng", có thành công.</span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/6591/lanh-dao-theo-cach-jim-collins.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Lãnh đạo theo cách Jim Collins" src="scroll/uploads/books/img-6591-1429255436.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Lãnh đạo theo cách Jim Collins</span> <span class="author">Jim Collins</span> <span class="preview">Jim Collins là tác giả của những đầu sách nổi tiếng - Từ tốt đến vĩ đại, Xây dựng để trường tồn và Vĩ đại do lựa chọn. Bộ sách phù hợp cho những người yêu thích tìm hiểu về kinh doanh, đặc biệt là những người đang trong cương vị lãnh đạo.
Với những hướng dẫn thực tế, tác giả Jim Collins sẽ đưa bạn đến những quan niệm mới, hướng phát triển mới, đập tan những huyền thoại và suy nghĩ sai lầm, giúp bạn - những người mong muốn đưa công ty lên một tầm nhìn mới, vĩ đại và trường tồn theo thời gian.</span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/6592/doi-thoai-voi-nguoi-khong-lo-chau-a.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Đối thoại với người khổng lồ Châu Á" src="scroll/uploads/books/img-6592-1429088811.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Đối thoại với người khổng lồ...</span> <span class="author">Tom Plate</span> <span class="preview">Bộ sách dựa trên những cuộc trò chuyện của nhà báo người Mỹ Tom Plate với các chính trị gia nổi tiếng trên thế giới, như Lý Quang Diệu, Thaksin, Ban Ki-Moon, Mohamad. Tập sách còn mô tả về cuộc sống, con người của cách chính khách; liên tưởng đến những hình ảnh tương đồng hay những gì đã qua trong quá khứ; thông qua gia đình để nhìn thấu một con người với đầy đủ quan điểm và cảm xúc của người viết.</span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/6594/nhung-nguoi-ban.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Những người bạn" src="scroll/uploads/books/img-6594-1429255266.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Những người bạn</span> <span class="author">Nguyễn Nhật Ánh</span> <span class="preview">Với bộ sách Những người bạn, đọc giả yêu thích chú Nguyễn Nhật Ánh sẽ tìm thấy những tình bạn rất "đặc biệt", như giữa hai loài vốn là thù địch của nhau: bạn mèo Gấu và chuột Tí hon (Có hai con mèo ngồi bên cửa sổ), là tình bạn của hai chú heo con dễ thương Lọ Nồi thông minh và Đeo Nơ xinh đẹp (Chúc một ngày tốt lành), và tất nhiên không thể không nói đến mối tình trong veo của cô bé Rùa và chàng sinh viên ở quê lên thành phố trọ học (Ngồi khóc trên cây). Tất cả các cung bậc trong một thứ cảm xúc rưng rưng của tình yêu thương sẽ được tái hiện qua 3 tập sách nằm trong bộ Những người bạn.</span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/2189/ky-nang-mem-cho-nguoi-di-lam.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Kỹ năng mềm cho người đi làm" src="scroll/uploads/books/img-2189-1369704807.jpg" class="img-hover-action book-css3-shadow"/>
                <div class="cmtmark-all"><div class="cmtmark-left"></div><div class="cmtmark-loop"><span class="cmtmark-span">&nbsp1&nbsp</span></div><div class="cmtmark-right"></div></div>
            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Kỹ năng mềm cho người đi làm</span> <span class="author">Nhiều tác giả</span> <span class="preview">Bộ sách Kỹ năng mềm cho người đi làm sẽ cung cấp cho bạn những bí quyết xử thế nơi công sở; tạo ấn tượng, thuyết phục và thành công bằng ngôn ngữ cơ thể hay các bước xây dựng tương lai trong kỷ nguyên số.
Bộ sách gồm 3 tựa sách:
Phép xã giao trong công việc: Bất luận bạn thấy mình đang trong hoàn cảnh nào, Phép xã giao trong công việc sẽ cho bạn sự tự tin để đương đầu với những thách thức trong thế giới đi làm một cách đường hoàng, đĩnh đạc - vì ngày nay, hơn bao giờ hết, xử thế tốt là làm ăn tốt.
Ngôn ngữ cơ thể thông minh: Chỉ cho bạn biết cách hiểu được những phức tạp của ngôn ngữ cơ thể và làm thế nào để tối đa hóa kỹ năng giao tiếp cá nhân trong tất cả các mối quan hệ của bạn - trong cuộc sống và trong công việc.
Thương hiệu cá nhân tôi 2.0: Trong một nền kinh tế đang thay đổi hơn bao giờ hết, cách chúng ta quản lý sự nghiệp của mình cũng thay đổi vĩnh viễn. Và trong một thị trường công việc đang biến động, tài sản duy nhất lớn nhất có sẵn cho bạn tùy nghi sử dụng - chính là bạn!</span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/2482/nguoc-dong-au-tho.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Ngược dòng ấu thơ" src="scroll/uploads/books/img-2482-1369704962.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Ngược dòng ấu thơ</span> <span class="author">Nhiều tác giả</span> <span class="preview">Gói sách giới thiệu những tác phẩm chọn lọc dành cho thiếu nhi nằm trong Tuyển truyện đoạt giải văn học thiếu nhi của Hội nhà văn Việt Nam.</span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/2175/moi-ngay-mot-cau-chuyen.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Mỗi ngày một câu chuyện" src="scroll/uploads/books/img-2175-1371604982.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Mỗi ngày một câu chuyện</span> <span class="author">Nhiều tác giả</span> <span class="preview">Mỗi ngày một câu chuyện là một tuyển tập 365 câu chuyện tự cổ chí kim được tuyển chọn dựa trên nhiều tiêu chí nhằm giúp nâng cao nhận thức và sự hiểu biết dành cho các em thiếu nhi. Bộ sách gồm 12 tập ứng với 12 tháng trong năm. Mỗi câu chuyện trong 12 tập sách đều được các tác giả người Canada tuyển chọn kỹ lưỡng với các chủ đề thích hợp, gần gũi với các em thiếu nhi. Qua những câu chuyện ngắn ngọn, sâu sắc gợi lên những điều khiến trẻ phải suy ngẫm nhằm kích thích tư duy và khả năng tìm hiểu, khám phá ở các em mỗi ngày.
Mỗi ngày một câu chuyện hi vọng sẽ là bộ sách gối đầu cho mỗi gia đình có con nhỏ bởi sức hấp dẫn của các giá trị trong từng câu chuyện mang lại.</span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/2397/vung-buoc-den-thanh-cong.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Vững bước đến thành công" src="scroll/uploads/books/img-2397-1363326780.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Vững bước đến thành công</span> <span class="author">Nhiều tác giả</span> <span class="preview">Gói sách cung cấp cho bạn những thông tin cần thiết, những kinh nghiệm quý báu để bạn có thể vững bước đi đến thành công trong công việc cũng như trong cuộc sống.
Dốc hết trái tim: Thành công của Công ty Cà phê Starbucks là một trong những câu chuyện kỳ diệu nhất về kinh doanh trong suốt nhiều thập kỷ. Một cửa hàng nhỏ ven sông ở Seattle rốt cuộc lại lớn mạnh và phát triển nên hơn một ngàn sáu trăm cửa hàng trên khắp thế giới và mỗi ngày lại có thêm một cửa hàng mới mọc lên. Tuyệt vời hơn cả, Starbucks đã thành công trong việc giữ vững cam kết về chất lượng sản phẩm ưu việt và mang lại những gì tốt đẹp nhất cho nhân viên của mình.
Đừng bao giờ đi ăn một mình: Xuyên suốt quyển sách, Ferrazzi trình bày những chiến lược đã được kiểm chứng theo thời gian, và từng được thể hiện qua nhiều người nổi tiếng về thiết lập mối quan hệ trên thế giới như Katharine Graham, Bill Clinton, Vernon Jordan hay Dalai Lama. Đừng bao giờ đi ăn một mình chứa nhiều lời khuyên cụ thể về cách xử trí khi bị từ chối, cách vượt qua người giữ cửa, cách trở thành một "Vị tướng cuộc họp", và còn nhiều nữa. Đừng bao giờ đi ăn một mình chắc chắn sẽ cùng với quyển Đắc nhân tâm được trân trọng như những tác phẩm kinh điển.</span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/2126/duong-thuy.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Dương Thụy" src="scroll/uploads/books/img-2126-1370915375.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Dương Thụy</span> <span class="author">Dương Thụy</span> <span class="preview">Với mô tuýp "gái Việt - trai Tây", ba câu chuyện hay nhất không thể bỏ qua của tác giả Dương Thụy sẽ đưa bạn đọc đến với cuộc sống du học sinh Việt Nam ở xứ người với nhiều khó khăn nhưng vẫn ẩn giấu hương vị tình yêu đầy thơ mộng và lãng mạn song không kém phần kịch tính.
Oxford thương yêu: Truyện dài lấy bối cảnh tại trường đại học Oxford - Anh xoay quanh mối tình của cô sinh viên Việt Nam và người trợ giảng Bồ Đào Nha, với một kết thúc có hậu. Oxford thương yêu lôi cuốn người đọc bằng những đoạn tả cảnh thiên nhiên tuyệt đẹp, những quan niệm sống cởi mở và hướng thiện của một lớp thanh niên trưởng thành trong giai đoạn đất nước được đổi mới. Ở nhiều đoạn, tác phẩm được khắc họa như một bức tranh lung linh màu sắc và sống động hiện thực.
Cung đường vàng nắng: Giống nhiều người trẻ hiện thời, Vy - cô gái trong truyện có những suy tư rất "hiện đại" về những sự lựa chọn trong cuộc sống. Tuy nhiên cô vấp phải rào cản nhất định từ các định kiến đã ăn sâu vào tiềm thức của gia đình, dân tộc. Khi đi bằng con đường của mình tạo ra, Vy đã tranh đấu với bản thân và có những trải nghiệm mới lạ về nhận thức và cả tình yêu với chàng Jean "khù khờ", hoàng tử trong mơ của cô, ở nước Bỉ xa lạ, nơi cô du học bằng tiền vay mượn. Một câu chuyện ý nhị, dí dỏm và ngọt ngào. Trên hết, đó là câu chuyện gợi mở của số đông những bạn trẻ đang muốn hiện thực hóa giấc mơ du học trời Tây.
Nhắm mắt thấy Paris: Tiểu thuyết Nhắm mắt thấy Paris của nhà văn Dương Thụy là "một thiên tình ái" vừa lãng đãng mơ màng với những nhân vật đẹp như trong mộng, vừa mang hơi thở rạo rực của cuộc sống đô thị hiện đại. Độc giả sẽ được du ngoạn qua nhiều thành phố châu Á và châu Âu, mà tâm điểm sẽ là một " Paris của rạng đông" đầy đủ các cung bậc cảm xúc.</span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/2186/trong-tham-sau-cua-bi-an.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Trong thẳm sâu của bí ẩn" src="scroll/uploads/books/img-2186-1369705125.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Trong thẳm sâu của bí ẩn</span> <span class="author">Nguyễn Thị Kim Anh</span> <span class="preview">
Những bí ẩn muôn đời của nhân loại.Các hiện tượng kỳ bí mãi mãi không có lời giải đáp.Đâu là sự thật, đâu là huyền thoại?

Mời bạn đến với gói sách Trong thẳm sâu của bí ẩn, gồm 5 tập.
Trong thẳm sâu của bí ẩn 01: đưa người đọc đến những tầng sâu thẳm nhất của nỗi sợ hãi và hoài vọng nơi con người. Bạn sẽ được tiếp cận không chỉ những thông tin mới nhất mà sẽ còn bị hút vào lối dẫn chuyện có tiết tấu nhanh cùng hình ảnh minh họa sinh động.
Trong thẳm sâu của bí ẩn 02:  thuật lại những bí ẩn lớn của các dân tộc, ngôn ngữ và các nền văn hóa, những câu chuyện kỳ bí trong suốt lịch sử loài người, vén màn bí mật nhiều điều mà sử sách đã bỏ qua.
Trong thẳm sâu của bí ẩn 03: đưa bạn đến với đề tài hấp dẫn, kỳ bí, vừa như hoang đường, vừa lại là sự thật, mà cho đến nay vẫn chưa có lời giải đáp: giữa huyền thoại và khoa học, những công trình xây dựng bí ẩn, bí ẩn chốn cung đình...
Trong thẳm sâu của bí ẩn 04: đưa bạn đọc đến những câu chuyện, những bí mật được che đậy trong bóng đêm lịch sử: Người băng Ötzi là phù thủy đi xuyên thời gian? Hitler phải chăng bị các hội kín chi phối? Napoléon bị đầu độc bằng thạch tín? Mỏ vàng của vua Solomon ở đâu?
Trong thẳm sâu của bí ẩn 05: Nữ đồng ngồi trên một chiếc ghế ba chân đặt sâu trong chính điện. Tại đây, bà được cho hít một hương thiêng bốc lên từ một khe nứt trên mặt đất, sau đó bà lên đồng và trở thành "tiếng nói của thần Apollo". Bà la hét, rên rỉ và thốt lên những lời mà chẳng ai hiểu. Một linh mục sẽ dịch lại những gì bà nói cho khách đến nghe sấm...</span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/2188/song-co-gia-tri.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Sống có giá trị" src="scroll/uploads/books/img-2188-1369705088.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Sống có giá trị</span> <span class="author">Nhiều tác giả</span> <span class="preview">Nhằm giúp các bậc cha mẹ hiểu và giúp con cái phát triển tốt hơn, những người làm giáo dục có thể nâng cao khả năng nắm bắt tâm lý và truyền đạt kiến thức tới học trò một cách hiệu quả hơn, gói sách Sống có giá trị sẽ cung cấp cho bạn đọc những kiến thức độc đáo và hữu dụng nhất qua 14 bài học được thực hiện trong 28 ngày.
Đó là các bài học về ý chí, kỹ năng được phân tích theo góc nhìn khoa học, đó là những phút lắng lòng để hiểu hơn giá trị thiêng liêng của gia đình, hay đơn giản là những dòng hồi ký của một người từng trải qua lá thư viết vội...
Với kinh nghiệm của một đơn vị đi đầu trong lĩnh vực huấn luyện kỹ năng thực hàng xã hội Trung tâm đào tạo ATY đã đưa vào bộ sách những thủ pháp và cách thức trình bày khác nhau để mỗi người đọc đều có thể cảm nhận được giá trị nhân văn trong từng nội dung bài học.</span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/6593/bi-quyet-lam-it-duoc-nhieu.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Bí quyết làm ít được nhiều" src="scroll/uploads/books/img-6593-1429255566.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Bí quyết làm ít được nhiều</span> <span class="author">Richard Koch </span> <span class="preview">Bạn có biết:
80% lượng của cải của một xã hội vào tay 20% số người trong xã hội đó.
20% khách hàng đem về 80% giá trị doanh số.
Nếu biết cách áp dụng nguyên lý này vào cuộc sống, bạn sẽ có khả năng đạt được hiệu suất và kết quả cao hơn nhiều với một lượng công sức, thời gian và nguồn lực rất nhỏ. Hãy cùng tìm hiểu nguyên lý này qua bộ 3 cuốn sách của Richard Koch.
Quyển sách Nguyên lý 80/20: Bí quyết làm ít được nhiều cho chúng ta thấy những phương cách khác thường mà thế giới này vận hành, từ đó giúp bạn chủ động kiểm soát được đời sống chính mình.
Con Người 80/20: Chín yếu tố cốt lõi của thành công đặc biệt dành riêng cho các doanh nhân và những nhà quản trị sáng tạo, những người muốn thành đạt nhiều hơn với tốn kém ít hơn.
Quyển Sống theo phương thức 80/20 giúp bạn xác định chính xác 20% bạn cần tập trung vào cho cuộc đời bạn và lập kế hoạch để theo đuổi dài lâu.
Đừng đọc bộ sách này nếu bạn vẫn muốn tiếp tục lãng phí 80% thời gian trong ngày của bạn cho những chuyện vặt vẵn. Tuy nhiên nếu bạn chỉ dành 20% thời gian mỗi ngày để đọc nó, bạn sẽ nhân được hơn 80% hiệu quả lập tức cho chất lượng cuộc sống của bạn.</span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/2277/goi-sach-qua-tang-tuoi-teen-1.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Quà tặng tuổi teen 1" src="scroll/uploads/books/img-2277-1361954791.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Quà tặng tuổi teen 1</span> <span class="author">Nhiều tác giả</span> <span class="preview">Ai trong chúng ta lại không có một thời "từng là con nít". Và chính vì vậy, bộ sách Ai từng là con nít không chỉ đem đến sự thích thú, những tiếng cười hồn nhiên, thoải mái cho chính những đối tượng mà sách đang đề cập, nó còn mang lại những khoảnh khắc gợi nhớ về một thời thơ ấu cho cả những người đã xa rời cái tuổi này lâu lắm rồi.
Ai từng là con nít - Ăn như thế mới ngon!: Đó là những món ăn dân dã, từng là "đặc sản" của một nhóm con nít nào đó, gắn với kỉ niệm ở một làng quê, một xóm phố nào đó. Đến bây giờ món ăn ấy vẫn đang "lưu hành" hoặc đã "tuyệt chủng" từ năm nẳm nào rồi, nhưng chắc chắn một điều: nó ngon lắm, ngon vô cùng tận bởi được ăn vào hồi ấy, theo cái kiểu ấy, của những đứa con nít ấy...
Ai từng là con nít - Mặc như thế mới oách!: Một bọn trẻ với đủ kiểu quần áo, trang sức, phụ kiện... tự thiết kế, tự khoác lên người và tự công nhận là đẹp hết ý, là oách dễ sợ, là... như thế mới sành điệu! Cái sự "sành điệu" khác xa định nghĩa của người lớn bởi nó đầy sáng tạo mà không tốn tiền, đầy sắc màu và ứng dụng đa dạng mà không cần biết đến một qui luật nào của mốt. Được con nít công nhận là "oách" nên nó... OÁCH, thế thôi!
Ai từng là con nít - Chơi như thế mới vui!: Những trò chơi, kiểu chơi gọi là... trời ơi đất hỡi, chỉ có con nít mới nghĩ ra như thế, chơi được như thế và cảm thấy vui đến thế. Chơi khéo, chơi hay và không hiếm khi nghịch dại. Chơi khi có đồ chơi và cả những lúc không có gì để chơi. Chơi trong giờ chơi và ngay cả khi... không được cho chơi.
Ai từng là con nít - Đi như thế mới thích!: Những phương tiện ấy người lớn coi là bình thường lắm, nhưng thử ĐI theo kiểu con nít mà xem, lập tức sẽ là... siêu xế, siêu thuyền, siêu đẳng cấp! Đi mà không cần biết tới đâu sẽ dừng, chỉ cần nhắm mắt lại là nghe thích đến tận tim, mở mắt ra càng mê mẩn mất hồn, bởi có bao la thứ để ngắm, để phát hiện, để tưởng tượng, để hú hét...</span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/2279/goi-sach-qua-tang-cho-nu-nhan-vien-van-phong-1.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Quà tặng cho nữ nhân viên văn phòng 1" src="scroll/uploads/books/img-2279-1361954827.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Quà tặng cho nữ nhân viên...</span> <span class="author">Nhiều tác giả</span> <span class="preview">Gói sách Quà tặng cho nữ nhân viên văn phòng 1 với 2 tựa sách 102 mối tình đầu và Nghệ thuật quyến rũ sẽ là một sự lựa chọn ý nghĩa dành tặng cho các bạn nữ nhân ngày 8-3.
102 mối tình đầu: Mối tình đầu chỉ là bài học đầu tiên, giống như bảng chữ cái luôn là nền tảng cho toàn bộ mối quan hệ tương lai của một con người. Chúng ta thường ấp ủ những kỷ niệm này, đôi khi lý tưởng hóa chúng, nhớ về mối tình đầu như là một thứ gì đó rất trong trắng và mong manh. Nếu có điều gì đó sai lầm ở mối tình đầu, người ta có thể gặp khó khăn khi bắt đầu những mối quan hệ mới, thậm chí họ có thể có những nỗi ám ảnh nghiêm trọng, điều đó sẽ luôn làm hại đến những mối quan hệ của họ về sau.
Nghệ thuật quyến rũ: Một cuốn sách thú vị giúp bạn khám phá và phát huy những lợi điểm vốn có trong bạn để tạo ảnh hưởng đối với người khác thông qua một số phương pháp và kỹ năng được hướng dẫn cụ thể. Bên cạnh đó, sách cũng giới thiệu và phân tích minh họa những mẫu người quyến rũ và không quyến rũ điển hình có thật trong lịch sử cũng như trong các tác phẩm văn học để bạn có thể đối chứng và học hỏi thêm từ họ.</span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/2119/khoi-nguon-tu-duy.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Khơi nguồn tư duy" src="scroll/uploads/books/img-2119-1369729632.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Khơi nguồn tư duy</span> <span class="author">Nhiều tác giả</span> <span class="preview">101 cách tư duy, nhìn nhận sự việc... Những cuốn sách trong bộ sách này sẽ giúp bạn trau dồi những kỹ năng rèn luyện trí nhớ, IQ, khả năng tư duy cao hơn... để có những quyết định chính xác, khơi nguồn những khả năng tiềm ẩn trong con người bạn.
Gói sách gồm 4 cuốn:
101 mẹo tính toán thông minh - Phù thủy số học: sẽ đưa môn toán vào đời sống hàng ngày, thay bầu không khí lớp học bằng sự kì diệu trong xưởng chế tác của một nhà ảo thuật. Khi học cách vui đùa với những con số, chúng ta khám phá được vô số những kỹ năng để áp dụng vào thực tế, từ các số liệu thống kê, các tỷ lệ cá cược, lãi suất tiền gửi tiết kiệm đến cách để tối đa hóa lợi nhuận của mình. Quyển sách này là một liều thuốc cực kỳ hiệu nghiệm cho những ai mang hội chứng sợ hãi những con số.
101 cách khơi nguồn sáng tạo - Đổi mới tư duy: Khi não chúng ta hoạt động theo thói quen, ta thường nhận ra suy nghĩ của mình đang rơi vào lối mòn. 101 cách khơi nguồn sáng tạo - Đổi mới tư duy đưa ra nhiều phương pháp tư duy độc đáo, trang bị những kỹ năng mới giúp bạn vượt qua những hạn chế để giải quyết vấn đề cũng như đưa ra quyết định. Bạn sẽ biết cách thực hiện những ước mơ tham vọng nhất bằng các phương pháp hoàn toàn thực tiễn, giải phóng trí tưởng tượng, làm tươi mới mọi lĩnh vực trong cuộc sống: từ gia đình, công việc đến các mối quan hệ và ngay cả lúc thư giãn.
101 mẹo gợi nhớ tức thì - Rèn luyện trí nhớ: Bậc thầy về trí nhớ Michael Tipper sẽ hướng dẫn nhiều kỹ thuật đã được thử nghiệm và kiểm tra nhằm tăng cường khả năng ghi nhớ và gợi nhớ lên mức độ đáng kinh ngạc. Hãy khám phá trí nhớ của mình và phát huy nhiều hơn nữa. Thực hành những mẹo đơn giản để nhớ các thông tin cho cuộc sống hàng ngày như số PIN, số điện thoại, đường đi, danh sách. Luyện tập các bài tập để nhớ ngày sinh nhật, các dịp kỷ niệm, nhìn tên gợi nhớ khuôn mặt và ngược lại, đọc diễn văn không cần giấy...
101 cách trau dồi năng lực trí tuệ - Nâng cao IQ: vén bức màn bí mật về chỉ số trí tuệ của loài người. Quyển sách đồng thời cũng bao gồm những bài tập hữu ích cho việc cải thiện tư duy, lý luận logic, tăng cường khả năng tiếp nhận và phân tích thông tin của bạn đọc. Bạn sẽ tìm thấy nhiều dạng bài tập vừa thú vị vừa đòi hỏi sự động não để hỗ trợ trí óc làm việc hiệu quả.</span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/2280/goi-sach-qua-tang-cho-nu-nhan-vien-van-phong-2.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Quà tặng cho nữ nhân viên văn phòng 2" src="scroll/uploads/books/img-2280-1361954844.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Quà tặng cho nữ nhân viên...</span> <span class="author">Nhiều tác giả</span> <span class="preview">Những cung bậc lãng mạn và ngọt ngào của tình yêu, những khám phá kỳ diệu của trái tim... được các tác giả thể hiện trong gói sách Quà tặng cho nữ nhân viên văn phòng 2 sẽ là một món quà ý nghĩa dành tặng cho người phụ nữ thương yêu của bạn.
Cung đường vàng nắng: Giống nhiều người trẻ hiện thời, Vy - cô gái trong truyện có những suy tư rất "hiện đại" về những sự lựa chọn trong cuộc sống. Tuy nhiên cô vấp phải rào cản nhất định từ các định kiến đã ăn sâu vào tiềm thức của gia đình, dân tộc. Khi đi bằng con đường của mình tạo ra, Vy đã tranh đấu với bản thân và có những trải nghiệm mới lạ về nhận thức và cả tình yêu với chàng Jean "khù khờ", hoàng tử trong mơ của cô, ở nước Bỉ xa lạ, nơi cô du học bằng tiền vay mượn. Một câu chuyện ý nhị, dí dỏm và ngọt ngào...
Câu chuyện từ trái tim: Câu chuyện từ trái tim là câu chuyện của những người biết tình yêu nghĩa là như thế nào. Những trang sách mở ra sẽ đồng hành với bạn trên con đường khám phá điều kỳ diệu của Trái tim - nơi trú ngụ của tình yêu và những điều bí ẩn, ngọn nguồn của hạnh phúc và sự sẻ chia...</span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/2173/buoc-vao-the-gioi-tuoi-tho-voi-caillou.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Bước vào thế giới tuổi thơ với Caillou" src="scroll/uploads/books/img-2173-1370587719.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Bước vào thế giới tuổi thơ...</span> <span class="author">Chouette Publishing</span> <span class="preview">Bộ sách nổi tiếng thế giới dành cho trẻ 1-5 tuổi gồm 8 tập, mỗi tập là một góc nhìn ngộ nghĩnh đáng yêu về cậu bé Caillou. Bên cạnh những hình vẽ cực kỳ có duyên, dễ thương, những phản ứng, suy nghĩ của cậu bé chưa đến tuổi đến trường này sẽ cuốn hút các bạn đọc nhỏ tuổi và làm các bậc phụ huynh bật cười âu yếm.
 </span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/2120/bai-hoc-cuoc-doi.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Bài học cuộc đời" src="scroll/uploads/books/img-2120-1369728748.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Bài học cuộc đời</span> <span class="author">Nhiều tác giả</span> <span class="preview">Forrest Gump: cuốn sách nổi tiếng đã được chuyển thể thành phim với nội dung nói về nhân vật Forrest Gump, hình tượng cho người "tự kỷ bác học", kể về những cuộc phiêu lưu dị thường mà Gump đã trải qua, vẽ nên chân dung nước Mỹ sau thế chiến II - một đế quốc đã phát động cuộc chiến phi nghĩa với Việt Nam và phải trả giá.
Ngày xưa có một con bò: là câu chuyện ngụ ngôn ngắn gọn, dễ hiểu, rút ra một bài học sâu sắc nhưng thật đơn giản cho những ai vẫn đang vật lộn tìm kiếm thành công ở đời.
Hai cuốn sách này sẽ giúp bạn rút ra được những bài học riêng cho mình trong cuộc sống.</span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/2477/cau-be-cuoi-rong.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Cậu bé cưỡi rồng" src="scroll/uploads/books/img-2477-1369729407.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Cậu bé cưỡi rồng</span> <span class="author">Christopher Paolini</span> <span class="preview">Tình cờ trong một lần đi săn, Eragon nhặt được một viên đá màu xanh. Tưởng đây là điều may mắn dành cho một đứa trẻ nông dân nghèo khổ như nó, nhưng viên đá, thật ra là một trứng rồng.
Cuộc đời đơn giản của Eragon hoàn toàn bị xáo trộn từ sau đêm đó. Cậu bé bị xô đẩy vào một thế giới đầy nguy hiểm của định mệnh, phép thuật và quyền lực.
Eragon phải lãnh trách nhiệm của một kỵ sĩ rồng trong huyền thoại, để nắm giữ vận mệnh của vương quốc.
Bộ gồm 2 tập, là phần mở đầu trong bộ truyện Di sản thừa kế - thuộc dòng văn học kỳ ảo dành cho tuổi teen.</span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/2394/thanh-pho-la-va-nhung-cuoc-tinh.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Thành phố lạ và những cuộc tình" src="scroll/uploads/books/img-2394-1369729976.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Thành phố lạ và những cuộc...</span> <span class="author">Dương Thụy</span> <span class="preview">Chọn mua gói sách này, bạn sẽ được "Dương Thụy - nhà văn của những thành phố lãng mạn nhất trên thế giới" dẫn dắt đi thăm thú vô vàn cảnh đẹp ở những thành phố lạ thuộc Châu Âu, Châu Á... để rồi nếm trải vui buồn cùng những cuộc tình với đầy đủ các cung bậc cảm xúc về tình yêu thời tuổi trẻ.</span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/2479/tuyen-truyen-hay-danh-cho-thieu-nhi.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Tuyển truyện hay dành cho thiếu nhi" src="scroll/uploads/books/img-2479-1369800610.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Tuyển truyện hay dành cho thiếu...</span> <span class="author">Nhiều tác giả</span> <span class="preview">Gói sách Tuyển truyện hay dành cho thiếu nhi tập hợp những câu chuyện về các em học sinh nghèo, có hoàn cảnh khó khăn, mồ côi cha mẹ, không người thân thích... để nâng đỡ và chắp cánh ước mơ cho tương lai các em. Các em phải tự bươn chải để kiếm kế sinh nhai, tự lo chuyện học hành... Những gương vượt khó ấy xứng đáng để các bạn nhỏ noi theo và học tập.</span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/2399/tim-lai-chinh-minh.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Tìm lại chính mình" src="scroll/uploads/books/img-2399-1369799667.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Tìm lại chính mình</span> <span class="author">Nhiều tác giả</span> <span class="preview">Gói sách hướng dẫn chúng ta cách thức quản lý thời gian hiệu quả cũng như những giải pháp để đối mặt và tiêu diệt sự trì trệ của bản thân để tìm kiếm thành công trong công việc và cuộc sống.
Mỗi ngày tiết kiệm một giờ: Hiếm có quyển sách về quản lý thời gian nào lại được tiếp cận thẳng thắn và trực tiếp như Mỗi ngày tiết kiệm một giờ của Michael Heppell. Có thể nói trong quyển sách này chỉ có sự thực hành, thực hành và thực hành, vì hầu như từ đầu đến cuối đều là những ý tưởng mà tác giả đã học hỏi, tổng hợp và tự mình thử nghiệm hoặc do những độc giả thân thiết của ông thử nghiệm.
Ngày xưa có một con bò: Khởi đầu bằng một câu chuyện mang tính ngụ ngôn vừa ngắn gọn, vừa dễ hiểu, cuốn sách rút ra một bài học sâu sắc nhưng thật đơn giản cho những ai vẫn đang vật lộn tìm kiếm thành công ở đời: những lời bao biện, viện cớ, đổ lỗi chẳng bao giờ giúp được chúng ta thành công hơn; ngược lại, dám dũng cảm đối mặt với sự trì trệ của mình để sẵn sàng tìm ra giải pháp mới là con đường tiến lên bền vững.</span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/2177/truyen-ngan-hay-the-gioi-danh-cho-nhi-dong.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Truyện ngắn thế giới hay dành cho nhi đồng" src="scroll/uploads/books/img-2177-1369799090.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Truyện ngắn thế giới hay dành...</span> <span class="author">Trần Hoài Dương</span> <span class="preview">Thế giới không trẻ em của nhà vănPhillip Claude: Một ngày nọ, trẻ em biến mất. Thế gian bỗng u sầu, trái đất ngừng quay. Đức Giáo hoàng, Đức Đạt-lai-lạt-ma, các vị Tổng thống, và ba mẹ hứa hẹn đủ điều mong cho bọn trẻ con quay lại. Trẻ con là một phần quan trọng của thế giới, của mỗi con người như thế đấy.
Lão ăn mày của nhà văn Ivan Tuốcghênhiép: Lòng từ ái, chân thành chính là món quà vĩ đại, vô giá mà mỗi con người chúng ta dành cho nhau, không kể giai cấp, tuổi tác, địa vị xã hội.
Trong một gia đình của nhà văn Valentina Ôxêêva: Để ngăn chặn cái xấu, chúng ta trước tiên phải biết phân biệt thế nào là phải trái, đúng sai để đừng hùa theo người khác làm những điều sai. Dễ như vậy mà có mấy ai dũng cảm như thế.
Mây và Sóng của nhà thơ Rabindranath Tagore: Là một bài thơ trong sáng, giàu âm thanh, nhạc điệu, và cả tiếng cười khúc khích của hai mẹ con cùng mây lang thang, sóng bồng bột.
Thế nào là dũng cảm, là kiên cường đối mặt với cuộc đời, là khiêm tốn với những người hâm mộ, là thành thật với trái tim của mình, là nhìn thấy mình tan chảy trong lửa đỏ, là trái tim chì bé bỏng của Chú lính chì dũng cảm được nhà văn Anđécxen kể lại.
Và còn nhiều nhiều câu chuyện hay và ý nghĩa khác trong Tuyển tập Truyện ngắn thế giới hay dành cho nhi đồng được Trần Hoài Dương tuyển chọn. Các em sẽ được nghe tiếng thủ thỉ của những nhân vật trong thế giới của chính các em, nơi mọi điều đều là có thể, được các nhà văn Anh, Pháp, Tây Ban Nha, Hà Lan, Ấn Độ,... nói hộ để thấy rằng chúng ta giống nhau nhiều hơn mình từng nghĩ.
Ba tập trong bộ Tuyển tập Truyện ngắn thế giới hay dành cho nhi đồng với nhiều câu chuyện, nhỏ ngắn có, dài khó cũng có, hứa hẹn những giây phút thư giãn thú vị cho bố mẹ con, đồng thời cũng là dịp để chúng ta dạy cho con trẻ cách đọc sách và giá trị của những dòng tư tưởng lấp lánh trong ngổn ngang con chữ.</span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/2116/tu-duy-tich-cuc.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Tư duy tích cực" src="scroll/uploads/books/img-2116-1369800274.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Tư duy tích cực</span> <span class="author">Nhiều tác giả</span> <span class="preview">Vì cuộc đời luôn có những thay đổi không ngờ, đọc  bộ sách này sẽ giúp bạn lấy thêm nghị lực cuộc sống, nhìn nhận cuộc đời lạc quan hơn, để đón nhận những thử thách mới trong cuộc sống muôn màu. Gói sách gồm 2 quyển:

Đời thay đổi khi chúng ta thay đổi - Tập 1: Quyển sách nói về việc tại sao có những người dường như lúc nào cũng ở đúng nơi và đúng lúc - và làm thế nào bạn cũng được như họ; tại sao hóa đơn tính tiền luôn luôn tới ngay tức khắc; tại sao đèn giao thông cứ ở màu đỏ hoài cả nửa ngày trong khi bạn đang trễ một cuộc hẹn làm ăn; tại sao đi du lịch Tây Ban Nha mà bạn cũng gặp người láng giềng sát bên nhà; tại sao bạn chạy chiếc xe cà tàng suốt 15 năm ròng rã mà chưa bao giờ va quẹt... thế rồi chiếc xe mới mua mới chạy có hai ngày đã đụng móp mui!
Quyển sách nói về: hiểu được bản thân, biết khôi hài về bản thân, trở nên suôn sẻ thuận lợi, biết tha thứ cho bản thân. Sách cũng bàn về việc nhận thức được các quy luật tự nhiên để chúng ta có thể điều chỉnh bản tính chúng ta tốt hơn. Đây là quyển sách nói về làm thế nào để được hạnh phúc.

Lối đi ngay dưới chân mình: Tôi vốn thích được biết những phân vân, ngơ ngác, những cái buồn vô cớ, cả những hoài nghi về tương lai, về tình yêu, về tình bạn của một số bạn trẻ mới bước vào đời. Nhưng được đọc những trang viết về một cô gái có nghị lực, thích hành động, hành động để lựa chọn, hành động để tự khẳng định, hành động với những mục tiêu rõ ràng, thú thật tôi vẫn thích hơn. Vả lại viết cũng hay nữa, câu chữ rất tươi, rất trẻ. Và đoạn kết thật khoan khoái: "Có lẽ hai anh chàng này khi cắt móng tay xong không có cái kiểu nhặt móng lên, bỏ vào lòng bàn tay, ngồi ngắm nghía, khều qua khều lại như tôi. Họ không đến nỗi quan trọng hóa cái "tôi" của mình quá đáng như tôi..." Không thèm mặc cảm, nhập một cách thẳng thừng vào mọi vai để tìm ra một lối đi vốn đã ở ngay dưới chân mình."
 </span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/2114/day-con-lam-giau.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Dạy con làm giàu" src="scroll/uploads/books/img-2114-1369895967.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Dạy con làm giàu</span> <span class="author">Robert T. Kiyosaki,&nbsp;Sharon L....</span> <span class="preview">Dạy con làm giàu I và Dạy con làm giàu IX là 2 cuốn sách cho bạn nhiều điều học hỏi về cách làm giàu từ những điều đơn giản nhất, các câu chuyện về tiền bạc, những điều mà bạn không được học trong trường.

Dạy con làm giàu I: Bạn sẽ làm gì khi được cả hai người cha truyền dạy cho mình về chủ đề tiền bạc và sự lựa chọn cách sống trong đời. Một người là bố ruột, còn người kia là bố người bạn thân nhất. Một người có nền học vấn rất cao, trong khi người kia chỉ học tới trung học, nhưng cả hai đều thành công trong sự nghiệp và có ảnh hưởng đến người khác.
Tác giả của cuốn sách đã phải suy nghĩ nhiều và cũng học hỏi được rất nhiều điều từ những lời chỉ dạy của hai người cha này.
Còn bạn, bạn sẽ nghĩ gì khi được nghe những lời khuyên trái ngược của hai ông bố:Một người nói: Ham mê tiền bạc là nguồn gốc của mọi điều xấu. Một người nói: Thiếu thốn tiền bạc là nguồn gốc của mọi điều xấu.
Một người tin rằng: Tôi không mua nổi vật đó. Người kia lại nghĩ: Làm thế nào để mua được vật đó.
Một người dạy: Phải học cho giỏi thì mới được làm việc ở những công ty tốt. Người kia bảo: Học cho giỏi thì mới mua được những công ty tốt.
Một người chắc rằng: Ngôi nhà là số đầu tư nhiều nhất và là tài sản lớn nhất của chúng ta. Người kia lại nghĩ rằng: Ngôi nhà cũng là một khoản tiền trả, và nếu ngôi nhà là khoản đầu tư lớn nhất của con thì con gặp rắc rối rồi đấy...
Tập sách là 6 bài học cơ bản mà Người Cha giàu chỉ dạy cho người con về tiền bạc. Bạn hãy đọc cuốn sách rồi chia sẻ những kiến thức này với con cái bạn, và bạn sẽ chuẩn bị cho chúng bước vào một thế giới đang thay đổi từng ngày. Không ai có thể làm điều đó thay bạn được.
Dạy con làm giàu IX: Quyển sách không chỉ chia sẻ câu chuyện đầu tư tuyệt vời của tác giả, mà còn chỉ cho bạn cách:
Nói bằng ngôn ngữ tài chính Khiến đồng tiền làm việc cho bạn Thành công - "làm việc để học, đừng làm việc vì tiền" Giúp đồng tiền vận động và phát triển
Đây là quyển thứ 9 trong bộ sách DẠY CON LÀM GIÀU, và là quyển sách mới nhất của Robert T. Kiyosaki trong loạt sách về tài chính và đầu tư bán chạy nhất của ông. Quyển sách không chỉ chia sẻ câu chuyện riêng tư tuyệt vời của tác giả, mà còn chỉ cho bạn cách đưa ra những chọn lựa trong cuộc sống hiện tại của bạn - những chọn lựa để giàu có.
Một điều chúng tôi muốn nói trước khi các bạn đọc quyển sách này là, bạn có thể tìm thấy ở đây kiến thức bao quát nhất đã có trong những tập sách trước với điểm nổi bật trong cách thể hiện là ngôn ngữ giản dị, cách đặt vấn đề và giải quyết vấn đề trực tiếp và rõ ràng, có phần hỏi &amp; đáp, bảng câu hỏi trắc nghiệm, và tính thực hành cao. Quyển sách chắc chắn giúp bạn có một kiến thức khởi đầu thuận lợi trên con đường đến với sự tự do tài chính.
Bạn không cần quan tâm là ở trường bạn học giỏi ở mức nào. Bạn có đủ thông minh để phát triển về mặt tài chính và bạn luôn nhớ là, không bao giờ là quá trễ để bắt đầu tìm kiếm kiến thức tài chính cho bản thân!
 </span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/2509/nhung-tam-hon-dong-dieu.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Những tâm hồn đồng điệu" src="scroll/uploads/books/img-2509-1369896448.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Những tâm hồn đồng điệu</span> <span class="author">Nhiều tác giả</span> <span class="preview">Tuổi mới lớn luôn đi cùng với đủ thứ rắc rối xảy ra, nhưng quãng thời gian này luôn đầy ắp kỉ niệm và đáng trân trọng. Thông qua 3 cuốn sách nhỏ về những câu chuyện thường ngày của tuổi mới lớn liên quan đến gia đình, bạn bè và những cảm xúc đầu đời có thể bạn sẽ tìm thấy được chính mình.</span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/5724/be-kham-pha-the-gioi-xung-quanh.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Bé khám phá thế giới xung quanh" src="scroll/uploads/books/img-5724-1395219742.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Bé khám phá thế giới xung...</span> <span class="author">Nhiều tác giả</span> <span class="preview">Những tập sách trong gói sách này sẽ giúp cho các bé khám phá thế giới xung quanh mình từ những vật nuôi dễ thương trong nhà đến thế giới côn trùng kỳ thú, những con vật sống trong rừng... Tất cả như hiện lên sống động trên từng trang sách. Ngoài ra, tập sách Bé chơi với các hình và Bé tập quan sát sẽ rèn cho trẻ thêm những kỹ năng cần thiết, giúp bé phát triển hoàn thiện hơn.</span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/2110/truyen-ke-cho-be.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Truyện kể cho bé" src="scroll/uploads/books/img-2110-1369896551.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Truyện kể cho bé</span> <span class="author">Nhiều tác giả</span> <span class="preview">Thông qua những câu chuyện kể mang tính giáo dục nhẹ nhàng với những nhân vật như Bubu và Caillou, trẻ sẽ học được nhiều điều hay, bổ ích.</span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/2109/be-vui-hoc.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Bé vui học" src="scroll/uploads/books/img-2109-1369895688.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Bé vui học</span> <span class="author">Nhiều tác giả</span> <span class="preview">Đồng hành cùng bé là hình tượng Bubu dễ thương. Bé sẽ tập làm quen với những từ gọi tên đồ vật, các bộ phận trên cơ thể và tập tô màu, nhìn nhận màu sắc trái cây theo con mắt riêng của mình.
Gói sách giúp bé làm quen dần với từ ngữ, màu sắc khi mới bắt đầu học nói.</span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/2508/be-voi-the-gioi-xung-quanh.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Bé với thế giới xung quanh" src="scroll/uploads/books/img-2508-1370915193.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Bé với thế giới xung quanh</span> <span class="author">Nhiều tác giả</span> <span class="preview">Bé đang lớn từng ngày và vô cùng háo hức tìm hiểu thế giới xung quanh, nhưng bạn lại không có đủ thời gian vui chơi cùng bé. Bộ sách sẽ giúp bạn hướng dẫn cho bé tìm hiểu về những con vật hàng ngày trong cuộc sống.</span> </div>
    <span class="dots">...</span>

</li><li>
    <div id="img-block">
        <a href="goi-sach-in/2507/be-chuan-bi-vao-lop-1.html" class="preview-img">
            <div class="main-imgintro">
                <img alt="Bé chuẩn bị vào lớp 1" src="scroll/uploads/books/img-2507-1369895451.jpg" class="img-hover-action book-css3-shadow"/>

            </div>

        </a>
    </div>
    <div class="preview-text"> <span class="book-title">Bé chuẩn bị vào lớp 1</span> <span class="author">Nhiều tác giả</span> <span class="preview">Bước vào tuổi tới trường, các bạn nhỏ cần được chuẩn bị một vài kĩ năng thiết yếu để theo kịp chương trình học. Với bộ sách này, bố mẹ và các bạn nhỏ có thể làm quen với những khái niệm cơ bản chuẩn bị tốt nhất cho việc học.</span> </div>
    <span class="dots">...</span>

</li>                    </ul>
</div>
</div>
<div class="slider-box">
<a class="slider-button slider-button-left" id="sliderNewYorkTimes_bl"></a> <a class="slider-button slider-button-right" id="sliderNewYorkTimes_br"></a>
<div class="slider clearfix  slider-hover-action slider-init slider-init-1" id="sliderNewYorkTimes" >
<ul>
<li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/6595/nhung-y-tuong-kinh-doanh-tuyet-hay.html">
            <div class="imgintro">
                <img alt="Những ý tưởng kinh doanh tuyệt hay" src="scroll/uploads/books/img-6595-1429253696.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/6591/lanh-dao-theo-cach-jim-collins.html">
            <div class="imgintro">
                <img alt="Lãnh đạo theo cách Jim Collins" src="scroll/uploads/books/img-6591-1429255436.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/6592/doi-thoai-voi-nguoi-khong-lo-chau-a.html">
            <div class="imgintro">
                <img alt="Đối thoại với người khổng lồ Châu Á" src="scroll/uploads/books/img-6592-1429088811.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/6594/nhung-nguoi-ban.html">
            <div class="imgintro">
                <img alt="Những người bạn" src="scroll/uploads/books/img-6594-1429255266.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/2189/ky-nang-mem-cho-nguoi-di-lam.html">
            <div class="imgintro">
                <img alt="Kỹ năng mềm cho người đi làm" src="scroll/uploads/books/img-2189-1369704807.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/2482/nguoc-dong-au-tho.html">
            <div class="imgintro">
                <img alt="Ngược dòng ấu thơ" src="scroll/uploads/books/img-2482-1369704962.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/2175/moi-ngay-mot-cau-chuyen.html">
            <div class="imgintro">
                <img alt="Mỗi ngày một câu chuyện" src="scroll/uploads/books/img-2175-1371604982.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/2397/vung-buoc-den-thanh-cong.html">
            <div class="imgintro">
                <img alt="Vững bước đến thành công" src="scroll/uploads/books/img-2397-1363326780.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/2126/duong-thuy.html">
            <div class="imgintro">
                <img alt="Dương Thụy" src="scroll/uploads/books/img-2126-1370915375.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/2186/trong-tham-sau-cua-bi-an.html">
            <div class="imgintro">
                <img alt="Trong thẳm sâu của bí ẩn" src="scroll/uploads/books/img-2186-1369705125.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/2188/song-co-gia-tri.html">
            <div class="imgintro">
                <img alt="Sống có giá trị" src="scroll/uploads/books/img-2188-1369705088.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/6593/bi-quyet-lam-it-duoc-nhieu.html">
            <div class="imgintro">
                <img alt="Bí quyết làm ít được nhiều" src="scroll/uploads/books/img-6593-1429255566.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/2277/goi-sach-qua-tang-tuoi-teen-1.html">
            <div class="imgintro">
                <img alt="Quà tặng tuổi teen 1" src="scroll/uploads/books/img-2277-1361954791.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/2279/goi-sach-qua-tang-cho-nu-nhan-vien-van-phong-1.html">
            <div class="imgintro">
                <img alt="Quà tặng cho nữ nhân viên văn phòng 1" src="scroll/uploads/books/img-2279-1361954827.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/2119/khoi-nguon-tu-duy.html">
            <div class="imgintro">
                <img alt="Khơi nguồn tư duy" src="scroll/uploads/books/img-2119-1369729632.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/2280/goi-sach-qua-tang-cho-nu-nhan-vien-van-phong-2.html">
            <div class="imgintro">
                <img alt="Quà tặng cho nữ nhân viên văn phòng 2" src="scroll/uploads/books/img-2280-1361954844.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/2173/buoc-vao-the-gioi-tuoi-tho-voi-caillou.html">
            <div class="imgintro">
                <img alt="Bước vào thế giới tuổi thơ với Caillou" src="scroll/uploads/books/img-2173-1370587719.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/2120/bai-hoc-cuoc-doi.html">
            <div class="imgintro">
                <img alt="Bài học cuộc đời" src="scroll/uploads/books/img-2120-1369728748.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/2477/cau-be-cuoi-rong.html">
            <div class="imgintro">
                <img alt="Cậu bé cưỡi rồng" src="scroll/uploads/books/img-2477-1369729407.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/2394/thanh-pho-la-va-nhung-cuoc-tinh.html">
            <div class="imgintro">
                <img alt="Thành phố lạ và những cuộc tình" src="scroll/uploads/books/img-2394-1369729976.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/2479/tuyen-truyen-hay-danh-cho-thieu-nhi.html">
            <div class="imgintro">
                <img alt="Tuyển truyện hay dành cho thiếu nhi" src="scroll/uploads/books/img-2479-1369800610.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/2399/tim-lai-chinh-minh.html">
            <div class="imgintro">
                <img alt="Tìm lại chính mình" src="scroll/uploads/books/img-2399-1369799667.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/2177/truyen-ngan-hay-the-gioi-danh-cho-nhi-dong.html">
            <div class="imgintro">
                <img alt="Truyện ngắn thế giới hay dành cho nhi đồng" src="scroll/uploads/books/img-2177-1369799090.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/2116/tu-duy-tich-cuc.html">
            <div class="imgintro">
                <img alt="Tư duy tích cực" src="scroll/uploads/books/img-2116-1369800274.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/2114/day-con-lam-giau.html">
            <div class="imgintro">
                <img alt="Dạy con làm giàu" src="scroll/uploads/books/img-2114-1369895967.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/2509/nhung-tam-hon-dong-dieu.html">
            <div class="imgintro">
                <img alt="Những tâm hồn đồng điệu" src="scroll/uploads/books/img-2509-1369896448.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/5724/be-kham-pha-the-gioi-xung-quanh.html">
            <div class="imgintro">
                <img alt="Bé khám phá thế giới xung quanh" src="scroll/uploads/books/img-5724-1395219742.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/2110/truyen-ke-cho-be.html">
            <div class="imgintro">
                <img alt="Truyện kể cho bé" src="scroll/uploads/books/img-2110-1369896551.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/2109/be-vui-hoc.html">
            <div class="imgintro">
                <img alt="Bé vui học" src="scroll/uploads/books/img-2109-1369895688.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/2508/be-voi-the-gioi-xung-quanh.html">
            <div class="imgintro">
                <img alt="Bé với thế giới xung quanh" src="scroll/uploads/books/img-2508-1370915193.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item">
    <div id="img-block">
        <a class="book-picture-shadow" href="goi-sach-in/2507/be-chuan-bi-vao-lop-1.html">
            <div class="imgintro">
                <img alt="Bé chuẩn bị vào lớp 1" src="scroll/uploads/books/img-2507-1369895451.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a>
    </div>
</li><li class="slider-item"> <div id="img-block"> <a class="book-picture-shadow" href="goi-sach-in/6599/cung-bac-tinh-yeu.html">
            <div class="imgintro">
                <img alt="Cung bậc tình yêu" src="scroll/uploads/books/img-6599-1429254522.jpg" class="img-hover-action book-css3-shadow"/>
            </div>

        </a> </div> </li>                    </ul>
</div>
</div>
</div>
</div>



<div class="content-box" style="float: right;">
<div class="book-container-box container-box-book-preview box clearfix">
<div class="arrow-home" style="margin-left: 5px">
    <h4>Sách mới đưa vào thư viện</h4>
</div>
<div class="arrow-slide-right">(Có 30 quyển sách)</div>
<div class="clear"></div>
<div class="Border-BottomH3"></div>
<div class="preview-box clearfix">
<div class="slider clearfix slider-init slider-init-1" id="sliderNewYorkTimesPreview">
    <ul>
        <li>
            <div id="img-block">
                <a href="goi-sach-in/6599/cung-bac-tinh-yeu.html" class="preview-img">
                    <div class="main-imgintro">
                        <img alt="Cung bậc tình yêu" src="scroll/uploads/books/img-6599-1429254522.jpg" class="img-hover-action book-css3-shadow" />

                    </div>

                </a>
            </div>
            <div class="preview-text">
                <span class="book-title">Cung bậc tình yêu</span> <span class="author">Sylvia Day</span> <span class="preview">Bộ tiểu thuyết CROSSFIRE gồm 3 tập: CHẠM MỞ - SOI CHIẾU - HÒA QUYỆN, thuộc thể loại tiểu thuyết tình cảm dành cho người trưởng thành.
Nhân vật chính là Gideon Cross, người đàn ông đẹp trai, giàu có, quyền lực bậc nhất New York, và Eva Tramell, cô tiểu thư tóc vàng xinh đẹp, thông minh, con nhà dòng dõi.
Hai con người tưởng chừng như hoàn hảo ấy lại có một quá khứ đau đớn vì bị lạm dụng tình dục từ chính những người gần gũi. Họ đã phải trải qua nhiều thử thách để dần dà hiểu biết tâm hồn nhau để rồi đi đến một kết thúc viên mãn.</span>
            </div>
            <span class="dots">...</span>

        </li>
        <li>
            <div id="img-block">
                <a href="goi-sach-in/6599/cung-bac-tinh-yeu.html" class="preview-img">
                    <div class="main-imgintro">
                        <img alt="Cung bậc tình yêu" src="scroll/uploads/books/img-6599-1429254522.jpg" class="img-hover-action book-css3-shadow" />

                    </div>

                </a>
            </div>
            <div class="preview-text">
                <span class="book-title">Cung bậc tình yêu</span> <span class="author">Sylvia Day</span> <span class="preview">Bộ tiểu thuyết CROSSFIRE gồm 3 tập: CHẠM MỞ - SOI CHIẾU - HÒA QUYỆN, thuộc thể loại tiểu thuyết tình cảm dành cho người trưởng thành.
Nhân vật chính là Gideon Cross, người đàn ông đẹp trai, giàu có, quyền lực bậc nhất New York, và Eva Tramell, cô tiểu thư tóc vàng xinh đẹp, thông minh, con nhà dòng dõi.
Hai con người tưởng chừng như hoàn hảo ấy lại có một quá khứ đau đớn vì bị lạm dụng tình dục từ chính những người gần gũi. Họ đã phải trải qua nhiều thử thách để dần dà hiểu biết tâm hồn nhau để rồi đi đến một kết thúc viên mãn.</span>
            </div>
            <span class="dots">...</span>

        </li>
        <li>
            <div id="img-block">
                <a href="goi-sach-in/6599/cung-bac-tinh-yeu.html" class="preview-img">
                    <div class="main-imgintro">
                        <img alt="Cung bậc tình yêu" src="scroll/uploads/books/img-6599-1429254522.jpg" class="img-hover-action book-css3-shadow" />

                    </div>

                </a>
            </div>
            <div class="preview-text">
                <span class="book-title">Cung bậc tình yêu</span> <span class="author">Sylvia Day</span> <span class="preview">Bộ tiểu thuyết CROSSFIRE gồm 3 tập: CHẠM MỞ - SOI CHIẾU - HÒA QUYỆN, thuộc thể loại tiểu thuyết tình cảm dành cho người trưởng thành.
Nhân vật chính là Gideon Cross, người đàn ông đẹp trai, giàu có, quyền lực bậc nhất New York, và Eva Tramell, cô tiểu thư tóc vàng xinh đẹp, thông minh, con nhà dòng dõi.
Hai con người tưởng chừng như hoàn hảo ấy lại có một quá khứ đau đớn vì bị lạm dụng tình dục từ chính những người gần gũi. Họ đã phải trải qua nhiều thử thách để dần dà hiểu biết tâm hồn nhau để rồi đi đến một kết thúc viên mãn.</span>
            </div>
            <span class="dots">...</span>

        </li>
        <li>
            <div id="img-block">
                <a href="goi-sach-in/6599/cung-bac-tinh-yeu.html" class="preview-img">
                    <div class="main-imgintro">
                        <img alt="Cung bậc tình yêu" src="scroll/uploads/books/img-6599-1429254522.jpg" class="img-hover-action book-css3-shadow" />

                    </div>

                </a>
            </div>
            <div class="preview-text">
                <span class="book-title">Cung bậc tình yêu</span> <span class="author">Sylvia Day</span> <span class="preview">Bộ tiểu thuyết CROSSFIRE gồm 3 tập: CHẠM MỞ - SOI CHIẾU - HÒA QUYỆN, thuộc thể loại tiểu thuyết tình cảm dành cho người trưởng thành.
Nhân vật chính là Gideon Cross, người đàn ông đẹp trai, giàu có, quyền lực bậc nhất New York, và Eva Tramell, cô tiểu thư tóc vàng xinh đẹp, thông minh, con nhà dòng dõi.
Hai con người tưởng chừng như hoàn hảo ấy lại có một quá khứ đau đớn vì bị lạm dụng tình dục từ chính những người gần gũi. Họ đã phải trải qua nhiều thử thách để dần dà hiểu biết tâm hồn nhau để rồi đi đến một kết thúc viên mãn.</span>
            </div>
            <span class="dots">...</span>

        </li>
        <li>
            <div id="img-block">
                <a href="goi-sach-in/6599/cung-bac-tinh-yeu.html" class="preview-img">
                    <div class="main-imgintro">
                        <img alt="Cung bậc tình yêu" src="scroll/uploads/books/img-6599-1429254522.jpg" class="img-hover-action book-css3-shadow" />

                    </div>

                </a>
            </div>
            <div class="preview-text">
                <span class="book-title">Cung bậc tình yêu</span> <span class="author">Sylvia Day</span> <span class="preview">Bộ tiểu thuyết CROSSFIRE gồm 3 tập: CHẠM MỞ - SOI CHIẾU - HÒA QUYỆN, thuộc thể loại tiểu thuyết tình cảm dành cho người trưởng thành.
Nhân vật chính là Gideon Cross, người đàn ông đẹp trai, giàu có, quyền lực bậc nhất New York, và Eva Tramell, cô tiểu thư tóc vàng xinh đẹp, thông minh, con nhà dòng dõi.
Hai con người tưởng chừng như hoàn hảo ấy lại có một quá khứ đau đớn vì bị lạm dụng tình dục từ chính những người gần gũi. Họ đã phải trải qua nhiều thử thách để dần dà hiểu biết tâm hồn nhau để rồi đi đến một kết thúc viên mãn.</span>
            </div>
            <span class="dots">...</span>

        </li>
        <li>
            <div id="img-block">
                <a href="goi-sach-in/6599/cung-bac-tinh-yeu.html" class="preview-img">
                    <div class="main-imgintro">
                        <img alt="Cung bậc tình yêu" src="scroll/uploads/books/img-6599-1429254522.jpg" class="img-hover-action book-css3-shadow" />

                    </div>

                </a>
            </div>
            <div class="preview-text">
                <span class="book-title">Cung bậc tình yêu</span> <span class="author">Sylvia Day</span> <span class="preview">Bộ tiểu thuyết CROSSFIRE gồm 3 tập: CHẠM MỞ - SOI CHIẾU - HÒA QUYỆN, thuộc thể loại tiểu thuyết tình cảm dành cho người trưởng thành.
Nhân vật chính là Gideon Cross, người đàn ông đẹp trai, giàu có, quyền lực bậc nhất New York, và Eva Tramell, cô tiểu thư tóc vàng xinh đẹp, thông minh, con nhà dòng dõi.
Hai con người tưởng chừng như hoàn hảo ấy lại có một quá khứ đau đớn vì bị lạm dụng tình dục từ chính những người gần gũi. Họ đã phải trải qua nhiều thử thách để dần dà hiểu biết tâm hồn nhau để rồi đi đến một kết thúc viên mãn.</span>
            </div>
            <span class="dots">...</span>

        </li>
        <li>
            <div id="img-block">
                <a href="goi-sach-in/6599/cung-bac-tinh-yeu.html" class="preview-img">
                    <div class="main-imgintro">
                        <img alt="Cung bậc tình yêu" src="scroll/uploads/books/img-6599-1429254522.jpg" class="img-hover-action book-css3-shadow" />

                    </div>

                </a>
            </div>
            <div class="preview-text">
                <span class="book-title">Cung bậc tình yêu</span> <span class="author">Sylvia Day</span> <span class="preview">Bộ tiểu thuyết CROSSFIRE gồm 3 tập: CHẠM MỞ - SOI CHIẾU - HÒA QUYỆN, thuộc thể loại tiểu thuyết tình cảm dành cho người trưởng thành.
Nhân vật chính là Gideon Cross, người đàn ông đẹp trai, giàu có, quyền lực bậc nhất New York, và Eva Tramell, cô tiểu thư tóc vàng xinh đẹp, thông minh, con nhà dòng dõi.
Hai con người tưởng chừng như hoàn hảo ấy lại có một quá khứ đau đớn vì bị lạm dụng tình dục từ chính những người gần gũi. Họ đã phải trải qua nhiều thử thách để dần dà hiểu biết tâm hồn nhau để rồi đi đến một kết thúc viên mãn.</span>
            </div>
            <span class="dots">...</span>

        </li>

        <li>
            <div id="img-block">
                <a href="goi-sach-in/6599/cung-bac-tinh-yeu.html" class="preview-img">
                    <div class="main-imgintro">
                        <img alt="Cung bậc tình yêu" src="scroll/uploads/books/img-6599-1429254522.jpg" class="img-hover-action book-css3-shadow" />

                    </div>

                </a>
            </div>
            <div class="preview-text">
                <span class="book-title">Cung bậc tình yêu</span> <span class="author">Sylvia Day</span> <span class="preview">Bộ tiểu thuyết CROSSFIRE gồm 3 tập: CHẠM MỞ - SOI CHIẾU - HÒA QUYỆN, thuộc thể loại tiểu thuyết tình cảm dành cho người trưởng thành.
Nhân vật chính là Gideon Cross, người đàn ông đẹp trai, giàu có, quyền lực bậc nhất New York, và Eva Tramell, cô tiểu thư tóc vàng xinh đẹp, thông minh, con nhà dòng dõi.
Hai con người tưởng chừng như hoàn hảo ấy lại có một quá khứ đau đớn vì bị lạm dụng tình dục từ chính những người gần gũi. Họ đã phải trải qua nhiều thử thách để dần dà hiểu biết tâm hồn nhau để rồi đi đến một kết thúc viên mãn.</span>
            </div>
            <span class="dots">...</span>

        </li>
    </ul>
</div>
</div>
<div class="slider-box">
<a class="slider-button slider-button-left" id="sliderNewYorkTimes_bl"></a> <a class="slider-button slider-button-right" id="sliderNewYorkTimes_br"></a>
<div class="slider clearfix  slider-hover-action slider-init slider-init-1" id="sliderNewYorkTimes" >
    <ul>
        <li class="slider-item">
            <div id="img-block">
                <a class="book-picture-shadow" href="goi-sach-in/6595/nhung-y-tuong-kinh-doanh-tuyet-hay.html">
                    <div class="imgintro">
                        <img alt="Những ý tưởng kinh doanh tuyệt hay" src="scroll/uploads/books/img-6595-1429253696.jpg" class="img-hover-action book-css3-shadow" />
                    </div>

                </a>
            </div>
        </li>
        <li class="slider-item">
            <div id="img-block">
                <a class="book-picture-shadow" href="goi-sach-in/2507/be-chuan-bi-vao-lop-1.html">
                    <div class="imgintro">
                        <img alt="Bé chuẩn bị vào lớp 1" src="scroll/uploads/books/img-2507-1369895451.jpg" class="img-hover-action book-css3-shadow" />
                    </div>

                </a>
            </div>
        </li>
        <li class="slider-item">
            <div id="img-block">
                <a class="book-picture-shadow" href="goi-sach-in/2507/be-chuan-bi-vao-lop-1.html">
                    <div class="imgintro">
                        <img alt="Bé chuẩn bị vào lớp 1" src="scroll/uploads/books/img-2507-1369895451.jpg" class="img-hover-action book-css3-shadow" />
                    </div>

                </a>
            </div>
        </li>
        <li class="slider-item">
            <div id="img-block">
                <a class="book-picture-shadow" href="goi-sach-in/2507/be-chuan-bi-vao-lop-1.html">
                    <div class="imgintro">
                        <img alt="Bé chuẩn bị vào lớp 1" src="scroll/uploads/books/img-2507-1369895451.jpg" class="img-hover-action book-css3-shadow" />
                    </div>

                </a>
            </div>
        </li>
        <li class="slider-item">
            <div id="img-block">
                <a class="book-picture-shadow" href="goi-sach-in/6595/nhung-y-tuong-kinh-doanh-tuyet-hay.html">
                    <div class="imgintro">
                        <img alt="Những ý tưởng kinh doanh tuyệt hay" src="scroll/uploads/books/img-6595-1429253696.jpg" class="img-hover-action book-css3-shadow" />
                    </div>

                </a>
            </div>
        </li>
        <li class="slider-item">
            <div id="img-block">
                <a class="book-picture-shadow" href="goi-sach-in/2507/be-chuan-bi-vao-lop-1.html">
                    <div class="imgintro">
                        <img alt="Bé chuẩn bị vào lớp 1" src="scroll/uploads/books/img-2507-1369895451.jpg" class="img-hover-action book-css3-shadow" />
                    </div>

                </a>
            </div>
        </li>
        <li class="slider-item">
            <div id="img-block">
                <a class="book-picture-shadow" href="goi-sach-in/6595/nhung-y-tuong-kinh-doanh-tuyet-hay.html">
                    <div class="imgintro">
                        <img alt="Những ý tưởng kinh doanh tuyệt hay" src="scroll/uploads/books/img-6595-1429253696.jpg" class="img-hover-action book-css3-shadow" />
                    </div>

                </a>
            </div>
        </li>
        <li class="slider-item">
            <div id="img-block">
                <a class="book-picture-shadow" href="goi-sach-in/2507/be-chuan-bi-vao-lop-1.html">
                    <div class="imgintro">
                        <img alt="Bé chuẩn bị vào lớp 1" src="scroll/uploads/books/img-2507-1369895451.jpg" class="img-hover-action book-css3-shadow" />
                    </div>

                </a>
            </div>
        </li>
    </ul>
</div>
</div>
</div>
</div>


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