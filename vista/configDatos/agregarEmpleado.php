<?php require_once('vista/layout/header.php'); ?>
<h1>Registrar Empleado</h1>
<form action="">
    <label for="id_empleado">id_empleado</label>
    <input type="number" id="id_empleado" name="id_empleado"><br><br>
    <label for="nombre"></label>
    <input type="text" id="nombre" name="nombre"><br><br>
    <label for="apellido">apellido</label>
    <input type="text" id="apellido" name="apellido"><br><br>
    <label for="puesto">puesto</label>
    <input type="text" id="puesto" name="puesto"><br><br>
    <label for="fecha_nacimiento">fecha_nacimiento</label>
    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento"><br><br>
    <label for="curp">curp</label>
    <input type="number" id="curp" name="curp"><br><br>
    <label for="genero">genero</label>
    <input type="text" id="genero" name="genero"><br><br>
    <label for="telefono">telefono</label>
    <input type="number" id="telefono" name="telefono"><br><br>
    <label for="correo">correo</label>
    <input type="email" id="correo" name="correo"><br><br>
    <input type="submit" value="Registrar">
    <input type="hidden" name="d" value="guardarEmpleado">

</form>
<?php require_once('vista/layout/footer.php'); ?>