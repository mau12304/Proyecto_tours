<?php 
require_once('modelo/paquetesModel.php');
class PaquetesController{
    private $paquetesModel;
    public function __construct(){
        $this->paquetesModel = new paquetesModel();
    }
    public static function mostrarpaquetes(){
        require_once('vista/paquetes/mostrarPaquetes.php');
    }
    public static function mostrarpaquetesintermedio(){
        require_once('vista/paquetes/paquetesIntermedio.php');
    }
    public static function mostrarpaquetesmoderado(){
        require_once('vista/paquetes/paquetesModerado.php');
    }
    public static function mostradetallepaquete(){
        require_once('vista/paquetes/detallePaquete.php');
    }
    public static function editarPaquetes(){
        $modelconsultar = new paquetesModel();
        $datos = $modelconsultar->mostrartablaPaquete();
        $detallepaquete = $modelconsultar->mostrartabladetallePaquete();
        $tiposervicio = $modelconsultar->mostrarTiposervicio();
        $servicios= $modelconsultar->mostrarServicios();
        require('vista/configPaquetes/editarPaquetes.php');
    }
    public static function actualizar(){
        $id_paquete=$_REQUEST['id_paquete'];
        $modelpaquete = new PaquetesModel();
        $datos=$modelpaquete->obtenerPaquete($id_paquete);
        require_once('vista/configPaquetes/actualizarPaquete.php');
    }
    public static function agregarPaquete(){
        require('vista/configPaquetes/agregarPaquete.php');
    }
    public static function detallarPaquete(){
        require('vista/configPaquetes/detallarPaquete.php');
    }
    public static function agregarTipo(){
        require('vista/configPaquetes/agregarTipo.php');
    }
    public static function agregarServicios(){
        require('vista/configPaquetes/agregarServicios.php');
    }
    public static function guardarPaquete(){
        $nombre=$_REQUEST['nombre'];
        $costo=$_REQUEST['costo'];
        
        $modelpaquete = new PaquetesModel();
        $modelpaquete->agregarPaquete($nombre, $costo);
        header("location:".urlsite."index.php?p=editarPaquetes");
    }
    public static function guardarDetalles(){
        $id_paquete = $_REQUEST['id_paquete'];
        $id_servicio = $_REQUEST['id_servicio'];
        $id_tipo_servicio= $_REQUEST['id_tipo_servicio'];
        $hora_salida = $_REQUEST['hora_salida'];
        $hora_llegada = $_REQUEST['hora_llegada'];
        $cupo_max = $_REQUEST['cupo_max'];
        $modeldetalles = new PaquetesModel();
        $modeldetalles->agregarDetalles($id_paquete,$id_servicio,$id_tipo_servicio,$hora_salida,$hora_llegada,$cupo_max);
        header("location:".urlsite."index.php?p=editarPaquetes");
    }
    public static function guardarTipo(){
        $id_tipo_servicio=$_REQUEST['id_tipo_servicio'];
        $nombre=$_REQUEST['nombre'];
        $modelTipo = new PaquetesModel();
        $modelTipo->agregarTipo($id_tipo_servicio, $nombre);
        header("location:".urlsite."index.php?p=editarPaquetes");
    }
    public static function guardarServicios(){
        $id_servicios=$_REQUEST['id_servicios'];
        $nombre=$_REQUEST['nombre'];
        $descripcion=$_REQUEST['descripcion'];
        $modelServicios = new PaquetesModel();
        $modelServicios->agregarServicios($id_servicios, $nombre, $descripcion);
        header("location:".urlsite."index.php?p=editarPaquetes");
    }
    public static function actualizarPaquete(){
        $id_paquete=$_REQUEST['id_paquete'];
        $nombre=$_REQUEST['nombre'];
        $costo=$_REQUEST['costo'];
        $modelpaquete = new PaquetesModel();
        $modelpaquete->actualizarPaquete($id_paquete,$nombre, $costo);
        header("location:".urlsite."index.php?p=editarPaquetes");
    }
    
}
?>