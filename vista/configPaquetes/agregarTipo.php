<?php require_once('vista/layout/header.php'); ?>
<article class="agregar">
<h1>Registrar Nuevos tipos de servicios</h1>

<form action="">
    <label for="nombre">nombre</label>
    <input type="text" id="nombre" name="nombre"><br><br>
    <input type="submit" value="Registrar">
    <input type="hidden" name="p" value="guardarTipo">

</form>
</article>

<?php require_once('vista/layout/footer.php'); ?>