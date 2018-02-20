<?php
$section='settings';
$page='user-profile';
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'view/templates/language.php';
$title=SETTINGS;
$nav=[''=>SETTINGS];
require_once $root.'view/templates/header.php';
?>
<div class="row my-4">
    <?php require_once $root.'view/templates/user.php'?>
    <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 px-5">
        <h1 class="text-center mb-4"><?php echo SETTINGS?></h1>
        <form id="form" action="../../controller/controller-user-profile.php" method="post">
            <div class="form-group">
                <label id="label-name" for="name"><?php echo NAME?></label>
                <input class="form-control" id="name" name="name" type="text" placeholder="<?php echo NAME?>" value="<?php echo $user->getName()?>" oninput="hideValidation(event)" />
                <div class="invalid-feedback" id="help-name"><?php echo INVALID_NAME?></div>
            </div>
            <div class="form-group">
                <label id="label-email" for="email"><?php echo EMAIL?></label>
                <input class="form-control" id="email" name="email" type="text" placeholder="<?php echo EMAIL?>" value="<?php echo $user->getEmail()?>" oninput="hideValidation(event)" />
                <div class="invalid-feedback" id="help-email"><?php echo INVALID_EMAIL?></div>
            </div>
            <div class="form-group">
                <label for="language"><?php echo LANGUAGE?></label>
                <select class="form-control form-control-sm" id="language" name="language" value="<?php echo $user->getLanguage()?>">
                    <option value="en" <?php if($user->getLanguage()=== 'en') echo 'selected'?>>English</option>
                    <option value="es" <?php if($user->getLanguage()=== 'es') echo 'selected'?>>Español</option>
                    <option value="pt" <?php if($user->getLanguage()=== 'pt') echo 'selected'?>>Português</option>
                </select>
            </div>
            <div class="form-group">
                <label for="time-zone"><?php echo TIME_ZONE?></label>
                <select class="form-control form-control-sm" id="time-zone" name="time-zone">
                    <?php
                    ControllerTimeZone::getAll($user->getTimeZone());
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="academic"><?php echo ACADEMIC_EDUCATION?></label>
                <textarea class="form-control" id="academic" name="academic" placeholder="<?php echo ACADEMIC_EDUCATION?>" rows="10"><?php echo $user->getAcademic()?></textarea>
            </div>
            <div class="form-group">
                <label for="professional"><?php echo PROFESSIONAL_EXPERIENCE?></label>
                <textarea class="form-control" id="professional" name="professional" placeholder="<?php echo PROFESSIONAL_EXPERIENCE?>" rows="10"><?php echo $user->getProfessional()?></textarea>
            </div>
            <div class="text-center mt-4">
                <button class="btn btn-success" type="submit"><?php echo SAVE?></button>
            </div>
        </form>
    </div>
</div>
<?php
require_once $root.'view/templates/footer.php';
