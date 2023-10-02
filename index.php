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
        <main class="p-1 bdeffecttop bdeffect--1080" id="bgeffect">
            <section class="d-flex fullsc jc-c mauto" id="splash">
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
                            <span>w</span><span>e</span><span>b</span>&nbsp
                        </div>
                        <div class="bouncing-letters">
                            <span>d</span><span>e</span><span>v</span><span>e</span><span>l</span><span>o</span><span>p</span><span>e</span><span>r</span>
                        </div>
                    </h1>
                <?php } ?>
            </section>
            <section class="d-flex g-1 pres1 bg">
                <div class="d-flex">
                    <p><?php echo $lang['PRESENTATION']; ?></p>
                </div>
            </section>
            <div class="d-flex ai-c spacehr">
                <hr>
            </div>
            <section class="d-flex f-wraprr reverse g-1 my-4 ai-c" id="msm">
                <div class="f-m backdrop">
                    <h2 class="text-center"><?php echo $lang['ARTICLE_TITLE_1']; ?></h2>
                    <p class="d-flex g-1 pres2"><?php echo $lang['ARTICLE_1']; ?></p>
                </div>
                <div class="f-m d-flex jc-c"><img class="rounded mwimg shadow" src="./images/front-dev-img.jpg" alt="frontdev-img"></div>
            </section>

            <div class="d-flex g-1 p-1 bgc">
                <img class="rounded mauto mwlogo shadow zimg" src="./images/html-logo.png" alt="html-logo">
                <img class="rounded mauto mwlogo shadow zimg" src="./images/css-logo.png" alt="css-logo">
                <img class="rounded mauto mwlogo shadow zimg" src="./images/javascript-logo.png" alt="javascript-logo">
                <img class="rounded mauto mwlogo shadow zimg" src="./images/bootstrap-logo.png" alt="bootstrap-logo">
                <img class="rounded mauto mwlogo shadow zimg" src="./images/wordpress-logo.png" alt="wordpress-logo">
                <img class="rounded mauto mwlogo shadow zimg" src="./images/figma-logo.png" alt="figma-logo">
            </div>
            <div class="d-flex ai-c spacehr">
                <hr><i class="fa-solid fa-chevron-up fa-bounce"></i>
            </div>
            <section class="d-flex f-wraprr g-1 my-4 ai-c" id="msm2">
                <div class="f-m bgc">
                    <h2 class="text-center"><?php echo $lang['ARTICLE_TITLE_2']; ?></h2>
                    <p class="d-flex g-1 pres2"><?php echo $lang['ARTICLE_2']; ?></p>
                </div>
                <div class="f-m d-flex jc-c bgc"><img class="rounded mwimg shadow" src="./images/back-dev-img.jpg" alt="backdev-img"></div>
            </section>

            <div class="d-flex g-1 p-1 bgc">
                <img class="rounded mauto mwlogo shadow zimg" src="./images/php-icon.png" alt="php-logo">
                <img class="rounded mauto mwlogo shadow zimg" src="./images/mysql-logo.png" alt="mysql-logo">
                <img class="rounded mauto mwlogo shadow zimg" src="./images/phpmyadmin-logo.png" alt="phpmyadmin-logo">
                <img class="rounded mauto mwlogo shadow zimg" src="./images/visualstudio-logo.png" alt="visualstudio-logo">
                <img class="rounded mauto mwlogo shadow zimg" src="./images/github-logo.png" alt="github-logo">
                <img class="rounded mauto mwlogo shadow zimg" src="./images/git-logo.png" alt="git-logo">
                <!-- <img class="rounded mauto mwlogo shadow zimg" src="./images/apache-logo.png" alt="apache-logo"> -->
            </div>
            <div class="d-flex ai-c spacehr" id="projetpres">
                <hr>
            </div>
            <div class="d-flex g-1 pres3 bgc">
                <p><?php echo $lang['PRESENTATION_PROJET']; ?></p>
            </div>
            <section class="d-flex f-wrap reverse g-1 pad-3 border-right bdeffectright">
                <div class="f-m">
                    <h2 class="text-center"><?php echo $lang['PROJET_TITLE_1']; ?></h2>
                    <p class="d-flex g-1 pres2"><?php echo $lang['PROJET_1']; ?></p>
                </div>
                <div class="f-m d-flex jc-c relative zimgsm">
                    <img class="rounded mwimg shadow" src="./images/Projet1.png" alt="staticpage-img">
                    <div class="overlay mwimg" data-bs-toggle="modal" data-bs-target="#projetModal">Agrandir</div>
                </div>
            </section>
            <section class="d-flex f-wrap g-1 pad-3 border-left bdeffectleft">
                <div class="f-m">
                    <h2 class="text-center"><?php echo $lang['PROJET_TITLE_2']; ?></h2>
                    <p class="d-flex g-1 pres2"><?php echo $lang['PROJET_2']; ?></p>
                </div>
                <div class="f-m d-flex jc-c relative zimgsm">
                    <img class="rounded mwimg shadow" src="./images/Staticpage.png" alt="staticpage-img">
                    <div class="overlay mwimg" data-bs-toggle="modal" data-bs-target="#staticModal">Agrandir</div>
                </div>
            </section>
            <section class="d-flex f-wrap reverse g-1 pad-3 border-right bdeffectright">
                <div class="f-m">
                    <h2 class="text-center"><?php echo $lang['PROJET_TITLE_3']; ?></h2>
                    <p class="d-flex g-1 pres2"><?php echo $lang['PROJET_3']; ?></p>
                </div>
                <div class="f-m d-flex jc-c relative zimgsm">
                    <img class="rounded mwimg shadow" src="./images/Formfcc.png" alt="formulaire-img">
                    <div class="overlay mwimg" data-bs-toggle="modal" data-bs-target="#contactModal">Agrandir</div>
                </div>
            </section>
            <section class="d-flex f-wrap g-1 pad-3 border-left bdeffectleft">
                <div class="f-m">
                    <h2 class="text-center"><?php echo $lang['PROJET_TITLE_4']; ?></h2>
                    <p class="d-flex g-1 pres2"><?php echo $lang['PROJET_4']; ?></p>
                </div>
                <div class="f-m d-flex jc-c relative zimgsm">
                    <img class="rounded mwimg shadow" src="./images/Docfcc.png" alt="documentation-img">
                    <div class="overlay mwimg" data-bs-toggle="modal" data-bs-target="#documentationModal">Agrandir</div>
                </div>
            </section>
            <div class="d-flex ai-c spacehr" id="about">
                <hr>
            </div>
            <section>


            </section>
        </main>
    </div>

    <?php include("./footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

            <div class="modal" id="projetModal" tabindex="-1" aria-labelledby="projetModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                            <div class="modal-header jc-c">
                                <h2 class="modal-title" id="projetModalLabel"><?php echo $lang['PROJET_TITLE_1']; ?></h2>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                            </div>
                        <div class="modal-body">
                            <div id="carouselprojet" class="carousel slide carousel-fade carousel-dark" data-bs-ride="carousel" data-interval="false">
                                <div class="carousel-inner rounded-2 shadow-4-strong">
                                    <div class="carousel-item active">
                                        <img src="../Portfolio-of/images/Projet1.png" class="d-block w-100" alt="img1_projet" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../Portfolio-of/images/Projet2.png" class="d-block w-100" alt="img2_projet" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../Portfolio-of/images/Projet3.png" class="d-block w-100" alt="img3_projet" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../Portfolio-of/images/Projet4.png" class="d-block w-100" alt="img4_projet" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../Portfolio-of/images/Projet5.png" class="d-block w-100" alt="img5_projet" />
                                    </div>
                                </div>
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselprojet" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselprojet" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselprojet" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#carouselprojet" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    <button type="button" data-bs-target="#carouselprojet" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselprojet" data-bs-slide="prev">
                                    <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span> -->
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselprojet" data-bs-slide="next">
                                    <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span> -->
                                    </button>
                                </div>
                            </div>
                            <div class="modal-footer">
                        <button class="btnmodalctrl carousel-dark" type="button" data-bs-target="#carouselprojet" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button type="button" class="btnmodal btn-secondary" data-bs-dismiss="modal"><?php echo $lang['MODAL_CLOSE']; ?></button>
                        <button class="btnmodalctrl carousel-dark" type="button" data-bs-target="#carouselprojet" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="staticModal" tabindex="-1" aria-labelledby="staticModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                            <div class="modal-header jc-c">
                                <h2 class="modal-title" id="staticModalLabel"><?php echo $lang['PROJET_TITLE_2']; ?></h2>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                            </div>
                            <div class="modal-body">
                                <img class="rounded" src="./images/Staticpage.png" alt="staticpage-img">
                            </div>
                        <div class="modal-footer">
                    <button type="button" class="btnmodal btn-secondary" data-bs-dismiss="modal"><?php echo $lang['MODAL_CLOSE']; ?></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                            <div class="modal-header jc-c">
                                <h2 class="modal-title" id="contactModalLabel"><?php echo $lang['PROJET_TITLE_3']; ?></h2>
                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                            </div>
                            <div class="modal-body">
                                <img class="rounded" src="./images/Formfcc.png" alt="formulaire-img">
                            </div>
                        <div class="modal-footer">
                    <button type="button" class="btnmodal btn-secondary" data-bs-dismiss="modal"><?php echo $lang['MODAL_CLOSE']; ?></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="documentationModal" tabindex="-1" aria-labelledby="documentationModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                            <div class="modal-header jc-c">
                                <h2 class="modal-title" id="documentationModalLabel"><?php echo $lang['PROJET_TITLE_4']; ?></h2>
                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                            </div>
                            <div class="modal-body">
                            <img class="rounded" src="./images/Docfcc.png" alt="documentation-img">
                            </div>
                        <div class="modal-footer">
                    <button type="button" class="btnmodal btn-secondary" data-bs-dismiss="modal"><?php echo $lang['MODAL_CLOSE']; ?></button>
                    </div>
                </div>
            </div>
        </div>

</html>