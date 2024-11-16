
<?php require_once('vista/layout/header.php');?>
<?php
if (!isset($_SESSION['tipo_usuario']) || $_SESSION['tipo_usuario'] !== 'empleado') {
    require_once('vista/index.php');
    exit();
}
?>
<article class="paquetes">
<h1>Lista de paquetes</h1>
<div>
    <a href="index.php?p=agregarPaquete">Agregar</a>
    <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">id_paquete</th>
                <th scope="col">Nombre</th>
                <th scope="col">Costo</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                    <?php 
                    foreach ($datos as $key => $value)
                        foreach ($value as $va ):
                            echo "<tr><td>".$va['id_paquete']."</td>";
                            echo "<td>".$va['nombre']."</td>";
                            echo "<td>".$va['costo']."</td>";
                            echo "<td><a href='index.php?p=actualizarPaquete&id_paquete=".$va['id_paquete']."'>ACTUALIZAR</a> 
                            <a href='index.php?p=eliminarPaquete&id_paquete=".$va['id_paquete']."'>ELIMINAR</a></td>";
                            echo "</tr>";
                        endforeach;
                    ?>      
            </tbody>
    </table>
</div>
<br>
<h1>Detalle de los paquetes</h1>
<div>
    <a href="index.php?p=detallarPaquete">Agregar</a>
    <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">id_detalle_paquete</th>
                <th scope="col">id_paquete</th>
                <th scope="col">id_servicios</th>
                <th scope="col">id_tipo_servicio</th>
                <th scope="col">hora_salida</th>
                <th scope="col">hora_llegada</th>
                <th scope="col">fecha</th>
                <th scope="col">cupo_max</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                    <?php 
                    foreach ($detallepaquete as $key => $value)
                        foreach ($value as $va ):
                            echo "<tr><td>".$va['id_detalle_paquete']."</td>";
                            echo "<td>".$va['id_paquete']."</td>";
                            echo "<td>".$va['id_servicios']."</td>";
                            echo "<td>".$va['id_tipo_servicio']."</td>";
                            echo "<td>".$va['hora_salida']."</td>";
                            echo "<td>".$va['hora_llegada']."</td>";
                            echo "<td>".$va['fecha']."</td>";
                            echo "<td>".$va['cupo_max']."</td>";

                            echo "<td><a href='index.php?p=actualizarDetalle&id_detalle_paquete=".$va['id_detalle_paquete']."'>ACTUALIZAR</a> 
                            <a href='index.php?p=eliminarDetalle&id_detalle_paquete=".$va['id_detalle_paquete']."'>ELIMINAR</a></td>";
                            echo "</tr>";
                        endforeach;
                    ?>      
            </tbody>
    </table>
</div>
<br>
<h1>Tipo de servicio</h1>
<div>
    <a href="index.php?p=agregarTipo">Agregar</a>
    <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">id_tipo_servicio</th>
                <th scope="col">nombre</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                    <?php 
                    foreach ($tiposervicio as $key => $value)
                        foreach ($value as $va ):
                            echo "<tr><td>".$va['id_tipo_servicio']."</td>";
                            echo "<td>".$va['nombre']."</td>";
                            echo "<td><a href='index.php?p=actualizarTipo&id_tipo_servicio=".$va['id_tipo_servicio']."'>ACTUALIZAR</a> 
                            <a href='index.php?p=eliminarTipo&id_tipo_servicio=".$va['id_tipo_servicio']."'>ELIMINAR</a></td>";
                            echo "</tr>";
                        endforeach;
                    ?>      
            </tbody>
    </table>
</div>
<h1>Servicios</h1>
<div>
    <a href="index.php?p=agregarServicios">Agregar</a>
    <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">id_servicios</th>
                <th scope="col">nombre</th>
                <th scope="col">descripcion</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                    <?php 
                    foreach ($servicios as $key => $value)
                        foreach ($value as $va ):
                            echo "<tr><td>".$va['id_servicios']."</td>";
                            echo "<td>".$va['nombre']."</td>";
                            echo "<td>".$va['descripcion']."</td>";
                            echo "<td><a href='index.php?p=actualizarServicios&id_servicios=".$va['id_servicios']."'>ACTUALIZAR</a> 
                            <a href='index.php?p=eliminarServicios&id_servicios=".$va['id_servicios']."'>ELIMINAR</a></td>";
                            echo "</tr>";
                        endforeach;
                    ?>      
            </tbody>
    </table>
</div>
</article>


<?php require_once('vista/layout/footer.php'); ?>
