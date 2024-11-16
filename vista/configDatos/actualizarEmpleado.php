<?php
    foreach ($empleado as $key => $value) {
        foreach ($value as $valor) {
            $id_empleado=$valor['id_empleado'];
            $nombre=$valor['nombre'];
            $apellido=$valor['apellido'];
            $puesto=$valor['puesto'];
            $fecha_nacimiento=$valor['fecha_nacimiento'];
            $curp=$valor['curp'];
            $genero=$valor['genero'];
            $telefono=$valor['telefono'];
            $correo=$valor['correo'];

        }
    }
?>
<?php require_once('vista/layout/header.php'); ?>

<article class="actualizar">
<form action="">
    <label for="id_empleado">id_empleado</label>
    <input type="number" id="id_empleado" name="id_empleado" value="<?= $id_empleado?>"><br><br>
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre" value="<?= $nombre ?>"><br><br>
    <label for="apellido">apellido</label>
    <input type="text" id="apellido" name="apellido" value="<?= $apellido ?>"><br><br>
    <label for="puesto">puesto</label>
    <input type="text" id="puesto" name="puesto" value="<?= $puesto ?>"><br><br>
    <label for="fecha_nacimiento">fecha_nacimiento</label>
    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="<?= $fecha_nacimiento ?>"><br><br>
    <label for="curp">curp</label>
    <input type="text" id="curp" name="curp" value="<?= $curp ?>"><br><br>
    <label for="genero">genero</label>
    <input type="text" id="genero" name="genero" value="<?= $genero ?>"><br><br>
    <label for="telefono">telefono</label>
    <input type="text" id="telefono" name="telefono" value="<?= $telefono ?>"><br><br>
    <label for="correo">correo</label>
    <input type="text" id="correo" name="correo" value="<?= $correo ?>"><br><br>
    <input type="submit" value="Actualizar">
    <input type="hidden" name="d" value="modificarEmpleado">

</form>
</article>

<?php require_once('vista/layout/footer.php'); ?>