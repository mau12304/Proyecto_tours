<?php 
require_once('modelo/loginModel.php');
session_start();

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

    public static function login() {
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contraseña'];

        $userModel = new loginModel();
        $tipoUsuario = $userModel->authenticate($usuario, $contrasena);
        
        if ($tipoUsuario) {
            $_SESSION['tipo_usuario'] = $tipoUsuario;
            require_once('vista/index.php');
        } else {
            require_once('vista/login/iniciarSesion.php?error=1');
        }
        exit();
    }
    
    
    public static function logout() {
        session_unset();
        session_destroy();
        require_once('vista/index.php');
        exit();
    }
}
?>