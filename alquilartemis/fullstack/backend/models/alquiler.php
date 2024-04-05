<?php

class Alquiler extends Conectar{

    public function get_alquiler(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm = $conectar->prepare("SELECT Salidas.salida_id, Clientes.nombre_cliente, Empleados.nombre_empleado, Salidas.fecha_salida, Salidas.hora_salida, Salidas.subtotalPeso, Salidas.placaTransporte, Salidas.observaciones_salida FROM Salidas INNER JOIN Clientes ON Salidas.id_cliente = Clientes.cliente_id INNER JOIN Empleados ON Salidas.id_empleado = Empleados.empleado_id");
            $stm ->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }

    public function insert_alquiler($salida_id,$id_cliente,$id_empleado,$fecha_salida,$hora_salida,$subtotalPeso,$placaTransporte,$observaciones_salida){
        try {
            $salida_id = $_POST["salida_id"];
            $id_cliente = $_POST["id_cliente"];
            $id_empleado = $_POST["id_empleado"];
            $fecha_salida = $_POST["fecha_salida"];
            $hora_salida = $_POST["hora_salida"];
            $subtotalPeso = $_POST["subtotalPeso"];
            $placaTransporte = $_POST["placaTransporte"];
            $observaciones_salida = $_POST["observaciones_salida"];
            $conectar=parent::Conexion();
            parent::set_name();
            $stm="INSERT INTO Salidas (salida_id,id_cliente,id_empleado,fecha_salida,hora_salida,subtotalPeso,placaTransporte,observaciones_salida) VALUES(?,?,?,?,?,?,?,?)";
            $stm=$conectar->prepare($stm);
            $stm->bindValue(1,$salida_id);
            $stm->bindValue(2,$id_cliente);
            $stm->bindValue(3,$id_empleado);
            $stm->bindValue(4,$fecha_salida);
            $stm->bindValue(5,$hora_salida);
            $stm->bindValue(6,$subtotalPeso);
            $stm->bindValue(7,$placaTransporte);
            $stm->bindValue(8,$observaciones_salida);
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

    public function delete_alquiler($salida_id){

        try {
            $salida_id = $_POST["salida_id"];
            $conectar = parent::Conexion();
            parent::set_name();
            $stm = $conectar ->prepare("DELETE FROM Salidas WHERE salida_id= ?");
            $stm -> bindValue(1,$salida_id);
            $stm -> execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }
}

?>