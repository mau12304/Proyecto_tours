<?php 
require_once('config.php');
require_once('controlador/indexController.php');
require_once('controlador/paquetesController.php');
require_once('controlador/loginController.php');
require_once('controlador/reservaController.php');
require_once('controlador/registroController.php');

if (isset($_GET['p']) && method_exists('paquetesController', $_GET['p'])) {
    $metodo = $_GET['p'];
    paquetesController::{$metodo}();
} elseif (isset($_GET['l']) && method_exists('loginController', $_GET['l'])) {
    $metodo = $_GET['l'];
    loginController::{$metodo}();
}
elseif (isset($_GET['r']) && method_exists('ReservaController', $_GET['r'])) {
    $metodo = $_GET['r'];
    ReservaController::{$metodo}();
}
elseif (isset($_GET['g']) && method_exists('RegistroController', $_GET['g'])) {
    $metodo = $_GET['g'];
    RegistroController::{$metodo}();
} 
elseif (isset($_GET['i']) && method_exists('indexController', $_GET['i'])) {
    $metodo = $_GET['i'];
    indexController::{$metodo}();
} else {
    indexController::index();
}
?>