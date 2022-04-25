<?php include "cabecera.inc.php"; ?>
<li> <a href="index.php">Página Principal</a></li>
<li> <a class="elegido">Registro</a></li>
</ul>
</nav>

<div id="contenedor">
    <div id="contenedorcentrado">
        <div id="login">
            <form method="POST" action="registrar.php">
                <input type="text" name="CI" placeholder="N° de CI sin extensión" required>
                <input type="text" name="Nombre_completo" placeholder="Nombre completo" required>
                <input type="date" name="Fecha_de_nacimiento" placeholder="Fecha de nacimiento" required>
                <select name="departamento" placeholder="Departamento" required>
                    <option value="01">La Paz</option>
                    <option value="02">Oruro</option>
                    <option value="03">Potosí</option>
                    <option value="04">Cochabamba</option>
                    <option value="05">Santa Cruz</option>
                    <option value="06">Chuquisaca</option>
                    <option value="07">Pando</option>
                    <option value="08">Beni</option>
                    <option value="09">Tarija</option>
                </select>
                <button type="submit" name="register">REGISTRAR</button>
            </form>
        </div>
        <div id="derecho" class="titulo"> Bienvenido </div>
    </div>
</div>

<?php include "pie.inc.php"; ?>