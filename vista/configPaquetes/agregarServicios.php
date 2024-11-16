<?php require_once('vista/layout/header.php'); ?>
<article class="agregar">
<h1>Registrar Nuevos Servicio</h1>
<form action="">
    <label for="id_servicios">id_servicios</label>
    <input type="number" id="id_servicios" name="id_servicios"><br><br>
    <label for="nombre">nombre</label>
    <input type="text" id="nombre" name="nombre"><br><br>
    <label for="descripcion">descripcion</label>
    <input type="text" id="descripcion" name="descripcion"><br><br>
    <input type="submit" value="Registrar">
    <input type="hidden" name="p" value="guardarServicios">

</form>
</article>
<?php require_once('vista/layout/footer.php'); ?>