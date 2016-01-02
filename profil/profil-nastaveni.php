<?php

$id = intval($_SESSION['user']['id']);
$user = fetch_assoc(query("SELECT `id`, `login`, `jmeno`, `prijmeni`, `nick`, `email`, `password` FROM `uzivatel` WHERE `id`='$id'"));
$smarty->assign("user", $user);

if ($_POST['edit']) {

    if ($_POST['email'] != '' AND check_email($_POST['email'])) {
        $err['info'][] = "Email má nesprávný formát.";
    }
    if ($err) {
        $smarty->assign("err", $err);
    } else {
        $inp[] = "`email`='" . addslashes($_POST['email']) . "'";

        if (query("UPDATE `uzivatel` SET " . implode(",", $inp) . " WHERE `id`='{$id}'")) {
            go($setup['adm']['www'] . "profil/nastaveni.html?msgOk=info");
        }
    }
}

if ($_POST['change_pass']) {

    $oldPass = sha1($id . $_POST['password_old']);
    $newPass = $_POST['password'];
    
    if ($oldPass != $user['password'] AND $user['password'] != '') {
        $err['pass'][] = "Špatné původní heslo.";
    }
    if (!$newPass) {
        $err['pass'][] = "Není vyplněno heslo.";
    }
    if ($newPass != $_POST['password_again']) {
        $err['pass'][] = "Hesla se neshodují.";
    }
    if (strlen($newPass) < "4") {
        $err['pass'][] = "Délka hesla musí být minimálně 4 znaky.";
    }

    if (!preg_match("#[a-z]+#", $newPass)) {
        $err['pass'][] = "Heslo musí obsahovat minimálně jedno písmeno.";
    }
    if (!preg_match("#[A-Z]+#", $newPass)) {
        $err['pass'][] = "Heslo musí obsahovat minimálně jedno velké písmeno.";
    }
    if (!preg_match("#[0-9]+#", $newPass)) {
        $err['pass'][] = "Heslo musí obsahovat minimálně jedno číslo.";
    }
    
    if ($err) {
        $smarty->assign("err", $err);
    } else {
        $heslo = sha1($id . $newPass);
        $res = query("UPDATE `uzivatel` SET `password`='{$heslo}' WHERE `id`='{$id}'");
        if ($res) {
            go($setup['adm']['www'] . "profil/nastaveni.html?msgOk=pass");
        }
    }
}
?>