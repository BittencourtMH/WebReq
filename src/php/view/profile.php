<?php
include 'Page.php';
include 'TimeZone.php';
include '../controller/ControllerUsers.php';

Page::header('settings');
$user=ControllerUsers::get($_SESSION['user']);

?>
<div class="container margin-bottom-medium">
    <?php
    Page::settings('profile');

    ?>
    <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-6 mx-auto">
        <form class="margin-bottom-medium" id="form-profile" action="../controller/controller-profile.php" method="post" novalidate>                
            <div class="form-group" id="form-username">
                <label for="username">Username</label>
                <input class="form-control" id="username" name="username" type="text" placeholder="<?php echo $user->getUsername()?>" readonly />
            </div>
            <div class="form-group" id="form-name">
                <label id="label-name" for="name">Name</label>
                <input class="form-control" id="name" name="name" type="text" placeholder="Name" value="<?php echo $user->getName()?>" required />
                <div class="invalid-feedback" id="help-name">Please provide a valid name.</div>
            </div>
            <div class="form-group" id="form-email">
                <label id="label-email" for="email">Email</label>
                <input class="form-control" id="email" name="email" type="text" placeholder="Email" value="<?php echo $user->getEmail()?>" required>
                <div class="invalid-feedback" id="help-email">Please provide a valid email.</div>
            </div>
            <div class="form-group" id="form-language">
                <label for="language">Language</label>
                <select class="form-control form-control-sm" id="language" name="language" value="<?php echo $user->getLanguage()?>">
                    <option value="en" <?php if($user->getLanguage()=== 'en') echo 'selected'?>>English</option>
                    <option value="es" <?php if($user->getLanguage()=== 'es') echo 'selected'?>>Español</option>
                    <option value="pt" <?php if($user->getLanguage()=== 'pt') echo 'selected'?>>Português</option>
                </select>
            </div>
            <div class="form-group" id="form-time-zone">
                <label for="time-zone">Time zone</label>
                <select class="form-control form-control-sm" id="time-zone" name="time-zone">
                    <?php
                    TimeZone::get($user->getTimeZone());

                    ?>
                </select>
            </div>
            <div class="form-group" id="form-educational">
                <label for="educational">Educational background</label>
                <textarea class="form-control" id="educational" name="educational" placeholder="Educational background" rows="10"><?php echo $user->getEducational()?></textarea>
            </div>
            <div class="form-group" id="form-professional">
                <label for="professional">Professional experience</label>
                <textarea class="form-control" id="professional" name="professional" placeholder="Professional experience" rows="10"><?php echo $user->getProfessional()?></textarea>
            </div>
            <div class="text-center">
                <button class="btn btn-success margin-top-small" id="save" type="submit">Save</button>
            </div>
        </form>            
    </div>
</div>
<?php
Page::footer('profile');
