<?php
require_once('modelo/reservaModel.php');
class ReservaController{
    private $reservaModel;
    public function __construct(){
        $this->reservaModel = new ReservaModel();
    }
    public static function mostradetallepaquete(){
        require_once('vista/paquetes/detallePaquete.php');
    }
    public static function reservar(){
        $nombre=$_REQUEST['nombre'];
        $apellido=$_REQUEST['apellido'];
        $telefono=$_REQUEST['telefono'];
        $correo=$_REQUEST['correo'];
        $pasajeros=$_REQUEST['personas'];
        $precio=$_REQUEST['total'];
        $comentarios=$_REQUEST['comentarios'];
        $id_paquete=1;
        $modelReserva = new ReservaModel();
        $modelReserva->guardarReserva($pasajeros, $precio, $id_paquete, $comentarios, $nombre, $apellido, $telefono, $correo);
        header("location:".urlsite."index.php?r=mostradetallepaquete");

    }
}
?>