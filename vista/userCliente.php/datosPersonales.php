<?php require_once('vista/layout/header.php'); ?>

<?php
// Verificar si el usuario tiene permisos
if (!isset($_SESSION['tipo_usuario']) || $_SESSION['tipo_usuario'] !== 'cliente') {
    require_once('vista/index.php');
    exit();
}
?>

<h1>Formulario con Actualización</h1>
<?php if (isset($_GET['enviado'])): ?>
                <p class="success-msg"><?php echo htmlspecialchars($_GET['enviado'], ENT_QUOTES, 'UTF-8'); ?></p>
                <?php endif; ?>
<!-- Formulario con datos cargados -->
<form  class="detalle_formulario">
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

<script>
     // Mostrar mensaje de éxito si se encuentra el parámetro 'success' en la URL
     const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('enviado')) {
                alert(urlParams.get('enviado')); // Muestra el mensaje de éxito en un cuadro emergente
            }
</script>
<br>
<h1>Lista de reservas</h1>
<div>
    <a href="index.php?p=agregarpaquetes">Agregar</a>
    <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">id_reserva</th>
                <th scope="col">fecha</th>
                <th scope="col">pasajeros</th>
                <th scope="col">Total</th>
                <th scope="col">id_paquete</th>
                <th scope="col">comentarios</th>
                <th scope="col">id_user_client</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                    <?php 
                    foreach ($susreservas as $key => $value)
                        foreach ($value as $va ):
                            echo "<tr><td>".$va['id_reserva']."</td>";
                            echo "<td>".$va['fecha']."</td>";
                            echo "<td>".$va['pasajeros']."</td>";
                            echo "<td>".$va['precio']."</td>";
                            echo "<td>".$va['id_paquete']."</td>";
                            echo "<td>".$va['comentarios']."</td>";
                            echo "<td>".$va['id_user_client']."</td>";
                            echo "<td><a href='index.php?p=actualizar&id=".$va['id_reserva']."'>ACTUALIZAR</a> 
                            <a href='index.php?p=eliminar&id=".$va['id_reserva']."'>ELIMINAR</a></td>";
                            echo "</tr>";
                        endforeach;
                    ?>      
            </tbody>
    </table>
</div>


<?php require_once('vista/layout/footer.php'); ?>
