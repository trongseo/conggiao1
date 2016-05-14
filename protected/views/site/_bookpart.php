<?php

// 0:sắp phát hành; 1: mới phát hành; 2: là bình thuờng
//SELECT * FROM tbl_book WHERE book_type=1 AND delete_logic_flg=0
//        good_book_flg
$IDDetailBook = Common::getSession(ID_BOOK);
//$queryS="SELECT * FROM tbl_book WHERE delete_logic_flg=0 AND id IN(
//    SELECT relate_book_id FROM `tbl_relate_book` WHERE book_id=$idBook
//  UNION
//    SELECT book_id AS relate_book_id FROM `tbl_relate_book` WHERE relate_book_id=$idBook )
//    ORDER BY book_name
//     ";
$queryS="SELECT *,CONCAT(book_id,'_',part)  AS book_id FROM tbl_book a LEFT JOIN tbl_book_detail b ON a.id= b.book_id
    WHERE  1=1 AND a.delete_logic_flg=0 AND a.active=1 AND a.id=$IDDetailBook

     ";
//$queryS="SELECT * FROM tbl_book  LIMIT 10 ";
$dataRelateBook = CommonDB::GetAll($queryS,[]);

?> <?php foreach($dataRelateBook as $value):?> <div class="readbooknewsearch" style="cursor: hand" onclick="javascript:openNewWindow('<?php echo $value["book_id"]?>')" > <a href="javascript:openNewWindow('<?php echo $value["book_id"]?>')"><?php echo $value["book_name"]?>   <?php echo $value["part"]?>   Đọc</a></div> <?php endforeach?>