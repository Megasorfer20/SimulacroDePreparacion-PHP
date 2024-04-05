<?php

class Inventario extends Conectar{

    public function get_inventario(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm = $conectar->prepare("SELECT Inventario.inventario_id, Productos.nombre_producto, Inventario.cantidad_inicial, Inventario.cantidad_ingresos, Inventario.cantidad_salidas, Inventario.cantidad_final, Inventario.fecha_inventario, Inventario.tipo_operacion FROM Inventario INNER JOIN Productos ON Inventario.id_producto = Productos.producto_id ");
            $stm ->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }

    public function insert_inventario($inventario_id,$id_producto,$cantidad_inicial,$cantidad_ingresos,$cantidad_salidas,$cantidad_final,$fecha_inventario,$tipo_operacion){
        try {
            $inventario_id = $_POST["inventario_id"];
            $id_producto = $_POST["id_producto"];
            $cantidad_inicial = $_POST["cantidad_inicial"];
            $cantidad_ingresos = $_POST["cantidad_ingresos"];
            $cantidad_salidas = $_POST["cantidad_salidas"];
            $cantidad_final = ($cantidad_inicial + $cantidad_salidas) * $cantidad_ingresos;
            $fecha_inventario = $_POST["fecha_inventario"];
            $tipo_operacion = $_POST["tipo_operacion"];
            $conectar=parent::Conexion();
            parent::set_name();
            $stm="INSERT INTO Inventario (inventario_id,id_producto,cantidad_inicial,cantidad_ingresos,cantidad_salidas,cantidad_final,fecha_inventario,tipo_operacion) VALUES(?,?,?,?,?,?,?,?)";
            $stm=$conectar->prepare($stm); 
            $stm->bindValue(1,$inventario_id);
            $stm->bindValue(2,$id_producto);
            $stm->bindValue(3,$cantidad_inicial);
            $stm->bindValue(4,$cantidad_ingresos);
            $stm->bindValue(5,$cantidad_salidas);
            $stm->bindValue(6,$cantidad_final);
            $stm->bindValue(7,$fecha_inventario);
            $stm->bindValue(8,$tipo_operacion);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }

    public function obtener_producto(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm = $conectar->prepare("SELECT producto_id, nombre_producto FROM Productos");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }

    public function delete_inventario($inventario_id){

        try {
            $inventario_id = $_POST["inventario_id"];
            $conectar = parent::Conexion();
            parent::set_name();
            $stm = $conectar ->prepare("DELETE FROM Inventario WHERE inventario_id= ?");
            $stm -> bindValue(1,$inventario_id);
            $stm -> execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }
}

?>