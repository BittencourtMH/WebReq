<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo ($user=== null ? 'sign-in.php?lang='.$language : 'projects.php')?>"><?php echo HOME?></a></li>
            <?php
            foreach($nav as $link=> $title)
                if($link=== '')
                    echo "<li class=\"breadcrumb-item active\" aria-current=\"page\">$title</li>";
                else
                    echo "<li class=\"breadcrumb-item\"><a href=\"$link\">$title</a></li>";
            ?>
    </ol>
</nav>