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
 
}
?>