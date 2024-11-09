<?php 
class registroModel{

    public function guardarRegistro($username, $password, $correo){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="INSERT INTO user_client (username, password, correo)
        VALUES ('$username','$password','$correo');";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute();

        if($resultado){
            return true;
            
        }else{
            return false;
            
        }
    }

}

?>