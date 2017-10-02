<?php
include 'Page.php';

Page::header("unlogged");

?>
<div class="container margin-bottom-medium">
    <h1 class="text-center margin-top-small margin-bottom-medium">Sign in</h1>
    <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-4 mx-auto">
        <form class="margin-bottom-medium" id="form-sign-in" action="../controller/controller-sign-in.php" method="post" novalidate>                
            <div class="form-group" id="form-username">
                <label class="control-label" for="username">Username</label>
                <input class="form-control" id="username" name="username" type="text" placeholder="Username" required>
                <div class="invalid-feedback" id="help-username">Please provide a valid username.</div>
            </div>
            <div class="form-group margin-bottom-medium" id="form-password">
                <label class="control-label" for="password">Password</label>
                <input class="form-control" id="password" name="password" type="password" placeholder="Password" required>
                <div class="invalid-feedback" id="help-password">Please provide a valid password.</div>
            </div>
            <button class="btn btn-primary" id="sign-in" type="submit">Sign in</button>
            <button class="btn btn-secondary float-right" type="submit">Forgot password?</button>
        </form>
        <div class="text-center">
            <form action="sign-up.php" method="post">
                <button class="btn btn-success" type="submit">Sign up</button>
            </form>
        </div>
    </div>
</div>
<?php
Page::footer('sign-in');
