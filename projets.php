<?php 
session_start();
include './inc/multilang.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projets</title>
    <?php include("./link.php") ?>
    <!-- ANCHOR SEO -->
    <meta name="description" content="Site01-nbc - Dév FullStack">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barrio&family=Fredericka+the+Great&display=swap" rel="stylesheet">  -->

</head>

<body>
    <?php include("./header.php") ?>

    <div class="main-container d-flex f-wrap g-1">

        <?php include("./aside.php") ?>
        <main class="p-1">

            <h1>Projets</h1>
            <h2>Calendrier - évènements</h2>
            <div class="d-flex f-wrap g-1 "></div>

                
            <div class="d-flex f-wrap g-1">
                <article class="summary f-l shadow">
                    <header class="summary__header">
                        <video src="./videos/video.mp4" controls poster="./images/image.jpg" muted loop autoplay>
                            <p>Mettez à jour votre navigateur</p>
                            <!--Equivalent au "alt", texte en cas d'echec lecture/affichage-->
                        </video>
                        <!--poster mets un fond devant la video-->
                    </header>
                    <div class="summary__description p-1">
                        <h2>Calendrier</h2>
                        <p>Calendrier évènements</p>
                    </div>
                    <footer class="summary__footer p-1">
                        <a href="#">En savoir plus</a>
                    </footer>
                </article>
                <article class="summary f-l shadow">
                    <header class="summary__header">
                        <video src="./videos/video.mp4"></video>
                    </header>
                    <div class="summary__description p-1">
                        <h2>Etude d'impact</h2>
                        <p>Questionnaire à choix multiples</p>
                    </div>
                    <footer class="summary__footer p-1">
                        <a href="#">En savoir plus</a>
                    </footer>
                </article>
                <article class="summary f-l shadow">
                    <header class="summary__header">
                        <video src="./videos/video.mp4"></video>
                    </header>
                    <div class="summary__description p-1">
                        <h2>Formulaire contact</h2>
                        <p>Un formulaire de renseignement de contact</p>
                    </div>
                    <footer class="summary__footer p-1">
                        <a href="#">En savoir plus</a>
                    </footer>
                </article>
                <article class="summary f-l shadow">
                    <header class="summary__header">
                        <video src="./videos/video.mp4"></video>
                    </header>
                    <div class="summary__description p-1">
                        <h2>Page statique</h2>
                        <p>Site web statique</p>
                    </div>
                    <footer class="summary__footer p-1">
                        <a href="#">En savoir plus</a>
                    </footer>
                </article>
                <article class="summary f-l shadow">
                    <header class="summary__header">
                        <video src="./videos/video.mp4"></video>
                    </header>
                    <div class="summary__description p-1">
                        <h2>Portfolio</h2>
                        <p>Projet de portfolio en ligne</p>
                    </div>
                    <footer class="summary__footer p-1">
                        <a href="#">En savoir plus</a>
                    </footer>
                </article>
                <article class="summary f-l shadow">
                    <header class="summary__header">
                        <video src="./videos/video.mp4"></video>
                    </header>
                    <div class="summary__description p-1">
                        <h2>Titre du projet</h2>
                        <p>Description du projet</p>
                    </div>
                    <footer class="summary__footer p-1">
                        <a href="#">En savoir plus</a>
                    </footer>
                </article>
                <article class="summary f-l shadow">
                    <header class="summary__header">
                        <video src="./videos/video.mp4"></video>
                    </header>
                    <div class="summary__description p-1">
                        <h2>Titre du projet</h2>
                        <p>Description du projet</p>
                    </div>
                    <footer class="summary__footer p-1">
                        <a href="#">En savoir plus</a>
                    </footer>
                </article>
            </div>
        </main>
    </div>
    <?php include("./footer.php") ?>
</body>

</html>