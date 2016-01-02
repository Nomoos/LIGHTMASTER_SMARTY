<?php
include '../filter/filter-filter.php';

if(isset($_GET['company'])){
    $_SESSION['filter']['company'] = $_GET['company'];
}

if (!isset($_SESSION['filter']['company'])) {
    go($setup['adm']['www'].'companies/list.html');
}
?>
