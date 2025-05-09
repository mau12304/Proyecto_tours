<?php 
require_once('config.php');
require_once('controlador/indexController.php');
require_once('controlador/paquetesController.php');
require_once('controlador/loginController.php');
require_once('controlador/reservaController.php');
require_once('controlador/registroController.php');
require_once('controlador/datosController.php');
require_once('controlador/clienteController.php');
require_once('controlador/pagoController.php');

if (isset($_GET['p']) && method_exists('paquetesController', $_GET['p'])) {
    $metodo = $_GET['p'];
    paquetesController::{$metodo}();
} elseif (isset($_GET['l']) && method_exists('loginController', $_GET['l'])) {
    $metodo = $_GET['l'];
    loginController::{$metodo}();
}
elseif (isset($_GET['c']) && method_exists('ClienteController', $_GET['c'])) {
    $metodo = $_GET['c'];
    ClienteController::{$metodo}();
}
elseif (isset($_GET['r']) && method_exists('ReservaController', $_GET['r'])) {
    $metodo = $_GET['r'];
    ReservaController::{$metodo}();
}
elseif (isset($_GET['g']) && method_exists('RegistroController', $_GET['g'])) {
    $metodo = $_GET['g'];
    RegistroController::{$metodo}();
} 
elseif (isset($_GET['d']) && method_exists('DatosController', $_GET['d'])) {
    $metodo = $_GET['d'];
    DatosController::{$metodo}();
} 
elseif (isset($_GET['i']) && method_exists('indexController', $_GET['i'])) {
    $metodo = $_GET['i'];
    indexController::{$metodo}();
}
elseif (isset($_GET['a']) && method_exists('pagoController', $_GET['a'])) {
    $metodo = $_GET['a'];
    PagoController::{$metodo}();
} 
else {
    indexController::index();
}
?>