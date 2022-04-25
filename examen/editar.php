<?php
include "conexion.ini.php";
$id = $_GET["id"];
$CI = $_GET["CI"];
$Nombre_completo = $_GET["Nombre_completo"];
$Fecha_de_nacimiento = $_GET["Fecha_de_nacimiento"];
$departamento = $_GET["departamento"];
$sql = "update persona set CI = '".$CI."',Nombre_completo = '".$Nombre_completo."', Fecha_de_nacimiento = '".$Fecha_de_nacimiento."', departamento = '".$departamento."'";
$sql.="where id='". $id ."'";

$resultado = mysqli_query($conn, $sql);
header("Location: personas.php");
?>