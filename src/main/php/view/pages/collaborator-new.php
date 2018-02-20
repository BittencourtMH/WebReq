<?php
$section='projects';
$subsection='collaborators';
$page='collaborator-new';
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'view/templates/language.php';
$project=ControllerProject::get(htmlspecialchars(filter_input(INPUT_GET, 'id')));
$title=NEW_COLLABORATOR.' - '.$project->getName();
$nav=['projects.php'=>PROJECTS, 'project-info.php?id='.$project->getId()=>$project->getName(), ''=>NEW_COLLABORATOR];
require_once $root.'view/templates/header.php';
?>
<div class="row my-4">
    <?php require_once $root.'view/templates/project.php'?>
    <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 px-5">
        <h1 class="text-center mb-4"><?php echo NEW_COLLABORATOR?></h1>
        <form id="form" action="../../controller/controller-collaborator-new.php" method="post">
            <div class="form-group">
                <label for="username"><?php echo USERNAME?></label>
                <input class="form-control" id="username" name="username" type="text" placeholder="<?php echo USERNAME?>" oninput="hideValidation(event)" />
                <div class="invalid-feedback" id="help-username"><?php echo INVALID_USERNAME?></div>
            </div>
            <fieldset class="form-group">
                <legend class="col-form-label"><?php echo ROLE?></legend>
                <div class="form-check">
                    <input class="form-check-input" id="collaborator" name="role" type="radio" value="C" checked />
                    <label class="form-check-label" for="collaborator"><?php echo COLLABORATOR?></label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" id="supervisor" name="role" type="radio" value="S" />
                    <label class="form-check-label" for="supervisor"><?php echo SUPERVISOR?></label>
                </div>
            </fieldset>
            <input name="project" type="hidden" value="<?php echo $project->getId()?>" />
            <div class="text-center">
                <button class="btn btn-success mt-4" type="submit"><?php echo ADD_COLLABORATOR?></button>
            </div>
        </form>
    </div>
</div>
<?php
require_once $root.'view/templates/footer.php';
