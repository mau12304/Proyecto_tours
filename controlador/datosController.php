<?php 
require_once('modelo/datosModel.php');
class DatosController{
    private $datoModel;

    function __construct()
    {
        $this-> datoModel = new DatosModel();
    }
    public static function editarDatos(){
        $modeldatos = new DatosModel();
        $empleado = $modeldatos->mostrarEmpleados();
        $cliente = $modeldatos->mostrarClientes();
        $reserva = $modeldatos->mostrarReservaciones();
        $userempleado =$modeldatos->mostrarUserEmpleado();
        $usercliente =$modeldatos->mostrarUserCliente();
        require('vista/configDatos/editarDatosBD.php');

    }
    public static function agregarEmpleado(){
        require('vista/configDatos/agregarEmpleado.php');
    }
    public static function agregarUserEmpleado(){
        require('vista/configDatos/agregarUserEmpleado.php');
    }
    public static function agregarUserCliente(){
        require('vista/configDatos/agregarUserCliente.php');
    }

    public static function guardarEmpleado(){
        $id_empleado=$_REQUEST['id_empleado'];
        $nombre=$_REQUEST['nombre'];
        $apellido=$_REQUEST['apellido'];
        $puesto=$_REQUEST['puesto'];
        $fecha_nacimiento=$_REQUEST['fecha_nacimiento'];
        $curp=$_REQUEST['curp'];
        $genero=$_REQUEST['genero'];
        $telefono=$_REQUEST['telefono'];
        $correo=$_REQUEST['correo'];
        $modelDatos = new DatosModel();
        $modelDatos->agregarEmpleado($nombre, $apellido, $puesto, $fecha_nacimiento, $curp, $genero, $telefono, $correo);
        header("location:".urlsite."index.php?d=editarDatos");
    }
    public static function guardarUserEmpleado(){
        $id_user_empleado=$_REQUEST['id_user_empleado'];
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];
        $id_empleado=$_REQUEST['id_empleado'];
        $modelDatos = new DatosModel();
        $modelDatos->agregarUserEmpleado($username, $password, $id_empleado);
        header("location:".urlsite."index.php?d=editarDatos");
    }
    public static function guardarUserCliente(){
        $id_user_client=$_REQUEST['id_user_client'];
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];
        $correo=$_REQUEST['correo'];
        $modelDatos = new DatosModel();
        $modelDatos->agregarUserCliente($username, $password, $correo);
        header("location:".urlsite."index.php?d=editarDatos");
    }
    public static function actualizarEmpleado(){
        $id_empleado=$_REQUEST['id_empleado'];
        $modelempleado = new DatosModel();
        $empleado=$modelempleado->obtenerEmpleado($id_empleado);
        require_once('vista/configDatos/actualizarEmpleado.php');

    }
    public static function actualizarUserEmpleado(){
        $id_user_empleado=$_REQUEST['id_user_empleado'];
        $modelempleado = new DatosModel();
        $userempleado=$modelempleado->obtenerUserEmpleado($id_user_empleado);
        require_once('vista/configDatos/actualizarUserEmpleado.php');

    }
    public static function actualizarUserCliente(){
        $id_user_client=$_REQUEST['id_user_client'];
        $modelcliente = new DatosModel();
        $usercliente=$modelcliente->obtenerUserCliente($id_user_client);
        require_once('vista/configDatos/actualizarUserCliente.php');
    }
    public static function modificarUserEmpleado(){
        $id_user_empleado=$_REQUEST['id_user_empleado'];
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];
        $id_empleado=$_REQUEST['id_empleado'];
        $modelDatos = new DatosModel();
        $modelDatos->actualizarUserEmpleado($id_user_empleado,$username, $password, $id_empleado);
        header("location:".urlsite."index.php?d=editarDatos");
    }
    public static function modificarUserCliente(){
        $id_user_client=$_REQUEST['id_user_client'];
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];
        $correo=$_REQUEST['correo'];
        $modelDatos = new DatosModel();
        $modelDatos->actualizarUserCliente($id_user_client, $username, $password, $correo);
        header("location:".urlsite."index.php?d=editarDatos");
    }
    
    public static function modificarEmpleado(){
        $id_empleado=$_REQUEST['id_empleado'];
        $nombre=$_REQUEST['nombre'];
        $apellido=$_REQUEST['apellido'];
        $puesto=$_REQUEST['puesto'];
        $fecha_nacimiento=$_REQUEST['fecha_nacimiento'];
        $curp=$_REQUEST['curp'];
        $genero=$_REQUEST['genero'];
        $telefono=$_REQUEST['telefono'];
        $correo=$_REQUEST['correo'];
        $modelDatos = new DatosModel();
        $modelDatos->actualizarEmpleado($id_empleado, $nombre, $apellido, $puesto, $fecha_nacimiento, $curp, $genero, $telefono, $correo);
        header("location:".urlsite."index.php?d=editarDatos");
    }
    public static function eliminarEmpleado(){
        $id_empleado=$_REQUEST['id_empleado'];
        $modelempleado= new DatosModel();
        $modelempleado->eliminarEmpleado($id_empleado);
        header("location:".urlsite."index.php?d=editarDatos");
    }
    public static function eliminarUserEmpleado(){
        $id_user_empleado=$_REQUEST['id_user_empleado'];
        $modelempleado= new DatosModel();
        $modelempleado->eliminarUserEmpleado($id_user_empleado);
        header("location:".urlsite."index.php?d=editarDatos");
    }
    public static function eliminarUserCliente(){
        $id_user_client=$_REQUEST['id_user_client'];
        $modelempleado= new DatosModel();
        $modelempleado->eliminarUserCliente($id_user_client);
        header("location:".urlsite."index.php?d=editarDatos");
    }



}

?>