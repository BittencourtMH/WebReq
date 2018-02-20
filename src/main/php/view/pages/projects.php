<?php
$section='projects';
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'view/templates/language.php';
$title=PROJECTS;
$nav=[''=>PROJECTS];
require_once $root.'view/templates/header.php';
?>
<div class="my-4 px-5">
    <h1 class="text-center mb-4"><?php echo PROJECTS?></h1>
    <a class="btn btn-info mb-3" href="project-new.php" role="button"><?php echo NEW_PROJECT?></a>
    <table class="table table-bordered">
        <tr>
            <th><?php echo NAME?></th>
            <th><?php echo START_DATE?></th>
            <th><?php echo END_DATE?></th>
        </tr>
        <?php
        ControllerProject::getAll();
        ?>
    </table>
</div>
<?php
require_once $root.'view/templates/footer.php';
