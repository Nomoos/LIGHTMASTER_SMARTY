<?php

$include['js'][] = "./nastaveni/js-opravneni.tpl";
$smarty->assign("include", $include);

$list_sql = query("SELECT `id`, `nazev`, `icon`, `url`, `zobraz` FROM `modul` WHERE `druh`='main' ORDER BY `poradi`");
while ($it = fetch_assoc($list_sql)) {
    $list[$it['id']] = $it;
    $list[$it['id']]['submodul'] = fetch_array(query("SELECT `id`, `nazev`, `icon`, `url`, `zobraz` FROM `modul` WHERE `modul_id`='{$it['id']}' ORDER BY `poradi`"));
}
$smarty->assign("list", $list);

$opravneni = fetch_array(query("SELECT `id`, `nazev`, `vychoziModul` FROM `uzivatelOpravneni` ORDER BY `nazev`"), "id");
$smarty->assign("opravneni", $opravneni);

if ($_GET['perm']) {
    $perm_id = intval($_GET['perm']);
    $perm = fetch_assoc(query("SELECT `id`, `domena`, `admin` FROM `uzivatelOpravneni` WHERE `id`='{$perm_id}'"));
    $smarty->assign("perm", $perm);
    $checked_sql = query("SELECT `modul_id` FROM `uzivatelOpravneni_modul` WHERE `uzivatelOpravneni_id`='{$perm_id}'");
    while ($it = fetch_assoc($checked_sql)) {
        $checked[] = $it['modul_id'];
    }
    $smarty->assign("checked", $checked);
}

//nastaveni modulu pro vybrane opravneni
if ($_POST['function'] == 'check' AND $_POST['perm'] != '') {
    $perm = intval($_POST['perm']);
    $modul_id = $_POST['id'];
    $typ = $_POST['typ'];
    if ($typ == 'opravneni') {
        if (strtolower($_POST['checked']) == 'true') {
            $check = "ano";
            query("UPDATE `uzivatelOpravneni` SET `{$modul_id}`='2' WHERE `id`='{$perm}'");
        } else {
            $check = "ne";
            query("UPDATE `uzivatelOpravneni` SET `{$modul_id}`='0' WHERE `id`='{$perm}'");
        }

        die($perm . " - " . $id . " - " . $check);
        
    } elseif ($typ == 'modul') {
        if (strtolower($_POST['checked']) == 'true') {
            $check = "ano";
            query("INSERT INTO `uzivatelOpravneni_modul` SET `uzivatelOpravneni_id`='{$perm}', `modul_id`='{$modul_id}'");
        } else {
            $check = "ne";
            query("DELETE FROM `uzivatelOpravneni_modul` WHERE `uzivatelOpravneni_id`='{$perm}' AND `modul_id`='{$modul_id}'");
        }

        die($perm . " - " . $id . " - " . $check);
    }
}

//nastaveni vychoziho modulu pro vybrane opravneni
if ($_POST['function'] == 'default' AND $_POST['perm'] != '') {
    $perm = intval($_POST['perm']);
    $modul_id = intval($_POST['id']);

    query("UPDATE `uzivatelOpravneni` SET `vychoziModul`='{$modul_id}' WHERE `id`='{$perm}'");

    die($modul_id);
}
?>