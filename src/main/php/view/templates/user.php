<div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 px-5">
    <nav class="nav nav-pills flex-column">
        <?php
        $pages=array('user-profile'=>PROFILE, 'user-password'=>PASSWORD, 'user-account'=>ACCOUNT);
        foreach($pages as $link=> $title)
        {
            $settings=$page=== $link ? ' active' : '';
            echo "<a class='nav-link$settings' href='$link.php'>$title</a>";
        }
        ?>
    </nav>
</div>
