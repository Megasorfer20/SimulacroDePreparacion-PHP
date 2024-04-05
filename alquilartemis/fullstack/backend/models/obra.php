<?php

class Obra extends Conectar{

    public function get_obra(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm = $conectar->prepare("SELECT * FROM Obras");
            $stm ->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }

    public function insert_obra($obra_id,$nombre_obra,$fecha_obra,$hora_obra,$observaciones_obra){
        try {
            $obra_id = $_POST["obra_id"];
            $nombre_obra = $_POST["nombre_obra"];
            $fecha_obra = $_POST["fecha_obra"];
            $hora_obra = $_POST["hora_obra"];
            $observaciones_obra = $_POST["observaciones_obra"];
            $conectar=parent::Conexion();
            parent::set_name();
            $stm="INSERT INTO Obras(obra_id,nombre_obra,fecha_obra,hora_obra,observaciones_obra) VALUES(?,?,?,?,?)";
            $stm=$conectar->prepare($stm);
            $stm->bindValue(1,$obra_id);
            $stm->bindValue(2,$nombre_obra);
            $stm->bindValue(3,$fecha_obra);
            $stm->bindValue(4,$hora_obra);
            $stm->bindValue(5,$observaciones_obra);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }

    public function delete_obra($obra_id){

        try {
            $obra_id = $_POST["obra_id"];
            $conectar = parent::Conexion();
            parent::set_name();
            $stm = $conectar ->prepare("DELETE FROM Obras WHERE obra_id= ?");
            $stm -> bindValue(1,$obra_id);
            $stm -> execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }
}

?>