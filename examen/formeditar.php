<?php
include "cabecera.inc.php";
include "conexion.ini.php";
$id = $_GET["id"];
$sql = "select * from persona where id='" . $id . "'";
$resultado = mysqli_query($conn, $sql);
$fila = mysqli_fetch_array($resultado);
?>
<li> <a href="personas.php">Cancelar</a></li>
<li> <a class="elegido">Editar</a></li>
</ul>
</nav>

<div id="contenedor">
    <div id="contenedorcentrado">
        <div id="login">
            <form method="GET" action="editar.php">
                id
                <input type="text" name="id" value="<?php echo $fila['id']; ?>">
                CI
                <input type="text" name="CI" value="<?php echo $fila['CI']; ?>">
                Nombre copleto
                <input type="text" name="Nombre_completo" value="<?php echo $fila['Nombre_completo']; ?>">
                fecha de nacimiento
                <input type="text" name="Fecha_de_nacimiento" value="<?php echo $fila['Fecha_de_nacimiento']; ?>">
                departamento
                <input type="text" name="departamento" value="<?php echo $fila['departamento']; ?>">
                <button type="submit" name="Guardar"> Modificar datos</button>
            </form>
        </div>
        <div id="derecho" class="titulo"> Verifica tus datos </div>
    </div>
</div>

<?php include "pie.inc.php"; ?>