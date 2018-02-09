<?php
$section='projects';
$page='new-project';
require_once '../templates/header.php';
$nav=['projects.php'=>PROJECTS, ''=>NEW_PROJECT];
require_once '../templates/path.php';
?>
<div class="my-4 px-5">
    <h1 class="text-center mb-4"><?php echo NEW_PROJECT?></h1>
    <form id="form" action="../../controller/controller-new-project.php" method="post" novalidate>
        <div class="form-group" id="form-name">
            <label for="name"><?php echo NAME?></label>
            <input class="form-control" id="name" name="name" type="text" placeholder="<?php echo NAME?>" required />
            <div class="invalid-feedback" id="help-name">Please provide a valid name.</div>
        </div>
        <div class="form-group" id="form-start">
            <label for="start"><?php echo START_DATE?></label>
            <input class="form-control" id="start" name="start" type="date" required />
            <div class="invalid-feedback" id="help-start">Please provide a valid start date.</div>
        </div>
        <div class="form-group" id="form-end">
            <label for="end"><?php echo END_DATE?></label>
            <input class="form-control" id="end" name="end" type="date" required />
            <div class="invalid-feedback" id="help-end">Please provide a valid end date.</div>
        </div>
        <div class="text-center">
            <button class="btn btn-success mt-4" id="sign-up" type="submit"><?php echo CREATE_PROJECT?></button>
        </div>
    </form>
</div>
<?php
require_once '../templates/footer.php';
