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

    
    
}
?>