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
}

?>