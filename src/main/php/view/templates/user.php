<div class="col-11 col-sm-11 col-md-11 col-lg-3 col-xl-3 mx-auto">
    <nav class="nav nav-pills flex-column">
        <?php
        $pages=array('profile'=>PROFILE, 'password'=>PASSWORD, 'account'=>ACCOUNT);
        foreach($pages as $link=> $title)
        {
            $settings=$page=== $link ? 'active' : '';
            echo "<a class=\"nav-link $settings\" href=\"user-$link.php\">$title</a>";
        }
        ?>
    </nav>
</div>
