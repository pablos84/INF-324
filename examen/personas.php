<?php
include "cabecera.inc.php";
include "conexion.ini.php";
$sql = "select * from persona";
$resultado = mysqli_query($conn, $sql);
?>
<li> <a href="index.php">Página Principal</a></li>
<li> <a href="Registrar.php">Registrar Nuevo </a></li>
<li> <a class="elegido">Lista de Estudiantes</a></li>
</ul>
</nav>
<table>
    <tr>
        <td>CI</td>
        <td>NOMBRE COMPLETO</td>
        <td>FECHA DE NACIMIENTO</td>
        <td>CODIGO DEPARTAMENTAL</td>
        <td>OPERACIONES</td>
    </tr>
    <?php
    while ($fila = mysqli_fetch_array($resultado)) {
        echo "<tr>";
        echo "<td>" . $fila['CI'] . "</td>";
        echo "<td>" . $fila['Nombre_completo'] . "</td>";
        echo "<td>" . $fila['Fecha_de_nacimiento'] . "</td>";
        echo "<td>" . $fila['departamento'] . "</td>";
        echo "<td>";
        echo "<a href='formeditar.php?id=" . $fila['id'] . "'>Editar</a>";
        echo "   ";
        echo "<a href='eliminar.php?id=" . $fila['id'] . "'>Eliminar</a>";
        "</td>";
        echo "</tr>";
    }
    ?>
</table>

<?php include "pie.inc.php"; ?>