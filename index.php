<?php
 require_once "conf.php";
    $lang=(isset($_GET['lang']))? $_GET['lang']  :"az";

    $page=(isset($_GET['page']))? $_GET['page'] : "main";

    $file="$lang/$page.php";

    if(!file_exists($file)) $file="404.php";

    include "header.php";

    include $file ;

    include "footer.php";
?>