<?php require_once('vista/layout/header.php'); ?>
<article class="agregar">
<h1>Registrar Usuario Empleado</h1>
<form action="">
    
    <label for="username">username</label>
    <input type="text" id="username" name="username"><br><br>
    <label for="password">password</label>
    <input type="text" id="password" name="password"><br><br>
    <label for="id_empleado">id_empleado</label>
    <input type="number" id="id_empleado" name="id_empleado"><br><br>
    <input type="submit" value="Registrar">
    <input type="hidden" name="d" value="guardarUserEmpleado">

</form>
</article>
<?php require_once('vista/layout/footer.php'); ?>