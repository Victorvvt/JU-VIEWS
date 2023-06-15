<?php

session_start();

require '../config/db.php';

$search = $_POST['searchA'];
$sqlPeliculas = "SELECT p.id, p.nombre, p.año, p.descripcion, g.nombre AS genero_pelicula, l.nombre AS plataforma
 FROM pelicula AS p
 INNER JOIN genero_pelicula AS g ON p.id_genero=g.id 
 INNER JOIN plataforma_pelicula AS l ON p.id_plataforma=l.id WHERE l.nombre LIKE '$search%' OR p.nombre LIKE '$search%'";
$peliculas = $conn->query($sqlPeliculas);
$dir = "posters/";
?>

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
            <th>Acciones</th>

    </thead>
    <tbody class="text-center ">

        <?php while ($row_pelicula = $peliculas->fetch_assoc()) { ?>


            <tr>
                <td>
                    <p class="mt-5"><?= $row_pelicula['id'] ?></p>
                </td>
                <td class="w-25">
                    <p class="mt-5"><?= $row_pelicula['nombre'] ?></p>
                </td>
                <td>
                    <p class="mt-5"><?= $row_pelicula['año'] ?></p>
                </td>
                <td class="w-25">
                    <p class="mt-3"><?= $row_pelicula['descripcion'] ?></p>
                </td>
                <td>
                    <p class="mt-5"><?= $row_pelicula['genero_pelicula'] ?></p>
                </td>
                <td>
                    <p class="mt-5"><?= $row_pelicula['plataforma'] ?></p>
                </td>
                <td><img src="<?= $dir . $row_pelicula['id'] . '.jpg?n=' . time(); ?>" width="100px"></td>
                <td>
                    <a href="editarModal.php" class="btn btn-success mt-5" data-bs-toggle="modal" data-bs-target='#editarModal' data-bs-id="<?= $row_pelicula['id']; ?>"><i class="bi bi-pencil-square"></i> Editar</a>
                    <a href="eliminarModal.php" class="btn btn-danger mt-5" data-bs-toggle="modal" data-bs-target='#eliminarModal' data-bs-id="<?= $row_pelicula['id']; ?>"> <i class="bi bi-trash3"></i> Eliminar</a>
                </td>

            </tr>

        <?php } ?>



    </tbody>
</table>