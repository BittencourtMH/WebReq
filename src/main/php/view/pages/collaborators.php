<?php
$section='projects';
$subsection=$page='collaborators';
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
include_once $root.'controller/ControllerProjects.php';
include_once $root.'controller/ControllerRequirements.php';
$project=ControllerProjects::get(htmlspecialchars(filter_input(INPUT_GET, 'id')));
$manager=$project->getManager();
$nav=['projects.php'=>'Projects', ''=>$project->getName()];
include_once $root.'view/templates/header.php';
?>
<div class="row my-4">
    <?php include_once $root.'view/templates/project.php'?>
    <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 px-5">
        <h1 class="text-center mb-4">Collaborators</h1>
        <a class="btn btn-info mb-3" href="requirement-new.php?id=<?php echo $project->getId()?>" role="button">New requirement</a>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Version</th>
                <th>Status</th>
                <th>Priority</th>
                <th>Date modified</th>
            </tr>
            <?php
            ControllerRequirements::getAll($project->getId());
            ?>
        </table>
    </div>
</div>
<?php
include_once $root.'view/templates/footer.php';
