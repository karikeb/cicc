<?php 
if (!empty($_POST["btnmodificar"])){
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fecha"]) and !empty($_POST["tutor"]) and !empty($_POST["grado"])){
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $dni=$_POST["dni"];
        $fecha=$_POST["fecha"];
        $tutor=$_POST["tutor"];
        $grado=$_POST["grado"];

        $sql=$conexion->query(" update alumnos set nombre='$nombre', apellido='$apellido', dni=$dni, fecha_nac='$fecha',tutor='$tutor',grado=$grado where id=$id");

        if ($sql==1){
            header("location:index.php");
        }else{
            echo '<div class="alert alert-danger" role="alert">Error al modificar alumno</div>';

        }   
    }else{
        echo '<div class="alert alert-warning" role="alert">Algunos de los campos esta vacio</div>';
    }
}
?>