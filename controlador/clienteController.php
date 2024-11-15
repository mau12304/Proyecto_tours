<?php 
require_once('modelo/clienteModel.php');
class ClienteController{
    private $clienteModel;

    function __construct()
    {
        $this-> clienteModel = new ClienteModel();
    }
    public static function mostrarDatos(){
         // Verificar si el cliente está en sesión
         if (!isset($_SESSION['id_user_client'])) {
            throw new Exception("No se ha iniciado sesión como cliente.");
        }
        $id_user_client = $_SESSION['id_user_client']; // Obtener el ID del cliente de la sesión
       
        $modelCliente = new ClienteModel();
        $susreservas = $modelCliente->obtenerSusReservaciones($id_user_client);
        require('vista/userCliente.php/datosPersonales.php');
        
    }
    public static function guardarCliente(){
        $nombre=$_REQUEST['nombre'];
        $apellido=$_REQUEST['apellido'];
        $telefono=$_REQUEST['telefono'];
        $correo=$_REQUEST['correo'];
        $modelCliente = new ClienteModel();
        $modelCliente->ingresarCliente($nombre, $apellido, $telefono, $correo);
        header("location:".urlsite."index.php?c=mostrarDatos");
        header("location:".urlsite."index.php?c=mostrarDatos&enviado=Datos enviados con exito.");
        exit();
        
    }
    public static function actualizarCliente(){
        $modelCliente = new ClienteModel();
        $clientes = $modelCliente->obtenerCliente();
        require_once('vista/userCliente/datosPersonal.php');
    }
    
}

?>