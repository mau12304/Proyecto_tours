<?php 
foreach ($reserva as $key => $value) {
    foreach ($value as $valor) {
        $id_reserva=$valor['id_reserva'];
        $fecha=$valor['fecha'];
        $pasajeros=$valor['pasajeros'];
        $precio=$valor['precio'];
        $id_paquete=$valor['id_paquete'];
        $comentarios=$valor['comentarios'];
    }
}   


?>

<?php require_once('vista/layout/header.php'); ?>     
<article>
<h1>Actualizar Reserva</h1>
<form action="">
    <label for="id_reserva">id_reserva</label>
    <input type="number" id="id_reserva" name="id_reserva" value="<?= $id_reserva?>"><br><br>
    <label for="fecha">fecha</label>
    <input type="date" id="fecha" name="fecha" value="<?= $fecha ?>"><br><br>
    <label for="pasajeros">pasajeros</label>
    <input type="text" id="pasajeros" name="pasajeros" value="<?= $pasajeros ?>"><br><br>
    <label for="precio">precio</label>
    <input type="text" id="precio" name="precio" value="<?= $precio ?>"><br><br>
    <label for="id_paquete">id_paquete</label>
    <input type="text" id="id_paquete" name="id_paquete" value="<?= $id_paquete ?>"><br><br>
    <label for="comentarios">comentarios</label>
    <input type="text" id="comentarios" name="comentarios" value="<?= $comentarios ?>"><br><br>
    <input type="submit" value="Actualizar">
    <input type="hidden" name="d" value="modificarReserva">
</form>
</article>


<?php require_once('vista/layout/footer.php'); ?>


