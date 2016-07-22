<!--<table  class="colorconggiao" style="width:0%;margin-top:10px"> <tbody><tr> <td width="1">-->
<!--            <img src="/img/left.png"></td>-->
<!--        <td style="background:url('/img/middle.png') repeat-x;text-align:center;vertical-align:middle;white-space: nowrap;">-->
<!--            <h4>--><?php //echo $myTextPath; ?><!--</h4>-->
<!--        </td> <td width="1"> <img src="/img/right.png"></td> </tr>          </tbody></table>-->

<style>
    .dvpath{
        margin-top:10px;
        display: inline-block;
    }

    .slider_thumbnails{


        display:inline-block;
        float:left;
    }


    .inll{
        height:36px;
        display:inline-block;
        float:left;
        background:url('/img/middle.png') repeat-x;
        white-space: nowrap;
        padding-top: 9px;

    }
</style>

<div id="slider_container " class="dvpath">
    <div class="slider_thumbnails"> <img id="d3" src="/img/left.png" border="0" /> </div>
    <div class="inll colorconggiao" >  <h4><?php echo $myTextPath; ?></h4> </div>
    <div class="slider_thumbnails"> <img id="3" src="/img/right.png" border="0" /> </div>
</div>

