<?php
$section='projects';
$subsection='requirements';
$page='requirement';
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'controller/ControllerProjects.php';
require_once $root.'controller/ControllerRequirements.php';
require_once $root.'controller/ControllerUsers.php';
$requirement=ControllerRequirements::get(htmlspecialchars(filter_input(INPUT_GET, 'id')));
$project=ControllerProjects::get($requirement->getProject());
$author=ControllerUsers::get($requirement->getAuthor());
require_once $root.'view/templates/header.php';
$nav=['projects.php'=>PROJECTS, 'project-info.php?id='.$project->getId()=>$project->getName(), ''=>$requirement->getName()];
require_once $root.'view/templates/path.php';
?>
<div class="row my-4">
    <?php require_once $root.'view/templates/project.php'?>
    <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 px-5">
        <h1 class="text-center mb-4"><?php echo REQUIREMENT?></h1>
        <div class="row mb-4">
            <a class="btn btn-info mx-2" href="requirement-edit.php?id=<?php echo $requirement->getId()?>" role="button"><?php echo EDIT?></a>
            <form class="mx-2" id="form" action="../../controller/controller-requirement-remove.php?id=<?php echo $requirement->getId()?>" method="post" novalidate>
                <input name="id" type="hidden" value="<?php echo $requirement->getId()?>" />
                <input name="project" type="hidden" value="<?php echo $project->getId()?>" />
                <button type="submit" class="btn btn-danger"><?php echo REMOVE?></button>
            </form>
        </div>
        <dl class="row">
            <dt class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"><?php echo TYPE?></dt>
            <dd class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8"><?php echo $requirement->type()?></dd>
            <dt class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"><?php echo NAME?></dt>
            <dd class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8"><?php echo $requirement->getName()?></dd>
            <dt class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"><?php echo VERSION?></dt>
            <dd class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8"><?php echo $requirement->getVersion()?></dd>
            <dt class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"><?php echo STATUS?></dt>
            <dd class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8"><?php echo $requirement->status()?></dd>
            <dt class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"><?php echo PRIORITY?></dt>
            <dd class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8"><?php echo $requirement->priority()?></dd>
            <dt class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"><?php echo COMPLEXITY?></dt>
            <dd class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8"><?php echo $requirement->complexity()?></dd>
            <dt class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"><?php echo REQUESTOR?></dt>
            <dd class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8"><?php echo $requirement->getSolicitor()?></dd>
            <dt class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"><?php echo AUTHOR?></dt>
            <dd class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8"><?php echo $author->link()?></dd>
            <dt class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"><?php echo DATE_CREATED?></dt>
            <dd class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8"><?php echo $requirement->getDateCreated()->format('d/m/Y H:i:s')?></dd>
            <dt class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"><?php echo DATE_MODIFIED?></dt>
            <dd class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8"><?php echo $requirement->getDateModified()->format('d/m/Y H:i:s')?></dd>
            <dt class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"><?php echo DESCRIPTION?></dt>
            <dd class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8"><?php echo nl2br($requirement->getDescription())?></dd>
            <dt class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"><?php echo NOTES?></dt>
            <dd class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8"><?php echo nl2br($requirement->getNotes())?></dd>
        </dl>
    </div>
</div>
<?php
require_once $root.'view/templates/footer.php';
