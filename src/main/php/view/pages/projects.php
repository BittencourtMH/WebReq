<?php
$section=$page='projects';
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
include_once $root.'view/templates/header.php';
$nav=[''=>PROJECTS];
require_once $root.'view/templates/path.php';
include_once $root.'controller/ControllerProjects.php';
?>
<div class="my-4 px-5">
    <h1 class="text-center mb-4"><?php echo PROJECTS?></h1>
    <a class="btn btn-info mb-3" href="project-new.php" role="button"><?php echo NEW_PROJECT?></a>
    <table class="table table-bordered">
        <tr>
            <th><?php echo NAME?></th>
            <th><?php echo START_DATE?></th>
            <th><?php echo END_DATE?></th>
            <th>Collaborators</th>
        </tr>
        <?php
        ControllerProjects::getAll();
        ?>
    </table>
</div>
<?php
include_once $root.'view/templates/footer.php';
