<?php
require_once 'Conexion.php';

class Articulo { 

    private $conexion;

    public function __construct() {
        $this->conexion = Conexion::conectar();
    }

    public function obtenerArticulos() {
        $sql = "SELECT * FROM tb_articulos";
        $resultado = $this->conexion->query($sql);
        return $resultado;
    }

    public function guardarArticulo($titulo, $autores, $anio, $revista, $resumen, $palabras_clave, $busqueda_id) {

        $sql = "INSERT INTO tb_articulos 
            (titulo, autores, anio, revista, resumen, palabras_clave, busqueda_id)
            VALUES 
            (:titulo, :autores, :anio, :revista, :resumen, :palabras_clave, :busqueda_id)";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':autores', $autores);
        $stmt->bindParam(':anio', $anio);
        $stmt->bindParam(':revista', $revista);
        $stmt->bindParam(':resumen', $resumen);
        $stmt->bindParam(':palabras_clave', $palabras_clave);
        $stmt->bindParam(':busqueda_id', $busqueda_id);

        return $stmt->execute();
}
    public function obtenerArticuloPorId($id) {
        $sql = "SELECT * FROM tb_articulos WHERE id_articulos = :id";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
}
    public function actualizarArticulo($id, $titulo, $autores, $anio, $revista, $resumen, $palabras, $busqueda_id) {
        $sql = "UPDATE tb_articulos SET
                titulo = :titulo,
                autores = :autores,
                anio = :anio,
                revista = :revista,
                resumen = :resumen,
                palabras_clave = :palabras,
                busqueda_id = :busqueda_id
            WHERE id_articulos = :id";

        $stmt = $this->conexion->prepare($sql);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':autores', $autores);
        $stmt->bindParam(':anio', $anio);
        $stmt->bindParam(':revista', $revista);
        $stmt->bindParam(':resumen', $resumen);
        $stmt->bindParam(':palabras', $palabras);
        $stmt->bindParam(':busqueda_id', $busqueda_id);
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
}
    public function eliminarArticulo($id) {
        $sql = "DELETE FROM tb_articulos WHERE id_articulos = :id";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
}



}
