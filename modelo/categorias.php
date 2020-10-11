<?php
require_once 'conexion.php';
class categoria
{
    public $conexion;

    public function __construct()
    {
        $this->conexion = new conexion();
    }
    public function insertar($datos)
    {
        $stmt = $this->conexion->conectar()->prepare
        
        ("INSERT INTO categoria (nombre)
        values(:nombre) ");

        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function eliminar($datos)
    {
        $stmt = $this->conexion->conectar()->prepare("DELETE categoria where idcategoria=idcategoria");
        $stmt->bindParam(':idcategoria', $datos['idcategoria'], PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }
    public function actualizar($datos)
    {
        $stmt = $this->conexion->conectar()->prepare
        ("UPDATE categorias SET nombre=:nombre WHERE idcategoria=:idcategoria ");
        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }
    
    public function listar_categorias()
    {
        $stmt = $this->conexion->conectar()->prepare
        ("SELECT * FROM categoria");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
}
