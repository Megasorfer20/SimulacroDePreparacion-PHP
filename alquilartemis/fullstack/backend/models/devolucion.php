<?php

class Devolucion extends Conectar{

    public function get_devolucion(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm = $conectar->prepare("SELECT Entradas.entrada_id, Salidas.salida_id, Empleados.nombre_empleado, Clientes.nombre_cliente, Entradas.fecha_entrada, Entradas.hora_entrada, Entradas.observaciones_entrada FROM Entradas INNER JOIN Salidas ON Entradas.id_salida = Salidas.salida_id INNER JOIN Empleados ON Entradas.id_empleado = Empleados.empleado_id INNER JOIN Clientes ON Entradas.id_cliente = Clientes.cliente_id");
            $stm ->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }

    public function insert_devolucion($entrada_id,$id_salida,$id_empleado,$id_cliente,$fecha_entrada,$hora_entrada,$observaciones_entrada){
        try {
            $entrada_id = $_POST["entrada_id"];
            $id_salida = $_POST["id_salida"];
            $id_empleado = $_POST["id_empleado"];
            $id_cliente = $_POST["id_cliente"];
            $fecha_entrada = $_POST["fecha_entrada"];
            $hora_entrada = $_POST["hora_entrada"];
            $observaciones_entrada = $_POST["observaciones_entrada"];
            $conectar=parent::Conexion();
            parent::set_name();
            $stm="INSERT INTO Entradas (entrada_id,id_salida,id_empleado,id_cliente,fecha_entrada,hora_entrada,observaciones_entrada) VALUES(?,?,?,?,?,?,?)";
            $stm=$conectar->prepare($stm);
            $stm->bindValue(1,$entrada_id);
            $stm->bindValue(2,$id_salida);
            $stm->bindValue(3,$id_empleado);
            $stm->bindValue(4,$id_cliente);
            $stm->bindValue(5,$fecha_entrada);
            $stm->bindValue(6,$hora_entrada);
            $stm->bindValue(7,$observaciones_entrada);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }

    public function obtener_salida(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm = $conectar->prepare("SELECT salida_id FROM Salidas");
            $stm -> execute();
            return $stm -> fetchAll(); // Método para obtener los registros PDO
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

    public function delete_devolucion($entrada_id){

        try {
            $entrada_id = $_POST["entrada_id"];
            $conectar = parent::Conexion();
            parent::set_name();
            $stm = $conectar ->prepare("DELETE FROM Entradas WHERE entrada_id= ?");
            $stm -> bindValue(1,$entrada_id);
            $stm -> execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }
}

?>