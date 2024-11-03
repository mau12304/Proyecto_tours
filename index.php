<?php 
require_once('config.php');
require_once('controlador/indexController.php');
require_once('controlador/paquetesController.php');
require_once('controlador/loginController.php');

if (isset($_GET['p']) && method_exists('paquetesController', $_GET['p'])) {
    $metodo = $_GET['p'];
    paquetesController::{$metodo}();
} elseif (isset($_GET['l']) && method_exists('loginController', $_GET['l'])) {
    $metodo = $_GET['l'];
    loginController::{$metodo}();
}
elseif (isset($_GET['r']) && method_exists('loginController', $_GET['r'])) {
    $metodo = $_GET['r'];
    loginController::{$metodo}();
} elseif (isset($_GET['i']) && method_exists('indexController', $_GET['i'])) {
    $metodo = $_GET['i'];
    indexController::{$metodo}();
} else {
    indexController::index();
}
?>