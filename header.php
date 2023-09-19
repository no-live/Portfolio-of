<header class="main-header p-1 d-flex f-wrap jc-sb ai-c">

    <div class="main-header__button btn">
        <i class="fas fa-bars"></i>
    </div>
    <nav class="menu menu--header d-flex">
        <a class="menu__link p-1" href="./index.php?lang=<?=($lang['LANG']);?>">&nbsp<?php echo $lang['MENU_HOME']; ?></a>
        <a class="menu__link p-1" href="./projets.php?lang=<?=($lang['LANG']);?>">&nbsp<?php echo $lang['MENU_PROJECTS']; ?></a>
        <a class="menu__link p-1" href="./contact.php?lang=<?=($lang['LANG']);?>">&nbsp<?php echo $lang['MENU_CONTACT']; ?></a>
    </nav>
    
    <div class="header-callbtn d-flex">
        <a class="btn p-1 m-1 shake" href="./contact.php?lang=<?=($lang['LANG']);?>">&nbsp<i class="far fa-envelope">&nbsp</i>&nbsp<?php echo $lang['MENU_CALL']; ?>&nbsp</a>
    </div>
    <!--<div class="main-header__logo">
        <a class="bttn backgroundlog backgroundlog--imgout" href="#">
           <img class="main-header__logo-img anima" src="./images/logo.svg" alt="logo-profil">
        </a>
    </div>-->
    
    <?php 
    if (!isset($_SESSION['lang']) or ($_SESSION['lang']) == 'FR' ){
        ?>
    <div class="main-header__lang d-flex jc-c ">
        <form method="GET"> <!-- Pas de action, avec get => reste sur la page actuelle!-->
            <input type="hidden" name="lang" value="EN" />
            <input type="submit" class="header-btnlang header-btnlang--fr d-flex" value=""/>
        </form>
    
    </div>
    <?php } else {
        ?>
        <div class="main-header__lang d-flex jc-c">
        <form method="GET">
            <input type="hidden" name="lang" value="FR" />
            <input type="submit" class="header-btnlang header-btnlang--eng d-flex" value=""/>
        </form>
    </div>
    <?php } ?>

</header>