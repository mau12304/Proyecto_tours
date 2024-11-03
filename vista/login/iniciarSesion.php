<?php require_once('vista/layout/header.php'); ?>

<article class="sesion">
    <form action="IniciarSesion.php" method="POST">
                <h1>Iniciar Sesión</h1>
                <hr>
                <i class="fa-solid fa-user"></i>
                <label>Usuario</label>
                <input type="text" name="Usuario" placeholder="Nombre de usuario">
        
                <i class="fa-solid fa-unlock"></i>
                <label>Contraseña</label>
                <input type="text" name="Contraseña" placeholder="Clave">
                <hr>
                <a class="ini" href="index.php?i=index">Ingresar</a>
                <a href="index.php?r=hacerregistro">Registrarse</a>
        </form>
</article>
<?php require_once('vista/layout/footer.php');?>