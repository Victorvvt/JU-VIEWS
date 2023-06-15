<?php
session_start();
include "../config/db.php";

if (isset($_POST['btn-signin'])) {
    if (!empty($_POST['nombre']) && !empty($_POST['contraseña'])) {
        $nombre = $_POST['nombre'];
        $contraseña = $_POST['contraseña'];
        $sql = "INSERT INTO sesion (nombre, contraseña ) VALUES ( '$nombre','$contraseña')";
        
        if ($conn->query($sql)) {
            
            header("Location: ./login.php");
        } else {
            echo "<div class='alert alert-danger'>Acceso denegado</div>";
        };
    }
}

