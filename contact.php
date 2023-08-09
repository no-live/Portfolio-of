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
        <main id="main" class="bodyc">
            <div id="title">
                <h1>Formulaire de contact</h1>
                <p id="description"><em>Demandes en un formulaire</em></p>
            </div>
            
            <form id="formulaire_contact" method="POST">
                <div class="group">
                    <label id="name-label" for="name"><?php echo $lang['FORM_NAME']; ?>&nbsp*</label>
                    <input id="name" class="form" type="texte" name="name" placeholder="<?php echo $lang['FORM_NAME_HOLD']; ?>" required="">
                </div>
                <div class="group2">
                    <label id="name-label" for="name"><?php echo $lang['FORM_NAME']; ?>&nbsp*</label>
                    <input id="name" class="form" type="texte" name="name" placeholder="<?php echo $lang['FORM_NAME_HOLD']; ?>" required="">
                </div>
                
                <div class="group">
                    <label id="email-label" for="email"><?php echo $lang['FORM_MAIL']; ?>&nbsp*</label>
                    <input id="email" class="form" type="email" name="email" placeholder="<?php echo $lang['FORM_MAIL_HOLD']; ?>" required="">
                </div>

                
                <div class="group1">
                    
                    <label id="dropdown-label" for="list"><?php echo $lang['FORM_DROP']; ?>&nbsp*</label>
                    <select id="dropdown" class="form" type="texte" name="list" required="">
                        <!-- <option disabled="" selected="" value=""><?php echo $lang['FORM_DROP_OPTION0']; ?></option> -->
                        <option value="info"><?php echo $lang['FORM_DROP_OPTION1']; ?></option>
                        <option value="job"><?php echo $lang['FORM_DROP_OPTION2']; ?></option>
                        <option value="preferNo"><?php echo $lang['FORM_DROP_OPTION3']; ?></option>
                        <option value="other"><?php echo $lang['FORM_DROP_OPTION4']; ?></option>
                    </select>
                    <cite style="font-size: smaller;"><em>*&nbsp<?php echo $lang['FORM_FORM']; ?></em></cite>
                </div>
                <div class="group2">
                    <p>Which option best describes your current role?</p>
                    <select id="most-like" name="mostLike" class="form" required="">
                        <option disabled="" selected="" value="">Select an option</option>
                        <option value="challenges">Challenges</option>
                        <option value="projects">Projects</option>
                        <option value="community">Community</option>
                        <option value="openSource">Open Source</option>
                    </select>
                </div>
                <div class="group2">
                    <p>What would you like to see improved? (Check all that apply)</p>
                    <label>
                        <input name="fav" value="Front-end Projects" type="checkbox">
                        Front-end Projects
                    </label>
                    <label>
                        <input name="fav" value="Back-end Projects" type="checkbox">
                        Back-end Projects
                    </label>
                    <label>
                        <input name="fav" value="Data Visualization" type="checkbox">
                        Data Visualization
                    </label>
                    <label>
                        <input name="fav" value="Challenges" type="checkbox">
                        Challenges
                    </label>
                    <label>
                        <input name="fav" value="Open Source Community" type="checkbox">
                        Open Source Community
                    </label>
                    <label>
                        <input name="fav" value="Gitter help rooms" type="checkbox">
                        Gitter help rooms
                    </label>
                    <label>
                        <input name="fav" value="Videos" type="checkbox">
                        Videos
                    </label>
                    <label>
                        <input name="fav" value="Data Visualization" type="checkbox">
                        Data Visualization
                    </label>
                    <label>
                        <input name="fav" value="City Meetups" type="checkbox">
                        City Meetups
                    </label>
                    <label>
                        <input name="fav" value="Wiki" type="checkbox">
                        Wiki
                    </label>
                    <label>
                        <input name="fav" value="Forum" type="checkbox">
                        Forum
                    </label>
                    <label>
                        <input name="fav" value="Additional Courses" type="checkbox">
                        Additional Courses
                    </label>
                </div>
                
                <div class="group">
                    <label for="comment"><?php echo $lang['FORM_COMMENT']; ?></label>
                    <textarea id="comments" class="input-textarea" name="comment" placeholder="<?php echo $lang['FORM_COMMENT_LABEL'];?>"></textarea>
                </div>
                <div class="group1">
                    <button type="submit" id="submit" class="submit-button">
                        <?php echo $lang['FORM_SUBMIT'];?>
                    </button>
                </div>

            </form>
    </div>
   
    </main>
    <?php include("./footer.php") ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>