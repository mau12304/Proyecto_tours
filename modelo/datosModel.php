<?php 
class DatosModel{
    private $listaEmpleado;
    private $listaCliente;
    private $listaReserva;
    private $listaUserEmpleado;
    private $listaUserClient;

    public function __construct()
    {
        $this->listaEmpleado = array();
        $this->listaCliente = array();
        $this->listaReserva = array();
        $this->listaUserEmpleado = array();
        $this->listaUserClient = array();
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
    
    public function mostrarUserEmpleado(){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="select * from user_empleado;";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->listaUserEmpleado[]=$filas;
        }
        return $this->listaUserEmpleado;
    }
    public function mostrarUserCliente(){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="select * from user_client;";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->listaUserClient[]=$filas;
        }
        return $this->listaUserClient;
    }
    public function agregarEmpleado($nombre, $apellido, $puesto, $fecha_nacimiento, $curp, $genero, $telefono, $correo) {
        include_once('conexion.php');
        $cnn = new Conexion();
        $consulta = "INSERT INTO Empleado (nombre, apellido, puesto, fecha_nacimiento, curp, genero, telefono, correo)
                     VALUES ('$nombre', '$apellido', '$puesto', STR_TO_DATE('$fecha_nacimiento', '%Y-%m-%d'), '$curp', '$genero', '$telefono', '$correo');";
        $resultado = $cnn->prepare($consulta);
        $resultado->execute();
    
            if ($resultado) {
                return true;
            } else {
                return false;
            }
    }
    public function agregarUserEmpleado($username,$password,$id_empleado){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="INSERT INTO user_empleado (username, password, id_empleado)
        VALUES ('$username', '$password' , '$id_empleado');";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function agregarUserCliente($username,$password,$correo){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="INSERT INTO user_client (username, password, correo)
        VALUES ('$username', '$password' , '$correo');";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return true;
        }else{
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
    public function obtenerUserEmpleado($id_user_empleado){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="select * from user_empleado WHERE id_user_empleado=".$id_user_empleado.";";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->listaUserEmpleado[]=$filas;
        }
        return $this->listaUserEmpleado;
    }
    public function obtenerUserCliente($id_user_client){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="select * from user_client WHERE id_user_client=".$id_user_client.";";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->listaUserClient[]=$filas;
        }
        return $this->listaUserClient;
    }
    public function actualizarUserEmpleado($id_user_empleado, $username,$password, $id_empleado) {
        include_once('conexion.php');
        $cnn = new Conexion();
        $consulta = "UPDATE user_empleado SET username = '" . $username . 
                    "', password = '" . $password . 
                    "', id_empleado = '" . $id_empleado . 
                    "' WHERE id_user_empleado = '" . $id_user_empleado . "'";
            $resultado = $cnn->prepare($consulta);
            $resultado->execute();
            if ($resultado) {
                return true;
            } else {
                return false;
            }
    }
    public function actualizarUserCliente($id_user_client, $username,$password, $correo) {
        include_once('conexion.php');
        $cnn = new Conexion();
        $consulta = "UPDATE user_client SET username = '" . $username . 
                    "', password = '" . $password . 
                    "', correo = '" . $correo . 
                    "' WHERE id_user_client = '" . $id_user_client . "'";
            $resultado = $cnn->prepare($consulta);
            $resultado->execute();
            if ($resultado) {
                return true;
            } else {
                return false;
            }
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
    public function eliminarUserEmpleado($id_user_empleado){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="DELETE FROM user_empleado where id_user_empleado =".$id_user_empleado;
        $resultado=$cnn->prepare($consula);
        $resultado->execute();
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function eliminarUserCliente($id_user_client){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="DELETE FROM user_client where id_user_client =".$id_user_client;
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