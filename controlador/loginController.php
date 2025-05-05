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
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['usuario']) && !empty($_POST['contraseña'])) {
            $usuario = $_POST['usuario'];
            $contrasena = $_POST['contraseña'];
            $userModel = new loginModel();
            $tipoUsuario = $userModel->iniciarsesion($usuario, $contrasena);
    
            if ($tipoUsuario === 'empleado' || $tipoUsuario === 'cliente') {
                $_SESSION['tipo_usuario'] = $tipoUsuario;
                require_once('vista/index.php');
            } elseif ($tipoUsuario === 'Regístrate para acceder') {
                require_once('vista/login/hacerRegistro.php');
            }
        } else {
            echo "<script>alert('Completa todos los campos.');</script>";
            require_once('vista/login/login.php');
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