<?php 
require_once('config.php');
require_once('controlador/indexController.php');
require_once('controlador/paquetesController.php');
if(isset($_GET['p'])):
    $metodo =  $_GET['p'];
    if(method_exists('paquetesController',$metodo)):
        paquetesController::{$metodo}();
    endif;
else:
    if(isset($_GET['i'])):
        $metodo =  $_GET['i'];
        if(method_exists('indexController',$metodo)):
            indexController::{$metodo}();
        endif;
else:
    indexController::index();
    endif;
endif;
?>