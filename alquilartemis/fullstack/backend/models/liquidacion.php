<?php

class Liquidacion extends Conectar{

    public function get_liquidacion(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm = $conectar->prepare("SELECT Liquidaciones.liquidacion_id, Clientes.nombre_cliente, Liquidaciones.producto_liquidado, Liquidaciones.fecha_liquidacion, Liquidaciones.precio_total, Liquidaciones.metodo_pago FROM Liquidaciones INNER JOIN Clientes ON Liquidaciones.id_cliente = Clientes.cliente_id ");
            $stm ->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }

    public function insert_liquidacion($liquidacion_id,$id_cliente,$producto_liquidado,$fecha_liquidacion,$precio_total,$metodo_pago){
        try {
            $liquidacion_id = $_POST["liquidacion_id"];
            $id_cliente = $_POST["id_cliente"];
            $producto_liquidado = $_POST["producto_liquidado"];
            $fecha_liquidacion = $_POST["fecha_liquidacion"];
            $precio_total = $_POST["precio_total"];
            $metodo_pago = $_POST["metodo_pago"];
            $conectar=parent::Conexion();
            parent::set_name();
            $stm="INSERT INTO Liquidaciones (liquidacion_id,id_cliente,producto_liquidado,fecha_liquidacion,precio_total,metodo_pago) VALUES(?,?,?,?,?,?)";
            $stm=$conectar->prepare($stm); 
            $stm->bindValue(1,$liquidacion_id);
            $stm->bindValue(2,$id_cliente);
            $stm->bindValue(3,$producto_liquidado);
            $stm->bindValue(4,$fecha_liquidacion);
            $stm->bindValue(5,$precio_total);
            $stm->bindValue(6,$metodo_pago);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }

    public function obtener_cliente(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm = $conectar->prepare("SELECT cliente_id, nombre_cliente FROM Clientes");
            $stm -> execute();
            return $stm -> fetchAll(); // Método para obtener los registros PDO
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }

    public function delete_liquidacion($liquidacion_id){

        try {
            $liquidacion_id = $_POST["liquidacion_id"];
            $conectar = parent::Conexion();
            parent::set_name();
            $stm = $conectar ->prepare("DELETE FROM Liquidaciones WHERE liquidacion_id= ?");
            $stm -> bindValue(1,$liquidacion_id);
            $stm -> execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }
}

?>