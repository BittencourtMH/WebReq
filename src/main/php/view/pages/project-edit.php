<?php
$section='projects';
$subsection='project-info';
$page='project-edit';
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'view/templates/language.php';
$project=ControllerProject::get(htmlspecialchars(filter_input(INPUT_GET, 'id')));
$title=EDIT.' '.$project->getName();
$nav=['projects.php'=>PROJECTS, 'project-info.php?id='.$project->getId()=>$project->getName(), ''=>EDIT];
require_once $root.'view/templates/header.php';
?>
<div class="row my-4">
    <?php require_once $root.'view/templates/project.php'?>
    <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 px-5">
        <h1 class="text-center mb-4"><?php echo EDIT_PROJECT?></h1>
        <form id="form" action="../../controller/controller-project-edit.php" method="post">
            <div class="form-group">
                <label for="name"><?php echo NAME?></label>
                <input class="form-control" id="name" name="name" type="text" placeholder="<?php echo NAME?>" value="<?php echo $project->getName()?>" oninput="hideValidation(event)" />
                <div class="invalid-feedback" id="help-name"><?php echo INVALID_NAME?></div>
            </div>
            <div class="form-group">
                <label for="start"><?php echo START_DATE?></label>
                <input class="form-control" id="start" name="start" type="date" value="<?php echo $project->getStartDate()->format('Y-m-d')?>" oninput="hideValidation(event)" />
                <div class="invalid-feedback" id="help-start"><?php echo INVALID_START_DATE?></div>
            </div>
            <div class="form-group">
                <label for="end"><?php echo END_DATE?></label>
                <input class="form-control" id="end" name="end" type="date" value="<?php echo $project->getEndDate()->format('Y-m-d')?>" />
            </div>
            <fieldset class="form-group">
                <legend class="col-form-label"><?php echo PRIVACY?></legend>
                <div class="form-check">
                    <input class="form-check-input" id="public" name="privacy" type="radio" value="1" <?php if($project->getPublic()=== true) echo 'checked'?> />
                    <label class="form-check-label" for="public"><?php echo PUBLIC_WORD?></label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" id="private" name="privacy" type="radio" value="0" <?php if($project->getPublic()=== false) echo 'checked'?> />
                    <label class="form-check-label" for="private"><?php echo PRIVATE_WORD?></label>
                </div>
            </fieldset>
            <input name="id" type="hidden" value="<?php echo $project->getId()?>" />
            <div class="text-center">
                <button class="btn btn-success mt-4" type="submit"><?php echo SAVE?></button>
            </div>
        </form>
    </div>
</div>
<?php
require_once $root.'view/templates/footer.php';
