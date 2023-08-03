<header class="main-header p-1 d-flex f-wrap jc-sb ai-c">

    <div class="main-header__button btn">
        <i class="fas fa-bars"></i>
    </div>
    
    <nav class="menu menu--header d-flex">
        <a class="menu__link p-1" href="./index.php?lang=<?=($lang['LANG']);?>"><?php echo $lang['MENU_HOME']; ?></a>
        <a class="menu__link p-1" href="./projets.php?lang=<?=($lang['LANG']);?>"><?php echo $lang['MENU_PROJECTS']; ?></a>
        <a class="menu__link p-1" href="./contact.php">Contact</a>
    </nav>
    
    <div class="header-callbtn d-flex">
        <!--<div class="main-header__toggle btnlight btn shake">
            <i class="fas fa-skull"></i>  
        </div>-->
        <a class="btn p-1 m-1 shake" href="#"><i class="far fa-envelope"></i> <?php echo $lang['MENU_CALL']; ?></a>
    </div>
    <!--<div class="main-header__logo">
        <a class="bttn backgroundlog backgroundlog--imgout" href="#">
           <img class="main-header__logo-img anima" src="./images/logo.svg" alt="logo-profil">
        </a>
    </div>-->
    
    <?php 
    if (!isset($_SESSION['lang']) or ($_SESSION['lang']) == 'FR' ){
        ?>
    <div class="main-header__lang">
        <form action="./index.php" method="GET">
            <input type="hidden" name="lang" value="EN" />
            <input type="submit" class="header-btnlang header-btnlang--fr" value=""/>
        </form>
    
    </div>
    <?php } else {
        ?>
        <div class="main-header__lang">
        <form action="./index.php" method="GET">
            <input type="hidden" name="lang" value="FR" />
            <input type="submit" class="header-btnlang header-btnlang--eng" value=""/>
        </form>
    </div>
    <?php } ?>

</header>