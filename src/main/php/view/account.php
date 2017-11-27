<?php
include 'Page.php';
include '../controller/ControllerUsers.php';

Page::header("settings");
$user=ControllerUsers::get($_SESSION['user']);

?>
<div class="container margin-bottom-medium">
    <?php
    Page::settings('account');

    ?>
    <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-6 mx-auto">
        <form class="margin-bottom-medium" id="form-account" action="../controller/controller-account.php" method="post" novalidate>
            <div class="alert alert-danger" role="alert">If you wish to delete your account, just type your password and click on the button below. This action is irreversible.</div>
            <div class="form-group" id="form-password">
                <label id="label-password" for="password">Password</label>
                <input class="form-control" id="password" name="password" type="password" placeholder="Password" required>
                <div class="invalid-feedback" id="help-password">Please provide a valid password.</div>
            </div>
            <div class="text-center">
                <button class="btn btn-danger margin-top-small" id="save" type="submit">Delete account</button>
            </div>
        </form>            
    </div>
</div>
<?php
Page::footer('account');
