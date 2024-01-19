<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4b0c1832a2.js" crossorigin="anonymous"></script>
    <title>CRUD de Usuarios</title>

    <!-- Puedes agregar estilos CSS aquí -->
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand ms-4 p-2" href="#">
    <img src="assets/logo-completo.png" width="" height="40" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login Docentes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
    
  </div>
</nav>

    <script>
        function eliminar(name) {
            var respuesta = confirm("Estas seguro que deseas eliminar al alumno " + name + "?")
            return respuesta
        }
    </script>

    <h1 class="text-center p-3">COLEGIO ILMA CORA CRESPO</h1>
    <?php
    include "model/conexion.php";
    include "controller/eliminar_alumno.php"
    ?>

    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro de Alumnos</h3>
            <?php
            include "controller/registro_alumno.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DNI</label>
                <input type="text" class="form-control" name="dni">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha Nacimiento</label>
                <input type="date" class="form-control" name="fecha">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tutor</label>
                <input type="text" class="form-control" name="tutor">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Grado</label>
                <input type="text" class="form-control" name="grado">
            </div>

            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>

        <div class="col-8 p-4">
            <table class="table">
                <thead class="table-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">APELLIDO</th>
                        <th scope="col">DNI</th>
                        <th scope="col">FECHA NAC</th>
                        <th scope="col">TUTOR</th>
                        <th scope="col">GRADO</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "model/conexion.php";
                    $sql = $conexion->query("select * from alumnos");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <th><?= $datos->id ?></th>
                            <td><?= $datos->nombre ?></td>
                            <td><?= $datos->apellido ?></td>
                            <td><?= $datos->dni ?></td>
                            <td><?= $datos->fecha_nac ?></td>
                            <td><?= $datos->tutor ?></td>
                            <td><?= $datos->grado ?></td>
                            <td>
                                <a href="view/modificar_alumno.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return eliminar('<?= $datos->nombre ?>')" href="index.php?id=<?= $datos->id ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php }
                    ?>



                </tbody>
            </table>
        </div>
    </div>


</body>

</html>