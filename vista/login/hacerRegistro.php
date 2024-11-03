<?php require_once('vista/layout/header.php'); ?>
<article class="registro">
    <form class="registro_form">
        <p class="registro_title">Registrarse </p>
        <p class="registro_message">Ingresa los siguientes datos:</p>
            <div class="registro_flex">
            <label>
                <input required="" placeholder="" type="text" class="registro_input">
                <span>Nombre</span>
            </label>

            <label>
                <input required="" placeholder="" type="text" class="registro_input">
                <span>Apellido</span>
            </label>
        </div>  
                
        <label>
            <input required="" placeholder="" type="email" class="registro_input">
            <span>Email</span>
        </label> 
            
        <label>
            <input required="" placeholder="" type="password" class="registro_input">
            <span>Contraseña</span>
        </label>
        <label>
            <input required="" placeholder="" type="password" class="registro_input">
            <span>Confirma Contraseña</span>
        </label>
        <button class="registro_submit">Submit</button>
        <p class="registro_signin">Sus datos son correctos?<a href="jeshusesion.html">Registrarse</a> </p>
    </form>
</article>
<?php require_once('vista/layout/footer.php');?>