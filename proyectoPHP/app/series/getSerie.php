<?php

require '../config/db.php';

$id =$conn->real_escape_string($_POST["id"]);

// hacemos la consulta indicando limit 1 para que pare cuando encuentre el primer resultado
$sql = "SELECT id, nombre, año, descripcion, id_genero, id_plataforma FROM serie WHERE id=$id LIMIT 1";
$resultado = $conn->query($sql);
$rows = $resultado->num_rows;

$serie = [];
 
// si el resultado contini alguna fila almacenamos en el array $serie la info
if($rows > 0){

    $serie = $resultado->fetch_array();

}

// leemos esos datos y añadimos UNESCAPED por si trae algun acento lo lea correctamente
echo json_encode($serie, JSON_UNESCAPED_UNICODE);


?>