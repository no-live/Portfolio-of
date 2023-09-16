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
            <section class="d-flex bdeffect jc-c" style="height: 70vh">
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
                        <div class="bouncing-letters row100 text-center">
                            <span>u</span><span>n</span>&nbsp<span>d</span><span>é</span><span>v</span><span>e</span><span>l</span><span>o</span><span>p</span><span>p</span><span>e</span><span>u</span><span>r</span>
                            <span>w</span><span>e</span><span>b</span><span>/</span>
                            <span>w</span><span>e</span><span>b</span>&nbsp<span>m</span><span>o</span><span>b</span><span>i</span><span>l</span><span>e</span>&nbsp
                        </div>
                        <div class="bouncing-letters row100 text-center">
                            <span>f</span><span>u</span><span>l</span><span>l</span><span>s</span><span>t</span><span>a</span><span>c</span><span>k</span>
                        </div>
                    </h1>
                <?php } else {
                ?>
                    <h1 class=" d-flex f-wrap jc-c title-height">
                        <div class="bouncing-letters itemrow text-center">
                            <span>H</span><span>e</span><span>l</span><span>l</span><span>o</span><span>!</span>&nbsp
                        </div>
                        <div class="bouncing-letters itemrow text-center">
                            <span>I</span>&nbsp<span>a</span><span>m</span>&nbsp<span>O</span><span>l</span><span>i</span><span>v</span><span>i</span><span>e</span><span>r</span><span>,</span>&nbsp
                        </div>
                        <div class="bouncing-letters">
                            <span>a</span>&nbsp<span>f</span><span>u</span><span>l</span><span>l</span><span>s</span><span>t</span><span>a</span><span>c</span><span>k</span>&nbsp
                        </div>
                        <div class="bouncing-letters">
                            <span>w</span><span>e</span><span>b</span><span>/</span>&nbsp<span>m</span><span>o</span><span>b</span><span>i</span><span>l</span>
                            <span>w</span><span>e</span><span>b</span>&nbsp
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
            <div class="d-flex g-1 pres1">
                <p><?php echo $lang['PRESENTATION']; ?></p>
            </div>
            <!-- <div class="d-flex g-1 p-1">
                <div class="rounded"><img src="./images/html-svgrepo-com.svg" alt="front-developer-logo"></div>
                <div class="rounded"><img src="./images/image.jpg" alt="Lorem"></div>
                <div class="rounded"><img src="./images/image.jpg" alt="Lorem"></div>
            </div> -->
            <section class="d-flex f-wraprr reverse g-1 my-4 bgm">
                <div class="f-m">
                    <h2>Développement Front-end</h2>
                    <p class="pres2"><?php echo $lang['ARTICLE_1']; ?></p>
                </div>
                <div class="f-m"><img src="./images/image.jpg" alt="Lorem"></div>
            </section>
            <div class="d-flex g-1 p-1">
                <div class="bgc"><img src="./images/html-svgrepo-com.svg" alt="front-developer-logo"></div>
                <div class="bgc"><img src="./images/image.jpg" alt="Lorem"></div>
                <div class="bgc"><img src="./images/image.jpg" alt="Lorem"></div>
                <div class="bgc"><img src="./images/image.jpg" alt="Lorem"></div>
                <div class="bgc"><img src="./images/image.jpg" alt="Lorem"></div>
            </div>
            <section class="d-flex f-wraprr g-1 my-4">
                <div class="f-m bgc">
                    <h2>Développement Back-end</h2>
                    <p class="pres2"><?php echo $lang['ARTICLE_2']; ?></p>
                </div>
                <div class="f-m"><img src="./images/image.jpg" alt="Lorem"></div>
            </section>
            <div class="d-flex g-1 p-1 bgc">
                <div class="rounded"><img src="./images/html-svgrepo-com.svg" alt="front-developer-logo"></div>
                <div class="rounded"><img src="./images/image.jpg" alt="Lorem"></div>
                <div class="rounded"><img src="./images/image.jpg" alt="Lorem"></div>
                <div class="rounded"><img src="./images/image.jpg" alt="Lorem"></div>
                <div class="rounded"><img src="./images/image.jpg" alt="Lorem"></div>
            </div>
            <section class="d-flex f-wraprr reverse g-1 my-4 bgm">
                <div class="f-m">
                    <h2>debitis et cupiditate</h2>
                    <p><?php echo $lang['ARTICLE_3']; ?></p>
                </div>
                <div class="f-m"><img src="./images/image.jpg" alt="Lorem"></div>
            </section>
            <section class="d-flex f-wraprr g-1 my-4">
                <div class="f-m">
                    <h2>hic omnis itaque</h2>
                    <p><?php echo $lang['ARTICLE_4']; ?></p>
                </div>
                <div class="f-m"><img src="./images/image.jpg" alt="Lorem"></div>
            </section>
            <section class="d-flex f-wraprr reverse g-1 my-4">
                <div class="f-m">
                    <h2>debitis et cupiditate</h2>
                    <p><?php echo $lang['ARTICLE_5']; ?></p>
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