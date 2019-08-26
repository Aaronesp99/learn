<?php
require_once '../model/Cn.php';
require_once '../model/Practicantes.php';

$obj = new Practicantes();
$obj->setDni($_POST["dni"]);
$obj->setNombres($_POST["nombres"]);
$obj->setApePaterno($_POST["paterno"]);
$obj->setApeMaterno($_POST["materno"]);
$obj->setCelular($_POST["celular"]);

echo $res = $obj->agregarPracticante();
