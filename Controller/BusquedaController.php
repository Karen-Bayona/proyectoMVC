<?php
require_once 'Model/Busqueda.php';

class BusquedaController {

    public function inicio() {
        $busqueda = new Busqueda();
        $datos = $busqueda->obtenerBusquedas();
        require_once 'Views/busqueda_listar.php';
    }

    public function crear() {
        require_once 'Views/busqueda_crear.php';
    }

    public function guardar() {
        if ($_POST) {
            $estudiante = $_POST['estudiante'];
            $baseDatos  = $_POST['base_datos'];
            $tema       = $_POST['tema'];
            $cadena     = $_POST['cadena'];
            $cantidad   = $_POST['cantidad'];

            $busqueda = new Busqueda();
            $busqueda->guardarBusqueda(
                $estudiante,
                $baseDatos,
                $tema,
                $cadena,
                $cantidad
            );

            header("Location: index.php?modulo=busqueda");
            exit;
        }
    }
    public function editar() {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $busqueda = new Busqueda();
        $dato = $busqueda->obtenerBusquedaPorId($id);

        require_once 'Views/busqueda_editar.php';
    }
}
    public function eliminar() {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $busqueda = new Busqueda();
        $busqueda->eliminarBusqueda($id);

        header("Location: index.php?modulo=busqueda");
        exit;
    }
}
    public function actualizar() {
    if ($_POST) {
        $id           = $_POST['id'];
        $estudiante   = $_POST['estudiante'];
        $base_datos   = $_POST['base_datos'];
        $tema         = $_POST['tema'];
        $cadena       = $_POST['cadena'];
        $cantidad     = $_POST['cantidad'];

      
        $busqueda = new Busqueda();
        $busqueda->actualizarBusqueda(
            $id,
            $estudiante,
            $base_datos,
            $tema,
            $cadena,
            $cantidad
        );

        
        header("Location: index.php?modulo=busqueda");
        exit;
    }
}



}
