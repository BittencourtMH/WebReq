<?php
include 'Page.php';
include '../controller/ControllerUsers.php';

Page::header('users');

?>
<div class="container margin-bottom-medium">
    <h1 class="text-center margin-top-small margin-bottom-medium">Users</h1>
    <table class="table table-bordered">
        <tr>
            <th>Username</th>
            <th>Name</th>
        </tr>
        <?php
        ControllerUsers::getAll();

        ?>
    </table>
</div>
<?php
Page::footer('users');
