<?php
session_start();
session_unset();
include './inc/multilang.php';
?>
<!DOCTYPE html>

<html lang="<?php echo $lang['LANG']; ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang['PAGE_TITLE']; ?></title>
    <?php include("./link.php") ?>
    <meta name="description" content="<?php echo $lang['SITE_NAME']; ?>">
</head>

<body>
    <?php include("./header.php") ?>
    <div class="main-container d-flex f-wrap g-1">
        <?php include("./aside.php") ?>
        <main class="p-1">
            <section class="d-flex bdeffect fullsc jc-c" id="splash">
                <?php
                if (!isset($_SESSION['lang']) or ($_SESSION['lang']) == 'FR') {
                ?>
                    <h1 class="d-flex f-wrap jc-c title-height">
                        <div class="bouncing-letters row100 text-center">
                            <span>B</span><span>o</span><span>n</span><span>j</span><span>o</span><span>u</span><span>r</span><span>!</span>&nbsp
                        </div>
                        <div class="bouncing-letters row100 text-center">
                            <span>J</span><span>e</span>&nbsp<span>s</span><span>u</span><span>i</span><span>s</span>&nbsp<span>O</span><span>l</span><span>i</span><span>v</span><span>i</span><span>e</span><span>r</span><span>,</span>&nbsp
                        </div>
                        <div class="bouncing-letters text-center">
                            <span>u</span><span>n</span>&nbsp<span>d</span><span>é</span><span>v</span><span>e</span><span>l</span><span>o</span><span>p</span><span>p</span><span>e</span><span>u</span><span>r</span>&nbsp
                        </div>
                        <div class="bouncing-letters text-center">
                            <span>w</span><span>e</span><span>b</span>&nbsp<span>f</span><span>u</span><span>l</span><span>l</span><span>s</span><span>t</span><span>a</span><span>c</span><span>k</span>
                        </div>
                    </h1>
                <?php } else {
                ?>
                    <h1 class=" d-flex f-wrap jc-c title-height">
                        <div class="bouncing-letters row100 text-center">
                            <span>H</span><span>e</span><span>l</span><span>l</span><span>o</span><span>!</span>&nbsp
                        </div>
                        <div class="bouncing-letters row100 text-center">
                            <span>I</span>&nbsp<span>a</span><span>m</span>&nbsp<span>O</span><span>l</span><span>i</span><span>v</span><span>i</span><span>e</span><span>r</span><span>,</span>&nbsp
                        </div>
                        <div class="bouncing-letters">
                            <span>a</span>&nbsp<span>f</span><span>u</span><span>l</span><span>l</span><span>s</span><span>t</span><span>a</span><span>c</span><span>k</span>&nbsp
                        </div>
                        <div class="bouncing-letters">
                            <span>w</span><span>e</span><span>b</span><span>
                        </div>
                        <div class="bouncing-letters">
                            <span>d</span><span>e</span><span>v</span><span>e</span><span>l</span><span>o</span><span>p</span><span>e</span><span>r</span>
                        </div>
                    </h1>
                <?php } ?>
            </section>
            <!-- <div class="inline-block rounded">
                <div class="type1">
                    <span1></span1>
                </div>
            </div> -->
            <section class="d-flex g-1 pres1 bgc">
                <div>
                    <div class="d-flex">
                        <p><?php echo $lang['PRESENTATION']; ?></p>
                    </div>
                </div>
            </section>
            <div class="d-flex ai-c spacehr"><hr></div>

            <section class="d-flex f-wraprr reverse g-1 my-4 ai-c bgm">
                <div class="f-m backdrop">
                    <h2 class="text-center"><?php echo $lang['ARTICLE_TITLE_1']; ?></h2>
                    <p class="d-flex g-1 pres2"><?php echo $lang['ARTICLE_1']; ?></p>
                </div>
                <div class="f-m d-flex jc-c"><img class="rounded mwimg shadow" src="./images/front-dev-img.jpg" alt="frontdev-img"></div>
            </section>

            <div class="d-flex g-1 p-1 bgc">
                <img class="rounded mauto mwlogo shadow zimg" src="./images/figma-logo.png" alt="figma-logo">
                <img class="rounded mauto mwlogo shadow zimg" src="./images/html-logo.png" alt="html-logo">
                <img class="rounded mauto mwlogo shadow zimg" src="./images/css-logo.png" alt="css-logo">
                <img class="rounded mauto mwlogo shadow zimg" src="./images/javascript-logo.png" alt="javascript-logo">
                <img class="rounded mauto mwlogo shadow zimg" src="./images/bootstrap-logo.png" alt="bootstrap-logo">
                <img class="rounded mauto mwlogo shadow zimg" src="./images/wordpress-logo.png" alt="wordpress-logo">
            </div>
            <div class="d-flex ai-c spacehr"><hr></div>
            <section class="d-flex f-wraprr g-1 my-4 ai-c">
                <div class="f-m bgc">
                    <h2 class="text-center"><?php echo $lang['ARTICLE_TITLE_2']; ?></h2>
                    <p class="d-flex g-1 pres2"><?php echo $lang['ARTICLE_2']; ?></p>
                </div>
                <div class="f-m d-flex jc-c bgc"><img class="rounded mwimg shadow" src="./images/back-dev-img.jpg" alt="backdev-img"></div>
            </section>

            <div class="d-flex g-1 p-1 bgc">
                <img class="rounded mauto mwlogo shadow zimg" src="./images/visualstudio-logo.png" alt="visualstudio-logo">
                <img class="rounded mauto mwlogo shadow zimg" src="./images/php-icon.png" alt="php-logo">
                <img class="rounded mauto mwlogo shadow zimg" src="./images/mysql-logo.png" alt="mysql-logo">
                <img class="rounded mauto mwlogo shadow zimg" src="./images/phpmyadmin-logo.png" alt="phpmyadmin-logo">
                <img class="rounded mauto mwlogo shadow zimg" src="./images/apache-logo.png" alt="apache-logo">
                <img class="rounded mauto mwlogo shadow zimg" src="./images/github-logo.png" alt="github-logo">
                <img class="rounded mauto mwlogo shadow zimg" src="./images/git-logo.png" alt="git-logo">
            </div>
            <div class="d-flex ai-c spacehr"><hr></div>
            <div class="d-flex g-1 pres1 bgc">
                <p><?php echo $lang['PRESENTATION_PROJET']; ?></p>
            </div>
            <section class="d-flex f-wraprr reverse g-1 my-4 bgm">
                <div class="f-m ai-c jc-c">
                    <h2>debitis et cupiditate</h2>
                    <p><?php echo $lang['PROJET_1']; ?></p>
                </div>
                <div class="f-m"><img src="./images/image.jpg" alt="Lorem"></div>
            </section>
            <section class="d-flex f-wraprr g-1 my-4">
                <div class="f-m">
                    <h2>hic omnis itaque</h2>
                    <p><?php echo $lang['PROJET_2']; ?></p>
                </div>
                <div class="f-m"><img src="./images/image.jpg" alt="Lorem"></div>
            </section>
            <section class="d-flex f-wraprr reverse g-1 my-4">
                <div class="f-m">
                    <h2>debitis et cupiditate</h2>
                    <p><?php echo $lang['PROJET_3']; ?></p>
                </div>
                <div class="f-m"><img src="./images/image.jpg" alt="Lorem"></div>
            </section>
            <section class="d-flex f-wraprr g-1 my-4">
                <div class="f-m">
                    <h2>hic omnis itaque</h2>
                    <p><?php echo $lang['ARTICLE_6']; ?></p>
                </div>
                <div class="f-m"><img src="./images/image.jpg" alt="Lorem"></div>
            </section>
        </main>
    </div>
    <?php include("./footer.php") ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>