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
        $consulta="INSERT INTO detalle_paquete (id_paquete, id_servicios, id_tipo_servicio, hora_salida, hora_llegada,fecha, cupo_max)
        VALUES ('$id_paquete', '$id_servicio', '$id_tipo_servicio', '$hora_salida', '$hora_llegada',Now(), '$cupo_max');";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function agregarTipo($nombre){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="INSERT INTO tipo_servicio ( nombre)
        VALUES ('$nombre');";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function agregarServicios($nombre, $descripcion ){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="INSERT INTO Servicios (nombre , descripcion)
        VALUES ('$nombre', '$descripcion');";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function obtenerPaquete($id_paquete){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="select * from Paquete WHERE id_paquete=".$id_paquete.";";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->listaPaquetes[]=$filas;
        }
        return $this->listaPaquetes;
    }
    public function obtenerDetalle($id_detalle_paquete){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="select * from detalle_paquete WHERE id_detalle_paquete=".$id_detalle_paquete.";";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->listadetallePaquetes[]=$filas;
        }
        return $this->listadetallePaquetes;
    }
    public function obtenerTipo($id_tipo_servicio){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="select * from Tipo_servicio WHERE id_tipo_servicio=".$id_tipo_servicio.";";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->listadetallePaquetes[]=$filas;
        }
        return $this->listadetallePaquetes;
    }
    public function obtenerServicios($id_servicios){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="select * from Servicios WHERE id_servicios=".$id_servicios.";";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->listadetallePaquetes[]=$filas;
        }
        return $this->listadetallePaquetes;
    }

    public function actualizarPaquete($id_paquete, $nombre, $costo){
        include_once('conexion.php');
        $cnn = new Conexion();
        $consulta = "UPDATE Paquete SET nombre = '".$nombre."', costo = ".$costo." WHERE id_paquete = ".$id_paquete;
        $resultado = $cnn->prepare($consulta);
        $resultado->execute();
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
    public function actualizarDetalle($id_detalle_paquete, $id_paquete, $id_servicio, $id_tipo_servicio, $hora_salida, $hora_llegada, $cupo_max) {
        include_once('conexion.php');
        $cnn = new Conexion();
    
        $consulta = "UPDATE detalle_paquete SET id_paquete = '" . $id_paquete . 
                    "', id_servicios = '" . $id_servicio . 
                    "', id_tipo_servicio = '" . $id_tipo_servicio . 
                    "', hora_salida = '" . $hora_salida . 
                    "', hora_llegada = '" . $hora_llegada . 
                    "', cupo_max = '" . $cupo_max . 
                    "' WHERE id_detalle_paquete = '" . $id_detalle_paquete . "'";
    
            $resultado = $cnn->prepare($consulta);
            $resultado->execute();
    
            if ($resultado) {
                return true;
            } else {
                return false;
            }
        
    }
    
    public function actualizarTipo($id_tipo_servicio, $nombre) {
        include_once('conexion.php');
        $cnn = new Conexion();
        $consulta = "UPDATE tipo_servicio SET nombre = '" . $nombre . "' WHERE id_tipo_servicio = '" . $id_tipo_servicio . "'";
        $resultado = $cnn->prepare($consulta);
        $resultado->execute();
    
            if ($resultado) {
                return true;
            } else {
                return false;
            }
    }
    
    public function actualizarServicios($id_servicios, $nombre, $descripcion) {
        include_once('conexion.php');
        $cnn = new Conexion();
    
        $consulta = "UPDATE Servicios SET nombre = '" . $nombre . "', descripcion = '" . $descripcion . "' WHERE id_servicios = '" . $id_servicios . "'";
        $resultado = $cnn->prepare($consulta);
        $resultado->execute();
    
            if ($resultado) {
                return true;
            } else {
                return false;
            }
    }
    public function eliminarPaquete($id_paquete){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="DELETE FROM Paquete where id_paquete=".$id_paquete;
        $resultado=$cnn->prepare($consula);
        $resultado->execute();
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function eliminarDetalle($id_detalle_paquete){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="DELETE FROM detalle_paquete where id_detalle_paquete=".$id_detalle_paquete;
        $resultado=$cnn->prepare($consula);
        $resultado->execute();
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function eliminarTipo($id_tipo_servicio){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="DELETE FROM tipo_servicio where id_tipo_servicio=".$id_tipo_servicio;
        $resultado=$cnn->prepare($consula);
        $resultado->execute();
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function eliminarServicios($id_servicios){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="DELETE FROM servicios where id_servicios=".$id_servicios;
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