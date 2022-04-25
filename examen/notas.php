<?php include "cabecera.inc.php"; ?>

<div class="menu">
    <a href="./index.php">Página Principal</a>
    <a class="elegido">INGRESAR</a>
</div>

<?php
$conn = mysqli_connect("localhost", "QUISBERT", "123456", "mibasepabloquisbert");

if (!$conn) {
    echo 'error al conectar la bd';
} else {
    echo 'conectado';
}

$consulta = "select * from inscripcion";

$resultado = mysqli_query($conn, $consulta);

if ($resultado) {
    while ($row = $resultado->fetch_array()) {
        $ci = $row['CI'];
        // $usuario = $row['Usuario'];
        $mat = $row['Sigla'];
        $n1 = $row['Nota1'];
        $n2 = $row['Nota2'];
        $n3 = $row['Nota3'];
        $nt = $row['Notafinal'];
?>
        <div>
            <h2><?php echo $usuario; ?></h2>
            <div>
                <p>
                    <b>CI: </b> <?php echo $ci; ?> <br>
                    <b>MATERIA: </b> <?php echo $mat; ?> <br>
                    <b>NOTA 1: </b> <?php echo $n1; ?> <br>
                    <b>NOTA 2: </b> <?php echo $n2; ?> <br>
                    <b>NOTA 3: </b> <?php echo $n3; ?> <br>
                    <b>NOTA TOTAL: </b> <?php echo $total; ?> <br>
                </p>
            </div>
        </div>
<?php
    }
}
?>

<?php
$sql = "select * from persona";
$resultado = mysqli_query($conn, $sql);
?>
<table border="1px">
    <tr>
        <td>Id</td>
        <td>CI</td>
        <td>Nombre_completo</td>
        <td>Fecha_de_nacimiento</td>
        <td>departamento</td>
    </tr>
    <?php
    while ($fila = mysqli_fetch_array($resultado)) {
        echo "<tr>";
        echo "<td>" . $fila['id'] . "</td>";
        echo "<td>" . $fila['CI'] . "</td>";
        echo "<td>" . $fila['Nombre_completo'] . "</td>";
        echo "<td>" . $fila['Fecha_de_nacimiento'] . "</td>";
        echo "<td>" . $fila['departamento'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>


<?php include "pie.inc.php"; ?>