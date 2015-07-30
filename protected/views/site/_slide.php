<div class="row">
    <div class="slider-home-container">
        <div class="col-md-8 slide-left-container">
            <div id="slider1_container" style="display: none; position: relative; margin: 0 auto;
								top: 0px; left: 0px; width: 675px; height: 253px; overflow: hidden;">
                <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
										top: 0px; left: 0px; width: 100%; height: 100%;">
                    </div>
                    <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
										top: 0px; left: 0px; width: 100%; height: 100%;">
                    </div>
                </div>
                <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1130px; height: 300px; overflow: hidden;">
                    <div>
                        <img u="image" src="img/slide/01.jpg" />
                    </div>
                    <div>
                        <img u="image" src="img/slide/02.jpg" />
                    </div>
                    <div>
                        <img u="image" src="img/slide/03.jpg" />
                    </div>
                    <div>
                        <img u="image" src="img/slide/04.jpg" />
                    </div>
                </div>
                <div u="navigator" class="jssorb21" style="position: absolute; bottom: 26px; left: 6px;">
                    <div u="prototype" style="POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
                </div>
									<span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
									</span>
									<span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px">
									</span>
            </div>
            <script>
                jQuery(document).ready(function ($) {
                    var options = {
                        $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                        $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                        $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                        $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                        $ArrowKeyNavigation: true,                          //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                        $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                        $SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                        $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                        //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                        //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                        $SlideSpacing: 0,                                   //[Optional] Space between each slide in pixels, default value is 0
                        $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                        $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                        $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                        $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                        $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                        $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                            $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                            $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                            $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                            $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                            $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                            $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                            $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                            $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                            $Scale: false,                                  //Scales bullets navigator or not while slider scale
                        },

                        $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                            $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                            $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                            $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                            $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                        }
                    };
                    $("#slider1_container").css("display", "block");
                    var jssor_slider1 = new $JssorSlider$("slider1_container", options);
                    function ScaleSlider() {
                        var bodyWidth = document.body.clientWidth - 30;
                        if (bodyWidth)
                            jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 675));
                        else
                            window.setTimeout(ScaleSlider, 30);
                    }
                    ScaleSlider();
                    $(window).bind("load", ScaleSlider);
                    $(window).bind("resize", ScaleSlider);
                    $(window).bind("orientationchange", ScaleSlider);
                });
            </script>
        </div>
        <div class="col-md-4 slide-right-container">
            <img u="image" src="images/banner-right.png" style="width:328px;" />
            <div class="slide-right-content">
                <a href="/thu-vien">
                    <span style="font-size:17px;font-weight: bold;color: #D5904D;">Nhấn</span>
                    <span style="font-size:14px;font-weight: bold;color: #5f2d08;">vào đây để vào</span>
                    <span style="font-size:17px;font-weight: bold;color: #D5904D;">Thư viện</span>
                </a>
            </div>
        </div>
    </div>
</div>
<style>
    .slide-left-container {
        margin: 0px 0px 0px 0px;
    }
    .slide-right-container {

        position: relative;
    }

    .slide-right-container {
        margin: 1px -12px;
        position: relative;
    }
</style>