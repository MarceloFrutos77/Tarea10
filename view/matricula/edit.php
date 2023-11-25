<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/tallerphp18/routes.php');
    require_once(CONTROLLER_PATH.'matriculaController.php');
    $object = new matriculaController();
    $idMatricula = $_GET['id'];
    $matricula = $object->search($idMatricula);
    $estudiantes = $object->combolist();
    $cursos = $object->combolist1();
    $usuarios = $object->combolist2();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>
<body>
    <?php
        require_once(VIEW_PATH.'/navbar/navbar.php');
    ?>
    <div class="container">
        <div class="mb-3">
            <h2>Editando registro</h2>
        </div>
        <form id="formMatricula" action="update.php" method="post" class="g-3 needs-validation" novalidate>
            <div class="mb-3">
                <label for="id" class="form-label">ID Est.</label>
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <input value="<?=$matricula[0]?>" type="text" class="form-control" id="id" name="id" readonly>

            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">fecha</label>
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <input value="<?=$matricula[1]?>" type="date" class="form-control" id="fecha" name="fecha" autofocus required>
                 <div class="invalid-feedback">ingrese un nombre válido!</div>
            </div>
            <div class="mb-3">
                <label for="idEstudiante" class="form-label">Código Estudiante</label>
                <select class="form-control" name="idEstudiante" id="idEstudiante" required>
                    <option selected disabled value="">No especificado</option>
                    <?php foreach ($estudiantes as $estudiante) { 
                        if ($matricula[2]==$estudiante['idEstudiante']) { ?>
                            <option selected="selected" value="<?=$estudiante['idEstudiante']?>"><?=$estudiante['nombre']?></option> 
                        <?php } else { ?>
                            <option value="<?=$estudiante['idEstudiante']?>"><?=$estudiante['nombre']?></option> 
                    <?php } 
                        }?>
                </select>
                <div class="invalid-feedback">seleccione un elemento válido!</div>
            </div>
            <div class="mb-3">
                <label for="idCurso" class="form-label">Código Curso</label>
                <select class="form-control" name="idCurso" id="idCurso" required>
                    <option selected disabled value="">No especificado</option>
                    <?php foreach ($cursos as $curso) { 
                        if ($matricula[3]==$curso['idCurso']) { ?>
                            <option selected="selected" value="<?=$curso['idCurso']?>"><?=$curso['nombre']?></option> 
                        <?php } else { ?>
                            <option value="<?=$curso['idCurso']?>"><?=$curso['nombre']?></option> 
                        <?php } 
                        }?>
                </select>
                <div class="invalid-feedback">seleccione un elemento válido!</div>
            </div>
            <div class="mb-3">
                <label for="idUsuario" class="form-label">Código Usuario</label>
                <select class="form-control" name="idUsuario" id="idUsuario" required>
                    <option selected disabled value="">No especificado</option>
                    <?php foreach ($usuarios as $usuario) { 
                        if ($matricula[4]==$usuario['idUsuario']) { ?>
                            <option selected="selected" value="<?=$usuario['idUsuario']?>"><?=$usuario['alias']?></option> 
                        <?php } else { ?>
                            <option value="<?=$usuario['idUsuario']?>"><?=$usuario['alias']?></option> 
                    <?php } 
                        }?>
                </select>
                <div class="invalid-feedback">seleccione un elemento válido!</div>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
    </div>
</body>
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/validate.js"></script>
</html>