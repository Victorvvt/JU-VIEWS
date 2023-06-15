<?php

session_start();

require '../config/db.php';


//insertamos los datos en la base de datos y limpiamos las cadenas
$nombre = $conn->real_escape_string($_POST["nombre"]);
$año = $conn->real_escape_string($_POST["año"]);
$descripcion = $conn->real_escape_string($_POST["descripcion"]);
$genero = $conn->real_escape_string($_POST["genero"]);
$plataforma = $conn->real_escape_string($_POST["plataforma"]);


$sql = "INSERT INTO pelicula(nombre, año, descripcion, id_genero, id_plataforma, fecha_alta) VALUES ('$nombre', $año,'$descripcion', $genero ,$plataforma,NOW())";

if ($conn->query($sql)) {

     $id = $conn->insert_id;

    $_SESSION['msn'] = "Guardado correctamente";

    //validamos que no de error la imagen
    if ($_FILES['poster']['error'] == UPLOAD_ERR_OK) {
        //le damos los formatos que queremos 
        $permitidos = array("image/jpg","image/jpeg");
        if (in_array($_FILES['poster']['type'], $permitidos)) {

            //creamos carpeta para guardar las iamgenes
            $dir = "posters/";

            $info_img = pathinfo($_FILES['poster']['name']);
            $info_img['extension'];

            $poster = $dir . '/' . $id . '.jpg';
            if (!file_exists($dir)) {
                mkdir($dir, 0777);
            }
            if (!move_uploaded_file($_FILES['poster']['tmp_name'], $poster)) {
                $_SESSION['msn'] .= "<br>Error al guardar la imagen</br>";
            } 
            
        }
    }
} else {
    $_SESSION['msn'] = "Algo ha fallado con la imagen";
}

header('Location: index.php');
