<?php 
class ClienteModel{
    private $listaCliente;
    public function __construct(){
        $this->listaCliente=array();
       
    }

    public function ingresarCliente($nombre, $apellido, $telefono, $correo){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="INSERT INTO Cliente(nombre, apellido, telefono, correo)
        VALUES ('$nombre', '$apellido', '$telefono', '$correo');";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute();
        
        
        if($resultado){
            return true;
            
        }else{
            return false;
            
        }
    }
    public function obtenerCliente($id_cliente){
            include_once('conexion.php');
            $cnn=new Conexion();
            $consulta="select * from Cliente WHERE id_cliente=".$id_cliente.";";
            $resultado=$cnn->prepare($consulta);
            $resultado->execute(); 
            while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                    $this->listaCliente[]=$filas;
            }
            return $this->listaCliente;
    }
}

?>