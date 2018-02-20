<?php
$section='projects';
$subsection='collaborators';
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'view/templates/language.php';
$collaborator=ControllerCollaborator::get(htmlspecialchars(filter_input(INPUT_GET, 'id')));
$project=ControllerProject::get($collaborator->getProject());
$user_profile=ControllerUser::get($collaborator->getUser());
$title=$user_profile->getName().' - '.$project->getName();
$nav=['projects.php'=>PROJECTS, 'project-info.php?id='.$project->getId()=>$project->getName(), ''=>$user_profile->getName()];
require_once $root.'view/templates/header.php';
?>
<div class="row my-4">
    <?php require_once $root.'view/templates/project.php'?>
    <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 px-5">
        <h1 class="text-center mb-4"><?php echo COLLABORATOR?></h1>
        <div class="row mb-4">
            <a class="btn btn-info mx-2" href="collaborator-edit.php?id=<?php echo $collaborator->getId()?>" role="button"><?php echo EDIT?></a>
            <form class="mx-2" action="../../controller/controller-collaborator-remove.php?id=<?php echo $collaborator->getId()?>" method="post">
                <input name="id" type="hidden" value="<?php echo $collaborator->getId()?>" />
                <input name="project" type="hidden" value="<?php echo $project->getId()?>" />
                <button type="submit" class="btn btn-danger"><?php echo REMOVE?></button>
            </form>
        </div>
        <dl class="row">
            <dt class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"><?php echo USER?></dt>
            <dd class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8"><?php echo $user_profile->link()?></dd>
            <dt class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"><?php echo ROLE?></dt>
            <dd class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8"><?php echo $collaborator->role()?></dd>
            <dt class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"><?php echo STATUS?></dt>
            <dd class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8"><?php echo $collaborator->status()?></dd>
        </dl>
    </div>
</div>
<?php
require_once $root.'view/templates/footer.php';
