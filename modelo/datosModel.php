<?php 
class DatosModel{
    private $listaEmpleado;
    private $listaCliente;
    private $listaReserva;

    public function __construct()
    {
        $this->listaEmpleado = array();
        $this->listaCliente = array();
        $this->listaReserva = array();

    }
    
    public function mostrarEmpleados(){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="select * from Empleado;";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->listaEmpleado[]=$filas;
        }
        return $this->listaEmpleado;
    }
    public function mostrarClientes(){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="select * from Cliente;";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->listaCliente[]=$filas;
        }
        return $this->listaCliente;
    }
    public function mostrarReservaciones(){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="select * from Reserva;";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->listaReserva[]=$filas;
        }
        return $this->listaReserva;
    }



}

?>