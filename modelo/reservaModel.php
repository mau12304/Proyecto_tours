<?php 

class ReservaModel{

    public function guardarReserva($pasajeros, $precio, $id_paquete, $comentarios,$id_user_client){
       
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="INSERT INTO Reserva (fecha, pasajeros, precio, id_paquete, comentarios, id_user_client)
        VALUES (NOW(), '$pasajeros', '$precio', '$id_paquete', '$comentarios','$id_user_client');";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute();
        
        
        if($resultado){
            return true;
            
        }else{
            return false;
            
        }
    }
}
/*
, $nombre, $apellido, $telefono, $correo
include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="INSERT INTO Cliente (nombre, apellido, telefono, correo)
        VALUES ('$nombre', '$apellido', '$telefono', '$correo');";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute();
        
*/

?>
