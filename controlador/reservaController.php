<?php
require_once('modelo/reservaModel.php');
class ReservaController{
    private $reservaModel;
    public function __construct(){
        $this->reservaModel = new ReservaModel();
    }
    public static function mostradetallepaquete(){
        require_once('vista/paquetes/detallePaquete.php');
    }
    public static function mostradetallepalenque(){
        require_once('vista/paquetes/detallePalenque.php');
    }
    public static function mostradetallesancristobal(){
        require_once('vista/paquetes/detalleSanCristobal.php');
    }
    public static function mostradetallecomitan(){
        require_once('vista/paquetes/detalleComitan.php');
    }
    public static function mostradetallecotorras(){
        require_once('vista/paquetes/detalleCotorras.php');
    }
    public static function mostradetallesumidero(){
        require_once('vista/paquetes/detalleSumidero.php');
    }
    public static function mostradetallearcote(){
        require_once('vista/paquetes/detalleArcote.php');
    }
    public static function mostradetalleguazul(){
        require_once('vista/paquetes/detalleAguazul.php');
    }
    public static function mostradetallebonampak(){
        require_once('vista/paquetes/detalleBonampak.php');
    }
    public static function mostradetallechiflon(){
        require_once('vista/paquetes/detalleChiflon.php');
    }
    public static function mostradetallemarimba(){
        require_once('vista/paquetes/detalleMarimba.php');
    }
    public static function mostradetallecopoya(){
        require_once('vista/paquetes/detalleCopoya.php');
    }
    public static function mostradetallezoomat(){
        require_once('vista/paquetes/detalleZoomat.php');
    }


    public static function reservar(){

        // Verificar si el cliente está en sesión
        if (!isset($_SESSION['id_user_client'])) {
            throw new Exception("No se ha iniciado sesión como cliente.");
        }
        // Obtener los datos del formulario
        $numero_personas=$_REQUEST['personas'];
        $nombre=$_REQUEST['nombre'];
        $precio_persona=$_REQUEST['precioPersona'];
        $subtotal = $_REQUEST['Subtotal']; // Calcular el 50% del total
        $correo=$_REQUEST['correo'];
        $monto_total = $_REQUEST['total'];

        //enviar correo
        $to = $correo;
        $subject = "Reserva de Paquete - Chiapas de Corzo";
        $message = "Hola $nombre,\n\n
        Gracias por reservar el paquete Palenque con nosotros.\n\n
        Detalles de la reserva\n
        Número de personas: $numero_personas\n
        Precio por persona: $precio_persona\n
        Total de tu reserva $monto_total - 50%: $subtotal\n 
        El otro 50% se paga fisicamente: \n
        ¡Esperamos que disfrutes de tu experiencia!\n\n
        Saludos del El equipo de reservas.";
        $headers = "From: segio@gmail.com\r\n" .
                   'Reply-To: turituxOpe@gmail.com';
        if (mail($to, $subject, $message, $headers)) {
            $mensaje_exito = "Correo enviado con éxito.";
        } else {
            $mensaje_exito = "Error al enviar el cor reo.";
        }        
        
        $id_user_client = $_SESSION['id_user_client']; // Obtener el ID del cliente de la sesión
        $pasajeros=$_REQUEST['personas'];
        $precio=$_REQUEST['total'];
        $comentarios=$_REQUEST['comentarios'];
        $id_paquete=1;
        $modelReserva = new ReservaModel();
        $modelReserva->guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $id_user_client);
        
        $_SESSION['checkout_data'] = [
            'personas' => $_REQUEST['personas'],
            'precio_persona' => $_REQUEST['precioPersona'],

            
        ];
        
        header("location:".urlsite."index.php?a=checkout");
        exit();

    }
    public static function reservarPalenque(){
        // Verificar si el cliente está en sesión
        if (!isset($_SESSION['id_user_client'])) {
            throw new Exception("No se ha iniciado sesión como cliente.");
        }

        $numero_personas=$_REQUEST['personas'];
        $nombre=$_REQUEST['nombre'];
        $precio_persona=$_REQUEST['precioPersona'];
        $subtotal = $_REQUEST['Subtotal']; // Calcular el 50% del total
        $correo=$_REQUEST['correo'];
        $monto_total = $_REQUEST['total'];

        //enviar correo
        $to = $correo;
        $subject = "Reserva de Paquete - Palenque";
        $message = "Hola $nombre,\n\n
        Gracias por reservar el paquete Palenque con nosotros.\n\n
        Detalles de la reserva\n
        Número de personas: $numero_personas\n
        Precio por persona: $precio_persona\n
        Total de tu reserva $monto_total - 50%: $subtotal\n 
        El otro 50% se paga fisicamente: \n
        ¡Esperamos que disfrutes de tu experiencia!\n\n
        Saludos del El equipo de reservas.";
        $headers = "From: segio@gmail.com\r\n" .
                   'Reply-To: turituxOpe@gmail.com';
        if (mail($to, $subject, $message, $headers)) {
            $mensaje_exito = "Correo enviado con éxito.";
        } else {
            $mensaje_exito = "Error al enviar el cor reo.";
        }


        // Guardar la reserva en la base de datos
        $id_user_client = $_SESSION['id_user_client']; // Obtener el ID del cliente de la sesión
        $pasajeros=$_REQUEST['personas'];
        $precio=$_REQUEST['total'];
        $comentarios=$_REQUEST['comentarios'];
        $id_paquete=2;
        $modelReserva = new ReservaModel();
        $modelReserva->guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $id_user_client);
        // Redirigir con mensaje de éxito
        $_SESSION['checkout_data'] = [
            'personas' => $_REQUEST['personas'],
            'precio_persona' => $_REQUEST['precioPersona'],

            
        ];
        
        header("location:".urlsite."index.php?a=checkout");
        exit();

    }
    public static function reservarSancristobal(){

        // Verificar si el cliente está en sesión
        if (!isset($_SESSION['id_user_client'])) {
            throw new Exception("No se ha iniciado sesión como cliente.");
        }
        $numero_personas=$_REQUEST['personas'];
        $nombre=$_REQUEST['nombre'];
        $precio_persona=$_REQUEST['precioPersona'];
        $subtotal = $_REQUEST['Subtotal']; // Calcular el 50% del total
        $correo=$_REQUEST['correo'];
        $monto_total = $_REQUEST['total'];

        //enviar correo
        $to = $correo;
        $subject = "Reserva de Paquete - San Cristobal";
        $message = "Hola $nombre,\n\n
        Gracias por reservar el paquete Palenque con nosotros.\n\n
        Detalles de la reserva\n
        Número de personas: $numero_personas\n
        Precio por persona: $precio_persona\n
        Total de tu reserva $monto_total - 50%: $subtotal\n 
        El otro 50% se paga fisicamente: \n
        ¡Esperamos que disfrutes de tu experiencia!\n\n
        Saludos del El equipo de reservas.";
        $headers = "From: segio@gmail.com\r\n" .
                   'Reply-To: turituxOpe@gmail.com';
        if (mail($to, $subject, $message, $headers)) {
            $mensaje_exito = "Correo enviado con éxito.";
        } else {
            $mensaje_exito = "Error al enviar el cor reo.";
        }



        $id_user_client = $_SESSION['id_user_client']; // Obtener el ID del cliente de la sesión
        $pasajeros=$_REQUEST['personas'];
        $precio=$_REQUEST['total'];
        $comentarios=$_REQUEST['comentarios'];
        $id_paquete=3;
        $modelReserva = new ReservaModel();
        $modelReserva->guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $id_user_client);

        $_SESSION['checkout_data'] = [
            'personas' => $_REQUEST['personas'],
            'precio_persona' => $_REQUEST['precioPersona'],

            
        ];
        
        header("location:".urlsite."index.php?a=checkout");
        exit();
    }
    public static function reservarAguazul(){

        // Verificar si el cliente está en sesión
        if (!isset($_SESSION['id_user_client'])) {
            throw new Exception("No se ha iniciado sesión como cliente.");
        }
        $numero_personas=$_REQUEST['personas'];
        $nombre=$_REQUEST['nombre'];
        $precio_persona=$_REQUEST['precioPersona'];
        $subtotal = $_REQUEST['Subtotal']; // Calcular el 50% del total
        $correo=$_REQUEST['correo'];
        $monto_total = $_REQUEST['total'];

        //enviar correo
        $to = $correo;
        $subject = "Reserva de Paquete - Aguazul";
        $message = "Hola $nombre,\n\n
        Gracias por reservar el paquete Palenque con nosotros.\n\n
        Detalles de la reserva\n
        Número de personas: $numero_personas\n
        Precio por persona: $precio_persona\n
        Total de tu reserva $monto_total - 50%: $subtotal\n 
        El otro 50% se paga fisicamente: \n
        ¡Esperamos que disfrutes de tu experiencia!\n\n
        Saludos del El equipo de reservas.";
        $headers = "From: segio@gmail.com\r\n" .
                   'Reply-To: turituxOpe@gmail.com';
        if (mail($to, $subject, $message, $headers)) {
            $mensaje_exito = "Correo enviado con éxito.";
        } else {
            $mensaje_exito = "Error al enviar el cor reo.";
        }

        $id_user_client = $_SESSION['id_user_client']; // Obtener el ID del cliente de la sesión
        $pasajeros=$_REQUEST['personas'];
        $precio=$_REQUEST['total'];
        $comentarios=$_REQUEST['comentarios'];
        $id_paquete=4;
        $modelReserva = new ReservaModel();
        $modelReserva->guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $id_user_client);
        
        $_SESSION['checkout_data'] = [
            'personas' => $_REQUEST['personas'],
            'precio_persona' => $_REQUEST['precioPersona'],

            
        ];
        
        header("location:".urlsite."index.php?a=checkout");
        exit();
    }
    public static function reservarComitan(){

        // Verificar si el cliente está en sesión
        if (!isset($_SESSION['id_user_client'])) {
            throw new Exception("No se ha iniciado sesión como cliente.");
        }
        $numero_personas=$_REQUEST['personas'];
        $nombre=$_REQUEST['nombre'];
        $precio_persona=$_REQUEST['precioPersona'];
        $subtotal = $_REQUEST['Subtotal']; // Calcular el 50% del total
        $correo=$_REQUEST['correo'];
        $monto_total = $_REQUEST['total'];

        //enviar correo
        $to = $correo;
        $subject = "Reserva de Paquete - Comitan";
        $message = "Hola $nombre,\n\n
        Gracias por reservar el paquete Palenque con nosotros.\n\n
        Detalles de la reserva\n
        Número de personas: $numero_personas\n
        Precio por persona: $precio_persona\n
        Total de tu reserva $monto_total - 50%: $subtotal\n 
        El otro 50% se paga fisicamente: \n
        ¡Esperamos que disfrutes de tu experiencia!\n\n
        Saludos del El equipo de reservas.";
        $headers = "From: segio@gmail.com\r\n" .
                   'Reply-To: turituxOpe@gmail.com';
        if (mail($to, $subject, $message, $headers)) {
            $mensaje_exito = "Correo enviado con éxito.";
        } else {
            $mensaje_exito = "Error al enviar el cor reo.";
        }

        $id_user_client = $_SESSION['id_user_client']; // Obtener el ID del cliente de la sesión
        $pasajeros=$_REQUEST['personas'];
        $precio=$_REQUEST['total'];
        $comentarios=$_REQUEST['comentarios'];
        $id_paquete=5;
        $modelReserva = new ReservaModel();
        $modelReserva->guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $id_user_client);
        
        $_SESSION['checkout_data'] = [
            'personas' => $_REQUEST['personas'],
            'precio_persona' => $_REQUEST['precioPersona'],

            
        ];
        
        header("location:".urlsite."index.php?a=checkout");
        exit();

    }
    public static function reservarCotorras(){

        // Verificar si el cliente está en sesión
        if (!isset($_SESSION['id_user_client'])) {
            throw new Exception("No se ha iniciado sesión como cliente.");
        }
        $numero_personas=$_REQUEST['personas'];
        $nombre=$_REQUEST['nombre'];
        $precio_persona=$_REQUEST['precioPersona'];
        $subtotal = $_REQUEST['Subtotal']; // Calcular el 50% del total
        $correo=$_REQUEST['correo'];
        $monto_total = $_REQUEST['total'];

        //enviar correo
        $to = $correo;
        $subject = "Reserva de Paquete - Cotorras";
        $message = "Hola $nombre,\n\n
        Gracias por reservar el paquete Palenque con nosotros.\n\n
        Detalles de la reserva\n
        Número de personas: $numero_personas\n
        Precio por persona: $precio_persona\n
        Total de tu reserva $monto_total - 50%: $subtotal\n 
        El otro 50% se paga fisicamente: \n
        ¡Esperamos que disfrutes de tu experiencia!\n\n
        Saludos del El equipo de reservas.";
        $headers = "From: segio@gmail.com\r\n" .
                   'Reply-To: turituxOpe@gmail.com';
        if (mail($to, $subject, $message, $headers)) {
            $mensaje_exito = "Correo enviado con éxito.";
        } else {
            $mensaje_exito = "Error al enviar el cor reo.";
        }


        $id_user_client = $_SESSION['id_user_client']; // Obtener el ID del cliente de la sesión
        $pasajeros=$_REQUEST['personas'];
        $precio=$_REQUEST['total'];
        $comentarios=$_REQUEST['comentarios'];
        $id_paquete=6;
        $modelReserva = new ReservaModel();
        $modelReserva->guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $id_user_client);
        
        $_SESSION['checkout_data'] = [
            'personas' => $_REQUEST['personas'],
            'precio_persona' => $_REQUEST['precioPersona'],

            
        ];
        
        header("location:".urlsite."index.php?a=checkout");
        exit();

    }
    public static function reservarSumidero(){

        // Verificar si el cliente está en sesión
        if (!isset($_SESSION['id_user_client'])) {
            throw new Exception("No se ha iniciado sesión como cliente.");
        }
        $numero_personas=$_REQUEST['personas'];
        $nombre=$_REQUEST['nombre'];
        $precio_persona=$_REQUEST['precioPersona'];
        $subtotal = $_REQUEST['Subtotal']; // Calcular el 50% del total
        $correo=$_REQUEST['correo'];
        $monto_total = $_REQUEST['total'];

        //enviar correo
        $to = $correo;
        $subject = "Reserva de Paquete - Cañon del Sumidero";
        $message = "Hola $nombre,\n\n
        Gracias por reservar el paquete Palenque con nosotros.\n\n
        Detalles de la reserva\n
        Número de personas: $numero_personas\n
        Precio por persona: $precio_persona\n
        Total de tu reserva $monto_total - 50%: $subtotal\n 
        El otro 50% se paga fisicamente: \n
        ¡Esperamos que disfrutes de tu experiencia!\n\n
        Saludos del El equipo de reservas.";
        $headers = "From: segio@gmail.com\r\n" .
                   'Reply-To: turituxOpe@gmail.com';
        if (mail($to, $subject, $message, $headers)) {
            $mensaje_exito = "Correo enviado con éxito.";
        } else {
            $mensaje_exito = "Error al enviar el cor reo.";
        }


        $id_user_client = $_SESSION['id_user_client']; // Obtener el ID del cliente de la sesión
        $pasajeros=$_REQUEST['personas'];
        $precio=$_REQUEST['total'];
        $comentarios=$_REQUEST['comentarios'];
        $id_paquete=7;
        $modelReserva = new ReservaModel();
        $modelReserva->guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $id_user_client);
        
        $_SESSION['checkout_data'] = [
            'personas' => $_REQUEST['personas'],
            'precio_persona' => $_REQUEST['precioPersona'],

            
        ];
        
        header("location:".urlsite."index.php?a=checkout");
        exit();
    }
    public static function reservarArcote(){

        // Verificar si el cliente está en sesión
        if (!isset($_SESSION['id_user_client'])) {
            throw new Exception("No se ha iniciado sesión como cliente.");
        }
        $numero_personas=$_REQUEST['personas'];
        $nombre=$_REQUEST['nombre'];
        $precio_persona=$_REQUEST['precioPersona'];
        $subtotal = $_REQUEST['Subtotal']; // Calcular el 50% del total
        $correo=$_REQUEST['correo'];
        $monto_total = $_REQUEST['total'];

        //enviar correo
        $to = $correo;
        $subject = "Reserva de Paquete - Arcote";
        $message = "Hola $nombre,\n\n
        Gracias por reservar el paquete Palenque con nosotros.\n\n
        Detalles de la reserva\n
        Número de personas: $numero_personas\n
        Precio por persona: $precio_persona\n
        Total de tu reserva $monto_total - 50%: $subtotal\n 
        El otro 50% se paga fisicamente: \n
        ¡Esperamos que disfrutes de tu experiencia!\n\n
        Saludos del El equipo de reservas.";
        $headers = "From: segio@gmail.com\r\n" .
                   'Reply-To: turituxOpe@gmail.com';
        if (mail($to, $subject, $message, $headers)) {
            $mensaje_exito = "Correo enviado con éxito.";
        } else {
            $mensaje_exito = "Error al enviar el cor reo.";
        }


        $id_user_client = $_SESSION['id_user_client']; // Obtener el ID del cliente de la sesión
        $pasajeros=$_REQUEST['personas'];
        $precio=$_REQUEST['total'];
        $comentarios=$_REQUEST['comentarios'];
        $id_paquete=8;
        $modelReserva = new ReservaModel();
        $modelReserva->guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $id_user_client);
        
        $_SESSION['checkout_data'] = [
            'personas' => $_REQUEST['personas'],
            'precio_persona' => $_REQUEST['precioPersona'],

            
        ];
        
        header("location:".urlsite."index.php?a=checkout");
        exit();

    }
    public static function reservarBonampak(){

        // Verificar si el cliente está en sesión
        if (!isset($_SESSION['id_user_client'])) {
            throw new Exception("No se ha iniciado sesión como cliente.");
        }
        $numero_personas=$_REQUEST['personas'];
        $nombre=$_REQUEST['nombre'];
        $precio_persona=$_REQUEST['precioPersona'];
        $subtotal = $_REQUEST['Subtotal']; // Calcular el 50% del total
        $correo=$_REQUEST['correo'];
        $monto_total = $_REQUEST['total'];

        //enviar correo
        $to = $correo;
        $subject = "Reserva de Paquete - Bonampak";
        $message = "Hola $nombre,\n\n
        Gracias por reservar el paquete Palenque con nosotros.\n\n
        Detalles de la reserva\n
        Número de personas: $numero_personas\n
        Precio por persona: $precio_persona\n
        Total de tu reserva $monto_total - 50%: $subtotal\n 
        El otro 50% se paga fisicamente: \n
        ¡Esperamos que disfrutes de tu experiencia!\n\n
        Saludos del El equipo de reservas.";
        $headers = "From: segio@gmail.com\r\n" .
                   'Reply-To: turituxOpe@gmail.com';
        if (mail($to, $subject, $message, $headers)) {
            $mensaje_exito = "Correo enviado con éxito.";
        } else {
            $mensaje_exito = "Error al enviar el cor reo.";
        }

        $id_user_client = $_SESSION['id_user_client']; // Obtener el ID del cliente de la sesión
        $pasajeros=$_REQUEST['personas'];
        $precio=$_REQUEST['total'];
        $comentarios=$_REQUEST['comentarios'];
        $id_paquete=9;
        $modelReserva = new ReservaModel();
        $modelReserva->guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $id_user_client);
        
        $_SESSION['checkout_data'] = [
            'personas' => $_REQUEST['personas'],
            'precio_persona' => $_REQUEST['precioPersona'],

            
        ];
        
        header("location:".urlsite."index.php?a=checkout");
        exit();

    }
    public static function reservarChiflon(){

        // Verificar si el cliente está en sesión
        if (!isset($_SESSION['id_user_client'])) {
            throw new Exception("No se ha iniciado sesión como cliente.");
        }
        $numero_personas=$_REQUEST['personas'];
        $nombre=$_REQUEST['nombre'];
        $precio_persona=$_REQUEST['precioPersona'];
        $subtotal = $_REQUEST['Subtotal']; // Calcular el 50% del total
        $correo=$_REQUEST['correo'];
        $monto_total = $_REQUEST['total'];

        //enviar correo
        $to = $correo;
        $subject = "Reserva de Paquete - Casda del Chiflon";
        $message = "Hola $nombre,\n\n
        Gracias por reservar el paquete Palenque con nosotros.\n\n
        Detalles de la reserva\n
        Número de personas: $numero_personas\n
        Precio por persona: $precio_persona\n
        Total de tu reserva $monto_total - 50%: $subtotal\n 
        El otro 50% se paga fisicamente: \n
        ¡Esperamos que disfrutes de tu experiencia!\n\n
        Saludos del El equipo de reservas.";
        $headers = "From: segio@gmail.com\r\n" .
                   'Reply-To: turituxOpe@gmail.com';
        if (mail($to, $subject, $message, $headers)) {
            $mensaje_exito = "Correo enviado con éxito.";
        } else {
            $mensaje_exito = "Error al enviar el cor reo.";
        }

        $id_user_client = $_SESSION['id_user_client']; // Obtener el ID del cliente de la sesión
        $pasajeros=$_REQUEST['personas'];
        $precio=$_REQUEST['total'];
        $comentarios=$_REQUEST['comentarios'];
        $id_paquete=10;
        $modelReserva = new ReservaModel();
        $modelReserva->guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $id_user_client);
        
        $_SESSION['checkout_data'] = [
            'personas' => $_REQUEST['personas'],
            'precio_persona' => $_REQUEST['precioPersona'],

            
        ];
        
        header("location:".urlsite."index.php?a=checkout");
        exit();

    }
    public static function reservarMarimba(){

        // Verificar si el cliente está en sesión
        if (!isset($_SESSION['id_user_client'])) {
            throw new Exception("No se ha iniciado sesión como cliente.");
        }
        $numero_personas=$_REQUEST['personas'];
        $nombre=$_REQUEST['nombre'];
        $precio_persona=$_REQUEST['precioPersona'];
        $subtotal = $_REQUEST['Subtotal']; // Calcular el 50% del total
        $correo=$_REQUEST['correo'];
        $monto_total = $_REQUEST['total'];

        //enviar correo
        $to = $correo;
        $subject = "Reserva de Paquete - Parque de la Marimba";
        $message = "Hola $nombre,\n\n
        Gracias por reservar el paquete Palenque con nosotros.\n\n
        Detalles de la reserva\n
        Número de personas: $numero_personas\n
        Precio por persona: $precio_persona\n
        Total de tu reserva $monto_total - 50%: $subtotal\n 
        El otro 50% se paga fisicamente: \n
        ¡Esperamos que disfrutes de tu experiencia!\n\n
        Saludos del El equipo de reservas.";
        $headers = "From: segio@gmail.com\r\n" .
                   'Reply-To: turituxOpe@gmail.com';
        if (mail($to, $subject, $message, $headers)) {
            $mensaje_exito = "Correo enviado con éxito.";
        } else {
            $mensaje_exito = "Error al enviar el cor reo.";
        }


        $id_user_client = $_SESSION['id_user_client']; // Obtener el ID del cliente de la sesión
        $pasajeros=$_REQUEST['personas'];
        $precio=$_REQUEST['total'];
        $comentarios=$_REQUEST['comentarios'];
        $id_paquete=11;
        $modelReserva = new ReservaModel();
        $modelReserva->guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $id_user_client);
        
        $_SESSION['checkout_data'] = [
            'personas' => $_REQUEST['personas'],
            'precio_persona' => $_REQUEST['precioPersona'],

            
        ];
        
        header("location:".urlsite."index.php?a=checkout");
        exit();

    }
    public static function reservarCopoya(){

        // Verificar si el cliente está en sesión
        if (!isset($_SESSION['id_user_client'])) {
            throw new Exception("No se ha iniciado sesión como cliente.");
        }
        $numero_personas=$_REQUEST['personas'];
        $nombre=$_REQUEST['nombre'];
        $precio_persona=$_REQUEST['precioPersona'];
        $subtotal = $_REQUEST['Subtotal']; // Calcular el 50% del total
        $correo=$_REQUEST['correo'];
        $monto_total = $_REQUEST['total'];

        //enviar correo
        $to = $correo;
        $subject = "Reserva de Paquete - Copoya";
        $message = "Hola $nombre,\n\n
        Gracias por reservar el paquete Palenque con nosotros.\n\n
        Detalles de la reserva\n
        Número de personas: $numero_personas\n
        Precio por persona: $precio_persona\n
        Total de tu reserva $monto_total - 50%: $subtotal\n 
        El otro 50% se paga fisicamente: \n
        ¡Esperamos que disfrutes de tu experiencia!\n\n
        Saludos del El equipo de reservas.";
        $headers = "From: segio@gmail.com\r\n" .
                   'Reply-To: turituxOpe@gmail.com';
        if (mail($to, $subject, $message, $headers)) {
            $mensaje_exito = "Correo enviado con éxito.";
        } else {
            $mensaje_exito = "Error al enviar el cor reo.";
        }

        $id_user_client = $_SESSION['id_user_client']; // Obtener el ID del cliente de la sesión
        $pasajeros=$_REQUEST['personas'];
        $precio=$_REQUEST['total'];
        $comentarios=$_REQUEST['comentarios'];
        $id_paquete=12;
        $modelReserva = new ReservaModel();
        $modelReserva->guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $id_user_client);
        
        $_SESSION['checkout_data'] = [
            'personas' => $_REQUEST['personas'],
            'precio_persona' => $_REQUEST['precioPersona'],

            
        ];
        
        header("location:".urlsite."index.php?a=checkout");
        exit();

    }
    public static function reservarZoomat(){

        // Verificar si el cliente está en sesión
        if (!isset($_SESSION['id_user_client'])) {
            throw new Exception("No se ha iniciado sesión como cliente.");
        }
        $numero_personas=$_REQUEST['personas'];
        $nombre=$_REQUEST['nombre'];
        $precio_persona=$_REQUEST['precioPersona'];
        $subtotal = $_REQUEST['Subtotal']; // Calcular el 50% del total
        $correo=$_REQUEST['correo'];
        $monto_total = $_REQUEST['total'];

        //enviar correo
        $to = $correo;
        $subject = "Reserva de Paquete - Zoomat";
        $message = "Hola $nombre,\n\n
        Gracias por reservar el paquete Palenque con nosotros.\n\n
        Detalles de la reserva\n
        Número de personas: $numero_personas\n
        Precio por persona: $precio_persona\n
        Total de tu reserva $monto_total - 50%: $subtotal\n 
        El otro 50% se paga fisicamente: \n
        ¡Esperamos que disfrutes de tu experiencia!\n\n
        Saludos del El equipo de reservas.";
        $headers = "From: segio@gmail.com\r\n" .
                   'Reply-To: turituxOpe@gmail.com';
        if (mail($to, $subject, $message, $headers)) {
            $mensaje_exito = "Correo enviado con éxito.";
        } else {
            $mensaje_exito = "Error al enviar el cor reo.";
        }


        $id_user_client = $_SESSION['id_user_client']; // Obtener el ID del cliente de la sesión
        $pasajeros=$_REQUEST['personas'];
        $precio=$_REQUEST['total'];
        $comentarios=$_REQUEST['comentarios'];
        $id_paquete=13;
        $modelReserva = new ReservaModel();
        $modelReserva->guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $id_user_client);
        
        $_SESSION['checkout_data'] = [
            'personas' => $_REQUEST['personas'],
            'precio_persona' => $_REQUEST['precioPersona'],

            
        ];
        
        header("location:".urlsite."index.php?a=checkout");
        exit();

    }

}
?>