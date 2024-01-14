<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fecha"]) and !empty($_POST["tutor"]) and !empty($_POST["grado"])){
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $dni=$_POST["dni"];
            $fecha=$_POST["fecha"];
            $tutor=$_POST["tutor"];
            $grado=$_POST["grado"];

            $sql=$conexion->query("insert into alumnos (nombre,apellido,dni,fecha_nac,tutor,grado) values ('$nombre','$apellido','$dni','$fecha','$tutor','$grado')");

            if ($sql==1){
                echo '<div class="alert alert-success" role="alert">Persona registrada correctamente</div>';
            }else{
                echo '<div class="alert alert-danger" role="alert">Error al registrada correctamente</div>';

            }
    }else{
        echo '<div class="alert alert-warning" role="alert">Algunos de los campos esta vacio</div>';
    }
}

?>