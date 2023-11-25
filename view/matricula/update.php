<?php

    include_once ($_SERVER['DOCUMENT_ROOT'].'/tallerphp18/routes.php');
        
    require_once(CONTROLLER_PATH.'matriculaController.php');
    $object = new matriculaController();

    $idMatricula = $_REQUEST['id'];
    $idEstudiante = $_REQUEST['idEstudiante'];
    $fecha = $_REQUEST['fecha'];
    $idCurso = $_REQUEST['idCurso'];
    $idUsuario = $_REQUEST['idUsuario'];

    $object->update($idMatricula,$idEstudiante,$fecha,$idCurso,$idUsuario);
    
?>