<?php
session_start();
session_destroy();
$section='unlogged';
$page='sign-in';
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'view/templates/header.php';
$nav=[''=>SIGN_IN];
require_once $root.'view/templates/path.php';
?>
<div class="my-4 px-5">
    <h1 class="text-center mb-4"><?php echo SIGN_IN?></h1>
    <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-4 mx-auto">
        <form id="form-sign-in" action="../../controller/controller-sign-in.php" method="post" novalidate>
            <div class="form-group" id="form-username">
                <label class="control-label" for="username"><?php echo USERNAME?></label>
                <input class="form-control" id="username" name="username" type="text" placeholder="<?php echo USERNAME?>" required>
                <div class="invalid-feedback" id="help-username">Please provide a valid username.</div>
            </div>
            <div class="form-group margin-bottom-medium" id="form-password">
                <label class="control-label" for="password"><?php echo PASSWORD?></label>
                <input class="form-control" id="password" name="password" type="password" placeholder="<?php echo PASSWORD?>" required>
                <div class="invalid-feedback" id="help-password">Please provide a valid password.</div>
            </div>
            <div class="mt-4">
                <button class="btn btn-primary" id="sign-in" type="submit"><?php echo SIGN_IN?></button>
                <button class="btn btn-secondary float-right" type="submit"><?php echo FORGOT_PASSWORD?></button>
            </div>
        </form>
        <div class="text-center mt-4">
            <a class="btn btn-success" href="sign-up.php?lang=<?php echo $language?>" role="button"><?php echo SIGN_UP?></a>
        </div>
    </div>
</div>
<?php
require_once $root.'view/templates/footer.php';
