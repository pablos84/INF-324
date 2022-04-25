<?php
session_start();
$_SESSION["contador"] = $_SESSION["contador"] + 1;

if (!isset($_SESSION['acceso'])) {
  echo '
   <script>
   alert ("Por favor debes iniciar sesión");
   window.location = "../formlogin.php";
   </script>
   ';
  session_destroy();
  die();
}
include "../cabecera2.inc.php";
include '../conexion.ini.php'; ?>
<li> <a class="elegido">Notas</a></li>
<li> <a href="estudiante.php">Incrementar Sesiones</a></li>
<li> <a href="../cerrar_sesion.php">Cerrar sesión</a></li>
</ul>
</nav>
<?php
$ID = mysqli_query($conn, "SELECT ID FROM acceso WHERE Usuario='$Usuario'");

$consulta = "select * from inscripcion";
$resultado = mysqli_query($conn, $consulta);
?>

<table>
  <tr>
    <td>Materia</td>
    <td>Nota 1</td>
    <td>Nota 2</td>
    <td>Nota 3</td>
    <td>Nota final</td>
  </tr>
  <?php
  while ($fila = mysqli_fetch_array($resultado)) {
    echo "<tr>";
    echo "<td>" . $fila['Sigla'] . "</td>";
    echo "<td>" . $fila['Nota1'] . "</td>";
    echo "<td>" . $fila['Nota2'] . "</td>";
    echo "<td>" . $fila['Nota3'] . "</td>";
    echo "<td>" . $fila['Notafinal'] . "</td>";
    echo "</tr>";
  }
  ?>
</table>
<a text-align="rigth">Número de sesión <?php echo $_SESSION["contador"]; ?> </a>

<?php include "../pie.inc.php"; ?>