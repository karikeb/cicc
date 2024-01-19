<?php
include "../model/conexion.php";
$id = $_GET["id"];

$sql = $conexion->query(" select * from alumnos where id=$id ");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4b0c1832a2.js" crossorigin="anonymous"></script>
    <title>Modificar Alumno</title>
</head>

<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center alert alert-secondary">Modificar Registro de Alumno</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <?php
        include "../controller/modificar_alumno.php";
        while ($datos = $sql->fetch_object()) { ?>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DNI</label>
                <input type="text" class="form-control" name="dni" value="<?= $datos->dni ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha Nacimiento</label>
                <input type="date" class="form-control" name="fecha" value="<?= $datos->fecha_nac ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre y Apellido del Tutor</label>
                <input type="text" class="form-control" name="tutor" value="<?= $datos->tutor ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Grado</label>
                <input type="text" class="form-control" name="grado" value="<?= $datos->grado ?>">
            </div>
        <?php }  ?>
        
        <button type="submit" class="btn btn-primary" name="btnmodificar" value="ok">Modificar Alumno</button>
    </form>
</body>

</html>