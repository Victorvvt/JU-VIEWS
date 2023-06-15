<?php

session_start();

require '../config/db.php';

$sqlSeries = "SELECT p.id, p.nombre, p.año, p.descripcion, g.nombre AS genero_serie, l.nombre AS plataforma_serie
 FROM serie AS p
 INNER JOIN genero_serie AS g ON p.id_genero=g.id 
 INNER JOIN plataforma_serie AS l ON p.id_plataforma=l.id";
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

<body id="admin-body">

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

        <h1 class="text-center text-dark">SERIES</h1>
        <div class="row bg-secondary ">
            <nav class=" navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <a id="title" class="btn btn-info mx-3" href="../principal.php">Home</a>
                    <a id="title" class="btn btn-success" href="../peliculas/index.php">Películas</a>


                    <!-- Nav -->
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ms-auto">
                            <input id="searchAdmin" type="serch" placeholder="Buscar" class="rounded-2 p-1">
                            <a href="nuevoModal.php" class="btn btn-primary mx-3" data-bs-toggle="modal" data-bs-target="#nuevoModal"><i class="bi bi-plus"></i>Añadir nuevo</a>
                            <div class="dropdown-center">
                                <button class="btn  btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    ADMINISTRADOR
                                </button>
                                <a id="cerradosesion" href="../inicio.php" class="dropdown-menu btn btn-primary text-center rounded-3 w-25">Cerrar sesion</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

   
        <div id="libreta" class="container-fluid ">
            <div class="row mt-2 p-4 ">
                <table id="tablaA" class="table table-bordered table-sm table-striped table-hover mt-2 ">
                    <thead class="table-secondary text-center">
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Año</th>
                            <th>Descripción</th>
                            <th>Género</th>
                            <th>Plataforma</th>
                            <th>Poster</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php while ($row_serie = $series->fetch_assoc()) { ?>

                            <tr>
                                <td>
                                    <p class="mt-5"><?= $row_serie['id'] ?></p>
                                </td>
                                <td>
                                    <p class="mt-5"><?= $row_serie['nombre'] ?></p>
                                </td>
                                <td>
                                    <p class="mt-5"> <?= $row_serie['año'] ?></p>
                                </td>
                                <td class="w-25">
                                    <p class="mt-3"><?= $row_serie['descripcion'] ?></p>
                                </td>
                                <td>
                                    <p class="mt-5"> <?= $row_serie['genero_serie'] ?></p>
                                </td>
                                <td>
                                    <p class="mt-5"><?= $row_serie['plataforma_serie'] ?></p>
                                </td>
                                <td><img src="<?= $dir . $row_serie['id'] . '.jpg'; ?>" width="100px"></td>
                                <td>

                                    <a href="editarModal.php" class="btn btn-success mt-5" data-bs-toggle="modal" data-bs-target='#editarModal' data-bs-id="<?= $row_serie['id']; ?>"><i class="bi bi-pencil-square"></i> Editar</a>
                                    <a href="eliminarModal.php" class="btn btn-danger mt-5" data-bs-toggle="modal" data-bs-target='#eliminarModal' data-bs-id="<?= $row_serie['id']; ?>"> <i class="bi bi-trash3"></i> Eliminar</a>

                                </td>

                            </tr>

                        <?php } ?>

                    </tbody>
                </table>

            </div>

        </div>
    




    <!-- Hacemos las querys para las tablas de genero y plataforma -->
    <?php
    $sqlGenero = "SELECT id,nombre FROM genero_serie";
    $generos = $conn->query($sqlGenero);
    $sqlPlataforma = "SELECT id,nombre FROM plataforma_serie";
    $plataformas = $conn->query($sqlPlataforma);
    ?>

    <?php include 'nuevoModal.php' ?>
    <!-- Reniciamos los while en el modal editar -->
    <?php $generos->data_seek(0); ?>
    <?php $plataformas->data_seek(0); ?>

    <?php include 'editarModal.php' ?>
    <?php include 'eliminarModal.php' ?>


    <script src="../js/modal-series.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="../js/search-seriesA.js"></script>
</body>

</html>