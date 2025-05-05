<?php 
class registroModel{

    public function guardarRegistro($username, $passwordHash, $correo) {
        include_once('conexion.php');
        $cnn = new Conexion();
    
        $consulta = "INSERT INTO user_client (username, password, correo) 
                     VALUES (:username, :password, :correo)";
        $resultado = $cnn->prepare($consulta);
    
        $resultado->bindParam(':username', $username);
        $resultado->bindParam(':password', $passwordHash); // ¡Aquí ya es el hash!
        $resultado->bindParam(':correo', $correo);
    
        return $resultado->execute();
    }
    
    
}

?>