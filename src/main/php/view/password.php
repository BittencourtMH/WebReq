<?php
include 'Page.php';
include '../controller/ControllerUsers.php';

Page::header("settings");
$user=ControllerUsers::get($_SESSION['user']);

?>
<div class="container margin-bottom-medium">
    <?php
    Page::settings('password');

    ?>
    <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-6 mx-auto">
        <form class="margin-bottom-medium" id="form-password" action="../controller/controller-password.php" method="post" novalidate>                
            <div class="form-group" id="form-old-password">
                <label id="label-old-password" for="old-password">Current password</label>
                <input class="form-control" id="old-password" name="old-password" type="password" placeholder="Current password" required>
                <div class="invalid-feedback" id="help-old-password">Please provide a valid password.</div>
            </div>
            <div class="form-group" id="form-new-password">
                <label id="label-new-password" for="new-password">New password</label>
                <input class="form-control" id="new-password" name="new-password" type="password" placeholder="New password" required>
                <div class="invalid-feedback" id="help-new-password">Please provide a valid password.</div>
            </div>
            <div class="form-group" id="form-new-password2">
                <label id="label-new-password2" for="new-password2">Retype new password</label>
                <input class="form-control" id="new-password2" name="new-password2" type="password" placeholder="Retype new password" required>
                <div class="invalid-feedback" id="help-new-password2"></div>
            </div>
            <div class="text-center">
                <button class="btn btn-success margin-top-small" id="save" type="submit">Save</button>
            </div>
        </form>            
    </div>
</div>
<?php
Page::footer('password');
