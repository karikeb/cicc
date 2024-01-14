<?php
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conexion->query(" delete from alumnos where id=$id");

    if ($sql == 1) {
        echo '<div class="alert alert-success"> Alumno eliminado corectamente </div>';
    } else {
        echo '<div class="alert alert-warning"> Error al eliminar alumno </div>';
    }
}
