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
    public function obtenerSusReservaciones($id_user_client){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="select * from Reserva WHERE id_user_client =".$id_user_client.";";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->listaClienteReserva[]=$filas;
        }
        return $this->listaClienteReserva;
}
}

?>