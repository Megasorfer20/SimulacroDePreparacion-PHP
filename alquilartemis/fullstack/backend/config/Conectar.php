<?php

class Conectar{

    protected $db;

    protected function Conexion(){

        try {
            $conectar = $this->db= new PDO("mysql:host=localhost;dbname=alquilartemis","root","");
            return $conectar;
        } catch (Exception $e) {
            return $e -> getMessage();
            die();
        }

    }

    public function set_name(){
        return $this->db->query("SET NAMES 'utf8'");
    }
}
?>