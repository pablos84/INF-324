<?php

session_start();

include 'conexion.ini.php';
include "cabecera.inc.php";

$Usuario = trim($_POST['usuario']);
$Password = md5($_POST['password']);

$validar = mysqli_query($conn, "SELECT * FROM acceso WHERE Usuario='$Usuario' AND Password='$Password'");

if (mysqli_num_rows($validar) > 0) {
    $_SESSION['acceso'] = $Usuario;
    header("Location: estudiante/estudiante.php");
    exit;
} else {
    echo
    '<script>
        window.location = "";
        alert("El usuario no existente, por favor vuelva a introducir los datos");
        </script>';
        exit;
}
include "pie.inc.php";