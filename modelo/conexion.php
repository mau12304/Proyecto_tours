<?php
class Conexion extends PDO{
    private $hostBD='localhost';
    private $nombreBD='turitux';
    private $usuarioBD='root';
    private $passwordBD='Jeshua2004';
    public function __construct(){
        try {
            parent::__construct('mysql:host='.$this->hostBD.';dbname='.$this->nombreBD.';charset=utf8',$this->usuarioBD,$this->passwordBD,
        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e) {
            exit;
        } 
    }
}
?>