<?php
$section='projects';
$subsection='collaborators';
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
        <h1 class="text-center mb-4"><?php echo COLLABORATORS?></h1>
        <a class="btn btn-info mb-3" href="collaborator-new.php?id=<?php echo $project->getId()?>" role="button"><?php echo NEW_COLLABORATOR?></a>
        <table class="table table-bordered">
            <tr>
                <th><?php echo USER?></th>
                <th><?php echo ROLE?></th>
                <th><?php echo STATUS?></th>
            </tr>
            <?php
            ControllerCollaborator::getAll($project->getId());
            ?>
        </table>
    </div>
</div>
<?php
require_once $root.'view/templates/footer.php';
