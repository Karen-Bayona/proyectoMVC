<?php
require_once 'Model/Articulo.php';
require_once 'Model/Busqueda.php';


class ArticuloController {

    public function inicio() {
        require_once 'Views/home.php';
}
public function listar() {
    $articulo = new Articulo();
    $datos = $articulo->obtenerArticulos();
    require_once 'Views/inicio.php';
}


    public function crear() {
        $busqueda = new Busqueda();
        $busquedas = $busqueda->obtenerBusquedas();

        require_once 'Views/crear.php';
}

    public function guardar() {
    if ($_POST) {

        $titulo          = $_POST['titulo'];
        $autores         = $_POST['autores'];
        $anio            = $_POST['anio'];
        $revista         = $_POST['revista'];
        $resumen         = $_POST['resumen'];
        $palabras_clave  = $_POST['palabras_clave'];
        $busqueda_id     = $_POST['busqueda_id'];

        $articulo = new Articulo();
        $articulo->guardarArticulo(
            $titulo,
            $autores,
            $anio,
            $revista,
            $resumen,
            $palabras_clave,
            $busqueda_id
        );

        header("Location: index.php");
        exit;
    }
    
}
    public function editar() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $articulo = new Articulo();
            $dato = $articulo->obtenerArticuloPorId($id);

            // Cargar todas las búsquedas
            $busqueda = new Busqueda();
            $busquedas = $busqueda->obtenerBusquedas();

            require_once 'Views/articulo_editar.php';
    }
}

    public function actualizar() {
        if ($_POST) {
            $id           = $_POST['id'];
            $titulo       = $_POST['titulo'];
            $autores      = $_POST['autores'];
            $anio         = $_POST['anio']; 
            $revista      = $_POST['revista'];
            $resumen      = $_POST['resumen'];
            $palabras     = $_POST['palabras_clave'];
            $busqueda_id  = $_POST['busqueda_id'];

            $articulo = new Articulo();
            $articulo->actualizarArticulo(
                $id,
                $titulo,
                $autores,
                $anio,
                $revista,
                $resumen,
                $palabras,
                $busqueda_id
        );

        header("Location: index.php?modulo=articulo&accion=listar");
        exit;
    }
}
    public function eliminar() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $articulo = new Articulo();
            $articulo->eliminarArticulo($id);

            header("Location: index.php?modulo=articulo&accion=listar");
            exit;
    }
}
}
