<?php

class DetallesAlquiler extends Conectar{

    public function get_detalles_alquiler(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm = $conectar->prepare("SELECT SalidasDetalle.salida_detalle_id,Salidas.salida_id, Productos.nombre_producto, Obras.nombre_obra, Empleados.nombre_empleado, SalidasDetalle.cantidad_salida, SalidasDetalle.cantidad_propia_salida, SalidasDetalle.cantidad_subalquilada_salida, SalidasDetalle.valor_unidad, SalidasDetalle.fecha_standBye, SalidasDetalle.estado, SalidasDetalle.valor_total FROM SalidasDetalle INNER JOIN Salidas ON SalidasDetalle.id_salida = Salidas.salida_id INNER JOIN Productos ON SalidasDetalle.id_producto = Productos.producto_id INNER JOIN Obras ON SalidasDetalle.id_obra = Obras.obra_id INNER JOIN Empleados ON SalidasDetalle.id_empleado = Empleados.empleado_id");
            $stm ->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }

    public function insert_detalles_alquiler($salida_detalle_id,$id_salida,$id_producto,$id_obra,$id_empleado,$cantidad_salida,$cantidad_propia_salida,$cantidad_subalquilada_salida,$valor_unidad,$fecha_standBye,$estado,$valor_total){
        try {
            $salida_detalle_id = $_POST["salida_detalle_id"];
            $id_salida = $_POST["id_salida"];
            $id_producto = $_POST["id_producto"];
            $id_obra = $_POST["id_obra"];
            $id_empleado = $_POST["id_empleado"];
            $cantidad_salida = $_POST["cantidad_salida"];
            $cantidad_propia_salida = $_POST["cantidad_propia_salida"];
            $cantidad_subalquilada_salida = $_POST["cantidad_subalquilada_salida"];
            $valor_unidad = $_POST["valor_unidad"];
            $fecha_standBye = $_POST["fecha_standBye"];
            $estado = $_POST["estado"];
            $valor_total = $cantidad_salida*$valor_unidad;
            $conectar=parent::Conexion();
            parent::set_name();
            $stm="INSERT INTO SalidasDetalle (salida_detalle_id,id_salida,id_producto,id_obra,id_empleado,cantidad_salida,cantidad_propia_salida,cantidad_subalquilada_salida,valor_unidad,fecha_standBye,estado,valor_total) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
            $stm=$conectar->prepare($stm);
            $stm->bindValue(1,$salida_detalle_id);
            $stm->bindValue(2,$id_salida);
            $stm->bindValue(3,$id_producto);
            $stm->bindValue(4,$id_obra);
            $stm->bindValue(5,$id_empleado);
            $stm->bindValue(6,$cantidad_salida);
            $stm->bindValue(7,$cantidad_propia_salida);
            $stm->bindValue(8,$cantidad_subalquilada_salida);
            $stm->bindValue(9,$valor_unidad);
            $stm->bindValue(10,$fecha_standBye);
            $stm->bindValue(11,$estado);
            $stm->bindValue(12,$valor_total);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }

    public function obtener_alquiler(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm = $conectar->prepare("SELECT salida_id FROM Salidas");
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

    public function obtener_empleado(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm = $conectar->prepare("SELECT empleado_id, nombre_empleado FROM Empleados");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }

    public function delete_detalles_alquiler($salida_detalle_id){

        try {
            $salida_detalle_id = $_POST["salida_detalle_id"];
            $conectar = parent::Conexion();
            parent::set_name();
            $stm = $conectar ->prepare("DELETE FROM SalidasDetalle WHERE salida_detalle_id= ?");
            $stm -> bindValue(1,$salida_detalle_id);
            $stm -> execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }
}

?>