<?php
/**
 * Created by PhpStorm.  'connectionString' => 'mysql:host=chuyennhat.vn;dbname=test_glass1',
'emulatePrepare' => true,
'username' => 'test_glass1',
'password' => '123456789',
'charset' => 'utf8',
'schemaCachingDuration' => 60 * 60,
 * User: PHAT
 * Date: 4/19/15$db_host = "INSERT_DB_HOST_HERE";
$db_name = "INSERT_DB_NAME_HERE";
$db_user = "INSERT_DB_USERNAME_HERE";
$db_pw = "INSERT_DB_PASSWORD_HERE";
 * Time: 5:16 PM
 */
//define("DB_HOST","chuyennhat.vn");
//define("DB_NAME","test_glass1");
//define("DB_USERNAME","test_glass1");
//define("DB_PASSWORD","123456789");
define("SMTP_HOST","mail.kinhtanphuc.com");
define("ADMIN_EMAIL","info@kinhtanphuc.com");
define("SMTP_USERNAME","info@kinhtanphuc.com");
define("SMTP_PASSWORD","123456");
define("SMTP_INCLUDED",1);
define ("ITEM_PER_PAGE", serialize (array (50,100,150)));
define ("ITEM_PER_PAGE_DEFAULT", 50);
define ("ORDER_BY", serialize (array ("Tiều đề A-Z","Lượt xem")));
define ("ORDER_BY_KEY", serialize (array ("0","1")));
define ("WEB_URL", "http://googleg9.com:8111");
define ("PATH_DOWNLOAD", "http://googleg9.com:8111/");
define ("PATH_IMAGE", "http://googleg9.com:8111/admintvcg/uploads/bookImage/");
define ("PATH_IMAGE_REF", "http://googleg9.com:8111/admintvcg/uploads/referenceImage/");
define ("PATH_IMAGE_bookFile", "http://googleg9.com:8111/admintvcg/uploads/bookFile/");
define ("PATH_IMAGE_slideImage", "http://googleg9.com:8111/admintvcg/uploads/slideImage/");
define ("PATH_userimage", "uploads/userimage/");
//session const
define ("ID_BOOK", "idbook");
define ("USER_ID", "id_user");
define ("USER_EMAIL", "email");
define ("USER_FULLNAME", "display_name");



//define("DB_HOST","localhost");
//define("DB_NAME","kinhtanp_db");
//define("DB_USERNAME","kinhtanp_db");
//define("DB_PASSWORD","!}8up6K320c(");

//define("DB_HOST","localhost");
//define("DB_NAME","kinhtanp_db");
//define("DB_USERNAME","root");
//define("DB_PASSWORD","123456");

define("DB_HOST","localhost");
define("DB_NAME","thuvienconggiao");
define("DB_USERNAME","thuvienconggiao");
define("DB_PASSWORD","123456789");

//define("DB_HOST","localhost");
//define("DB_NAME","thuvienconggiao");
//define("DB_USERNAME","root");
//define("DB_PASSWORD","");