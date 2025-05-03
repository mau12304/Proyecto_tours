<?php 
class ClienteModel{
    private $listaCliente;
    private $listaClienteReserva;
    public function __construct(){
        $this->listaCliente=array();
        $this->listaClienteReserva=array();
       
    }

    public function ingresarCliente($nombre, $apellido, $telefono, $correo){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="INSERT INTO Cliente(nombre, apellido, telefono, correo)
        VALUES ('$nombre', '$apellido', '$telefono', '$correo');";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute();
        // Obtener el último ID generado
        $this->$id_cliente = $cnn->lastInsertId();

        // Retornar el ID generado
        return $this->$id_cliente;
        
        if($resultado){
            return true;
            
        }else{
            return false;
            
        }
    }
    public function obtenerCliente(){
            include_once('conexion.php');
            $cnn=new Conexion();
            $consulta="select * from Cliente WHERE id_cliente=".$this->$id_cliente.";";
            $resultado=$cnn->prepare($consulta);
            $resultado->execute(); 

            while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                    $this->listaCliente[]=$filas;
            }
            return $this->listaCliente;
            

    }
    public function obtenerSusReservaciones($id_user_client) {
        include_once('conexion.php');
        $cnn = new Conexion();
    
        // Consulta segura
        $consulta = "SELECT * FROM Reserva WHERE id_user_client = :id_user_client";
        $resultado = $cnn->prepare($consulta);
        $resultado->bindParam(':id_user_client', $id_user_client, PDO::PARAM_INT);
        $resultado->execute(); 
        
        $this->listaClienteReserva = [];
    
        // Obtener todas las reservaciones
        $reservas = $resultado->fetchAll(PDO::FETCH_ASSOC);
    
        foreach ($reservas as $reserva) {
            // Obtener nombre del paquete
            $consultaPaquete = "SELECT nombre FROM Paquete WHERE id_paquete = :id_paquete";
            $resultadoPaquete = $cnn->prepare($consultaPaquete);
            $resultadoPaquete->bindParam(':id_paquete', $reserva['id_paquete'], PDO::PARAM_INT);
            $resultadoPaquete->execute();
    
            $nombrePaquete = null;
            if ($resultadoPaquete->rowCount() > 0) {
                $filaPaquete = $resultadoPaquete->fetch(PDO::FETCH_ASSOC);
                $nombrePaquete = $filaPaquete['nombre'];
            }
    
            // Añadir el nombre del paquete a la reservación
            $reserva['nombre_paquete'] = $nombrePaquete;
    
            // Guardar en la lista
            $this->listaClienteReserva[] = $reserva;
        }
    
        return $this->listaClienteReserva;
    }
    
}

?>