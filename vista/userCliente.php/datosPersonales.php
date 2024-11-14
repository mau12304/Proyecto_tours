<?php 
$id_cliente = $nombre = $apellido = $telefono = $correo = '';

// Datos del cliente obtenidos del controlador
foreach ($clientes as $key => $value) {
    foreach ($value as $valor) {
        $id_cliente = $valor['id_cliente'];
        $nombre = $valor['nombre'];
        $apellido = $valor['apellido'];
        $telefono = $valor['telefono'];
        $correo = $valor['correo'];
    }
}
?>

<?php require_once('vista/layout/header.php'); ?>

<?php
// Verificar si el usuario tiene permisos
if (!isset($_SESSION['tipo_usuario']) || $_SESSION['tipo_usuario'] !== 'cliente') {
    require_once('vista/index.php');
    exit();
}
?>

<h1>Formulario con Actualización</h1>

<!-- Formulario con datos cargados -->
<form action="index.php" class="detalle_formulario">
    <div class="detalle_form_campos">
         <input type="hidden" name="id_cliente" >
        <input type="text" name="nombre" id="nombre" placeholder="Nombre"  required>
        <input type="text" name="apellido" id="apellido" placeholder="Apellido"  required>
        <input type="email" name="correo" id="correo" placeholder="Correo Electrónico"  required>
    </div>
    <div class="detalle_form_campos">
        <input type="number" name="telefono" id="telefono" placeholder="Teléfono"  required>
    </div>
    <input type="submit" value="Guardar Datos">
    <input type="hidden" name="c" value="guardarCliente"> <!-- Enviar la acción al controlador -->
</form>

<!-- Mostrar los datos ingresados en un segundo formulario de actualización -->
<h2>Datos para Actualizar</h2>
<form action="index.php" method="POST" class="detalle_formulario">
    <div class="detalle_form_campos">
        <label for="id_cliente">ID Cliente</label>
        <input type="number" id="id_cliente" name="id_cliente" value="<?= htmlspecialchars($id_cliente) ?>" readonly><br><br>

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" value="<?= htmlspecialchars($nombre) ?>"><br><br>

        <label for="apellido">Apellido</label>
        <input type="text" id="apellido" name="apellido" value="<?= htmlspecialchars($apellido) ?>"><br><br>

        <label for="correo">Correo</label>
        <input type="email" id="correo" name="correo" value="<?= htmlspecialchars($correo) ?>"><br><br>

        <label for="telefono">Teléfono</label>
        <input type="number" id="telefono" name="telefono" value="<?= htmlspecialchars($telefono) ?>"><br><br>
    </div>
    <input type="submit" value="Actualizar">
    <input type="hidden" name="c" value="modificarCliente"> <!-- Acción para actualizar los datos -->
</form>

<h1>Apartado de Usuario</h1>

<?php require_once('vista/layout/footer.php'); ?>
