<?php
$section='settings';
$page='user-account';
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
        <form id="form" action="../../controller/controller-user-account.php" method="post">
            <div class="alert alert-danger" role="alert"><?php echo WARNING_USER?></div>
            <div class="form-group">
                <label id="label-password" for="password"><?php echo PASSWORD?></label>
                <input class="form-control" id="password" name="password" type="password" placeholder="<?php echo PASSWORD?>" oninput="hideValidation(event)" />
                <div class="invalid-feedback" id="help-password"><?php echo INVALID_PASSWORD?></div>
            </div>
            <div class="text-center mt-4">
                <button class="btn btn-danger" type="submit"><?php echo DELETE_ACCOUNT?></button>
            </div>
        </form>
    </div>
</div>
<?php
require_once $root.'view/templates/footer.php';
