<?php
require_once '../model/Cn.php';
require_once '../model/Practicantes.php';

$obj = new Practicantes();
$resultado = $obj->listarPracticantes();
