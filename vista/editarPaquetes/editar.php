
<?php require_once('vista/layout/header.php');?>
<?php
if (!isset($_SESSION['tipo_usuario']) || $_SESSION['tipo_usuario'] !== 'empleado') {
    require_once('vista/index.php');
    exit();
}
?>
<h1>Sección de Edición</h1>
<p>Esta página permite editar contenido, pero solo es visible para empleados.</p>

<?php require_once('vista/layout/footer.php'); ?>
