<?php require_once('vista/layout/header.php'); ?>
<article class="sesion">
    <form action="index.php?l=login" method="post">
        <h1>Iniciar Sesión</h1>
        <hr>

        <i class="fa-solid fa-user"></i>
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario" required>

        <i class="fa-solid fa-unlock"></i>
        <label for="contraseña">Contraseña</label>
        <input type="password" name="contraseña" id="contraseña" placeholder="Clave" required>
        
        <hr>

        <button type="submit" class="ini">Ingresar</button>
        <a href="index.php?l=hacerregistro">Registrarse</a>
    </form>
</article>
<?php require_once('vista/layout/footer.php'); ?>
