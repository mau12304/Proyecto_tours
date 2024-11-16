<?php
    foreach ($usercliente as $key => $value) {
        foreach ($value as $valor) {
            $id_user_client=$valor['id_user_client'];
            $username=$valor['username'];
            $password=$valor['password'];
            $correo=$valor['correo'];
        }
    }
?>
<?php require_once('vista/layout/header.php'); ?>

<article class="actualizar">
<form action="">
    <label for="id_user_client">id_user_client</label>
    <input type="number" id="id_user_client" name="id_user_client"  readonly value="<?= $id_user_client?>"><br><br>
    <label for="username">username</label>
    <input type="text" id="username" name="username" value="<?= $username ?>"><br><br>
    <label for="password">password</label>
    <input type="text" id="password" name="password" value="<?= $password ?>"><br><br>
    <label for="correo">correo</label>
    <input type="email" id="correo" name="correo" value="<?= $correo ?>"><br><br>
    <input type="submit" value="Actualizar">
    <input type="hidden" name="d" value="modificarUserCliente">

</form>
</article>

<?php require_once('vista/layout/footer.php'); ?>