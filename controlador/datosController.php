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
        require('vista/configDatos/editarDatosBD.php');

    }
    public static function agregarEmpleado(){
        require('vista/configDatos/agregarEmpleado.php');
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
    public static function actualizarEmpleado(){
        $id_empleado=$_REQUEST['id_empleado'];
        $modelempleado = new DatosModel();
        $empleado=$modelempleado->obtenerEmpleado($id_empleado);
        require_once('vista/configDatos/actualizarEmpleado.php');

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



}

?>