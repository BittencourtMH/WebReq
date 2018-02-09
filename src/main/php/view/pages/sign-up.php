<?php
$section='unlogged';
$page='sign-up';
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'view/templates/header.php';
$nav=[''=>SIGN_UP];
require_once $root.'view/templates/path.php';
require_once $root.'view/templates/TimeZone.php';
?>
<div class="container margin-bottom-medium">
    <h1 class="text-center margin-top-small margin-bottom-medium"><?php echo SIGN_UP?></h1>
    <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-6 mx-auto">
        <form class="margin-bottom-medium" id="form-sign-up" action="../../controller/controller-sign-up.php" method="post" novalidate>
            <div class="form-group" id="form-username">
                <label for="username"><?php echo USERNAME?></label>
                <input class="form-control" id="username" name="username" type="text" placeholder="<?php echo USERNAME?>" required />
                <div class="invalid-feedback" id="help-username">Please provide a valid username.</div>
            </div>
            <div class="form-group" id="form-password">
                <label for="password"><?php echo PASSWORD?></label>
                <input class="form-control" id="password" name="password" type="password" placeholder="<?php echo PASSWORD?>" required>
                <div class="invalid-feedback" id="help-password">Please provide a valid password.</div>
            </div>
            <div class="form-group" id="form-password2">
                <label for="password2"><?php echo RETYPE_PASSWORD?></label>
                <input class="form-control" id="password2" name="password2" type="password" placeholder="<?php echo RETYPE_PASSWORD?>" required>
                <div class="invalid-feedback" id="help-password2">Passwords do not match.</div>
            </div>
            <div class="form-group" id="form-name">
                <label for="name"><?php echo NAME?></label>
                <input class="form-control" id="name" name="name" type="text" placeholder="<?php echo NAME?>" required>
                <div class="invalid-feedback" id="help-name">Please provide a valid name.</div>
            </div>
            <div class="form-group" id="form-email">
                <label for="email"><?php echo EMAIL?></label>
                <input class="form-control" id="email" name="email" type="email" placeholder="<?php echo EMAIL?>" required>
                <div class="invalid-feedback" id="help-email">Please provide a valid email.</div>
            </div>
            <div class="form-group" id="form-language">
                <label for="language"><?php echo LANGUAGE?></label>
                <select class="form-control form-control-sm" id="language" name="language">
                    <option value="en" selected>English</option>
                    <option value="es">Español</option>
                    <option value="pt">Português</option>
                </select>
            </div>
            <div class="form-group" id="form-time-zone">
                <label for="time-zone"><?php echo TIME_ZONE?></label>
                <select class="form-control form-control-sm" id="time-zone" name="time-zone">
                    <?php
                    TimeZone::get('America/Sao_Paulo');
                    ?>
                </select>
            </div>
            <div class="form-group" id="form-academic">
                <label for="academic"><?php echo ACADEMIC_EDUCATION?></label>
                <textarea class="form-control" id="academic" name="academic" placeholder="<?php echo ACADEMIC_EDUCATION?>" rows="10"></textarea>
            </div>
            <div class="form-group" id="form-professional">
                <label for="professional"><?php echo PROFESSIONAL_EXPERIENCE?></label>
                <textarea class="form-control" id="professional" name="professional" placeholder="<?php echo PROFESSIONAL_EXPERIENCE?>" rows="10"></textarea>
            </div>
            <div class="text-center">
                <button class="btn btn-success margin-top-small" id="sign-up" type="submit"><?php echo SIGN_UP?></button>
            </div>
        </form>
    </div>
</div>
<?php
require_once $root.'view/templates/footer.php';
