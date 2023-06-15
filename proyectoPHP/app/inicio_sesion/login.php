<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="login.css">
    <title>JU-VIEWS</title>
</head>

<body class="bg-secondary">
    <div class="container-fluid">
        <div class="row">
            <nav class="bg-dark navbar navbar-expand-lg bg-dark navbar-dark">
                <div class="container-fluid">
                <h1 id="title" class="navbar-brand"><i class="bi bi-play-circle-fill"></i> JuViews</h1>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Nav -->
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ms-auto">

                            <a href="./signin.php" class="nav-link  btn btn-primary m-2 p-2">SignIn</a>


                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="container-fluid my-5 p-5">
        <div class="row d-flex justify-content-center mb-5">
            <div class="col-auto text-center">
                <h2>BIENVENIDO</h2>
            </div>
        </div>
        <div class="row ">
            <div class="col-12 d-flex justify-content-center ">
                <form  method="post" class="row card p-4">
                    <h2 class="text-center">Inicio de sesion</h2>
                    <?php include "controlador-login.php" ?>

                    <div class="col-auto mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
                    </div>
                    <div class="col-auto mb-3">
                        <label for="contraseña" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="contraseña" id="contraseña" placeholder="Contraseña" required>
                    </div>
                    <button class="btn btn-primary mt-3" name="btn-login" type="submit">Iniciar Sesión</button>
                    <a href="signin.php" class="nav-link mt-3">¿No tienes cuenta? <strong>Regístrate</strong> </a>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>