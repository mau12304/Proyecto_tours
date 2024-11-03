<?php 
require_once('modelo/loginModel.php');
class loginController{
    private $loginModel;
    public function __construct(){
        $this->loginModel = new loginModel();
    }
    public static function iniciarsesion(){
        require_once('vista/login/iniciarSesion.php');
    }
    public static function hacerregistro(){
        require_once('vista/login/hacerRegistro.php');
    }
}
?>