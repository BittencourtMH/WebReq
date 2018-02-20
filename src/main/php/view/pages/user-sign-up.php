<?php
$section='unlogged';
$page='user-sign-up';
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'view/templates/language.php';
$title=SIGN_UP;
$nav=[''=>SIGN_UP];
require_once $root.'view/templates/header.php';
?>
<div class="my-4 px-5">
    <h1 class="text-center mb-4"><?php echo SIGN_UP?></h1>
    <form id="form" action="../../controller/controller-user-sign-up.php" method="post">
        <div class="form-group">
            <label for="username"><?php echo USERNAME?></label>
            <input class="form-control" id="username" name="username" type="text" placeholder="<?php echo USERNAME?>" oninput="hideValidation(event)" />
            <div class="invalid-feedback" id="help-username"><?php echo INVALID_USERNAME?></div>
        </div>
        <div class="form-group">
            <label for="password"><?php echo PASSWORD?></label>
            <input class="form-control" id="password" name="password" type="password" placeholder="<?php echo PASSWORD?>" oninput="hideValidation(event)" />
            <div class="invalid-feedback" id="help-password"><?php echo INVALID_PASSWORD?></div>
        </div>
        <div class="form-group">
            <label for="password2"><?php echo RETYPE_PASSWORD?></label>
            <input class="form-control" id="password2" name="password2" type="password" placeholder="<?php echo RETYPE_PASSWORD?>" oninput="hideValidation(event)" />
            <div class="invalid-feedback" id="help-password2"><?php echo PASSWORDS_NOT_MATCHING?></div>
        </div>
        <div class="form-group">
            <label for="name"><?php echo NAME?></label>
            <input class="form-control" id="name" name="name" type="text" placeholder="<?php echo NAME?>" oninput="hideValidation(event)" />
            <div class="invalid-feedback" id="help-name"><?php echo INVALID_NAME?></div>
        </div>
        <div class="form-group">
            <label for="email"><?php echo EMAIL?></label>
            <input class="form-control" id="email" name="email" type="email" placeholder="<?php echo EMAIL?>" oninput="hideValidation(event)" />
            <div class="invalid-feedback" id="help-email"><?php echo INVALID_EMAIL?></div>
        </div>
        <div class="form-group">
            <label for="language"><?php echo LANGUAGE?></label>
            <select class="form-control form-control-sm" id="language" name="language">
                <option value="en" selected>English</option>
                <option value="es">Español</option>
                <option value="pt">Português</option>
            </select>
        </div>
        <div class="form-group">
            <label for="time-zone"><?php echo TIME_ZONE?></label>
            <select class="form-control form-control-sm" id="time-zone" name="time-zone">
                <?php
                ControllerTimeZone::getAll('America/Sao_Paulo');
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="academic"><?php echo ACADEMIC_EDUCATION?></label>
            <textarea class="form-control" id="academic" name="academic" placeholder="<?php echo ACADEMIC_EDUCATION?>" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="professional"><?php echo PROFESSIONAL_EXPERIENCE?></label>
            <textarea class="form-control" id="professional" name="professional" placeholder="<?php echo PROFESSIONAL_EXPERIENCE?>" rows="10"></textarea>
        </div>
        <div class="text-center mt-4">
            <button class="btn btn-success" type="submit"><?php echo SIGN_UP?></button>
        </div>
    </form>
</div>
<?php
require_once $root.'view/templates/footer.php';
