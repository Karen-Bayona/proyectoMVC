<?php
// Model/Busqueda.php

require_once 'Conexion.php';

class Busqueda {

    private $conexion;

    public function __construct() {
        $this->conexion = Conexion::conectar();
    }

    public function obtenerBusquedas() {
        $sql = "SELECT * FROM tb_busquedas";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }

    public function guardarBusqueda($estudiante, $base_datos, $tema, $cadena, $cantidad) {
        $sql = "INSERT INTO tb_busquedas 
                (estudiante, base_datos_busq, tema, cadena_busqueda, cantidad_resultados)
                VALUES 
                (:estudiante, :base_datos, :tema, :cadena, :cantidad)";

        $stmt = $this->conexion->prepare($sql);
        $stmt->bindParam(':estudiante', $estudiante);
        $stmt->bindParam(':base_datos', $base_datos);
        $stmt->bindParam(':tema', $tema);
        $stmt->bindParam(':cadena', $cadena);
        $stmt->bindParam(':cantidad', $cantidad);

        return $stmt->execute();
    }
    public function obtenerBusquedaPorId($id) {
        $sql = "SELECT * FROM tb_busquedas WHERE id_busqueda = :id";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
}

    public function eliminarBusqueda($id) {
        $sql = "DELETE FROM tb_busquedas WHERE id_busqueda = :id";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
}
    public function actualizarBusqueda($id, $estudiante, $base_datos, $tema, $cadena, $cantidad) {
    $sql = "UPDATE tb_busquedas SET
                estudiante = :estudiante,
                base_datos_busq = :base_datos,
                tema = :tema,
                cadena_busqueda = :cadena,
                cantidad_resultados = :cantidad
            WHERE id_busqueda = :id";

    $stmt = $this->conexion->prepare($sql);
    $stmt->bindParam(':estudiante', $estudiante);
    $stmt->bindParam(':base_datos', $base_datos);
    $stmt->bindParam(':tema', $tema);
    $stmt->bindParam(':cadena', $cadena);
    $stmt->bindParam(':cantidad', $cantidad);
    $stmt->bindParam(':id', $id);

    return $stmt->execute();
}


}
