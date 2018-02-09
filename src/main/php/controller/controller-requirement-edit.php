<?php
date_default_timezone_set('UTC');
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
include_once $root.'model/persistence/RequirementDAO.php';
session_start();
$project=htmlspecialchars(filter_input(INPUT_POST, 'project'));
$requirement=new Requirement();
$requirement->setId(htmlspecialchars(filter_input(INPUT_POST, 'id')));
$requirement->setName(trim(htmlspecialchars(filter_input(INPUT_POST, 'name'))));
$requirement->setVersion(trim(htmlspecialchars(filter_input(INPUT_POST, 'version'))));
$requirement->setStatus(htmlspecialchars(filter_input(INPUT_POST, 'status')));
$requirement->setPriority(htmlspecialchars(filter_input(INPUT_POST, 'priority')));
$requirement->setComplexity(htmlspecialchars(filter_input(INPUT_POST, 'complexity')));
$requirement->setSolicitor(trim(htmlspecialchars(filter_input(INPUT_POST, 'solicitor'))));
$requirement->setDescription(htmlspecialchars(filter_input(INPUT_POST, 'description')));
$requirement->setNotes(htmlspecialchars(filter_input(INPUT_POST, 'notes')));
$requirement->setDateModified(new DateTime());
RequirementDAO::update($requirement);
header('location: ../view/pages/requirements.php?id='.$project);
