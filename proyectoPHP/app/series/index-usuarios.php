<?php

session_start();

require '../config/db.php';


$sqlSeries = "SELECT p.id, p.nombre, p.año, p.descripcion, g.nombre AS genero_serie, l.nombre AS plataforma_serie
 FROM serie AS p
 INNER JOIN genero_serie AS g ON p.id_genero=g.id 
 INNER JOIN plataforma_serie AS l ON p.id_plataforma=l.id ";
$series = $conn->query($sqlSeries);

$dir = "posters/";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../peliculas/peliculas.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>CRUD</title>
</head>

<body id="usuarios-body">

    <h2 class="text-center">Series</h2>

    <?php
    if (isset($_SESSION['msn'])) { ?>
        <div class="alert">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?= $_SESSION['msn']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    <?php
        unset($_SESSION['msn']);
    } ?>
    <div class="container-fluid">
        <div class="row ">
            <nav class=" navbar navbar-expand-lg  navbar-dark">
                <a href="../principal-usuarios.php" id="title" class=" mx-3 navbar-brand"><i class="bi bi-play-circle-fill"></i> JuViews</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Nav -->
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active mx-5" href="http://localhost/proyectoPHP/app/peliculas/index-usuarios.php">Películas</a>
                        <input id="search" type="serch" placeholder="Buscar" class="rounded-2 p-1">
                        <div class="dropdown-center mx-3">
                            <button class="btn  btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo "Usuario <strong class='text-black'>" . $_SESSION['nombre'] . "</strong> conectado"; ?>
                            </button>
                            <a id="cerradosesion" href="../inicio.php" class="dropdown-menu btn btn-primary text-center rounded-3 w-25">Cerrar sesión</a>
                        </div>

                    </div>

            </nav>
        </div>


        <div id="libreta" class="row ">
            <div id="cerrar-sesion" class="d-none col-11 d-flex justify-content-end">

            </div>
            <div>

                <table id="tabla" class="table table-sm table-bordered table-striped table-hover mt-5 ">
                    <thead class="table table-secondary text-center ">
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Año</th>
                            <th>Descripción</th>
                            <th>Género</th>
                            <th>Plataforma</th>
                            <th>Poster</th>

                    </thead>
                    <tbody class="text-center ">

                        <?php while ($row_serie = $series->fetch_assoc()) { ?>


                            <tr>
                                <td>
                                    <p class="mt-5"><?= $row_serie['id'] ?></p>
                                </td>
                                <td class="w-25">
                                    <p class="mt-5"><?= $row_serie['nombre'] ?></p>
                                </td>
                                <td>
                                    <p class="mt-5"><?= $row_serie['año'] ?></p>
                                </td>
                                <td class="w-25">
                                    <p class="mt-3"><?= $row_serie['descripcion'] ?></p>
                                </td>
                                <td>
                                    <p class="mt-5"><?= $row_serie['genero_serie'] ?></p>
                                </td>
                                <td>
                                    <p class="mt-5"><?= $row_serie['plataforma_serie'] ?></p>
                                </td>
                                <td><img src="<?= $dir . $row_serie['id'] . '.jpg?n=' . time(); ?>" width="100px"></td>

                            </tr>

                        <?php } ?>



                    </tbody>
                </table>

            </div>

        </div>

    </div>



    <script src="/app/js/cerrar-sesion.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="../js/search-series.js"></script>


</body>

</html>