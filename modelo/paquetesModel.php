<?php 

class PaquetesModel{
    private $listaPaquetes;
    private $listadetallePaquetes;
    private $listaTiposervicio;
    private $listaServicios;
    public function __construct(){
        $this->listaPaquetes=array();
        $this->listadetallePaquetes=array();
        $this->listaTiposervicio=array();
        $this->listaServicios=array();
    }
    public function mostrartablaPaquete(){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="select * from Paquete;";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->listaPaquetes[]=$filas;
        }
        return $this->listaPaquetes;
    }
    public function mostrartabladetallePaquete(){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="select * from Detalle_paquete;";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->listadetallePaquetes[]=$filas;
        }
        return $this->listadetallePaquetes;
    }
    public function mostrarTiposervicio(){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="select * from Tipo_servicio;";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->listaTiposervicio[]=$filas;
        }
        return $this->listaTiposervicio;
    }
    public function mostrarServicios(){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="select * from Servicios;";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->listaServicios[]=$filas;
        }
        return $this->listaServicios;
    }
    public function agregarPaquete($nombre, $costo){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="INSERT INTO Paquete (nombre, costo)
        VALUES ('$nombre', '$costo');";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function agregarDetalles($id_paquete, $id_servicio, $id_tipo_servicio, $hora_salida, $hora_llegada, $cupo_max){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="INSERT INTO detalle_paquete (id_paquete, id_servicio, id_tipo_servicio, hora_salida, hora_llegada, cupo_max)
        VALUES ('$id_paquete', '$id_servicio', '$id_tipo_servicio', '$hora_salida', '$hora_llegada', '$cupo_max');";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function agregarTipo($id_tipo_servicio, $nombre){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="INSERT INTO tipo_servicio (id_tipo_servicio, nombre)
        VALUES ('$id_tipo_servicio','$nombre');";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function agregarServicios($id_servicios, $nombre, $descripcion ){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="INSERT INTO Servicios (id_servicios, nombre , descripcion)
        VALUES ('$id_servicios','$nombre', '$descripcion');";
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