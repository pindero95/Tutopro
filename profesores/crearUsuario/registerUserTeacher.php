<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Tutopro/routes.php';

require_once CONTROLLER . 'Teacher/registerTeacher.php';


use Controller\Teacher\registerTeacher;

/** @var type $data */
$data = json_decode($_POST['data'], true);

$obj = new registerTeacher();


$obj->saveUser($data['idTeacher'], $data['email'], $data['pass'], $data['rol']);







