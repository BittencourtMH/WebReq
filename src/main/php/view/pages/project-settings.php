<?php
$section='projects';
$subsection=$page='project-settings';
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'view/templates/language.php';
$project=ControllerProject::get(htmlspecialchars(filter_input(INPUT_GET, 'id')));
$title=$project->getName();
$nav=['projects.php'=>PROJECTS, ''=>$project->getName()];
require_once $root.'view/templates/header.php';
?>
<div class="row my-4">
    <?php require_once $root.'view/templates/project.php'?>
    <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 px-5">
        <h1 class="text-center mb-4"><?php echo PROJECT?></h1>
        <div class="alert alert-danger" role="alert"><?php echo WARNING_PROJECT?></div>
        <form id="form" action="../../controller/controller-project-settings.php" method="post">
            <div class="form-group">
                <label id="label-password" for="password"><?php echo PASSWORD?></label>
                <input class="form-control" id="password" name="password" type="password" placeholder="<?php echo PASSWORD?>" oninput="hideValidation(event)" />
                <div class="invalid-feedback" id="help-password"><?php echo INVALID_PASSWORD?></div>
            </div>
            <input name="project" type="hidden" value="<?php echo $project->getId()?>" />
            <div class="text-center">
                <button class="btn btn-danger mt-4" type="submit"><?php echo DELETE_PROJECT?></button>
            </div>
        </form>
    </div>
</div>
<?php
require_once $root.'view/templates/footer.php';
