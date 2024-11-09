<?php
require_once('modelo/registroModel.php');
class RegistroController{
    private $registroModel;
    public function __construct(){
        $this->registroModel = new registroModel();
    }

    public static function iniciarsesion(){
        require_once('vista/login/iniciarSesion.php');
    }

    public static function registro(){
        // Obtener datos del formulario
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $correo = $_REQUEST['correo'];
        // Guardar el registro
        $modelRegistro = new registroModel();
        $registroExitoso = $modelRegistro->guardarRegistro($username, $password, $correo);
        // Redirigir según el resultado
        if ($registroExitoso) {
            header("Location: ".urlsite."index.php?g=iniciarsesion");
        }
        exit();
    }
}
?>