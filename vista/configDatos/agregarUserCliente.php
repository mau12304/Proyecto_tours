<?php require_once('vista/layout/header.php'); ?>
<article class="agregar">
<h1>Registrar Usuario Cliente</h1>
<form action="">
    
    <label for="username">username</label>
    <input type="text" id="username" name="username"><br><br>
    <label for="password">password</label>
    <input type="text" id="password" name="password"><br><br>
    <label for="correo">correo</label>
    <input type="email" id="correo" name="correo"><br><br>
    <input type="submit" value="Registrar">
    <input type="hidden" name="d" value="guardarUserCliente">

</form>
</article>
<?php require_once('vista/layout/footer.php'); ?>