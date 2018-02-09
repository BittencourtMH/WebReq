<div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 px-5">
    <nav class="nav nav-pills flex-column">
        <?php
        $pages=array('project-info'=>INFO, 'requirements'=>REQUIREMENTS, 'collaborators'=>COLLABORATORS, 'project-settings'=>SETTINGS);
        $id=$project->getId();
        foreach($pages as $link=> $title)
        {
            $settings=$subsection=== $link ? 'active' : '';
            echo "<a class=\"nav-link $settings\" href=\"$link.php?id=$id\">$title</a>";
        }
        ?>
    </nav>
</div>