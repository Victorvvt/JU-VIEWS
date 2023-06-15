<?php
session_start();
include "../config/db.php";

if (isset($_POST['btn-login'])) {
    if ($_POST['nombre']==="admin" && $_POST['contraseña']==="admin") {
        header("Location: ../principal.php");
    }
}

if (isset($_POST['btn-login'])) {
    if (!empty($_POST['nombre']) && !empty($_POST['contraseña'])) {
        $nombre = $_POST['nombre'];
        $contraseña = $_POST['contraseña'];
        $sql = "SELECT * FROM sesion WHERE nombre='$nombre' and contraseña='$contraseña'";
        $result = $conn->query($sql);

        if ($datos = $result->fetch_object()) {
            $_SESSION["id"] = $datos->id;
            $_SESSION["nombre"] = $datos->nombre;
            $_SESSION["contraseña"] = $datos->contraseña;
            header("Location: ../principal-usuarios.php");
        } else {
            echo "<div class='alert alert-danger'>Acceso denegado</div>";
        };
    }
}
