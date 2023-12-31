<?php
session_start();
session_unset();
include './inc/multilang.php';
include './inc/formcontrol.php';

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
            <div class="d-flex jc-c" id="title">
                <h1><?php echo $lang['FORM_TITLE']; ?></h1>
            </div>

            <form id="formulaire_contact" method="POST" action="contact.php?lang=<?= ($lang['LANG']); ?>">
                <div class="group <?php echo !empty($nameError) ? 'error' : ''; ?>"> <!--//ajoute une classe 'error'-->
                    <label id="name-label" for="emailname"><?php echo $lang['FORM_NAME']; ?><sup style="color:red">&nbsp*</sup></label>
                    <input id="emailname" class="form <?php echo !empty($nameError) ? 'No-valid' : ''; ?> <?php echo empty($nameError) && !empty($name) ? 'Valid' : ''; ?> " type="text" name="name" placeholder="<?php echo $lang['FORM_NAME_HOLD']; ?>" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>">
                    <?php if (!empty($nameError)) : ?>
                        <span class="dserror d-flex"><?php echo $nameError; ?></span>
                    <?php endif; ?>
                </div>
                <div class="group2">
                    <label id="name-label" for="name"><?php echo $lang['FORM_NAME']; ?><sup style="color:red">&nbsp*</sup></label>
                    <input id="nickname" class="form" type="text" name="nickname" placeholder="<?php echo $lang['FORM_NICK_HOLD']; ?>">
                    <?php if (!empty($nickError)) : ?>
                        <span class="dserror d-flex"><?php echo $nickError; ?></span>
                    <?php endif; ?>
                </div>

                <div class="group <?php echo !empty($emailError) ? 'error' : ''; ?>">
                    <label id="email-label" for="email"><?php echo $lang['FORM_MAIL']; ?><sup style="color:red">&nbsp*</sup></label>
                    <input id="email" class="form <?php echo !empty($emailError) ? 'No-valid' : ''; ?> <?php echo empty($emailError) && !empty($email) ? 'Valid' : ''; ?>" type="text" name="email" placeholder="<?php echo $lang['FORM_MAIL_HOLD']; ?>" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
                    <?php if (!empty($emailError)) : ?>
                        <span class="dserror d-flex"><?php echo $emailError; ?></span>
                    <?php endif; ?>
                </div>

                <div class="group1 <?php echo !empty($dropError) ? 'error' : ''; ?>">
                    <label id="dropdown-label" for="drop"><?php echo $lang['FORM_DROP']; ?><sup style="color:red">&nbsp*</sup></label>
                    <select id="dropdown" class="form <?php echo !empty($dropError) ? 'No-valid' : ''; ?> <?php echo !empty($drop) ? 'Valid' : ''; ?>" name="drop">
                        <option value=""><?php echo $lang['FORM_DROP_OPTION0']; ?></option>
                        <option value="info" <?php
                                                if (isset($_POST['drop']) && ($_POST['drop']) == 'info') echo 'selected=""' ?>><?php echo $lang['FORM_DROP_OPTION1']; ?> </option>
                        <option value="job" <?php
                                            if (isset($_POST['drop']) && ($_POST['drop']) == 'job') echo 'selected=""'; ?>><?php echo $lang['FORM_DROP_OPTION2']; ?></option>
                        <option value="preferNo" <?php
                                                    if (isset($_POST['drop']) && ($_POST['drop']) == 'preferNo') echo 'selected=""'; ?>><?php echo $lang['FORM_DROP_OPTION3']; ?></option>
                        <option value="other" <?php
                                                if (isset($_POST['drop']) && ($_POST['drop']) == 'other') echo 'selected=""'; ?> <?php echo $lang['Spb']; ?>><?php echo $lang['FORM_DROP_OPTION4']; ?></option>
                    </select>
                    <?php if (!empty($dropError)) : ?>
                        <span class="dserror d-flex"><?php echo $dropError; ?></span>
                    <?php endif; ?>
                </div>
                <!-- <br> -->
                <p style="font-size: smaller;"><em><sup style="color:red">*&nbsp</sup><?php echo $lang['FORM_FORM']; ?></em></p>
                <hr style="border-color:gray">
                <div class="group">
                    <label for="comment"><?php echo $lang['FORM_COMMENT']; ?></label>
                    <textarea maxlength="256" id="comments" class="input-textarea <?php echo !empty($commentError) ? 'No-valid' : ''; ?>" name="comment" placeholder="<?php echo !empty($comment) ? $_POST['comment'] : $lang['FORM_COMMENT_LABEL']; ?>" ></textarea>
                    <?php if (!empty($commentError)) : ?>
                        <span class="dserror d-flex"><?php echo $commentError; ?></span>
                    <?php endif; ?>
                </div>
                <?php
                if ((isset($valid)) && $valid == 'true') {
                ?>
                    <div class="d-flex jc-c">
                        <div class="alert alert-success" style="margin-top:60px; max-width:50%" role="alert">
                            <?php echo $retour; ?>&nbsp<a href="./index.php?lang=<?= ($lang['LANG']); ?>" class="alert-link">Retour à l'acceuil</a>
                        </div>
                    </div>
                    <!-- <a class="btn btn-secondary" href="./index.php?lang=<?= ($lang['LANG']); ?>"><?php echo $retour; ?></a> -->
                    <!-- <div class="group1">
                        <button type="submit" id="submit" class="submit-button">
                            <?php echo $lang['FORM_SUBMIT']; ?>
                        </button>
                    </div> -->
                <?php } else {
                ?>
                    <div class="group1">
                        <button type="submit" id="submit" class="submit-button">
                            <?php echo $lang['FORM_SUBMIT']; ?>
                        </button>
                    </div>
                <?php }
                ?>

            </form>
    </div>

    </main>
    <?php
    include './inc/formcontrol.php';

    ?>
    <?php include("./footer.php") ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>