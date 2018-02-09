<?php
$section='projects';
$subsection='project-info';
$page='project-edit';
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'controller/ControllerProjects.php';
$project=ControllerProjects::get(htmlspecialchars(filter_input(INPUT_GET, 'id')));
$manager=$project->getManager();
require_once $root.'view/templates/header.php';
$nav=['projects.php'=>PROJECTS, 'project-info.php?id='.$project->getId()=>$project->getName(), ''=>EDIT];
require_once $root.'view/templates/path.php';
?>
<div class="row my-4">
    <?php require_once $root.'view/templates/project.php'?>
    <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 px-5">
        <h1 class="text-center mb-4"><?php echo EDIT_PROJECT?></h1>
        <form id="form" action="../../controller/controller-project-edit.php" method="post" novalidate>
            <div class="form-group" id="form-name">
                <label for="name"><?php echo NAME?></label>
                <input class="form-control" id="name" name="name" type="text" placeholder="<?php echo NAME?>" value="<?php echo $project->getName()?>" required />
                <div class="invalid-feedback" id="help-name">Please provide a valid name.</div>
            </div>
            <div class="form-group" id="form-start">
                <label for="start"><?php echo START_DATE?></label>
                <input class="form-control" id="start" name="start" type="date" value="<?php echo $project->getStartDate()->format('Y-m-d')?>" required />
                <div class="invalid-feedback" id="help-start">Please provide a valid start date.</div>
            </div>
            <div class="form-group" id="form-end">
                <label for="end"><?php echo END_DATE?></label>
                <input class="form-control" id="end" name="end" type="date" value="<?php echo $project->getEndDate()->format('Y-m-d')?>" required />
                <div class="invalid-feedback" id="help-end">Please provide a valid end date.</div>
            </div>
            <input name="id" type="hidden" value="<?php echo $project->getId()?>" />
            <div class="text-center">
                <button class="btn btn-success mt-4" id="sign-up" type="submit"><?php echo SAVE?></button>
            </div>
        </form>
    </div>
</div>
<?php
require_once $root.'view/templates/footer.php';
