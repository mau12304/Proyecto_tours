<?php require_once('vista/layout/header.php'); ?>

<?php
// Verificar si el usuario tiene permisos
if (!isset($_SESSION['tipo_usuario']) || $_SESSION['tipo_usuario'] !== 'cliente') {
    require_once('vista/index.php');
    exit();
}
?>
<article class="cliente">
<br>
<h1>Lista de reservas</h1>
<div>
    <table class="table">
            <thead class="thead-dark">
                <tr>
                
                <th scope="col">Fecha efectuada</th>
                <th scope="col">No. de pasajeros</th>
                <th scope="col">Precio del paquete</th>
                <th scope="col">Paquete reservado</th>
                <th scope="col">Sus comentarios</th>
                
                </tr>
            </thead>
            <tbody>
    <?php foreach ($susreservas as $reserva): ?>
        <tr>
            <td><?= htmlspecialchars($reserva['fecha']) ?></td>
            <td><?= htmlspecialchars($reserva['pasajeros']) ?></td>
            <td><?= htmlspecialchars($reserva['precio']) ?></td>
            <td><?= htmlspecialchars($reserva['nombre_paquete']) ?></td>
            <td><?= htmlspecialchars($reserva['comentarios']) ?></td>
        </tr>
    <?php endforeach; ?>
</tbody>

    </table>
</div>
</article>



<?php require_once('vista/layout/footer.php'); ?>
