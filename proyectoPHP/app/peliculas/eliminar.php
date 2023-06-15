<?php

require '../config/db.php';


//insertamos los datos en la base de datos y limpiamos las cadenas
$id =$conn->real_escape_string($_POST["id"]);
$nombre =$conn->real_escape_string($_POST["nombre"]);
$año =$conn->real_escape_string($_POST["año"]);
$descripcion =$conn->real_escape_string($_POST["descripcion"]);
$genero =$conn->real_escape_string($_POST["genero"]);
$plataforma =$conn->real_escape_string($_POST["plataforma"]);

$sql = "DELETE FROM pelicula WHERE id=$id";
$conn->query($sql);


header('Location: index.php');

?>