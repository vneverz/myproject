<?php @header("Content-type:text/html; charset=utf-8");
require_once('class/commons.php');
$smarty->assign('lan',$_SESSION['lan']);


$smarty->display("index.html");
?>


