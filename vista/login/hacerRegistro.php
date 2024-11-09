<?php require_once('vista/layout/header.php'); ?>
<article class="registro">
    <form action="" class="registro_form">
        <p class="registro_title">Registrarse </p>
        <p class="registro_message">Ingresa los siguientes datos:</p>
            <div class="registro_flex">
            <label>
                <input  type="text" name="username" id="username" class="registro_input" required>
                <span>Username</span>
            </label>

            <label>
                <input   type="password" name="password" id="password" class="registro_input" required>
                <span>Password</span>
            </label>
        </div>  
                
        <label>
            <input  type="email" name="correo" id="correo" class="registro_input" required>
            <span>Email</span>
        </label>   
        <input type="submit" value="Registrarse">
        <input type="hidden" name="g" value="registro">
    </form>
</article>
<?php require_once('vista/layout/footer.php');?>