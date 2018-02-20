<?php
$section='projects';
$subsection='requirements';
$page='requirement-new';
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'view/templates/language.php';
$project=ControllerProject::get(htmlspecialchars(filter_input(INPUT_GET, 'id')));
$title=NEW_REQUIREMENT.' - '.$project->getName();
$nav=['projects.php'=>PROJECTS, 'project-info.php?id='.$project->getId()=>$project->getName(), ''=>NEW_REQUIREMENT];
require_once $root.'view/templates/header.php';
?>
<div class="row my-4">
    <?php require_once $root.'view/templates/project.php'?>
    <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 px-5">
        <h1 class="text-center mb-4"><?php echo NEW_REQUIREMENT?></h1>
        <form id="form" action="../../controller/controller-requirement-new.php" method="post">
            <div class="form-group">
                <label for="type"><?php echo TYPE?></label>
                <select class="form-control" id="type" name="type">
                    <option value="F"><?php echo FUNCTIONAL?></option>
                    <option value="N"><?php echo NON_FUNCTIONAL?></option>
                    <option value="O"><?php echo ORGANIZATIONAL?></option>
                </select>
            </div>
            <div class="form-group">
                <label for="name"><?php echo NAME?></label>
                <input class="form-control" id="name" name="name" type="text" placeholder="<?php echo NAME?>" oninput="hideValidation(event)" />
                <div class="invalid-feedback" id="help-name"><?php echo INVALID_NAME?></div>
            </div>
            <div class="form-group">
                <label for="version"><?php echo VERSION?></label>
                <input class="form-control" id="version" name="version" type="text" placeholder="<?php echo VERSION?>" />
            </div>
            <div class="form-group">
                <label for="status"><?php echo STATUS?></label>
                <select class="form-control" id="status" name="status">
                    <option value="S"><?php echo SUBMITTED?></option>
                    <option value="P"><?php echo PENDING?></option>
                    <option value="F"><?php echo FINISHED?></option>
                </select>
            </div>
            <div class="form-group">
                <label for="priority"><?php echo PRIORITY?></label>
                <select class="form-control" id="priority" name="priority">
                    <option value="0"></option>
                    <option value="1"><?php echo LOW?></option>
                    <option value="2"><?php echo MEDIUM?></option>
                    <option value="3"><?php echo HIGH?></option>
                </select>
            </div>
            <div class="form-group">
                <label for="complexity"><?php echo COMPLEXITY?></label>
                <select class="form-control" id="complexity" name="complexity">
                    <option value="0"></option>
                    <option value="1"><?php echo LOW?></option>
                    <option value="2"><?php echo MEDIUM?></option>
                    <option value="3"><?php echo HIGH?></option>
                </select>
            </div>
            <div class="form-group">
                <label for="solicitor"><?php echo REQUESTOR?></label>
                <input class="form-control" id="solicitor" name="solicitor" type="text" placeholder="<?php echo REQUESTOR?>" />
            </div>
            <div class="form-group">
                <label for="description"><?php echo DESCRIPTION?></label>
                <textarea class="form-control" id="description" name="description" placeholder="<?php echo DESCRIPTION?>" rows="20"></textarea>
            </div>
            <div class="form-group">
                <label for="notes"><?php echo NOTES?></label>
                <textarea class="form-control" id="notes" name="notes" placeholder="<?php echo NOTES?>" rows="10"></textarea>
            </div>
            <input name="project" type="hidden" value="<?php echo $project->getId()?>" />
            <input name="author" type="hidden" value="<?php echo $user->getId()?>" />
            <div class="text-center">
                <button class="btn btn-success mt-4" type="submit"><?php echo ADD_REQUIREMENT?></button>
            </div>
        </form>
    </div>
</div>
<?php
require_once $root.'view/templates/footer.php';
