<?php require_once('vista/layout/header.php');?>
<?php
if (!isset($_SESSION['tipo_usuario']) || $_SESSION['tipo_usuario'] !== 'empleado') {
    require_once('vista/index.php');
    exit();
}
?>
<article class="datos">
<h1>Lista de Empleados</h1>
<div>
    <a href="index.php?d=agregarEmpleado">Agregar</a>
    <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">id_empleado</th>
                <th scope="col">nombre</th>
                <th scope="col">apellido</th>
                <th scope="col">puesto</th>
                <th scope="col">fecha_nacimiento</th>
                <th scope="col">curp</th>
                <th scope="col">genero</th>
                <th scope="col">telefono</th>
                <th scope="col">correo</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                    <?php 
                    foreach ($empleado as $key => $value)
                        foreach ($value as $va ):
                            echo "<tr><td>".$va['id_empleado']."</td>";
                            echo "<td>".$va['nombre']."</td>";
                            echo "<td>".$va['apellido']."</td>";
                            echo "<td>".$va['puesto']."</td>";
                            echo "<td>".$va['fecha_nacimiento']."</td>";
                            echo "<td>".$va['curp']."</td>";
                            echo "<td>".$va['genero']."</td>";
                            echo "<td>".$va['telefono']."</td>";
                            echo "<td>".$va['correo']."</td>";
                            echo "<td><a href='index.php?d=actualizarEmpleado&id_empleado=".$va['id_empleado']."'>ACTUALIZAR</a> 
                            <a href='index.php?d=eliminarEmpleado&id_empleado=".$va['id_empleado']."'>ELIMINAR</a></td>";
                            echo "</tr>";
                        endforeach;
                    ?>      
            </tbody>
    </table>
</div>
<br>
<h1>Lista de Clientes</h1>
<div>
    <a href="index.php?p=agregarpaquetes">Agregar</a>
    <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">id_cliente</th>
                <th scope="col">nombre</th>
                <th scope="col">apellido</th>
                <th scope="col">telefono</th>
                <th scope="col">correo</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                    <?php 
                    foreach ($cliente as $key => $value)
                        foreach ($value as $va ):
                            echo "<tr><td>".$va['id_cliente']."</td>";
                            echo "<td>".$va['nombre']."</td>";
                            echo "<td>".$va['apellido']."</td>";
                            echo "<td>".$va['telefono']."</td>";
                            echo "<td>".$va['correo']."</td>";
                            echo "<td><a href='index.php?p=actualizar&id=".$va['id_cliente']."'>ACTUALIZAR</a> 
                            <a href='index.php?d=eliminarCliente&id_cliente=".$va['id_cliente']."'>ELIMINAR</a></td>";
                            echo "</tr>";
                        endforeach;
                    ?>      
            </tbody>
    </table>
</div>
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
                    foreach ($reserva as $key => $value)
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
<br>
<h1>Lista de Usuarios de empleados</h1>
<div>
    <a href="index.php?d=agregarUserEmpleado">Agregar</a>
    <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">id_user_empleado</th>
                <th scope="col">username</th>
                <th scope="col">password</th>
                <th scope="col">id_empleado</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                    <?php 
                    foreach ($userempleado as $key => $value)
                        foreach ($value as $va ):
                            echo "<tr><td>".$va['id_user_empleado']."</td>";
                            echo "<td>".$va['username']."</td>";
                            echo "<td>".$va['password']."</td>";
                            echo "<td>".$va['id_empleado']."</td>";
                            echo "<td><a href='index.php?d=actualizarUserEmpleado&id_user_empleado=".$va['id_user_empleado']."'>ACTUALIZAR</a> 
                            <a href='index.php?d=eliminarUserEmpleado&id_user_empleado=".$va['id_user_empleado']."'>ELIMINAR</a></td>";
                            echo "</tr>";
                        endforeach;
                    ?>      
            </tbody>
    </table>
</div>
<br>
<h1>Lista de Usuarios de Clientes</h1>
<div>
    <a href="index.php?d=agregarUserCliente">Agregar</a>
    <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">id_user_client</th>
                <th scope="col">username</th>
                <th scope="col">password</th>
                <th scope="col">correo</th>
                <th scope="col">Acciones</th>

                </tr>
            </thead>
            <tbody>
                    <?php 
                    foreach ($usercliente as $key => $value)
                        foreach ($value as $va ):
                            echo "<tr><td>".$va['id_user_client']."</td>";
                            echo "<td>".$va['username']."</td>";
                            echo "<td>".$va['password']."</td>";
                            echo "<td>".$va['correo']."</td>";
                            echo "<td><a href='index.php?d=actualizarUserCliente&id_user_client=".$va['id_user_client']."'>ACTUALIZAR</a> 
                            <a href='index.php?d=eliminarUserCliente&id_user_client=".$va['id_user_client']."'>ELIMINAR</a></td>";
                            echo "</tr>";
                        endforeach;
                    ?>      
            </tbody>
    </table>
</div>
</article>
<?php require_once('vista/layout/footer.php');?>