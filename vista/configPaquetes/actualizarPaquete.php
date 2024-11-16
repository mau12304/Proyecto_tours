<?php
    foreach ($datos as $key => $value) {
        foreach ($value as $valor) {
            $id_paquete=$valor['id_paquete'];
            $nombre=$valor['nombre'];
            $costo=$valor['costo'];
        }
    }
?>
<?php require_once('vista/layout/header.php'); ?>

<article class="actualizar">
<h1>Actualizar paquete</h1>
<form action="" >
    <label for="nombre">id_paquete</label>
    <input type="number" id="id_paquete" name="id_paquete" readonly value="<?= $id_paquete ?>"><br><br>
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre" value="<?= $nombre ?>"><br><br>
    <label for="costo">Precio</label>
    <input type="number" id="costo" name="costo" value="<?= $costo?>"><br><br>
    <input type="submit" value="Actualizar">
    <input type="hidden" name="p" value="modificarPaquete">

</form>
</article>

<?php require_once('vista/layout/footer.php'); ?>