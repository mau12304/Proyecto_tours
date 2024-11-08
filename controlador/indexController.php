<?php 
require_once('modelo/indexModel.php');
class indexController{
    private $indexModel;

    function __construct()
    {
        $this-> indexModel = new indexModel();
    }
    public static function index(){
        require_once("vista/index.php");
    }
    public static function conocenos(){
        require_once("vista/conocenos.php");
    }
    public static function blog(){
        require_once("vista/blog.php");
    }
    public static function editar(){
        require_once("vista/editarPaquetes/editar.php");
    }
}
?>