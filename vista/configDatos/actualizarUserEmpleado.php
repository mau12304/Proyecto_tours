<?php
    foreach ($userempleado as $key => $value) {
        foreach ($value as $valor) {
            $id_user_empleado=$valor['id_user_empleado'];
            $username=$valor['username'];
            $password=$valor['password'];
            $id_empleado=$valor['id_empleado'];
        }
    }
?>
<?php require_once('vista/layout/header.php'); ?>

<form action="">
    <label for="id_user_empleado">id_user_empleado</label>
    <input type="number" id="id_user_empleado" name="id_user_empleado"  readonly value="<?= $id_user_empleado?>"><br><br>
    <label for="username">username</label>
    <input type="text" id="username" name="username" value="<?= $username ?>"><br><br>
    <label for="password">password</label>
    <input type="text" id="password" name="password" value="<?= $password ?>"><br><br>
    <label for="id_empleado">id_empleado</label>
    <input type="text" id="id_empleado" name="id_empleado" value="<?= $id_empleado ?>"><br><br>
    <input type="submit" value="Actualizar">
    <input type="hidden" name="d" value="modificarUserEmpleado">

</form>

<?php require_once('vista/layout/footer.php'); ?>