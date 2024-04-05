<?php

class DetallesDevolucion extends Conectar{

    public function get_detalles_devolucion(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm = $conectar->prepare("SELECT EntradasDetalle.entrada_detalle_id,Entradas.entrada_id, Productos.nombre_producto, Obras.nombre_obra, EntradasDetalle.cantidad_entrada, EntradasDetalle.cantidad_propia_entrada, EntradasDetalle.cantidad_subalquilada_entrada, EntradasDetalle.estado FROM EntradasDetalle INNER JOIN Entradas ON EntradasDetalle.id_entrada = Entradas.entrada_id INNER JOIN Productos ON EntradasDetalle.id_producto = Productos.producto_id INNER JOIN Obras ON EntradasDetalle.id_obra = Obras.obra_id");
            $stm ->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }

    public function insert_detalles_devolucion($entrada_detalle_id,$id_entrada,$id_producto,$id_obra,$cantidad_entrada,$cantidad_propia_entrada,$cantidad_subalquilada_entrada,$estado){
        try {
            $entrada_detalle_id = $_POST["entrada_detalle_id"];
            $id_entrada = $_POST["id_entrada"];
            $id_producto = $_POST["id_producto"];
            $id_obra = $_POST["id_obra"];
            $cantidad_entrada = $_POST["cantidad_entrada"];
            $cantidad_propia_entrada = $_POST["cantidad_propia_entrada"];
            $cantidad_subalquilada_entrada = $_POST["cantidad_subalquilada_entrada"];
            $estado = $_POST["estado"];
            $conectar=parent::Conexion();
            parent::set_name();
            $stm="INSERT INTO EntradasDetalle (entrada_detalle_id,id_entrada,id_producto,id_obra,cantidad_entrada,cantidad_propia_entrada,cantidad_subalquilada_entrada,estado) VALUES(?,?,?,?,?,?,?,?)";
            $stm=$conectar->prepare($stm);
            $stm->bindValue(1,$entrada_detalle_id);
            $stm->bindValue(2,$id_entrada);
            $stm->bindValue(3,$id_producto);
            $stm->bindValue(4,$id_obra);
            $stm->bindValue(5,$cantidad_entrada);
            $stm->bindValue(6,$cantidad_propia_entrada);
            $stm->bindValue(7,$cantidad_subalquilada_entrada);
            $stm->bindValue(8,$estado);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }

    public function obtener_entrada(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm = $conectar->prepare("SELECT entrada_id FROM Entradas");
            $stm -> execute();
            return $stm -> fetchAll();
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

    public function obtener_obra(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm = $conectar->prepare("SELECT obra_id, nombre_obra FROM Obras");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }

    public function delete_detalles_devolucion($entrada_detalle_id){

        try {
            $entrada_detalle_id = $_POST["entrada_detalle_id"];
            $conectar = parent::Conexion();
            parent::set_name();
            $stm = $conectar ->prepare("DELETE FROM EntradasDetalle WHERE entrada_detalle_id= ?");
            $stm -> bindValue(1,$entrada_detalle_id);
            $stm -> execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }
}

?>