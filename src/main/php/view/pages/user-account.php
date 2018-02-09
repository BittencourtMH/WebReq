<?php
$section='settings';
$page='account';
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'view/templates/header.php';
$nav=[''=>SETTINGS];
require_once $root.'view/templates/path.php';
?>
<div class="row my-4">
    <?php require_once $root.'view/templates/user.php'?>
    <div class="col-11 col-sm-11 col-md-11 col-lg-8 col-xl-8 mx-auto">
        <h1 class="text-center mb-4"><?php echo SETTINGS?></h1>
        <form class="margin-bottom-medium" id="form-account" action="../../controller/controller-user-account.php" method="post" novalidate>
            <div class="alert alert-danger" role="alert"><?php echo WARNING_USER?></div>
            <div class="form-group" id="form-password">
                <label id="label-password" for="password"><?php echo PASSWORD?></label>
                <input class="form-control" id="password" name="password" type="password" placeholder="<?php echo PASSWORD?>" required>
                <div class="invalid-feedback" id="help-password">Please provide a valid password.</div>
            </div>
            <div class="text-center">
                <button class="btn btn-danger margin-top-small" id="save" type="submit"><?php echo DELETE_ACCOUNT?></button>
            </div>
        </form>
    </div>
</div>
<?php
include_once $root.'view/templates/footer.php';
