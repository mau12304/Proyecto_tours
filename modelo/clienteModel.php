<?php 
class ClienteModel{

    public static function ingresarCliente(){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="INSERT INTO Cliente(nombre, apellido, , telefono, correo)
        VALUES ('$nombre', '$apellido', '$telefono', '$correo');";
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