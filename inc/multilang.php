<?php
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
    //var_dump($lang);
    //var_dump($_SESSION);
} elseif (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} else {
    $lang = 'FR';
    var_dump($lang);
}
 switch ($lang) {
    case 'FR' :
        $lang_file = 'lang.fr.php';
        break;
    case 'EN' : 
        $lang_file = 'lang.en.php';
        break;

    default :
        $lang_file = 'lang.fr.php';
}
include_once './languages/'.$lang_file;
?>