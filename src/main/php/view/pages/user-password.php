<?php
$section='settings';
$page='user-password';
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
        <form id="form" action="../../controller/controller-user-password.php" method="post">
            <div class="form-group">
                <label id="label-old-password" for="old-password"><?php echo CURRENT_PASSWORD?></label>
                <input class="form-control" id="old-password" name="old-password" type="password" placeholder="<?php echo CURRENT_PASSWORD?>" oninput="hideValidation(event)" />
                <div class="invalid-feedback" id="help-old-password"><?php echo INVALID_PASSWORD?></div>
            </div>
            <div class="form-group">
                <label id="label-new-password" for="new-password"><?php echo NEW_PASSWORD?></label>
                <input class="form-control" id="new-password" name="new-password" type="password" placeholder="<?php echo NEW_PASSWORD?>" oninput="hideValidation(event)" />
                <div class="invalid-feedback" id="help-new-password"><?php echo INVALID_PASSWORD?></div>
            </div>
            <div class="form-group">
                <label id="label-new-password2" for="new-password2"><?php echo RETYPE_NEW_PASSWORD?></label>
                <input class="form-control" id="new-password2" name="new-password2" type="password" placeholder="<?php echo RETYPE_NEW_PASSWORD?>" oninput="hideValidation(event)" />
                <div class="invalid-feedback" id="help-new-password2"><?php echo PASSWORDS_NOT_MATCHING?></div>
            </div>
            <div class="text-center mt-4">
                <button class="btn btn-success" type="submit"><?php echo SAVE?></button>
            </div>
        </form>
    </div>
</div>
<?php
require_once $root.'view/templates/footer.php';
