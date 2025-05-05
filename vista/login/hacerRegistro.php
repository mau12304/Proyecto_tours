<?php require_once('vista/layout/header.php'); ?>
<article class="registro">
    <form action="index.php?g=registro" method="post" class="registro_form">
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
        <button type="submit" class="registro_button">Registrarse</button>
       
    </form>
</article>
<?php require_once('vista/layout/footer.php');?>