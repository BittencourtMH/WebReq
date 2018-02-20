<?php
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'model/persistence/RequirementDAO.php';
$id=htmlspecialchars(filter_input(INPUT_POST, 'id'));
$project=htmlspecialchars(filter_input(INPUT_POST, 'project'));
RequirementDAO::delete($id);
header('location: ../view/pages/requirements.php?id='.$project);
