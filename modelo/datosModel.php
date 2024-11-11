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
    public function agregarEmpleado($id_empleado, $nombre, $apellido, $puesto, $fecha_nacimiento, $curp, $genero, $telefono, $correo){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="INSERT INTO Empleado (id_empleado, nombre, apellido, puesto, fecha_nacimiento, curp, genero, telefono, correo)
        VALUES ('$id_empleado', $nombre', '$apellido', '$puesto', '$fecha_nacimiento', '$curp', '$genero', '$telefono', '$correo');";
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