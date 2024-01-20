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

    <div class="container pt-5 ">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg text-center mb-3" style="width: 30rem;">
                    <div class="card-body">
                    <img class="justify-content-sm-center" src="../assets/children.png" width="150">

                        <h5 class="card-title"></h5>
                        <a href="restring_listado.php" class="btn btn-primary btn-lg">Listado de Alumnos</a>
                    </div>
                </div>
            </div>

            <div class="col-2">
            </div>

            <div class="col">
                <div class="card shadow-lg text-center mb-3" style="width: 30rem;">
                    <div class="card-body">
                    <img src="../assets/satisfaction.png" width="150">
                        <h5 class="card-title"></h5>
                        <a href="#" class="btn btn-primary btn-lg">Boletines</a>
                    </div>
                </div>
            </div> 
            
        </div>
    </div>





</body>

</html>