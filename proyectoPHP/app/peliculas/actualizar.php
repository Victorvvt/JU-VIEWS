<?php

require "../config/db.php";


//insertamos los datos en la base de datos y limpiamos las cadenas
$id =$conn->real_escape_string($_POST["id"]);
$nombre =$conn->real_escape_string($_POST["nombre"]);
$año =$conn->real_escape_string($_POST["año"]);
$descripcion =$conn->real_escape_string($_POST["descripcion"]);
$genero =$conn->real_escape_string($_POST["genero"]);
$plataforma =$conn->real_escape_string($_POST["plataforma"]);

$sql = "UPDATE pelicula SET nombre='$nombre', año=$año, descripcion='$descripcion', id_genero=$genero, id_plataforma=$plataforma WHERE id=$id";

$_SESSION['msn'] = "Guardado correctamente";

if($conn->query($sql)){
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
}else{
    $_SESSION['msn'] = "Error al actualizar registro";
}

header('Location: index.php');
