<?php
    foreach ($tipo as $key => $value) {
        foreach ($value as $valor) {
            $id_tipo_servicio=$valor['id_tipo_servicio'];
            $nombre=$valor['nombre'];
        }
    }
?>
<?php require_once('vista/layout/header.php'); ?>
<article class="actualizar">
<form action="" >
    <label for="id_tipo_servicio">id_tipo_servicio</label>
    <input type="number" id="id_tipo_servicio" name="id_tipo_servicio" readonly  value="<?= $id_tipo_servicio ?>"><br><br>
    <label for="nombre">nombre</label>
    <input type="text" id="nombre" name="nombre"  value="<?= $nombre ?>"><br><br>
    <input type="submit" value="actualizar">
    <input type="hidden" name="p" value="modificarTipo">

</form>

</article>

<?php require_once('vista/layout/footer.php'); ?>