
<script>
    jssor_slider1_starter = function (containerId,childId) {
        var options = {
            $AutoPlay: false,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
            $AutoPlaySteps: 3,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
            $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
            $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

            $ArrowKeyNavigation: false,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
            $SlideDuration: 160,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
            $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
            $SlideWidth: 200,                                   //[Optional] Width of every slide in pixels, default value is width of 'slides' container
            //$SlideHeight: 150,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
            $SlideSpacing: 3, 					                //[Optional] Space between each slide in pixels, default value is 0
            $DisplayPieces: 3,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
            $ParkingPosition: 0,                              //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
            $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
            $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
            $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

            $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                $SpacingX: 0,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                $SpacingY: 0,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
            },

            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter: 2,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
            }
        };

        var jssor_slider1 = new $JssorSlider$(containerId, options);
        function ScaleSlider() {
            var bodyWidth = document.body.clientWidth - 20;
            if (bodyWidth)
                jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 400));
            else
                window.setTimeout(ScaleSlider, 30);
        }
        var options1 = {
            $AutoPlay: false,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
            $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
            $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
            $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

            $ArrowKeyNavigation: false,                          //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
            $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
            $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
            //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
            //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
            $SlideSpacing: 0,                                   //[Optional] Space between each slide in pixels, default value is 0
            $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
            $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
            $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
            $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
            $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
            $StartIndex : -1,
            $DisableDrag:false,
            $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                $SpacingX: 10,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                $SpacingY: 10,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
            },

            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                $ChanceToShow: 2                                //[Required] 0 Never, 1 Mouse Over, 2 Always
            }
        };
        ScaleSlider();
        $Jssor$.$AddEvent(window, "load", ScaleSlider);

        $Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);

        var child_jssor_slider1 = new $JssorSlider$(childId, options1);
        function ScaleSlider1() {
            var parentWidth = child_jssor_slider1.$Elmt.parentNode.clientWidth;
            if (parentWidth)
                child_jssor_slider1.$ScaleWidth(Math.min(parentWidth, 390));
            else
                window.setTimeout(ScaleSlider1, 30);
        }
        ScaleSlider1();
        $(window).bind("load", ScaleSlider1);
        $(window).bind("resize", ScaleSlider1);
        $(window).bind("orientationchange", ScaleSlider1);
        jssor_slider1.$On($JssorSlider$.$EVT_PARK, function(slideIndex, fromIndex){
            child_jssor_slider1.$PlayTo(slideIndex - 1);
        });
    };
</script>
<div class="row">
    <div class="arrow">
        <h4><?php
            if($_REQUEST["myid"]!="0")
            {
                echo CommonDB::GetDataRow("tbl_index","id=".$_REQUEST["myid"]." and type=".$_REQUEST["mylevel"])["name"] ;
            }else{
                echo "Tất Cả" ;
            }

            ?></h4>
    </div>
    <div class="arrow-right"></div>
    <div class="clear"></div>
    <div class="col-md-12" style="background-color: #B8763A;height: 1px;"></div>
    <div class="clear1"></div>

</div>
<div class="row boxproduct">
<div class="arrow-home">
    <h4>Sách mới đưa vào thư viện</h4>
</div>
<div class="arrow-slide-right">(Có 30 quyển sách)</div>
<div class="clear"></div>
<div class="col-md-12 line-shadow"></div>
<div class="clear1"></div>
<div style="max-width: 1140px;">
<div style="max-width:600px;float:left;">
    <div id="child_slider2_container" style="position: relative; top: 0px; left: 0px; width: 390px; height: 234px; overflow: hidden;" jssor-slider="true">


        <div style="position: absolute; top: 0px; left: 0px; width: 500px; height: 300px; transform-origin: 0px 0px 0px; transform: scale(0.78);"><div class="" style="position: relative; top: 0px; left: 0px; width: 500px; height: 300px; overflow: visible; display: block;"><div u="loading" style="position: absolute; top: 0px; left: 0px; width: 500px; height: 300px; display: none;" debug-id="loading-container">
                    <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
						background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                    </div>
                    <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
						top: 0px; left: 0px;width: 100%;height:100%;">
                    </div>
                </div><div u="slides" style="position: absolute; left: 0px; top: 0px; width: 500px; height: 300px; overflow: hidden; z-index: 0;"><div debug-id="slide_container" style="position: absolute; z-index: 0; pointer-events: none; left: 500px; top: 0px;"></div></div><div u="slides" style="position: absolute; left: 0px; top: 0px; width: 500px; height: 300px; overflow: hidden; z-index: 0;" debug-id="slide-board"><div style="width: 500px; height: 300px; top: 0px; left: 0px; position: absolute; opacity: 0; background-color: rgb(0, 0, 0);"></div>
                    <div style="width: 120px !important; height: 300px; top: 0px; left: 500px; position: absolute; overflow: hidden;" debug-id="slide-0">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="img-shadow" style="height: 250px;" u="image" src="/images/item.jpg">
                            <div class="clear1"></div>
                            <div style="padding-left:30px;">
                                <a href="/chi-tiet">
                                    <div class="read-book">
                                        Đọc
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div style="float:right;width:275px;">
                            <a class="slid-pro-title">
                                <h4 style=" font-weight:bold;">Clive Cussler 0</h4>
                            </a>

                            Giới thiệu những cuốn sách quý giá nhất mọi thời đại, được chủ sở hữu chia sẽ lại, mới mong muốn đưa người đọc tới cảm gác sâu thawme,,,


                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 500px; height: 300px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
						background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
						top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="width: 120px !important; height: 300px; top: 0px; left: -500px; position: absolute; overflow: hidden;" debug-id="slide-1">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="img-shadow" style="height: 250px;" u="image" src="/images/item.jpg">
                            <div class="clear1"></div>
                            <div style="padding-left:30px;">
                                <a href="/chi-tiet">
                                    <div class="read-book">
                                        Đọc
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div style="float:right;width:275px;">
                            <a class="slid-pro-title">
                                <h4 style=" font-weight:bold;">Clive Cussler 1</h4>
                            </a>

                            Giới thiệu những cuốn sách quý giá nhất mọi thời đại, được chủ sở hữu chia sẽ lại, mới mong muốn đưa người đọc tới cảm gác sâu thawme,,,


                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 500px; height: 300px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
						background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
						top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="width: 120px !important; height: 300px; top: 0px; left: -500px; position: absolute; overflow: hidden;" debug-id="slide-2">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="img-shadow" style="height: 250px;" u="image" src="/images/item.jpg">
                            <div class="clear1"></div>
                            <div style="padding-left:30px;">
                                <a href="/chi-tiet">
                                    <div class="read-book">
                                        Đọc
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div style="float:right;width:275px;">
                            <a class="slid-pro-title">
                                <h4 style=" font-weight:bold;">Clive Cussler 2</h4>
                            </a>

                            Giới thiệu những cuốn sách quý giá nhất mọi thời đại, được chủ sở hữu chia sẽ lại, mới mong muốn đưa người đọc tới cảm gác sâu thawme,,,


                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 500px; height: 300px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
						background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
						top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="width: 120px !important; height: 300px; top: 0px; left: -500px; position: absolute; overflow: hidden;" debug-id="slide-3">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="img-shadow" style="height: 250px;" u="image" src="/images/item.jpg">
                            <div class="clear1"></div>
                            <div style="padding-left:30px;">
                                <a href="/chi-tiet">
                                    <div class="read-book">
                                        Đọc
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div style="float:right;width:275px;">
                            <a class="slid-pro-title">
                                <h4 style=" font-weight:bold;">Clive Cussler 3</h4>
                            </a>

                            Giới thiệu những cuốn sách quý giá nhất mọi thời đại, được chủ sở hữu chia sẽ lại, mới mong muốn đưa người đọc tới cảm gác sâu thawme,,,


                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 500px; height: 300px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
						background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
						top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="width: 120px !important; height: 300px; top: 0px; left: -500px; position: absolute; overflow: hidden;" debug-id="slide-4">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="img-shadow" style="height: 250px;" u="image" src="/images/item.jpg">
                            <div class="clear1"></div>
                            <div style="padding-left:30px;">
                                <a href="/chi-tiet">
                                    <div class="read-book">
                                        Đọc
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div style="float:right;width:275px;">
                            <a class="slid-pro-title">
                                <h4 style=" font-weight:bold;">Clive Cussler 4</h4>
                            </a>

                            Giới thiệu những cuốn sách quý giá nhất mọi thời đại, được chủ sở hữu chia sẽ lại, mới mong muốn đưa người đọc tới cảm gác sâu thawme,,,


                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 500px; height: 300px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
						background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
						top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="width: 120px !important; height: 300px; top: 0px; left: 0px; position: absolute; overflow: hidden;" debug-id="slide-5">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="img-shadow" style="height: 250px;" u="image" src="/images/item.jpg">
                            <div class="clear1"></div>
                            <div style="padding-left:30px;">
                                <a href="/chi-tiet">
                                    <div class="read-book">
                                        Đọc
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div style="float:right;width:275px;">
                            <a class="slid-pro-title">
                                <h4 style=" font-weight:bold;">Clive Cussler 5</h4>
                            </a>

                            Giới thiệu những cuốn sách quý giá nhất mọi thời đại, được chủ sở hữu chia sẽ lại, mới mong muốn đưa người đọc tới cảm gác sâu thawme,,,


                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 500px; height: 300px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
						background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
						top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                </div></div></div></div>
</div>
<div style="border-radius: 10px;max-width:585px;float:left;padding:17px 2px;background:#dcc1a4;margin:19px 0px 25px 10px;">
    <div id="slider2_container" style="position: relative; top: 0px; left: 0px; width: 400px; height: 95.1219512195122px; overflow: hidden;" jssor-slider="true">





        <!-- Arrow Right -->

        <div style="position: absolute; top: 0px; left: 0px; width: 820px; height: 195px; transform-origin: 0px 0px 0px; transform: scale(0.487804878048781);"><div class="" style="position: relative; top: 0px; left: 0px; width: 820px; height: 195px; overflow: visible; display: block;"><div u="loading" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 280px; display: none;" debug-id="loading-container">
                    <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
								background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                    </div>
                    <div style="position: absolute; display: block; background: url(/img/loading.gif) no-repeat center center;
								top: 0px; left: 0px;width: 100%;height:100%;">
                    </div>
                </div><div u="slides" style="position: absolute; left: 0px; top: 0px; width: 820px; height: 280px; overflow: hidden; z-index: 0;"><div debug-id="slide_container" style="position: absolute; z-index: 0; pointer-events: none; left: 0px; top: 0px;"></div></div><div u="slides" style="position: absolute; left: 0px; top: 0px; width: 820px; height: 280px; overflow: hidden; z-index: 0;" debug-id="slide-board"><div style="width: 200px; height: 280px; top: 0px; left: 0px; position: absolute; opacity: 0; background-color: rgb(0, 0, 0);"></div>
                    <div style="padding-left: 30px; width: 120px !important; height: 280px; top: 0px; left: 0px; position: absolute; overflow: hidden;" debug-id="slide-0">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="boximg" style="height: 190px;" u="image" src="/images/item.jpg">

                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 280px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
								background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(/img/loading.gif) no-repeat center center;
								top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="padding-left: 30px; width: 120px !important; height: 280px; top: 0px; left: 203px; position: absolute; overflow: hidden;" debug-id="slide-1">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="boximg" style="height: 190px;" u="image" src="/images/item.jpg">

                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 280px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
								background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(/img/loading.gif) no-repeat center center;
								top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="padding-left: 30px; width: 120px !important; height: 280px; top: 0px; left: 406px; position: absolute; overflow: hidden;" debug-id="slide-2">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="boximg" style="height: 190px;" u="image" src="/images/item.jpg">

                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 280px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
								background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(/img/loading.gif) no-repeat center center;
								top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="padding-left: 30px; width: 120px !important; height: 280px; top: 0px; left: 609px; position: absolute; overflow: hidden;" debug-id="slide-3">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="boximg" style="height: 190px;" u="image" src="/images/item.jpg">

                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 280px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
								background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(/img/loading.gif) no-repeat center center;
								top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="padding-left: 30px; width: 120px !important; height: 280px; top: 0px; left: -203px; position: absolute; overflow: hidden;" debug-id="slide-4">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="boximg" style="height: 190px;" u="image" src="/images/item.jpg">

                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 280px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
								background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(/img/loading.gif) no-repeat center center;
								top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="padding-left: 30px; width: 120px !important; height: 280px; top: 0px; left: -203px; position: absolute; overflow: hidden;" debug-id="slide-5">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="boximg" style="height: 190px;" u="image" src="/images/item.jpg">

                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 280px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
								background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(/img/loading.gif) no-repeat center center;
								top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                </div><div u="navigator" class="jssorb03" style="bottom: 4px; right: 6px; width: 126px; height: 21px;">

                    <div u="prototype" style="display: none !important; position: absolute; left: 0px; top: 0px;" class="av"><span class="">1</span></div><div u="prototype" style="display: none !important; position: absolute; left: 21px; top: 0px;"><span class="">2</span></div><div u="prototype" style="display: none !important; position: absolute; left: 42px; top: 0px;"><span class="">3</span></div><div u="prototype" style="display: none !important; position: absolute; left: 63px; top: 0px;"><span class="">4</span></div><div u="prototype" style="display: none !important; position: absolute; left: 84px; top: 0px;"><span class="">5</span></div><div u="prototype" style="display: none !important; position: absolute; left: 105px; top: 0px;"><span class="">6</span></div></div><span u="arrowleft" class="jssora03l" style="top: 70px; left: -10px; display: none;">
				</span><span u="arrowright" class="jssora03r" style="top: 70px; right: 10px; display: none;">
				</span></div></div></div>
    <div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>
<div class="clear1"></div>
<div class="row boxproduct">
<div class="arrow-home">
    <h4>Sách sắp đưa vào thư viện</h4>
</div>
<div class="arrow-slide-right">(Có 32 quyển sách)</div>
<div class="clear"></div>
<div class="col-md-12 line-shadow"></div>
<div class="clear1"></div>
<div style="max-width: 1140px;">
<div style="max-width:600px;float:left;">
    <div id="child_slider3_container" style="position: relative; top: 0px; left: 0px; width: 390px; height: 234px; overflow: hidden;" jssor-slider="true">


        <div style="position: absolute; top: 0px; left: 0px; width: 500px; height: 300px; transform-origin: 0px 0px 0px; transform: scale(0.78);"><div class="" style="position: relative; top: 0px; left: 0px; width: 500px; height: 300px; overflow: visible; display: block;"><div u="loading" style="position: absolute; top: 0px; left: 0px; width: 500px; height: 300px; display: none;" debug-id="loading-container">
                    <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
						background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                    </div>
                    <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
						top: 0px; left: 0px;width: 100%;height:100%;">
                    </div>
                </div><div u="slides" style="position: absolute; left: 0px; top: 0px; width: 500px; height: 300px; overflow: hidden; z-index: 0;"><div debug-id="slide_container" style="position: absolute; z-index: 0; pointer-events: none; left: 500px; top: 0px;"></div></div><div u="slides" style="position: absolute; left: 0px; top: 0px; width: 500px; height: 300px; overflow: hidden; z-index: 0;" debug-id="slide-board"><div style="width: 500px; height: 300px; top: 0px; left: 0px; position: absolute; opacity: 0; background-color: rgb(0, 0, 0);"></div>
                    <div style="width: 120px !important; height: 300px; top: 0px; left: 500px; position: absolute; overflow: hidden;" debug-id="slide-0">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="img-shadow" style="height: 250px;" u="image" src="/images/item.jpg">
                            <div class="clear1"></div>
                            <div style="padding-left:30px;">
                                <a href="/chi-tiet">
                                    <div class="read-book">
                                        Đọc
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div style="float:right;width:275px;">
                            <a class="slid-pro-title">
                                <h4 style=" font-weight:bold;">Clive Cussler 0</h4>
                            </a>

                            Giới thiệu những cuốn sách quý giá nhất mọi thời đại, được chủ sở hữu chia sẽ lại, mới mong muốn đưa người đọc tới cảm gác sâu thawme,,,Giới thiệu những cuốn sách quý giá nhất mọi thời đại, được chủ sở hữu chia sẽ lại, mới mong muốn đưa người đọc tới cảm gác sâu thawme,,,

                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 500px; height: 300px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
						background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
						top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="width: 120px !important; height: 300px; top: 0px; left: -500px; position: absolute; overflow: hidden;" debug-id="slide-1">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="img-shadow" style="height: 250px;" u="image" src="/images/item.jpg">
                            <div class="clear1"></div>
                            <div style="padding-left:30px;">
                                <a href="/chi-tiet">
                                    <div class="read-book">
                                        Đọc
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div style="float:right;width:275px;">
                            <a class="slid-pro-title">
                                <h4 style=" font-weight:bold;">Clive Cussler 1</h4>
                            </a>

                            Giới thiệu những cuốn sách quý giá nhất mọi thời đại, được chủ sở hữu chia sẽ lại, mới mong muốn đưa người đọc tới cảm gác sâu thawme,,,Giới thiệu những cuốn sách quý giá nhất mọi thời đại, được chủ sở hữu chia sẽ lại, mới mong muốn đưa người đọc tới cảm gác sâu thawme,,,

                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 500px; height: 300px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
						background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
						top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="width: 120px !important; height: 300px; top: 0px; left: -500px; position: absolute; overflow: hidden;" debug-id="slide-2">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="img-shadow" style="height: 250px;" u="image" src="/images/item.jpg">
                            <div class="clear1"></div>
                            <div style="padding-left:30px;">
                                <a href="/chi-tiet">
                                    <div class="read-book">
                                        Đọc
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div style="float:right;width:275px;">
                            <a class="slid-pro-title">
                                <h4 style=" font-weight:bold;">Clive Cussler 2</h4>
                            </a>

                            Giới thiệu những cuốn sách quý giá nhất mọi thời đại, được chủ sở hữu chia sẽ lại, mới mong muốn đưa người đọc tới cảm gác sâu thawme,,,Giới thiệu những cuốn sách quý giá nhất mọi thời đại, được chủ sở hữu chia sẽ lại, mới mong muốn đưa người đọc tới cảm gác sâu thawme,,,

                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 500px; height: 300px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
						background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
						top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="width: 120px !important; height: 300px; top: 0px; left: -500px; position: absolute; overflow: hidden;" debug-id="slide-3">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="img-shadow" style="height: 250px;" u="image" src="/images/item.jpg">
                            <div class="clear1"></div>
                            <div style="padding-left:30px;">
                                <a href="/chi-tiet">
                                    <div class="read-book">
                                        Đọc
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div style="float:right;width:275px;">
                            <a class="slid-pro-title">
                                <h4 style=" font-weight:bold;">Clive Cussler 3</h4>
                            </a>

                            Giới thiệu những cuốn sách quý giá nhất mọi thời đại, được chủ sở hữu chia sẽ lại, mới mong muốn đưa người đọc tới cảm gác sâu thawme,,,Giới thiệu những cuốn sách quý giá nhất mọi thời đại, được chủ sở hữu chia sẽ lại, mới mong muốn đưa người đọc tới cảm gác sâu thawme,,,

                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 500px; height: 300px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
						background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
						top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="width: 120px !important; height: 300px; top: 0px; left: -500px; position: absolute; overflow: hidden;" debug-id="slide-4">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="img-shadow" style="height: 250px;" u="image" src="/images/item.jpg">
                            <div class="clear1"></div>
                            <div style="padding-left:30px;">
                                <a href="/chi-tiet">
                                    <div class="read-book">
                                        Đọc
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div style="float:right;width:275px;">
                            <a class="slid-pro-title">
                                <h4 style=" font-weight:bold;">Clive Cussler 4</h4>
                            </a>

                            Giới thiệu những cuốn sách quý giá nhất mọi thời đại, được chủ sở hữu chia sẽ lại, mới mong muốn đưa người đọc tới cảm gác sâu thawme,,,Giới thiệu những cuốn sách quý giá nhất mọi thời đại, được chủ sở hữu chia sẽ lại, mới mong muốn đưa người đọc tới cảm gác sâu thawme,,,

                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 500px; height: 300px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
						background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
						top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="width: 120px !important; height: 300px; top: 0px; left: 0px; position: absolute; overflow: hidden;" debug-id="slide-5">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="img-shadow" style="height: 250px;" u="image" src="/images/item.jpg">
                            <div class="clear1"></div>
                            <div style="padding-left:30px;">
                                <a href="/chi-tiet">
                                    <div class="read-book">
                                        Đọc
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div style="float:right;width:275px;">
                            <a class="slid-pro-title">
                                <h4 style=" font-weight:bold;">Clive Cussler 5</h4>
                            </a>

                            Giới thiệu những cuốn sách quý giá nhất mọi thời đại, được chủ sở hữu chia sẽ lại, mới mong muốn đưa người đọc tới cảm gác sâu thawme,,,Giới thiệu những cuốn sách quý giá nhất mọi thời đại, được chủ sở hữu chia sẽ lại, mới mong muốn đưa người đọc tới cảm gác sâu thawme,,,

                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 500px; height: 300px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
						background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
						top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                </div></div></div></div>
</div>
<div style="border-radius: 10px;max-width:585px;float:left;padding:17px 2px;background:#dcc1a4;margin:19px 0px 25px 10px;">
    <div id="slider3_container" style="position: relative; top: 0px; left: 0px; width: 400px; height: 95.1219512195122px; overflow: hidden;" jssor-slider="true">





        <!-- Arrow Right -->

        <div style="position: absolute; top: 0px; left: 0px; width: 820px; height: 195px; transform-origin: 0px 0px 0px; transform: scale(0.487804878048781);"><div class="" style="position: relative; top: 0px; left: 0px; width: 820px; height: 195px; overflow: visible; display: block;"><div u="loading" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 280px; display: none;" debug-id="loading-container">
                    <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
								background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                    </div>
                    <div style="position: absolute; display: block; background: url(/img/loading.gif) no-repeat center center;
								top: 0px; left: 0px;width: 100%;height:100%;">
                    </div>
                </div><div u="slides" style="position: absolute; left: 0px; top: 0px; width: 820px; height: 280px; overflow: hidden; z-index: 0;"><div debug-id="slide_container" style="position: absolute; z-index: 0; pointer-events: none; left: 0px; top: 0px;"></div></div><div u="slides" style="position: absolute; left: 0px; top: 0px; width: 820px; height: 280px; overflow: hidden; z-index: 0;" debug-id="slide-board"><div style="width: 200px; height: 280px; top: 0px; left: 0px; position: absolute; opacity: 0; background-color: rgb(0, 0, 0);"></div>
                    <div style="padding-left: 30px; width: 120px !important; height: 280px; top: 0px; left: 0px; position: absolute; overflow: hidden;" debug-id="slide-0">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="boximg" style="height: 190px;" u="image" src="/images/item.jpg">

                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 280px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
								background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(/img/loading.gif) no-repeat center center;
								top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="padding-left: 30px; width: 120px !important; height: 280px; top: 0px; left: 203px; position: absolute; overflow: hidden;" debug-id="slide-1">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="boximg" style="height: 190px;" u="image" src="/images/item.jpg">

                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 280px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
								background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(/img/loading.gif) no-repeat center center;
								top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="padding-left: 30px; width: 120px !important; height: 280px; top: 0px; left: 406px; position: absolute; overflow: hidden;" debug-id="slide-2">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="boximg" style="height: 190px;" u="image" src="/images/item.jpg">

                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 280px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
								background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(/img/loading.gif) no-repeat center center;
								top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="padding-left: 30px; width: 120px !important; height: 280px; top: 0px; left: 609px; position: absolute; overflow: hidden;" debug-id="slide-3">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="boximg" style="height: 190px;" u="image" src="/images/item.jpg">

                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 280px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
								background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(/img/loading.gif) no-repeat center center;
								top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="padding-left: 30px; width: 120px !important; height: 280px; top: 0px; left: -203px; position: absolute; overflow: hidden;" debug-id="slide-4">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="boximg" style="height: 190px;" u="image" src="/images/item.jpg">

                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 280px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
								background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(/img/loading.gif) no-repeat center center;
								top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="padding-left: 30px; width: 120px !important; height: 280px; top: 0px; left: -203px; position: absolute; overflow: hidden;" debug-id="slide-5">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="boximg" style="height: 190px;" u="image" src="/images/item.jpg">

                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 280px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
								background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(/img/loading.gif) no-repeat center center;
								top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                </div><div u="navigator" class="jssorb03" style="bottom: 4px; right: 6px; width: 126px; height: 21px;">

                    <div u="prototype" style="display: none !important; position: absolute; left: 0px; top: 0px;" class="av"><span class="">1</span></div><div u="prototype" style="display: none !important; position: absolute; left: 21px; top: 0px;"><span class="">2</span></div><div u="prototype" style="display: none !important; position: absolute; left: 42px; top: 0px;"><span class="">3</span></div><div u="prototype" style="display: none !important; position: absolute; left: 63px; top: 0px;"><span class="">4</span></div><div u="prototype" style="display: none !important; position: absolute; left: 84px; top: 0px;"><span class="">5</span></div><div u="prototype" style="display: none !important; position: absolute; left: 105px; top: 0px;"><span class="">6</span></div></div><span u="arrowleft" class="jssora03l" style="top: 70px; left: -10px; display: none;">
				</span><span u="arrowright" class="jssora03r" style="top: 70px; right: 10px; display: none;">
				</span></div></div></div>
    <div class="clear"></div>
</div>
<div class="clear"></div>
</div>

</div>
<div class="clear1"></div>
<div class="row boxproduct">
<div class="arrow-home">
    <h4>Sách hay nên đọc</h4>
</div>
<div class="arrow-slide-right">(Có 35 quyển sách)</div>
<div class="clear"></div>
<div class="col-md-12 line-shadow"></div>
<div class="clear1"></div>
<div style="max-width: 1140px;">
<div style="max-width:600px;float:left;">
    <div id="child_slider4_container" style="position: relative; top: 0px; left: 0px; width: 390px; height: 234px; overflow: hidden;" jssor-slider="true">


        <div style="position: absolute; top: 0px; left: 0px; width: 500px; height: 300px; transform-origin: 0px 0px 0px; transform: scale(0.78);"><div class="" style="position: relative; top: 0px; left: 0px; width: 500px; height: 300px; overflow: visible; display: block;"><div u="loading" style="position: absolute; top: 0px; left: 0px; width: 500px; height: 300px; display: none;" debug-id="loading-container">
                    <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
						background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                    </div>
                    <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
						top: 0px; left: 0px;width: 100%;height:100%;">
                    </div>
                </div><div u="slides" style="position: absolute; left: 0px; top: 0px; width: 500px; height: 300px; overflow: hidden; z-index: 0;"><div debug-id="slide_container" style="position: absolute; z-index: 0; pointer-events: none; left: 500px; top: 0px;"></div></div><div u="slides" style="position: absolute; left: 0px; top: 0px; width: 500px; height: 300px; overflow: hidden; z-index: 0;" debug-id="slide-board"><div style="width: 500px; height: 300px; top: 0px; left: 0px; position: absolute; opacity: 0; background-color: rgb(0, 0, 0);"></div>
                    <div style="width: 120px !important; height: 300px; top: 0px; left: 500px; position: absolute; overflow: hidden;" debug-id="slide-0">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="img-shadow" style="height: 250px;" u="image" src="/images/item.jpg">
                            <div class="clear1"></div>
                            <div style="padding-left:30px;">
                                <a href="/chi-tiet">
                                    <div class="read-book">
                                        Đọc
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div style="float:right;width:275px;">
                            <a class="slid-pro-title">
                                <h4 style=" font-weight:bold;">Clive Cussler 0</h4>
                            </a>

                            Giới thiệu những cuốn sách quý giá nhất mọi thời đại, được chủ sở hữu chia sẽ lại, mới mong muốn đưa người đọc tới cảm gác sâu thawme,,,


                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 500px; height: 300px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
						background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
						top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="width: 120px !important; height: 300px; top: 0px; left: -500px; position: absolute; overflow: hidden;" debug-id="slide-1">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="img-shadow" style="height: 250px;" u="image" src="/images/item.jpg">
                            <div class="clear1"></div>
                            <div style="padding-left:30px;">
                                <a href="/chi-tiet">
                                    <div class="read-book">
                                        Đọc
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div style="float:right;width:275px;">
                            <a class="slid-pro-title">
                                <h4 style=" font-weight:bold;">Clive Cussler 1</h4>
                            </a>

                            Giới thiệu những cuốn sách quý giá nhất mọi thời đại, được chủ sở hữu chia sẽ lại, mới mong muốn đưa người đọc tới cảm gác sâu thawme,,,


                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 500px; height: 300px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
						background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
						top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="width: 120px !important; height: 300px; top: 0px; left: -500px; position: absolute; overflow: hidden;" debug-id="slide-2">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="img-shadow" style="height: 250px;" u="image" src="/images/item.jpg">
                            <div class="clear1"></div>
                            <div style="padding-left:30px;">
                                <a href="/chi-tiet">
                                    <div class="read-book">
                                        Đọc
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div style="float:right;width:275px;">
                            <a class="slid-pro-title">
                                <h4 style=" font-weight:bold;">Clive Cussler 2</h4>
                            </a>

                            Giới thiệu những cuốn sách quý giá nhất mọi thời đại, được chủ sở hữu chia sẽ lại, mới mong muốn đưa người đọc tới cảm gác sâu thawme,,,


                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 500px; height: 300px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
						background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
						top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="width: 120px !important; height: 300px; top: 0px; left: -500px; position: absolute; overflow: hidden;" debug-id="slide-3">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="img-shadow" style="height: 250px;" u="image" src="/images/item.jpg">
                            <div class="clear1"></div>
                            <div style="padding-left:30px;">
                                <a href="/chi-tiet">
                                    <div class="read-book">
                                        Đọc
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div style="float:right;width:275px;">
                            <a class="slid-pro-title">
                                <h4 style=" font-weight:bold;">Clive Cussler 3</h4>
                            </a>

                            Giới thiệu những cuốn sách quý giá nhất mọi thời đại, được chủ sở hữu chia sẽ lại, mới mong muốn đưa người đọc tới cảm gác sâu thawme,,,


                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 500px; height: 300px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
						background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
						top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="width: 120px !important; height: 300px; top: 0px; left: -500px; position: absolute; overflow: hidden;" debug-id="slide-4">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="img-shadow" style="height: 250px;" u="image" src="/images/item.jpg">
                            <div class="clear1"></div>
                            <div style="padding-left:30px;">
                                <a href="/chi-tiet">
                                    <div class="read-book">
                                        Đọc
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div style="float:right;width:275px;">
                            <a class="slid-pro-title">
                                <h4 style=" font-weight:bold;">Clive Cussler 4</h4>
                            </a>

                            Giới thiệu những cuốn sách quý giá nhất mọi thời đại, được chủ sở hữu chia sẽ lại, mới mong muốn đưa người đọc tới cảm gác sâu thawme,,,


                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 500px; height: 300px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
						background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
						top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="width: 120px !important; height: 300px; top: 0px; left: 0px; position: absolute; overflow: hidden;" debug-id="slide-5">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="img-shadow" style="height: 250px;" u="image" src="/images/item.jpg">
                            <div class="clear1"></div>
                            <div style="padding-left:30px;">
                                <a href="/chi-tiet">
                                    <div class="read-book">
                                        Đọc
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div style="float:right;width:275px;">
                            <a class="slid-pro-title">
                                <h4 style=" font-weight:bold;">Clive Cussler 5</h4>
                            </a>

                            Giới thiệu những cuốn sách quý giá nhất mọi thời đại, được chủ sở hữu chia sẽ lại, mới mong muốn đưa người đọc tới cảm gác sâu thawme,,,


                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 500px; height: 300px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
						background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
						top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                </div></div></div></div>
</div>
<div style="border-radius: 10px;max-width:585px;float:left;padding:17px 2px;background:#dcc1a4;margin:19px 0px 25px 10px;">
    <div id="slider4_container" style="position: relative; top: 0px; left: 0px; width: 400px; height: 95.1219512195122px; overflow: hidden;" jssor-slider="true">





        <!-- Arrow Right -->

        <div style="position: absolute; top: 0px; left: 0px; width: 820px; height: 195px; transform-origin: 0px 0px 0px; transform: scale(0.487804878048781);"><div class="" style="position: relative; top: 0px; left: 0px; width: 820px; height: 195px; overflow: visible; display: block;"><div u="loading" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 280px; display: none;" debug-id="loading-container">
                    <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
								background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                    </div>
                    <div style="position: absolute; display: block; background: url(/img/loading.gif) no-repeat center center;
								top: 0px; left: 0px;width: 100%;height:100%;">
                    </div>
                </div><div u="slides" style="position: absolute; left: 0px; top: 0px; width: 820px; height: 280px; overflow: hidden; z-index: 0;"><div debug-id="slide_container" style="position: absolute; z-index: 0; pointer-events: none; left: 0px; top: 0px;"></div></div><div u="slides" style="position: absolute; left: 0px; top: 0px; width: 820px; height: 280px; overflow: hidden; z-index: 0;" debug-id="slide-board"><div style="width: 200px; height: 280px; top: 0px; left: 0px; position: absolute; opacity: 0; background-color: rgb(0, 0, 0);"></div>
                    <div style="padding-left: 30px; width: 120px !important; height: 280px; top: 0px; left: 0px; position: absolute; overflow: hidden;" debug-id="slide-0">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="boximg" style="height: 190px;" u="image" src="/images/item.jpg">

                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 280px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
								background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(/img/loading.gif) no-repeat center center;
								top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="padding-left: 30px; width: 120px !important; height: 280px; top: 0px; left: 203px; position: absolute; overflow: hidden;" debug-id="slide-1">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="boximg" style="height: 190px;" u="image" src="/images/item.jpg">

                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 280px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
								background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(/img/loading.gif) no-repeat center center;
								top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="padding-left: 30px; width: 120px !important; height: 280px; top: 0px; left: 406px; position: absolute; overflow: hidden;" debug-id="slide-2">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="boximg" style="height: 190px;" u="image" src="/images/item.jpg">

                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 280px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
								background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(/img/loading.gif) no-repeat center center;
								top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="padding-left: 30px; width: 120px !important; height: 280px; top: 0px; left: 609px; position: absolute; overflow: hidden;" debug-id="slide-3">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="boximg" style="height: 190px;" u="image" src="/images/item.jpg">

                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 280px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
								background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(/img/loading.gif) no-repeat center center;
								top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="padding-left: 30px; width: 120px !important; height: 280px; top: 0px; left: -203px; position: absolute; overflow: hidden;" debug-id="slide-4">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="boximg" style="height: 190px;" u="image" src="/images/item.jpg">

                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 280px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
								background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(/img/loading.gif) no-repeat center center;
								top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                    <div style="padding-left: 30px; width: 120px !important; height: 280px; top: 0px; left: -203px; position: absolute; overflow: hidden;" debug-id="slide-5">
                        <div style="position:absolute;z-index: 9999;">
                            <img class="boximg" style="height: 190px;" u="image" src="/images/item.jpg">

                        </div>
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 280px; z-index: 1000; display: none;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
								background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(/img/loading.gif) no-repeat center center;
								top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div></div>
                </div><div u="navigator" class="jssorb03" style="bottom: 4px; right: 6px; width: 126px; height: 21px;">

                    <div u="prototype" style="display: none !important; position: absolute; left: 0px; top: 0px;" class="av"><span class="">1</span></div><div u="prototype" style="display: none !important; position: absolute; left: 21px; top: 0px;"><span class="">2</span></div><div u="prototype" style="display: none !important; position: absolute; left: 42px; top: 0px;"><span class="">3</span></div><div u="prototype" style="display: none !important; position: absolute; left: 63px; top: 0px;"><span class="">4</span></div><div u="prototype" style="display: none !important; position: absolute; left: 84px; top: 0px;"><span class="">5</span></div><div u="prototype" style="display: none !important; position: absolute; left: 105px; top: 0px;"><span class="">6</span></div></div><span u="arrowleft" class="jssora03l" style="top: 70px; left: -10px; display: none;">
				</span><span u="arrowright" class="jssora03r" style="top: 70px; right: 10px; display: none;">
				</span></div></div></div>
    <div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>
<div class="clear1"></div>
<script>
    jssor_slider1_starter('slider2_container','child_slider2_container');
    jssor_slider1_starter('slider3_container','child_slider3_container');
    jssor_slider1_starter('slider4_container','child_slider4_container');
</script>
