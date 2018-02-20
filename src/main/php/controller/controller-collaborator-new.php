<?php
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'model/persistence/CollaboratorDAO.php';
require_once 'ControllerUser.php';
$project=htmlspecialchars(filter_input(INPUT_POST, 'project'));
$collaborator=new Collaborator();
$collaborator->setProject($project);
$collaborator->setUser(ControllerUser::getByUsername(trim(htmlspecialchars(filter_input(INPUT_POST, 'username')))));
$collaborator->setRole(htmlspecialchars(filter_input(INPUT_POST, 'role')));
$collaborator->setStatus('P');
CollaboratorDAO::create($collaborator);
header('location: ../view/pages/collaborators.php?id='.$project);
