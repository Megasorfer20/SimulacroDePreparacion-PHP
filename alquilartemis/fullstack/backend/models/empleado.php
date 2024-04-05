<?php

class Empleado extends Conectar{

    public function get_empleado(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm = $conectar->prepare("SELECT * FROM Empleados");
            $stm ->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }

    public function insert_empleado($empleado_id,$nombre_empleado,$edad_empleado,$telefono_empleado,$cedula_empleado){
        try {
            $empleado_id = $_POST["empleado_id"];
            $nombre_empleado = $_POST["nombre_empleado"];
            $edad_empleado = $_POST["edad_empleado"];
            $telefono_empleado = $_POST["telefono_empleado"];
            $cedula_empleado = $_POST["cedula_empleado"];
            $conectar=parent::Conexion();
            parent::set_name();
            $stm="INSERT INTO Empleados(empleado_id,nombre_empleado,edad_empleado,telefono_empleado,cedula_empleado) VALUES(?,?,?,?,?)";
            $stm=$conectar->prepare($stm);
            $stm->bindValue(1,$empleado_id);
            $stm->bindValue(2,$nombre_empleado);
            $stm->bindValue(3,$edad_empleado);
            $stm->bindValue(4,$telefono_empleado);
            $stm->bindValue(5,$cedula_empleado);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }

    public function delete_empleado($empleado_id){

        try {
            $empleado_id = $_POST["empleado_id"];
            $conectar = parent::Conexion();
            parent::set_name();
            $stm = $conectar ->prepare("DELETE FROM Empleados WHERE empleado_id= ?");
            $stm -> bindValue(1,$empleado_id);
            $stm -> execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }
}

?>