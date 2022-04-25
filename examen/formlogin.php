<?php include "cabecera.inc.php"; ?>

<li> <a href="index.php">Página Principal</a></li>
<li> <a href="personas.php">Lista de Estudiantes</a></li>
<li> <a class="elegido">Iniciar Sesión</a></li>
</ul>
</nav>

<div id="contenedor">
  <div id="contenedorcentrado">
    <div id="login">
      <form id="loginform" method="post" action="login.php">
        <input type="text" name="usuario" placeholder="Usuario" required>
        <input type="password" placeholder="Contraseña" name="password" required>
        <button type="submit" title="Ingresar" name="Ingresar">INGRESAR</button>
      </form>
    </div>
    <div id="derecho">
      <div class="titulo"> Bienvenido </div>
      <hr>
      <div class="pie-form">
        <a href="formregistrar.php">¿No tienes Cuenta? Registrate</a>
      </div>
    </div>
  </div>
</div>

<?php include "pie.inc.php"; ?>