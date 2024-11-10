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

}

?>