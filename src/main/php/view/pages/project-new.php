<?php
$section='projects';
$page='project-new';
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'view/templates/language.php';
$title=NEW_PROJECT;
$nav=['projects.php'=>PROJECTS, ''=>NEW_PROJECT];
require_once $root.'view/templates/header.php';
?>
<div class="my-4 px-5">
    <h1 class="text-center mb-4"><?php echo NEW_PROJECT?></h1>
    <form id="form" action="../../controller/controller-project-new.php" method="post">
        <div class="form-group">
            <label for="name"><?php echo NAME?></label>
            <input class="form-control" id="name" name="name" type="text" placeholder="<?php echo NAME?>" oninput="hideValidation(event)" />
            <div class="invalid-feedback" id="help-name"><?php echo INVALID_NAME?></div>
        </div>
        <div class="form-group">
            <label for="start"><?php echo START_DATE?></label>
            <input class="form-control" id="start" name="start" type="date" onchange="hideValidation(event)" />
            <div class="invalid-feedback" id="help-start"><?php echo INVALID_START_DATE?></div>
        </div>
        <div class="form-group">
            <label for="end"><?php echo END_DATE?></label>
            <input class="form-control" id="end" name="end" type="date" />
        </div>
        <fieldset class="form-group">
            <legend class="col-form-label"><?php echo PRIVACY?></legend>
            <div class="form-check">
                <input class="form-check-input" id="public" name="privacy" type="radio" value="1" checked />
                <label class="form-check-label" for="public"><?php echo PUBLIC_WORD?></label>
            </div>
            <div class="form-check">
                <input class="form-check-input" id="private" name="privacy" type="radio" value="0" />
                <label class="form-check-label" for="private"><?php echo PRIVATE_WORD?></label>
            </div>
        </fieldset>
        <div class="text-center">
            <button class="btn btn-success mt-4" type="submit"><?php echo CREATE_PROJECT?></button>
        </div>
    </form>
</div>
<?php
require_once '../templates/footer.php';
