<?php
$testretour = 'Wait...';
var_dump($_POST);
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {

    $nameError = '';
    $emailError = '';
    $dropError = '';
    $commentError = '';
    $drop = null;
    $name = htmlentities(trim($_POST['name']));
    $nickname = htmlentities(trim($_POST['nickname']));
    $email = htmlentities(trim($_POST['email']));
    $drop = htmlentities(($_POST['drop']));
    $comment = htmlentities(trim($_POST['comment']));
    $valid = true;
    if (empty($name)) {
        $nameError = 'Name error';
        $valid = false;
    } else if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $nameError = 'Lettres et espace seulement';
        $valid = false;
    }
    if (empty($email)) {
        $emailError = 'Email empty';
        $valid = false;
    } else if (isset($email)) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = 'Email error';
            $valid = false;
        }
        // else if (!preg_match('/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))/i', $email)){
    }
    if (empty($drop)) {
        $dropError = 'Choice error';
        $valid = false;
    }
    if (!empty($comment)) {
        $comment = htmlspecialchars($comment);
        if (!preg_match('/./us', $comment)) {
            $commentError = 'Comment error';
            $valid = false;
        }
    }
    if (!empty($nickname)) {
            $valid = false;
    }
    if ($valid) {
        $testretour = 'OK✔';
    }
    
    var_dump($valid, $nameError, $emailError, $dropError, $commentError);
}
