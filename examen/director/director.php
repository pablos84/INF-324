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
<li> <a class="elegido">Promedio de Notas</a></li>
<li> <a href="estudiante.php">Incrementar Sesiones</a></li>
<li> <a href="../cerrar_sesion.php">Cerrar sesión</a></li>
</ul>
</nav>
<?php
$consulta = "select 
avg (case when departamento='01' then notafinal en) CH,
avg (case when departamento='02' then notafinal en) LP,
avg (case when departamento='03' then notafinal en) CO,
avg (case when departamento='04' then notafinal en) OR,
avg (case when departamento='05' then notafinal en) PO,
avg (case when departamento='06' then notafinal en) TA,
avg (case when departamento='07' then notafinal en) SC,
avg (case when departamento='08' then notafinal en) BE,
avg (case when departamento='09' then notafinal en) PA
from inscripcion";
$resultado = mysqli_query($conn, $consulta);
?>

<table>
  <tr>
    <td>Chuquisaca</td>
    <td>La Paz</td>
    <td>Cochabamba</td>
    <td>Oruro</td>
    <td>Potosí</td>
    <td>Tarija</td>
    <td>Santa Cruz</td>
    <td>Beni</td>
    <td>Pando</td>
  </tr>
  <?php
  while ($fila = mysqli_fetch_array($resultado)) {
    echo "<tr>";
    echo "<td>" . $fila['CH'] . "</td>";
    echo "<td>" . $fila['LP'] . "</td>";
    echo "<td>" . $fila['CO'] . "</td>";
    echo "<td>" . $fila['OR'] . "</td>";
    echo "<td>" . $fila['PO'] . "</td>";
    echo "<td>" . $fila['TA'] . "</td>";
    echo "<td>" . $fila['SC'] . "</td>";
    echo "<td>" . $fila['BE'] . "</td>";
    echo "<td>" . $fila['PA'] . "</td>";
    echo "</tr>";
  }
  ?>
</table>
<a text-align="rigth">Número de sesión <?php echo $_SESSION["contador"]; ?> </a>

<?php include "../pie.inc.php"; ?>