<?php
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'model/persistence/CollaboratorDAO.php';
$id=htmlspecialchars(filter_input(INPUT_POST, 'id'));
$collaborator=new Collaborator();
$collaborator->setId($id);
$collaborator->setRole(htmlspecialchars(filter_input(INPUT_POST, 'role')));
CollaboratorDAO::update($collaborator);
header('location: ../view/pages/collaborator.php?id='.$id);
