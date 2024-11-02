<?php 
require_once('modelo/paquetesModel.php');
class PaquetesController{
    private $paquetesModel;
    public function __construct(){
        $this->paquetesModel = new paquetesModel();
    }
    public static function mostrarpaquetes(){
        require('vista/paquetes/mostrarPaquetes.php');
    }
}
?>