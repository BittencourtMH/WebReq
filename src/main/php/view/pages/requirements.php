<?php
$section='projects';
$subsection=$page='requirements';
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'controller/ControllerProjects.php';
require_once $root.'controller/ControllerRequirements.php';
$project=ControllerProjects::get(htmlspecialchars(filter_input(INPUT_GET, 'id')));
$manager=$project->getManager();
require_once $root.'view/templates/header.php';
$nav=['projects.php'=>PROJECTS, ''=>$project->getName()];
require_once $root.'view/templates/path.php';
?>
<div class="row my-4">
    <?php require_once $root.'view/templates/project.php'?>
    <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 px-5">
        <h1 class="text-center mb-4"><?php echo REQUIREMENTS?></h1>
        <a class="btn btn-info mb-3" href="requirement-new.php?id=<?php echo $project->getId()?>" role="button"><?php echo NEW_REQUIREMENT?></a>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th><?php echo NAME?></th>
                <th><?php echo VERSION?></th>
                <th><?php echo STATUS?></th>
                <th><?php echo PRIORITY?></th>
                <th><?php echo DATE_MODIFIED?></th>
            </tr>
            <?php
            ControllerRequirements::getAll($project->getId());
            ?>
        </table>
    </div>
</div>
<?php
require_once $root.'view/templates/footer.php';
