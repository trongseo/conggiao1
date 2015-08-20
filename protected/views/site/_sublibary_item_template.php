<div id="img-block">
    <a target="_blank" href="/chi-tiet/<?php echo $value["id"]?>"  class="preview-img">
        <div class="main-imgintro">
            <img alt="<?php echo $value["book_name"]?>" WIDTH="96" height="144" src="<?php echo PATH_IMAGE.$value["bookimage_link"] ?>" class="img-hover-action book-css3-shadow" />

        </div>

    </a>
</div><div class="readbooknew" onclick="openNewWindow('<?php echo $value["id"]?>')">
    Đọc
</div>
<div class="preview-text">
    <span class="book-title"> <a target="_blank" href="/chi-tiet/<?php echo $value["id"]?>" > <?php echo $value["book_name"]?></a></span> <span class="author"><?php echo $value["author"]?></span> <span class="preview">
        <hr class="hrtext"/>
                    <?php echo $value["introduction"]?>
                </span>
</div>
<span class="dots">...</span>