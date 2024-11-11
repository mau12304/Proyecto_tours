<?php require_once('vista/layout/header.php'); ?>
<h1>Registrar detalles del paquete</h1>
<form action="">
    <label for="id_paquete">id_paquete</label>
    <input type="number" id="id_paquete" name="id_paquete"><br><br>
    <label for="id_servicio">id_servicio</label>
    <input type="number" id="id_servicio" name="id_servicio"><br><br>
    <label for="id_tipo_servicio">id_tipo_servicio</label>
    <input type="number" id="id_tipo_servicio" name="id_tipo_servicio"><br><br>
    <label for="hora_salida">hora_salida</label>
    <input type="time" id="hora_salida" name="hora_salida"><br><br>
    <label for="hora_llegada">hora_llegada</label>
    <input type="time" id="hora_llegada" name="hora_llegada"><br><br>
    <label for="cupo_max">cupo_max</label>
    <input type="number" id="cupo_max" name="cupo_max"><br><br>
    <input type="submit" value="Registrar">
    <input type="hidden" name="p" value="guardarDetalles">

</form>
<?php require_once('vista/layout/footer.php'); ?>