<?php
require_once 'Model/Conexion.php';

$modulo = isset($_GET['modulo']) ? $_GET['modulo'] : 'articulo';
$accion = isset($_GET['accion']) ? $_GET['accion'] : 'inicio';

switch ($modulo) {

    case 'busqueda':
        require_once 'Controller/BusquedaController.php';
        $controller = new BusquedaController();
        break;

    default:
        require_once 'Controller/ArticuloController.php';
        $controller = new ArticuloController();
        break;
}

if (method_exists($controller, $accion)) {
    $controller->$accion();
} else {
    $controller->inicio();
}
