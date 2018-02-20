<?php
$section='projects';
$subsection='collaborators';
$page='collaborator-edit';
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'view/templates/language.php';
$collaborator=ControllerCollaborator::get(htmlspecialchars(filter_input(INPUT_GET, 'id')));
$project=ControllerProject::get($collaborator->getProject());
$user_profile=ControllerUser::get($collaborator->getUser());
$title=EDIT.' '.$user_profile->getName().' - '.$project->getName();
$nav=['projects.php'=>PROJECTS, 'project-info.php?id='.$project->getId()=>$project->getName(), 'collaborator.php?id='.$collaborator->getId()=>$user_profile->getName(), ''=>EDIT];
require_once $root.'view/templates/header.php';
?>
<div class="row my-4">
    <?php require_once $root.'view/templates/project.php'?>
    <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 px-5">
        <h1 class="text-center mb-4"><?php echo EDIT_COLLABORATOR?></h1>
        <form id="form" action="../../controller/controller-collaborator-edit.php" method="post">
            <fieldset class="form-group">
                <legend class="col-form-label"><?php echo ROLE?></legend>
                <div class="form-check">
                    <input class="form-check-input" id="collaborator" name="role" type="radio" value="C" <?php if($collaborator->getRole()=== 'C') echo 'checked'?> />
                    <label class="form-check-label" for="collaborator"><?php echo COLLABORATOR?></label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" id="supervisor" name="role" type="radio" value="S" <?php if($collaborator->getRole()=== 'S') echo 'checked'?>/>
                    <label class="form-check-label" for="supervisor"><?php echo SUPERVISOR?></label>
                </div>
            </fieldset>
            <input name="id" type="hidden" value="<?php echo $collaborator->getId()?>" />
            <div class="text-center">
                <button class="btn btn-success mt-4" type="submit"><?php echo SAVE?></button>
            </div>
        </form>
    </div>
</div>
<?php
require_once $root.'view/templates/footer.php';
