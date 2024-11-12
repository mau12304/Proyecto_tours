<?php

// Verifica si el usuario está autenticado y su rol
$isAuthenticated = isset($_SESSION['tipo_usuario']);
$isEmployee = $isAuthenticated && $_SESSION['tipo_usuario'] === 'empleado';
$isClient = $isAuthenticated && $_SESSION['tipo_usuario'] === 'cliente';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Turitux</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="vista/css/style.css">
    <link rel="stylesheet" href="vista/css/styleSesion.css">
    <link rel="stylesheet" href="vista/css/estyleregistro.css">
    <link rel="stylesheet" href="vista/css/styleconocenos.css">
    <link rel="stylesheet" href="Vista/css/style_paquetes.css">
    <link rel="stylesheet" href="vista/css/styleblog.css">
    <link rel="stylesheet" href="Vista/css/detallePaquetes.css">

</head>
<body>
<header>
        <!--Jeshua-->
        <div class="encabezado">
            <img src="vista/img/bannerini.png" alt="" width="100%" height="80%">
        </div> 
        <!--Jeshua-->
        
        <!--Victor-->
    <nav>
        <ul> 
            <a href="index.php">Inicio</a>
            <a href="index.php?p=mostrarpaquetes">Paquetes Turisticos</a>
            <a href="index.php?i=blog">Blog</a>
            <a href="index.php?i=conocenos">Conocenos</a>
            <?php if ($isEmployee):?>
            <a href="index.php?p=editarPaquetes">Editar Paquetes y Servicios</a>
            <?php endif; ?>
            <?php if ($isEmployee):?>
            <a href="index.php?d=editarDatos">Datos</a>
            <?php endif; ?>
           <!-- Opción para clientes -->
           <?php if ($isClient): ?>
                <a href="index.php?c=mostrarDatos">Sus datos</a>
            <?php endif; ?>

            <?php if ($isAuthenticated): ?>
            <a href="index.php?l=logout">Cerrar Sesión</a>
            <?php else: ?>
            <a href="index.php?l=iniciarsesion">Iniciar sesión</a>
            <?php endif; ?>
        </ul>
    </nav>
        <!--Victor-->  
</header>
   