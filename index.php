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
        <main class="p-1 bgm">
            <?php
            if (!isset($_SESSION['lang']) or ($_SESSION['lang']) == 'FR') {
            ?>
                
                    <h1 class="d-flex f-dir-row f-wrap jc-c title1">
                        <p class="bouncing-letters text-center">
                            <span>B</span><span>o</span><span>n</span><span>j</span><span>o</span><span>u</span><span>r</span><span>!</span>&nbsp
                        </p>
                        <p class="bouncing-letters text-center">
                            <span>D</span><span>é</span><span>v</span><span>e</span><span>l</span><span>o</span><span>p</span><span>p</span><span>e</span><span>u</span><span>r</span>
                           
                            <span>W</span><span>e</span><span>b</span><span>/</span>&nbsp
                        </p>
                        <p class="bouncing-letters text-center">
                            <span>W</span><span>e</span><span>b</span>
                            
                            <span>m</span><span>o</span><span>b</span><span>i</span><span>l</span><span>e</span>&nbsp
                        </p>
                        <p class="bouncing-letters text-center">
                            <span>F</span><span>u</span><span>l</span><span>l</span><span>s</span><span>t</span><span>a</span><span>c</span><span>k</span>
                        </p>

                    </h1>

                
            <?php } else {
            ?>
                
                    <h1 class="d-flex f-dir-row f-wrap jc-c title1">
                        <p class="bouncing-letters">
                            <span>H</span><span>e</span><span>l</span><span>l</span><span>o</span><span>!</span>&nbsp
                        </p>
                        <p class="bouncing-letters">
                            <span>F</span><span>u</span><span>l</span><span>l</span><span>s</span><span>t</span><span>a</span><span>c</span><span>k</span>
                            <!-- <div class="bouncing-letters"> -->
                            <span>W</span><span>e</span><span>b</span><span>/</span>&nbsp
                        </p>
                        <p class="bouncing-letters">
                            <span>M</span><span>o</span><span>b</span><span>i</span><span>l</span>
                            <!-- <div class="bouncing-letters"> -->
                            <span>W</span><span>e</span><span>b</span>&nbsp
                        </p>
                        <p class="bouncing-letters">
                            <span>D</span><span>e</span><span>v</span><span>e</span><span>l</span><span>o</span><span>p</span><span>e</span><span>r</span>
                        </p>

                    </h1>

                
            <?php } ?>
            <div class="inline-block rounded">
                <div class="type1">
                    <span1></span1>
                </div>
            </div>
            <p>Ex ad laborum enim deserunt excepteur nulla duis excepteur adipisicing deserunt fugiat in.</p>
            <div class="d-flex g-1">
                <div class="rounded"><img src="./images/image.jpg" alt="Lorem"></div>
                <div class="rounded"><img src="./images/image.jpg" alt="Lorem"></div>
                <div class="rounded"><img src="./images/image.jpg" alt="Lorem"></div>
            </div>
            <section class="d-flex f-wraprr reverse g-1 my-4">
                <div class="f-m">
                    <h2>Html CSS JS</h2>
                    <p><?php echo $lang['ARTICLE_1']; ?></p>
                </div>
                <div class="f-m"><img src="./images/image.jpg" alt="Lorem"></div>
            </section>
            <section class="d-flex f-wraprr g-1 my-4">
                <div class="f-m">
                    <h2>hic omnis itaque</h2>
                    <p><?php echo $lang['ARTICLE_2']; ?></p>
                </div>
                <div class="f-m"><img src="./images/image.jpg" alt="Lorem"></div>
            </section>
            <section class="d-flex f-wraprr reverse g-1 my-4">
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