<?php 
include("conexion.ini.php");

$CI = trim($_POST['CI']);
$Usuario = trim($_POST['Nombre_completo']);
$Password = md5($_POST['CI']);

$Nombre_completo = trim($_POST['Nombre_completo']);
$Fecha_de_nacimiento = trim($_POST['Fecha_de_nacimiento']);
$departamento = trim($_POST['departamento']);
$Rol = "estudiante";

$consulta = "INSERT INTO persona (CI, Nombre_completo, Fecha_de_nacimiento, departamento,rol) VALUES ('$CI','$Nombre_completo','$Fecha_de_nacimiento','$departamento','$Rol')";

$consulta2 = "INSERT INTO acceso (CI, Usuario, Password) VALUES ('$CI','$Usuario','$Password')";

$resultado = mysqli_query($conn, $consulta);

if ($resultado) {
   header("Location: formlogin.php");
}else{
    header("Location: formregistrar.php");
   }
?>