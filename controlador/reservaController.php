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
    public static function reservar(){

        // Verificar si el cliente está en sesión
        if (!isset($_SESSION['id_user_client'])) {
            throw new Exception("No se ha iniciado sesión como cliente.");
        }
        $id_user_client = $_SESSION['id_user_client']; // Obtener el ID del cliente de la sesión
       
        $pasajeros=$_REQUEST['personas'];
        $precio=$_REQUEST['total'];
        $comentarios=$_REQUEST['comentarios'];
        $id_paquete=1;
        $modelReserva = new ReservaModel();
        $modelReserva->guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $id_user_client);
        header("location:".urlsite."index.php?r=mostradetallepaquete");
        // Redirigir con mensaje de éxito
        header("location:".urlsite."index.php?r=mostradetallepaquete&success=Compra realizada con éxito.");
        exit();

    }
    public static function reservarPalenque(){

        // Verificar si el cliente está en sesión
        if (!isset($_SESSION['id_user_client'])) {
            throw new Exception("No se ha iniciado sesión como cliente.");
        }
        $id_user_client = $_SESSION['id_user_client']; // Obtener el ID del cliente de la sesión
       
        $pasajeros=$_REQUEST['personas'];
        $precio=$_REQUEST['total'];
        $comentarios=$_REQUEST['comentarios'];
        $id_paquete=2;
        $modelReserva = new ReservaModel();
        $modelReserva->guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $id_user_client);
        header("location:".urlsite."index.php?r=mostradetallepaquete");
        // Redirigir con mensaje de éxito
        header("location:".urlsite."index.php?r=mostradetallepaquete&success=Compra realizada con éxito.");
        exit();

    }
    public static function reservarSancristobal(){

        // Verificar si el cliente está en sesión
        if (!isset($_SESSION['id_user_client'])) {
            throw new Exception("No se ha iniciado sesión como cliente.");
        }
        $id_user_client = $_SESSION['id_user_client']; // Obtener el ID del cliente de la sesión
       
        $pasajeros=$_REQUEST['personas'];
        $precio=$_REQUEST['total'];
        $comentarios=$_REQUEST['comentarios'];
        $id_paquete=3;
        $modelReserva = new ReservaModel();
        $modelReserva->guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $id_user_client);
        header("location:".urlsite."index.php?r=mostradetallepaquete");
        // Redirigir con mensaje de éxito
        header("location:".urlsite."index.php?r=mostradetallepaquete&success=Compra realizada con éxito.");
        exit();

    }
    public static function reservarAguazul(){

        // Verificar si el cliente está en sesión
        if (!isset($_SESSION['id_user_client'])) {
            throw new Exception("No se ha iniciado sesión como cliente.");
        }
        $id_user_client = $_SESSION['id_user_client']; // Obtener el ID del cliente de la sesión
       
        $pasajeros=$_REQUEST['personas'];
        $precio=$_REQUEST['total'];
        $comentarios=$_REQUEST['comentarios'];
        $id_paquete=4;
        $modelReserva = new ReservaModel();
        $modelReserva->guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $id_user_client);
        header("location:".urlsite."index.php?r=mostradetallepaquete");
        // Redirigir con mensaje de éxito
        header("location:".urlsite."index.php?r=mostradetallepaquete&success=Compra realizada con éxito.");
        exit();

    }
    public static function reservarComitan(){

        // Verificar si el cliente está en sesión
        if (!isset($_SESSION['id_user_client'])) {
            throw new Exception("No se ha iniciado sesión como cliente.");
        }
        $id_user_client = $_SESSION['id_user_client']; // Obtener el ID del cliente de la sesión
       
        $pasajeros=$_REQUEST['personas'];
        $precio=$_REQUEST['total'];
        $comentarios=$_REQUEST['comentarios'];
        $id_paquete=5;
        $modelReserva = new ReservaModel();
        $modelReserva->guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $id_user_client);
        header("location:".urlsite."index.php?r=mostradetallepaquete");
        // Redirigir con mensaje de éxito
        header("location:".urlsite."index.php?r=mostradetallepaquete&success=Compra realizada con éxito.");
        exit();

    }
    public static function reservarCotorras(){

        // Verificar si el cliente está en sesión
        if (!isset($_SESSION['id_user_client'])) {
            throw new Exception("No se ha iniciado sesión como cliente.");
        }
        $id_user_client = $_SESSION['id_user_client']; // Obtener el ID del cliente de la sesión
       
        $pasajeros=$_REQUEST['personas'];
        $precio=$_REQUEST['total'];
        $comentarios=$_REQUEST['comentarios'];
        $id_paquete=6;
        $modelReserva = new ReservaModel();
        $modelReserva->guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $id_user_client);
        header("location:".urlsite."index.php?r=mostradetallepaquete");
        // Redirigir con mensaje de éxito
        header("location:".urlsite."index.php?r=mostradetallepaquete&success=Compra realizada con éxito.");
        exit();

    }
    public static function reservarSumidero(){

        // Verificar si el cliente está en sesión
        if (!isset($_SESSION['id_user_client'])) {
            throw new Exception("No se ha iniciado sesión como cliente.");
        }
        $id_user_client = $_SESSION['id_user_client']; // Obtener el ID del cliente de la sesión
       
        $pasajeros=$_REQUEST['personas'];
        $precio=$_REQUEST['total'];
        $comentarios=$_REQUEST['comentarios'];
        $id_paquete=7;
        $modelReserva = new ReservaModel();
        $modelReserva->guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $id_user_client);
        header("location:".urlsite."index.php?r=mostradetallepaquete");
        // Redirigir con mensaje de éxito
        header("location:".urlsite."index.php?r=mostradetallepaquete&success=Compra realizada con éxito.");
        exit();

    }
    public static function reservarArcote(){

        // Verificar si el cliente está en sesión
        if (!isset($_SESSION['id_user_client'])) {
            throw new Exception("No se ha iniciado sesión como cliente.");
        }
        $id_user_client = $_SESSION['id_user_client']; // Obtener el ID del cliente de la sesión
       
        $pasajeros=$_REQUEST['personas'];
        $precio=$_REQUEST['total'];
        $comentarios=$_REQUEST['comentarios'];
        $id_paquete=8;
        $modelReserva = new ReservaModel();
        $modelReserva->guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $id_user_client);
        header("location:".urlsite."index.php?r=mostradetallepaquete");
        // Redirigir con mensaje de éxito
        header("location:".urlsite."index.php?r=mostradetallepaquete&success=Compra realizada con éxito.");
        exit();

    }
    public static function reservarBonampak(){

        // Verificar si el cliente está en sesión
        if (!isset($_SESSION['id_user_client'])) {
            throw new Exception("No se ha iniciado sesión como cliente.");
        }
        $id_user_client = $_SESSION['id_user_client']; // Obtener el ID del cliente de la sesión
       
        $pasajeros=$_REQUEST['personas'];
        $precio=$_REQUEST['total'];
        $comentarios=$_REQUEST['comentarios'];
        $id_paquete=9;
        $modelReserva = new ReservaModel();
        $modelReserva->guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $id_user_client);
        header("location:".urlsite."index.php?r=mostradetallepaquete");
        // Redirigir con mensaje de éxito
        header("location:".urlsite."index.php?r=mostradetallepaquete&success=Compra realizada con éxito.");
        exit();

    }
    public static function reservarChiflon(){

        // Verificar si el cliente está en sesión
        if (!isset($_SESSION['id_user_client'])) {
            throw new Exception("No se ha iniciado sesión como cliente.");
        }
        $id_user_client = $_SESSION['id_user_client']; // Obtener el ID del cliente de la sesión
       
        $pasajeros=$_REQUEST['personas'];
        $precio=$_REQUEST['total'];
        $comentarios=$_REQUEST['comentarios'];
        $id_paquete=10;
        $modelReserva = new ReservaModel();
        $modelReserva->guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $id_user_client);
        header("location:".urlsite."index.php?r=mostradetallepaquete");
        // Redirigir con mensaje de éxito
        header("location:".urlsite."index.php?r=mostradetallepaquete&success=Compra realizada con éxito.");
        exit();

    }
    public static function reservarMarimba(){

        // Verificar si el cliente está en sesión
        if (!isset($_SESSION['id_user_client'])) {
            throw new Exception("No se ha iniciado sesión como cliente.");
        }
        $id_user_client = $_SESSION['id_user_client']; // Obtener el ID del cliente de la sesión
       
        $pasajeros=$_REQUEST['personas'];
        $precio=$_REQUEST['total'];
        $comentarios=$_REQUEST['comentarios'];
        $id_paquete=11;
        $modelReserva = new ReservaModel();
        $modelReserva->guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $id_user_client);
        header("location:".urlsite."index.php?r=mostradetallepaquete");
        // Redirigir con mensaje de éxito
        header("location:".urlsite."index.php?r=mostradetallepaquete&success=Compra realizada con éxito.");
        exit();

    }
    public static function reservarCopoya(){

        // Verificar si el cliente está en sesión
        if (!isset($_SESSION['id_user_client'])) {
            throw new Exception("No se ha iniciado sesión como cliente.");
        }
        $id_user_client = $_SESSION['id_user_client']; // Obtener el ID del cliente de la sesión
       
        $pasajeros=$_REQUEST['personas'];
        $precio=$_REQUEST['total'];
        $comentarios=$_REQUEST['comentarios'];
        $id_paquete=12;
        $modelReserva = new ReservaModel();
        $modelReserva->guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $id_user_client);
        header("location:".urlsite."index.php?r=mostradetallepaquete");
        // Redirigir con mensaje de éxito
        header("location:".urlsite."index.php?r=mostradetallepaquete&success=Compra realizada con éxito.");
        exit();

    }
    public static function reservarZoomat(){

        // Verificar si el cliente está en sesión
        if (!isset($_SESSION['id_user_client'])) {
            throw new Exception("No se ha iniciado sesión como cliente.");
        }
        $id_user_client = $_SESSION['id_user_client']; // Obtener el ID del cliente de la sesión
       
        $pasajeros=$_REQUEST['personas'];
        $precio=$_REQUEST['total'];
        $comentarios=$_REQUEST['comentarios'];
        $id_paquete=13;
        $modelReserva = new ReservaModel();
        $modelReserva->guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $id_user_client);
        header("location:".urlsite."index.php?r=mostradetallepaquete");
        // Redirigir con mensaje de éxito
        header("location:".urlsite."index.php?r=mostradetallepaquete&success=Compra realizada con éxito.");
        exit();

    }

}
?>