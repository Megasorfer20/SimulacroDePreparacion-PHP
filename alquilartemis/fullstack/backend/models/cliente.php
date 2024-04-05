<?php

class Cliente extends Conectar{

    public function get_cliente(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm = $conectar->prepare("SELECT * FROM Clientes");
            $stm ->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }

    public function insert_cliente($cliente_id,$nombre_cliente,$edad_cliente,$telefono_cliente,$cedula_cliente){
        try {
            $cliente_id = $_POST["cliente_id"];
            $nombre_cliente = $_POST["nombre_cliente"];
            $edad_cliente = $_POST["edad_cliente"];
            $telefono_cliente = $_POST["telefono_cliente"];
            $cedula_cliente = $_POST["cedula_cliente"];
            $conectar=parent::Conexion();
            parent::set_name();
            $stm="INSERT INTO Clientes(cliente_id,nombre_cliente,edad_cliente,telefono_cliente,cedula_cliente) VALUES(?,?,?,?,?)";
            $stm=$conectar->prepare($stm);
            $stm->bindValue(1,$cliente_id);
            $stm->bindValue(2,$nombre_cliente);
            $stm->bindValue(3,$edad_cliente);
            $stm->bindValue(4,$telefono_cliente);
            $stm->bindValue(5,$cedula_cliente);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }

    public function delete_cliente($cliente_id){

        try {
            $cliente_id = $_POST["cliente_id"];
            $conectar = parent::Conexion();
            parent::set_name();
            $stm = $conectar ->prepare("DELETE FROM Clientes WHERE cliente_id= ?");
            $stm -> bindValue(1,$cliente_id);
            $stm -> execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        } 
    }
}

?>