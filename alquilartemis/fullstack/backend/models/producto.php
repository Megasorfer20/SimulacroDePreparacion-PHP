<?php

class Producto extends Conectar{

    public function get_producto(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm = $conectar->prepare("SELECT * FROM Productos");
            $stm ->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }

    public function insert_producto($producto_id,$nombre_producto,$precio_producto,$peso_producto){
        try {
            $producto_id = $_POST["producto_id"];
            $nombre_producto = $_POST["nombre_producto"];
            $precio_producto = $_POST["precio_producto"];
            $peso_producto = $_POST["peso_producto"];
            $conectar=parent::Conexion();
            parent::set_name();
            $stm="INSERT INTO Productos (producto_id,nombre_producto,precio_producto,peso_producto) VALUES(?,?,?,?)";
            $stm=$conectar->prepare($stm);
            $stm->bindValue(1,$producto_id);
            $stm->bindValue(2,$nombre_producto);
            $stm->bindValue(3,$precio_producto);
            $stm->bindValue(4,$peso_producto);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }

    public function delete_producto($producto_id){

        try {
            $producto_id = $_POST["producto_id"];
            $conectar = parent::Conexion();
            parent::set_name();
            $stm = $conectar ->prepare("DELETE FROM Productos WHERE producto_id = ?");
            $stm -> bindValue(1,$producto_id);
            $stm -> execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }
}

?>