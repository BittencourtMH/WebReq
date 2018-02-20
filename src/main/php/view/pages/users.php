<?php
$section='users';
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'view/templates/language.php';
$title=USERS;
$nav=[''=>USERS];
require_once $root.'view/templates/header.php';
?>
<div class="my-4 px-5">
    <h1 class="text-center mb-4"><?php echo USERS?></h1>
    <table class="table table-bordered">
        <tr>
            <th><?php echo USERNAME?></th>
            <th><?php echo NAME?></th>
            <th><?php echo TYPE?></th>
        </tr>
        <?php
        ControllerUser::getAll();
        ?>
    </table>
</div>
<?php
require_once $root.'view/templates/footer.php';
