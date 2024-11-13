<?php
    foreach ($servicios as $key => $value) {
        foreach ($value as $valor) {
            $id_servicios=$valor['id_servicios'];
            $nombre=$valor['nombre'];
            $descripcion=$valor['descripcion'];

        }
    }
?>
<?php require_once('vista/layout/header.php'); ?>

<form action="">
    <label for="id_servicios">id_servicios</label>
    <input type="number" id="id_servicios" name="id_servicios" readonly value="<?= $id_servicios ?>"><br><br>
    <label for="nombre">nombre</label>
    <input type="text" id="nombre" name="nombre" value="<?= $nombre ?>"><br><br>
    <label for="descripcion">descripcion</label>
    <input type="text" id="descripcion" name="descripcion" value="<?= $descripcion ?>"><br><br>
    <input type="submit" value="Actualizar">
    <input type="hidden" name="p" value="modificarServicios">

</form>

<?php require_once('vista/layout/footer.php'); ?>