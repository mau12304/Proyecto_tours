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
    public function agregarEmpleado($nombre, $apellido, $puesto, $fecha_nacimiento, $curp, $genero, $telefono, $correo) {
        include_once('conexion.php');
        $cnn = new Conexion();
        $consulta = "INSERT INTO Empleado (nombre, apellido, puesto, fecha_nacimiento, curp, genero, telefono, correo)
                     VALUES ('$nombre', '$apellido', '$puesto', STR_TO_DATE('$fecha_nacimiento', '%Y-%m-%d'), '$curp', '$genero', '$telefono', '$correo');";
    
        try {
            $resultado = $cnn->prepare($consulta);
            $resultado->execute();
    
            if ($resultado) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            // Manejo del error
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
    public function obtenerEmpleado($id_empleado){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="select * from Empleado WHERE id_empleado=".$id_empleado.";";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->listaEmpleado[]=$filas;
        }
        return $this->listaEmpleado;
    }
    public function actualizarEmpleado($id_empleado, $nombre, $apellido, $puesto, $fecha_nacimiento, $curp, $genero, $telefono, $correo) {
        include_once('conexion.php');
        $cnn = new Conexion();
        $consulta = "UPDATE Empleado SET nombre = '" . $nombre . 
                    "', apellido = '" . $apellido . 
                    "', puesto = '" . $puesto . 
                    "', fecha_nacimiento = '" . $fecha_nacimiento . 
                    "', curp = '" . $curp . 
                    "', genero = '" . $genero . 
                    "', telefono = '" . $telefono . 
                    "', correo = '" . $correo . 
                    "' WHERE id_empleado = '" . $id_empleado . "'";
            $resultado = $cnn->prepare($consulta);
            $resultado->execute();
            if ($resultado) {
                return true;
            } else {
                return false;
            }
    }
    public function eliminarEmpleado($id_empleado){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="DELETE FROM Empleado where id_empleado=".$id_empleado;
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