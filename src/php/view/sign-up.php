<?php
include 'Page.php';
include 'TimeZone.php';

Page::header("unlogged");
?>
<div class="container margin-bottom-medium">
    <h1 class="text-center margin-top-small margin-bottom-medium">Sign up</h1>
    <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-6 mx-auto">
        <form class="margin-bottom-medium" id="form-sign-up" action="../controller/controller-sign-up.php" method="post" novalidate>                
            <div class="form-group" id="form-username">
                <label for="username">Username</label>
                <input class="form-control" id="username" name="username" type="text" placeholder="Username" required />
                <div class="invalid-feedback" id="help-username">Please provide a valid username.</div>
            </div>
            <div class="form-group" id="form-password">
                <label for="password">Password</label>
                <input class="form-control" id="password" name="password" type="password" placeholder="Password" required>
                <div class="invalid-feedback" id="help-password">Please provide a valid password.</div>
            </div>
            <div class="form-group" id="form-password2">
                <label for="password2">Retype password</label>
                <input class="form-control" id="password2" name="password2" type="password" placeholder="Retype password" required>
                <div class="invalid-feedback" id="help-password2">Passwords do not match.</div>
            </div>
            <div class="form-group" id="form-name">
                <label for="name">Name</label>
                <input class="form-control" id="name" name="name" type="text" placeholder="Name" required>
                <div class="invalid-feedback" id="help-name">Please provide a valid name.</div>
            </div>
            <div class="form-group" id="form-email">
                <label for="email">Email</label>
                <input class="form-control" id="email" name="email" type="email" placeholder="Email" required>
                <div class="invalid-feedback" id="help-email">Please provide a valid email.</div>
            </div>
            <div class="form-group" id="form-language">
                <label for="language">Language</label>
                <select class="form-control form-control-sm" id="language" name="language">
                    <option value="en" selected>English</option>
                    <option value="es">Español</option>
                    <option value="pt">Português</option>
                </select>
            </div>
            <div class="form-group" id="form-time-zone">
                <label for="time-zone">Time zone</label>
                <select class="form-control form-control-sm" id="time-zone" name="time-zone">
                    <?php
                    TimeZone::get('America/Sao_Paulo');

                    ?>
                </select>
            </div>
            <div class="form-group" id="form-educational">
                <label for="educational">Educational background</label>
                <textarea class="form-control" id="educational" name="educational" placeholder="Educational background" rows="10"></textarea>
            </div>
            <div class="form-group" id="form-professional">
                <label for="professional">Professional experience</label>
                <textarea class="form-control" id="professional" name="professional" placeholder="Professional experience" rows="10"></textarea>
            </div>
            <div class="text-center">
                <button class="btn btn-success margin-top-small" id="sign-up" type="submit">Sign up</button>
            </div>
        </form>
    </div>
</div>
<?php
Page::footer('sign-up');
