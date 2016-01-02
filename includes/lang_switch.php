<?php

$langList = array('en_US','cs_CZ','sk_SK');

if(isset($_GET['lang'])){
    $_SESSION['lang'] = $_GET['lang'];
}elseif(!isset($_SESSION['lang'])){
    $_SESSION['lang'] = 'en_US';
}
setlocale(LC_ALL,$_SESSION['lang']);

$smarty->assign("lang", $_SESSION['lang']);
$smarty->assign("langList", $langList);

?>