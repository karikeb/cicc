<?php 
if (!empty($_POST["btnlogin"])){
    if (!empty($_POST["user"]) and !empty($_POST["password"])){
        $user=$_POST["user"];
        $password= $_POST["password"];
        $sql=$conexion->query(" select * from docentes where user='$user' and pass='$password'");
        if($datos=$sql->fetch_object()){
            header("location: view/restring_menu.php");
        }else{
            echo"<div class='alert alert-danger' >Acceso denegado</div>";
        }

    }else{
        echo"<div class='alert alert-warning' >Campos vacios</div>";    }
}

?>
