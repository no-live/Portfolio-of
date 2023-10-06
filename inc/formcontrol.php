<?php
require_once 'multilang.php';
$retour = 'Wait...';
var_dump($_POST);
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {

    $nameError = '';
    $emailError = '';
    $dropError = '';
    $commentError = '';
    $name = htmlentities(trim($_POST['name']));
    $nickname = htmlentities(trim($_POST['nickname']));
    $email = htmlentities(trim($_POST['email']));
    $drop = htmlentities(($_POST['drop']));
    $comment = htmlentities(trim($_POST['comment']));
    $valid = true;
    if (empty($name)) {
        $nameError = $lang['FORM_NAME_ERROR'];
        $valid = false;
    } else if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $nameError = $lang['FORM_NAME_ERROR_2'];
        $valid = false;
    }
    if (empty($email)) {
        $emailError = $lang['FORM_MAIL_ERROR'];
        $valid = false;
    } else if (isset($email)) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = $lang['FORM_MAIL_ERROR_2'];
            $valid = false;
        }
        // else if (!preg_match('/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))/i', $email)){
    }
    if (empty($drop)) {
        $dropError = $lang['FORM_DROP_ERROR'];
        $valid = false;
    }
    if ($drop=='other'){
        $valid = false;
    }
    if (!empty($comment)) {
        $comment = htmlspecialchars($comment);
        if (!preg_match('/./us', $comment)) {
            $commentError = $lang['FORM_COMMENT_ERROR'];
            $valid = false;
        }
    }
    if (!empty($nickname)) { //spbt
            $valid = false;
    }
    if ($valid) {
        $retour = '✔ Merci !';
    }
    
    var_dump($valid, $nameError, $emailError, $dropError, $commentError);
}

