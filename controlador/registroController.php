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

    public static function registro() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $correo = $_POST['correo'];
    
            if (!empty($username) && !empty($password) && !empty($correo)) {
                // Hashear la contraseña antes de guardarla
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    
                $modelRegistro = new registroModel();
                $registroExitoso = $modelRegistro->guardarRegistro($username, $passwordHash, $correo);
    
                if ($registroExitoso) {
                    header("Location: " . urlsite . "index.php?g=iniciarsesion");
                    exit();
                } else {
                    echo "<script>alert('Error al registrar. Intenta de nuevo.');</script>";
                }
            } else {
                echo "<script>alert('Por favor, complete todos los campos.');</script>";
                header("Location: " . urlsite . "index.php?l=hacerregistro");
                exit();
            }
        }
    }
      
    
}
?>