<?php
$section='settings';
$page='profile';
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'view/templates/header.php';
$nav=[''=>SETTINGS];
require_once $root.'view/templates/path.php';
require_once $root.'view/templates/TimeZone.php';
?>
<div class="row my-4">
    <?php require_once $root.'view/templates/user.php'?>
    <div class="col-11 col-sm-11 col-md-11 col-lg-8 col-xl-8 mx-auto">
        <h1 class="text-center mb-4"><?php echo SETTINGS?></h1>
        <form class="margin-bottom-medium" id="form-profile" action="../../controller/controller-user-profile.php" method="post" novalidate>
            <div class="form-group" id="form-name">
                <label id="label-name" for="name"><?php echo NAME?></label>
                <input class="form-control" id="name" name="name" type="text" placeholder="<?php echo NAME?>" value="<?php echo $user->getName()?>" required />
                <div class="invalid-feedback" id="help-name">Please provide a valid name.</div>
            </div>
            <div class="form-group" id="form-email">
                <label id="label-email" for="email"><?php echo EMAIL?></label>
                <input class="form-control" id="email" name="email" type="text" placeholder="<?php echo EMAIL?>" value="<?php echo $user->getEmail()?>" required>
                <div class="invalid-feedback" id="help-email">Please provide a valid email.</div>
            </div>
            <div class="form-group" id="form-language">
                <label for="language"><?php echo LANGUAGE?></label>
                <select class="form-control form-control-sm" id="language" name="language" value="<?php echo $user->getLanguage()?>">
                    <option value="en" <?php if($user->getLanguage()=== 'en') echo 'selected'?>>English</option>
                    <option value="es" <?php if($user->getLanguage()=== 'es') echo 'selected'?>>Español</option>
                    <option value="pt" <?php if($user->getLanguage()=== 'pt') echo 'selected'?>>Português</option>
                </select>
            </div>
            <div class="form-group" id="form-time-zone">
                <label for="time-zone"><?php echo TIME_ZONE?></label>
                <select class="form-control form-control-sm" id="time-zone" name="time-zone">
                    <?php
                    TimeZone::get($user->getTimeZone());
                    ?>
                </select>
            </div>
            <div class="form-group" id="form-academic">
                <label for="academic"><?php echo ACADEMIC_EDUCATION?></label>
                <textarea class="form-control" id="academic" name="academic" placeholder="<?php echo ACADEMIC_EDUCATION?>" rows="10"><?php echo $user->getAcademic()?></textarea>
            </div>
            <div class="form-group" id="form-professional">
                <label for="professional"><?php echo PROFESSIONAL_EXPERIENCE?></label>
                <textarea class="form-control" id="professional" name="professional" placeholder="<?php echo PROFESSIONAL_EXPERIENCE?>" rows="10"><?php echo $user->getProfessional()?></textarea>
            </div>
            <div class="text-center">
                <button class="btn btn-success margin-top-small" id="save" type="submit"><?php echo SAVE?></button>
            </div>
        </form>
    </div>
</div>
<?php
require_once $root.'view/templates/footer.php';
