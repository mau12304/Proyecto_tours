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
        $modelTipo->agregarTipo($nombre);
        header("location:".urlsite."index.php?p=editarPaquetes");
    }
    public static function guardarServicios(){
        $id_servicios=$_REQUEST['id_servicios'];
        $nombre=$_REQUEST['nombre'];
        $descripcion=$_REQUEST['descripcion'];
        $modelServicios = new PaquetesModel();
        $modelServicios->agregarServicios($nombre, $descripcion);
        header("location:".urlsite."index.php?p=editarPaquetes");
    }
    public static function actualizarPaquete(){
        $id_paquete=$_REQUEST['id_paquete'];
        $modelpaquete = new PaquetesModel();
        $datos=$modelpaquete->obtenerPaquete($id_paquete);
        require_once('vista/configPaquetes/actualizarPaquete.php');

    }
    public static function actualizarDetalle(){
        $id_detalle_paquete=$_REQUEST['id_detalle_paquete'];
        $modeldetalles = new PaquetesModel();
        $detalle = $modeldetalles->obtenerDetalle($id_detalle_paquete);
        require_once('vista/configPaquetes/actualizarDetalle.php');
    }
    public static function actualizarTipo(){
        $id_tipo_servicio=$_REQUEST['id_tipo_servicio'];
        $modelTipo = new PaquetesModel();
        $tipo = $modelTipo->obtenerTipo($id_tipo_servicio);
        require_once('vista/configPaquetes/actualizarTipo.php');
    }
    public static function actualizarServicios(){
        $id_servicios=$_REQUEST['id_servicios'];
        $modelServicios = new PaquetesModel();
        $servicios = $modelServicios->obtenerServicios($id_servicios);
        require_once('vista/configPaquetes/actualizarServicios.php');
    }
    public static function modificarPaquete(){
        $id_paquete=$_REQUEST['id_paquete'];
        $nombre=$_REQUEST['nombre'];
        $costo=$_REQUEST['costo'];
        $modelpaquete = new PaquetesModel();
        $modelpaquete->actualizarPaquete($id_paquete,$nombre, $costo);
        header("location:".urlsite."index.php?p=editarPaquetes");
    }
    public static function modificarDetalle(){
        $id_detalle_paquete=$_REQUEST['id_detalle_paquete'];
        $id_paquete = $_REQUEST['id_paquete'];
        $id_servicio = $_REQUEST['id_servicios'];
        $id_tipo_servicio= $_REQUEST['id_tipo_servicio'];
        $hora_salida = $_REQUEST['hora_salida'];
        $hora_llegada = $_REQUEST['hora_llegada'];
        $cupo_max = $_REQUEST['cupo_max'];
        $modeldetalles = new PaquetesModel();
        $modeldetalles->actualizarDetalle($id_detalle_paquete,$id_paquete,$id_servicio,$id_tipo_servicio,$hora_salida,$hora_llegada,$cupo_max);
        header("location:".urlsite."index.php?p=editarPaquetes");
    }
    public static function modificarTipo(){
        $id_tipo_servicio=$_REQUEST['id_tipo_servicio'];
        $nombre=$_REQUEST['nombre'];
        $modelTipo = new PaquetesModel();
        $modelTipo->actualizarTipo($id_tipo_servicio, $nombre);
        header("location:".urlsite."index.php?p=editarPaquetes");
    }
    public static function modificarServicios(){
        $id_servicios=$_REQUEST['id_servicios'];
        $nombre=$_REQUEST['nombre'];
        $descripcion=$_REQUEST['descripcion'];

        $modelServicios = new PaquetesModel();
        $modelServicios->actualizarServicios($id_servicios, $nombre, $descripcion);
        header("location:".urlsite."index.php?p=editarPaquetes");
    }
    public static function eliminarPaquete(){
        $id_paquete=$_REQUEST['id_paquete'];
        $modelpaquete= new PaquetesModel();
        $modelpaquete->eliminarPaquete($id_paquete);
        header("location:".urlsite."index.php?p=editarPaquetes");
    }
    public static function eliminarDetalle(){
        $id_detalle_paquete=$_REQUEST['id_detalle_paquete'];
        $modeldetalles= new PaquetesModel();
        $modeldetalles->eliminarDetalle($id_detalle_paquete);
        header("location:".urlsite."index.php?p=editarPaquetes");
    }
    public static function eliminarTipo(){
        $id_tipo_servicio=$_REQUEST['id_tipo_servicio'];
        $modelTipo= new PaquetesModel();
        $modelTipo->eliminarTipo($id_tipo_servicio);
        header("location:".urlsite."index.php?p=editarPaquetes");
    }
    public static function eliminarServicios(){
        $id_servicios=$_REQUEST['id_servicios'];
        $modelServicios= new PaquetesModel();
        $modelServicios->eliminarServicios($id_servicios);
        header("location:".urlsite."index.php?p=editarPaquetes");
    }

    
}
?>