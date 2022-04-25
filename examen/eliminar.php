<?php 
include "conexion.ini.php";
$id=$_GET["id"];
$sql = "delete from persona where id='".$id."'";
$resultado = mysqli_query($conn, $sql);
header("Location: personas.php");
?>