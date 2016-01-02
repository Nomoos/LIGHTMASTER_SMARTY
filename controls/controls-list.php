<?php
include '../filter/filter-filter.php';

if(isset($_GET['area'])){
    $_SESSION['filter']['area'] = $_GET['area'];
}

if (!isset($_SESSION['filter']['area'])) {
    go($setup['adm']['www'].'areas/list.html');
}

?>
