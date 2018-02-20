<?php
session_start();
session_destroy();
$section='unlogged';
$page='user-sign-in';
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'view/templates/language.php';
$title=SIGN_IN;
$nav=[''=>SIGN_IN];
require_once $root.'view/templates/header.php';
?>
<div class="my-4 px-5">
    <h1 class="text-center mb-4"><?php echo SIGN_IN?></h1>
    <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-4 mx-auto">
        <form id="form" action="../../controller/controller-user-sign-in.php" method="post">
            <div class="form-group">
                <label class="control-label" for="username"><?php echo USERNAME?></label>
                <input class="form-control" id="username" name="username" type="text" placeholder="<?php echo USERNAME?>" oninput="hideValidation(event)" />
                <div class="invalid-feedback" id="help-username"><?php echo INVALID_USERNAME?></div>
            </div>
            <div class="form-group">
                <label class="control-label" for="password"><?php echo PASSWORD?></label>
                <input class="form-control" id="password" name="password" type="password" placeholder="<?php echo PASSWORD?>" oninput="hideValidation(event)" />
                <div class="invalid-feedback" id="help-password"><?php echo INVALID_PASSWORD?></div>
            </div>
            <div class="text-center mt-4">
                <button class="btn btn-success" type="submit"><?php echo SIGN_IN?></button>
            </div>
        </form>
        <div class="text-center mt-4">
            <a class="btn btn-link" href="user-sign-up.php?lang=<?php echo $language?>" role="button"><?php echo SIGN_UP?></a>
        </div>
        <div class="text-center mt-4">
            <button class="btn btn-link" type="button"><?php echo FORGOT_PASSWORD?></button>
        </div>
    </div>
</div>
<?php
require_once $root.'view/templates/footer.php';
