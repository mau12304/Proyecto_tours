<?php 
require_once('modelo/clienteModel.php');
class ClienteController{
    private $clienteModel;

    function __construct()
    {
        $this-> clienteModel = new ClienteModel();
    }
    public static function mostrarDatos(){
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
    }
    public static function actualizarCliente(){
        $id_cliente=$_REQUEST['id_cliente'];
        $modelCliente = new ClienteModel();
        $clientes = $modelCliente->obtenerCliente($id_cliente);
        require_once('vista/userCliente/datosPersonal.php');
    }
}

?>