<div id="img-block">
    <div target="_blank" href="/chi-tiet/<?php echo $value["id"]?>"  class="preview-img ddddd">
        <div class="mainimgintro">
            <img alt="<?php echo $value["description"]?>" WIDTH="96" height="144" src="<?php echo PATH_IMAGE_REF.$value["image_name"] ?>" class="img-hover-action book-css3-shadow boximg" onclick="openNewWindow('<?php echo $value["id"]?>')"   />

        </div>
        <div class="viewtext" >
        <div class="read-booknew1" onclick="openNewWindow('<?php echo $value["id"]?>')"  >
            Đọc
        </div>
        </div>
    </div>

</div>


<div class="preview-text ddddd" >
    <span class="book-title"> <a target="_blank" href="/chi-tiet/<?php echo $value["id"]?>" > <?php echo $value["title"]?></a></span>  <span class="preview">
                  <hr class="hrtext"/>
                    <?php echo $value["description"]?>
                </span>
</div>
<span class="dots">...</span>
