<?php require_once('vista/layout/header.php'); ?>
<h1>Registrar Nuevos tipos de servicios</h1>
<form action="">
    <label for="id_tipo_servicio">id_tipo_servicio</label>
    <input type="number" id="id_tipo_servicio" name="id_tipo_servicio"><br><br>
    <label for="nombre">nombre</label>
    <input type="text" id="nombre" name="nombre"><br><br>
    <input type="submit" value="Registrar">
    <input type="hidden" name="p" value="guardarTipo">

</form>
<?php require_once('vista/layout/footer.php'); ?>