<?php
$section='projects';
$subsection='project-info';
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'view/templates/language.php';
$project=ControllerProject::get(htmlspecialchars(filter_input(INPUT_GET, 'id')));
$creator=ControllerUser::get($project->getCreator());
$manager=ControllerUser::get($project->getManager());
$title=$project->getName();
$nav=['projects.php'=>PROJECTS, ''=>$project->getName()];
require_once $root.'view/templates/header.php';
?>
<div class="row my-4">
    <?php require_once $root.'view/templates/project.php'?>
    <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 px-5">
        <h1 class="text-center mb-4"><?php echo PROJECT?></h1>
        <a class="btn btn-info mb-4" href="project-edit.php?id=<?php echo $project->getId()?>" role="button"><?php echo EDIT?></a>
        <dl class="row">
            <dt class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"><?php echo NAME?></dt>
            <dd class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8"><?php echo $project->getName()?></dd>
            <dt class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"><?php echo START_DATE?></dt>
            <dd class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8"><?php echo $project->getStartDate()->format('d/m/Y')?></dd>
            <dt class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"><?php echo END_DATE?></dt>
            <dd class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8"><?php echo $project->getEndDate()->format('d/m/Y')?></dd>
            <dt class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"><?php echo PRIVACY?></dt>
            <dd class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8"><?php echo ($project->getPublic()=== true ? PUBLIC_WORD : PRIVATE_WORD)?></dd>
            <dt class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"><?php echo CREATOR?></dt>
            <dd class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8"><?php echo $creator->link()?></dd>
            <dt class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"><?php echo MANAGER?></dt>
            <dd class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8"><?php echo $manager->link()?></dd>
        </dl>
    </div>
</div>
<?php
require_once $root.'view/templates/footer.php';
