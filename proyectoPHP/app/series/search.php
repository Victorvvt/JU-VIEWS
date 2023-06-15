<?php

session_start();

require '../config/db.php';

$search = $_POST['search'];
$sqlSeries = "SELECT p.id, p.nombre, p.año, p.descripcion, g.nombre AS genero_serie, l.nombre AS plataforma_serie
 FROM serie AS p
 INNER JOIN genero_serie AS g ON p.id_genero=g.id 
 INNER JOIN plataforma_serie AS l ON p.id_plataforma=l.id WHERE l.nombre LIKE '$search%' OR p.nombre LIKE '$search%'";
$series = $conn->query($sqlSeries);

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

</thead>
<tbody  class="text-center ">

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

