<?php 

class loginModel{

    public function iniciarsesion($usuario, $contrasena) {
        include_once('conexion.php');
        $cnn =new Conexion();
        $consulta = "SELECT * FROM user_empleado WHERE username = :usuario AND password = :contrasena";
        $resultado = $cnn->prepare($consulta);
        $resultado->bindParam(':usuario', $usuario);
        $resultado->bindParam(':contrasena', $contrasena);
        $resultado->execute();
        
        // Verificar si el usuario existe en usuarios_empleados
        if ($resultado->rowCount() > 0) {
            return 'empleado';
        }
        
        // Buscar en la tabla usuarios_cliente
        $consulta = "SELECT * FROM user_client WHERE username = :usuario AND password = :contrasena";
        $resultado = $cnn->prepare($consulta);
        $resultado->bindParam(':usuario', $usuario);
        $resultado->bindParam(':contrasena', $contrasena);
        $resultado->execute();
        

        if ($resultado->rowCount() > 0) {
            // Obtener los datos del cliente
            $cliente = $resultado->fetch(PDO::FETCH_ASSOC);
            $_SESSION['id_user_client'] = $cliente['id_user_client'];     // Guardar ID en sesión
            $_SESSION['nombre_usuario'] = $cliente['username'];               // Guardar nombre en sesión
            $_SESSION['tipo_usuario'] = 'cliente';    
        
            return 'cliente';
        }
        // Si no existe en ninguna de las tablas
        return "Regístrate para acceder";
    }
}

?>