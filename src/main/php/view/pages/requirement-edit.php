<?php
$section='projects';
$subsection='requirements';
$page='requirement-edit';
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'controller/ControllerProjects.php';
require_once $root.'controller/ControllerRequirements.php';
require_once $root.'controller/ControllerUsers.php';
$requirement=ControllerRequirements::get(htmlspecialchars(filter_input(INPUT_GET, 'id')));
$project=ControllerProjects::get($requirement->getProject());
$author=ControllerUsers::get($requirement->getAuthor());
require_once $root.'view/templates/header.php';
$nav=['projects.php'=>PROJECTS, 'project-info.php?id='.$project->getId()=>$project->getName(), 'requirement.php?id='.$requirement->getId()=>$requirement->getName(), ''=>EDIT];
require_once $root.'view/templates/path.php';
?>
<div class="row my-4">
    <?php require_once $root.'view/templates/project.php'?>
    <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 px-5">
        <h1 class="text-center mb-4"><?php echo EDIT_REQUIREMENT?></h1>
        <form id="form" action="../../controller/controller-requirement-edit.php" method="post" novalidate>
            <div class="form-group" id="form-name">
                <label for="name"><?php echo NAME?></label>
                <input class="form-control" id="name" name="name" type="text" placeholder="<?php echo NAME?>" value="<?php echo $requirement->getName()?>" required />
                <div class="invalid-feedback" id="help-name">Please provide a valid name.</div>
            </div>
            <div class="form-group" id="form-version">
                <label for="version"><?php echo VERSION?></label>
                <input class="form-control" id="version" name="version" type="text" placeholder="<?php echo VERSION?>" value="<?php echo $requirement->getVersion()?>" />
            </div>
            <div class="form-group" id="form-status">
                <label for="status"><?php echo STATUS?></label>
                <select class="form-control" id="status" name="status">
                    <option value="S" <?php if($requirement->getStatus()=== 'S') echo ' selected'?>><?php echo SUBMITTED?></option>
                    <option value="P" <?php if($requirement->getStatus()=== 'P') echo ' selected'?>><?php echo PENDING?></option>
                    <option value="F" <?php if($requirement->getStatus()=== 'F') echo ' selected'?>><?php echo FINISHED?></option>
                </select>
            </div>
            <div class="form-group" id="form-priority">
                <label for="priority"><?php echo PRIORITY?></label>
                <select class="form-control" id="priority" name="priority">
                    <option value="0" <?php if($requirement->getPriority()=== 0) echo ' selected'?>></option>
                    <option value="1" <?php if($requirement->getPriority()=== 1) echo ' selected'?>><?php echo LOW?></option>
                    <option value="2" <?php if($requirement->getPriority()=== 2) echo ' selected'?>><?php echo MEDIUM?></option>
                    <option value="3" <?php if($requirement->getPriority()=== 3) echo ' selected'?>><?php echo HIGH?></option>
                </select>
            </div>
            <div class="form-group" id="form-complexity">
                <label for="complexity"><?php echo COMPLEXITY?></label>
                <select class="form-control" id="complexity" name="complexity">
                    <option value="0" <?php if($requirement->getComplexity()=== 0) echo ' selected'?>></option>
                    <option value="1" <?php if($requirement->getComplexity()=== 1) echo ' selected'?>><?php echo LOW?></option>
                    <option value="2" <?php if($requirement->getComplexity()=== 2) echo ' selected'?>><?php echo MEDIUM?></option>
                    <option value="3" <?php if($requirement->getComplexity()=== 3) echo ' selected'?>><?php echo HIGH?></option>
                </select>
            </div>
            <div class="form-group" id="form-solicitor">
                <label for="solicitor"><?php echo REQUESTOR?></label>
                <input class="form-control" id="solicitor" name="solicitor" type="text" placeholder="<?php echo REQUESTOR?>" value="<?php echo $requirement->getSolicitor()?>"/>
            </div>
            <div class="form-group" id="form-description">
                <label for="description"><?php echo DESCRIPTION?></label>
                <textarea class="form-control" id="description" name="description" placeholder="<?php echo DESCRIPTION?>" rows="20"><?php echo $requirement->getDescription()?></textarea>
            </div>
            <div class="form-group" id="form-notes">
                <label for="notes"><?php echo NOTES?></label>
                <textarea class="form-control" id="notes" name="notes" placeholder="<?php echo NOTES?>" rows="10"><?php echo $requirement->getNotes()?></textarea>
            </div>
            <input name="id" type="hidden" value="<?php echo $requirement->getId()?>" />
            <input name="project" type="hidden" value="<?php echo $project->getId()?>" />
            <div class="text-center">
                <button class="btn btn-success mt-4" id="sign-up" type="submit"><?php echo SAVE?></button>
            </div>
        </form>
    </div>
</div>
<?php
require_once $root.'view/templates/footer.php';
