<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/tallerphp18/routes.php');

    require_once(CONTROLLER_PATH.'matriculaController.php');
    $object = new matriculaController();

    $fecha = $_REQUEST['fecha'];
    $idEstudiante = $_REQUEST['idEstudiante'];
    $idCurso = $_REQUEST['idCurso'];
    $idUsuario = $_REQUEST['idUsuario'];
    
   // echo ($fecha.$idEstudiante.$idCurso.$idUsuario);
   // exit();
    $registro = $object->insert($fecha,$idEstudiante,$idCurso,$idUsuario);
?>