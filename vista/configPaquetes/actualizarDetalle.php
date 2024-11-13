<?php
    foreach ($detalle as $key => $value) {
        foreach ($value as $valor) {
            $id_paquete=$valor['id_paquete'];
            $id_servicios=$valor['id_servicios'];
            $id_tipo_servicio=$valor['id_tipo_servicio'];
            $hora_salida=$valor['hora_salida'];
            $hora_llegada=$valor['hora_llegada'];
            $cupo_max=$valor['cupo_max'];
        }
    }
?>
<?php require_once('vista/layout/header.php'); ?>

<h1>Actualizar paquete</h1>
<form action="">
    <label for="id_paquete">id_paquete</label>
    <input type="number" id="id_paquete" name="id_paquete" value="<?= $id_paquete ?>"><br><br>
    <label for="id_servicios">id_servicio</label>
    <input type="number" id="id_servicios" name="id_servicios" value="<?= $id_servicios ?>"><br><br>
    <label for="id_tipo_servicio">id_tipo_servicio</label>
    <input type="number" id="id_tipo_servicio" name="id_tipo_servicio" value="<?= $id_tipo_servicio ?>"><br><br>
    <label for="hora_salida">hora_salida</label>
    <input type="time" id="hora_salida" name="hora_salida" value="<?= $hora_salida ?>"><br><br>
    <label for="hora_llegada">hora_llegada</label>
    <input type="time" id="hora_llegada" name="hora_llegada" value="<?= $hora_llegada ?>"><br><br>
    <label for="cupo_max">cupo_max</label>
    <input type="number" id="cupo_max" name="cupo_max" value="<?= $cupo_max ?>"><br><br>
    <input type="submit" value="Actualizar">
    <input type="hidden" name="p" value="modificarDetalle">

</form>

<?php require_once('vista/layout/footer.php'); ?>