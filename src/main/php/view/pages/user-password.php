<?php
$section='settings';
$page='password';
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'view/templates/header.php';
$nav=[''=>SETTINGS];
require_once $root.'view/templates/path.php';
?>
<div class="row my-4">
    <?php require_once $root.'view/templates/user.php'?>
    <div class="col-11 col-sm-11 col-md-11 col-lg-8 col-xl-8 mx-auto">
        <h1 class="text-center mb-4"><?php echo SETTINGS?></h1>
        <form class="margin-bottom-medium" id="form-password" action="../../controller/controller-password.php" method="post" novalidate>
            <div class="form-group" id="form-old-password">
                <label id="label-old-password" for="old-password"><?php echo CURRENT_PASSWORD?></label>
                <input class="form-control" id="old-password" name="old-password" type="password" placeholder="<?php echo CURRENT_PASSWORD?>" required>
                <div class="invalid-feedback" id="help-old-password">Please provide a valid password.</div>
            </div>
            <div class="form-group" id="form-new-password">
                <label id="label-new-password" for="new-password"><?php echo NEW_PASSWORD?></label>
                <input class="form-control" id="new-password" name="new-password" type="password" placeholder="<?php echo NEW_PASSWORD?>" required>
                <div class="invalid-feedback" id="help-new-password">Please provide a valid password.</div>
            </div>
            <div class="form-group" id="form-new-password2">
                <label id="label-new-password2" for="new-password2"><?php echo RETYPE_NEW_PASSWORD?></label>
                <input class="form-control" id="new-password2" name="new-password2" type="password" placeholder="<?php echo RETYPE_NEW_PASSWORD?>" required>
                <div class="invalid-feedback" id="help-new-password2"></div>
            </div>
            <div class="text-center">
                <button class="btn btn-success margin-top-small" id="save" type="submit"><?php echo SAVE?></button>
            </div>
        </form>
    </div>
</div>
<?php
require_once $root.'view/templates/footer.php';
