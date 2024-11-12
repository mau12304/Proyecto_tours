<?php require_once('vista/layout/header.php'); ?>
<?php
if (!isset($_SESSION['tipo_usuario']) || $_SESSION['tipo_usuario'] !== 'cliente') {
    require_once('vista/index.php');
    exit();
}
?>
            <form action=""  class="detalle_formulario">
                <div class="detalle_form_campos">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
                    <input type="text" name="apellido" id="apellido"  placeholder="Apellido" required>
                    <input type="email" name="correo" id="correo" placeholder="Correo Electrónico" required>
                </div>
                <div class="detalle_form_campos">
                    <input type="tel" name="telefono" id="telefono" placeholder="Teléfono" required>
                </div>
                <div class="detalle_form_campos3">
                    
                </div>
                <input type="submit" value="ingresar datos">
                <input type="hidden" name="c" value="guardarCliente">
            </form>
<h1>apartado de usuario</h1>
<?php require_once('vista/layout/footer.php');?>