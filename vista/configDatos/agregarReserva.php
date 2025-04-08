<?php require_once('vista/layout/header.php'); ?>
<article class="agregar">
<h1>Registrar Reserva</h1>
<form action="">
    <!-- <label for="id_reserva">id_reserva</label>
    <input type="number" id="id_reserva" name="id_reserva"><br><br> -->
    <label for="fecha">fecha</label>
    <input type="date" id="fecha" name="fecha"><br><br>
    <label for="pasajeros">pasajeros</label>
    <input type="text" id="pasajeros" name="pasajeros"><br><br>
    <label for="precio">precio</label>
    <input type="text" id="precio" name="precio"><br><br>
    <label for="id_paquete">id_paquete</label>
    <input type="text" id="id_paquete" name="id_paquete"><br><br>
    <label for="comentarios">comentarios</label>
    <input type="text" id="comentarios" name="comentarios"><br><br>
    <label for="id_user_client">id_user_client</label>
    <input type="text" id="id_user_client" name="id_user_client"><br><br>
    <input type="submit" value="Registrar">
    <input type="hidden" name="d" value="guardarReserva">

</form>
</article>
<?php require_once('vista/layout/footer.php'); ?>