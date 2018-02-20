<?php
$section='users';
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'view/templates/language.php';
$user_profile=ControllerUser::get(htmlspecialchars(filter_input(INPUT_GET, 'id')));
$title=$user_profile->getName();
$nav=['users.php'=>USERS, ''=>$user_profile->getName()];
require_once $root.'view/templates/header.php';
?>
<div class="my-4 px-5">
    <h1 class="text-center mb-4">User</h1>
    <dl class="row">
        <dt class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4"><?php echo USERNAME?></dt>
        <dd class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8"><?php echo $user_profile->getUsername()?></dd>
        <dt class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4"><?php echo NAME?></dt>
        <dd class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8"><?php echo $user_profile->getName()?></dd>
        <?php
        if($user->getAdmin())
        {
            $email=$user_profile->getEmail();
            $language_profile=ucfirst(Locale::getDisplayLanguage($user_profile->getLanguage(), $language));
            $time_zone=ControllerTimeZone::get($user_profile->getTimeZone());
            echo '<dt class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">'.EMAIL.'</dt>';
            echo '<dd class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">'.$email.'</dd>';
            echo '<dt class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">'.LANGUAGE.'</dt>';
            echo '<dd class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">'.$language_profile.'</dd>';
            echo '<dt class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">'.TIME_ZONE.'</dt>';
            echo '<dd class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">'.$time_zone.'</dd>';
        }
        ?>
        <dt class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4"><?php echo TYPE?></dt>
        <dd class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8"><?php echo $user_profile->type()?></dd>
    </dl>
    <dl class="row">
        <dt class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4"><?php echo ACADEMIC_EDUCATION?></dt>
        <dd class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8"><?php echo $user_profile->getAcademic()?></dd>
    </dl>
    <dl class="row">
        <dt class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4"><?php echo PROFESSIONAL_EXPERIENCE?></dt>
        <dd class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8"><?php echo $user_profile->getProfessional()?></dd>
    </dl>
</div>
<?php
require_once $root.'view/templates/footer.php';
