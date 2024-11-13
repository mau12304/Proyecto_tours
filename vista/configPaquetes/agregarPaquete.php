<?php require_once('vista/layout/header.php'); ?>
<h1>Registrar nuevo paquete</h1>
<form action="">
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre"><br><br>
    <label for="costo">Precio</label>
    <input type="number" id="costo" name="costo"><br><br>
    <input type="submit" value="Actualizar">
    <input type="hidden" name="p" value="guardarPaquete">

</form>
<?php require_once('vista/layout/footer.php'); ?>