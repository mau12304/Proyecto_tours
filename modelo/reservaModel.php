<?php 

class ReservaModel{

    public function guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $id_user_client) {
        include_once('conexion.php');
        $cnn = new Conexion();
    
        $consulta = "INSERT INTO Reserva (fecha, pasajeros, precio, id_paquete, comentarios, id_user_client)
                     VALUES (NOW(), :pasajeros, :precio, :id_paquete, :comentarios, :id_user_client)";
        
        $resultado = $cnn->prepare($consulta);
    
        // Asegúrate de que el precio venga sin símbolo de dólar
        $precio = str_replace('$', '', $precio);
    
        $resultado->bindParam(':pasajeros', $pasajeros, PDO::PARAM_INT);
        $resultado->bindParam(':precio', $precio);
        $resultado->bindParam(':id_paquete', $id_paquete, PDO::PARAM_INT);
        $resultado->bindParam(':comentarios', $comentarios, PDO::PARAM_STR);
        $resultado->bindParam(':id_user_client', $id_user_client, PDO::PARAM_INT);
    
        if ($resultado->execute()) {
            return true;
        } else {
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
