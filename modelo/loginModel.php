<?php 

class loginModel{

    public function iniciarsesion($usuario, $contrasena) {
        include_once('conexion.php');
        $cnn = new Conexion();
    
        // 1. Buscar en user_empleado por username
        $consulta = "SELECT * FROM user_empleado WHERE username = :usuario";
        $resultado = $cnn->prepare($consulta);
        $resultado->bindParam(':usuario', $usuario);
        $resultado->execute();
    
        if ($resultado->rowCount() > 0) {
            $empleado = $resultado->fetch(PDO::FETCH_ASSOC);
    
            // Verificar contraseña con password_verify
            if (password_verify($contrasena, $empleado['password'])) {
                return 'empleado';
            }
        }
    
        // 2. Buscar en user_client por username
        $consulta = "SELECT * FROM user_client WHERE username = :usuario";
        $resultado = $cnn->prepare($consulta);
        $resultado->bindParam(':usuario', $usuario);
        $resultado->execute();
    
        if ($resultado->rowCount() > 0) {
            $cliente = $resultado->fetch(PDO::FETCH_ASSOC);

            if (password_verify($contrasena, $cliente['password'])) {
               
                // Guardar datos del cliente en sesión
                $_SESSION['id_user_client'] = $cliente['id_user_client'];
                $_SESSION['nombre_usuario'] = $cliente['username'];
                $_SESSION['tipo_usuario'] = 'cliente';

                return 'cliente';
            } else {
                echo "❌ Contraseña incorrecta<br>";
            }

        }
    
        return "Regístrate para acceder";
    }
    
}

?>