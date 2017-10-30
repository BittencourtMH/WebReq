<?php
include 'Page.php';
include '../controller/ControllerUsers.php';

Page::header('user');
$user=ControllerUsers::get(htmlspecialchars(filter_input(INPUT_GET, 'username')));

?>
<div class="container margin-bottom-medium">
    <h1 class="text-center margin-top-small margin-bottom-medium">Users</h1>
    <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-6 mx-auto">
        <dl class="row">
            <dt class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">Username</dt>
            <dd class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8"><?php echo $user->getUsername() ?></dd>
            <dt class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">Name</dt>
            <dd class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8"><?php echo $user->getName() ?></dd>
            <dt class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">Email</dt>
            <dd class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8"><?php echo $user->getEmail() ?></dd>
            <dt class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">Language</dt>
            <dd class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8"><?php echo Locale::getDisplayLanguage($user->getLanguage(), 'en') ?></dd>
            <dt class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">Time zone</dt>
            <dd class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8"><?php echo $user->getTimeZone() ?></dd>
        </dl>
        <dl class="row">
            <dt class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">Educational background</dt>
            <dd class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><?php echo $user->getEducational() ?></dd>
        </dl>
        <dl class="row">
            <dt class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">Professional experience</dt>
            <dd class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><?php echo $user->getProfessional() ?></dd>
        </dl>
    </div>
</div>
<?php
Page::footer('user');
