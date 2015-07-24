<script>
    jssor_slider1_starter = function (containerId) {
        var options = {
            $AutoPlay: false,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
            $AutoPlaySteps: 4,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
            $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
            $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

            $ArrowKeyNavigation: false,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
            $SlideDuration: 160,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
            $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
            $SlideWidth: 150,                                   //[Optional] Width of every slide in pixels, default value is width of 'slides' container
            //$SlideHeight: 150,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
            $SlideSpacing: 3, 					                //[Optional] Space between each slide in pixels, default value is 0
            $DisplayPieces: 5,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
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
                $Steps: 5                                       //[Optional] Steps to go for each navigation request, default value is 1
            }
        };

        var jssor_slider1 = new $JssorSlider$(containerId, options);
        function ScaleSlider() {
            var bodyWidth = document.body.clientWidth - 20;
            if (bodyWidth)
                jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 993));
            else
                window.setTimeout(ScaleSlider, 30);
        }

        ScaleSlider();
        $Jssor$.$AddEvent(window, "load", ScaleSlider);

        $Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
    };
</script>
<div class="row box-slide">
    <div class="arrow">
        <h4>Sách mới đưa vào thư viện</h4>
    </div>
    <div class="arrow-right"></div>
    <div class="clear"></div>
    <div class="col-md-12" style="background-color: #B8763A;height: 1px;"></div>
    <div class="clear1"></div>
    <div class="boxproduct" style=" max-width: 1140px;">
        <div id="slider2_container" style="position: relative; top: 0px; left: 0px; width: 820px; height: 195px; overflow: hidden; ">
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                            background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                </div>
                <div style="position: absolute; display: block; background: url(<?php echo Yii::app()->baseUrl?>/img/loading.gif) no-repeat center center;
                            top: 0px; left: 0px;width: 100%;height:100%;">
                </div>
            </div>
            <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 820px; height: 280px; overflow: hidden;">
                <?php for($i = 0;$i<=15;$i++):?>
                <div style="width: 140px !important;">
                    <div style="position:absolute;z-index: 9999;">
                        <img class="boximg" style="height: 150px;" u="image" src="<?php echo Yii::app()->baseUrl?>/images/item.jpg" />
                       
                        <span style="font-size: 9px;">Clive Cussler</span>
                       
                        <a href="<?php echo Yii::app()->baseUrl.'/chi-tiet'?>">
                            <div class="read-book">
                                Đọc
                            </div>
                        </a>
                    </div>
                </div>
                <?php endfor;?>
            </div>
            <div u="navigator" class="jssorb03" style="bottom: 4px; right: 6px;;">
                <div u="prototype" style="display:none !important;"><div u="numbertemplate"></div></div>
            </div>
            <span u="arrowleft" class="jssora03l" style="top: 123px; left: -10px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora03r" style="top: 123px; right: -10px;">
            </span>
        </div>
    </div>
</div>
<div class="clear1"></div>
<div class="row box-slide">
    <div class="arrow">
        <h4>Sách sắp đưa vào thư viện</h4>
    </div>
    <div class="arrow-right"></div>
    <div class="clear"></div>
    <div class="col-md-12" style="background-color: #B8763A;height: 1px;"></div>
    <div class="clear1"></div>
    <div class="boxproduct" style="max-width: 1140px;">
        <div id="slider3_container" style="position: relative; top: 0px; left: 0px; width: 820px; height: 195px; overflow: hidden; ">
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                            background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                </div>
                <div style="position: absolute; display: block; background: url(<?php echo Yii::app()->baseUrl?>/img/loading.gif) no-repeat center center;
                            top: 0px; left: 0px;width: 100%;height:100%;">
                </div>
            </div>
            <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 820px; height: 280px; overflow: hidden;">
                <?php for($i = 0;$i<=15;$i++):?>
                <div style="width: 140px !important;">
                    <div style="position:absolute;z-index: 9999;">
                        <img class="boximg" style="height: 150px;" u="image" src="<?php echo Yii::app()->baseUrl?>/images/item.jpg" />
                       
                        <span style="font-size: 9px;">Clive Cussler</span>
                       
                        <a href="<?php echo Yii::app()->baseUrl.'/chi-tiet'?>">
                            <div class="read-book">
                                Đọc
                            </div>
                        </a>
                    </div>
                </div>
                <?php endfor;?>
            </div>
            <div u="navigator" class="jssorb03" style="bottom: 4px; right: 6px;;">
                <div u="prototype" style="display:none !important;"><div u="numbertemplate"></div></div>
            </div>
            <span u="arrowleft" class="jssora03l" style="top: 123px; left: -10px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora03r" style="top: 123px; right: -10px;">
            </span>
        </div>
    </div>
</div>
<div class="clear1"></div>
<div class="row box-slide">
    <div class="arrow">
        <h4>Sách hay nên đọc</h4>
    </div>
    <div class="arrow-right"></div>
    <div class="clear"></div>
    <div class="col-md-12" style="background-color: #B8763A;height: 1px;"></div>
    <div class="clear1"></div>
    <div class="boxproduct" style="max-width: 1140px;">
        <div id="slider4_container" style="position: relative; top: 0px; left: 0px; width: 820px; height: 195px; overflow: hidden; ">
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                            background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                </div>
                <div style="position: absolute; display: block; background: url(<?php echo Yii::app()->baseUrl?>/img/loading.gif) no-repeat center center;
                            top: 0px; left: 0px;width: 100%;height:100%;">
                </div>
            </div>
            <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 820px; height: 280px; overflow: hidden;">
                <?php for($i = 0;$i<=15;$i++):?>
                <div style="width: 140px !important;">
                    <div style="position:absolute;z-index: 9999;">
                        <img class="boximg" style="height: 150px;" u="image" src="<?php echo Yii::app()->baseUrl?>/images/item.jpg" />
                                         
                        <span style="font-size: 9px;">Clive Cussler ...</span>
                        
                        <a href="<?php echo Yii::app()->baseUrl.'/chi-tiet'?>">
                            <div class="read-book">
                                Đọc
                            </div>
                        </a>
                    </div>
                </div>
                <?php endfor;?>
            </div>
            <div u="navigator" class="jssorb03" style="bottom: 4px; right: 6px;;">
                <div u="prototype" style="display:none !important;"><div u="numbertemplate"></div></div>
            </div>
            <span u="arrowleft" class="jssora03l" style="top: 123px; left: -10px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora03r" style="top: 123px; right: -10px;">
            </span>
        </div>
    </div>
</div>
<div class="clear1"></div>
    <script>
        jssor_slider1_starter('slider2_container');
        jssor_slider1_starter('slider3_container');
        jssor_slider1_starter('slider4_container');
    </script>