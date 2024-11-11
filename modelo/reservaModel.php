<?php 

class ReservaModel{

    public function guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $nombre, $apellido, $telefono, $correo){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="INSERT INTO Cliente (nombre, apellido, telefono, correo)
        VALUES ('$nombre', '$apellido', '$telefono', '$correo');";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute();
        
        $consulta="INSERT INTO Reserva (fecha, pasajeros, precio, id_paquete, comentarios)
        VALUES (NOW(), '$pasajeros', '$precio', '$id_paquete', '$comentarios');";
        $resultado=$cnn->prepare($consula);
        $resultado->execute();
        
        
        if($resultado){
            return true;
            
        }else{
            return false;
            
        }
    }
}

?>