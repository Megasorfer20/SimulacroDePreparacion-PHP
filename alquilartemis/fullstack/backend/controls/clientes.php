<?php
header('Content-Type: application/json');
require_once('../config/Conectar.php');
require_once("../models/cliente.php");

$cliente = new Cliente();

$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET['op']) {
    case 'GetAll':
        $datos = $cliente->get_cliente();
        echo json_encode($datos);
        break;
    
    case "Insert":
        $datos=$cliente->insert_cliente($body["cliente_id"], $body["nombre_cliente"], $body["edad_cliente"], $body["telefono_cliente"], $body["cedula_cliente"]);
        echo json_encode("Insertado correctamente");
        header('Location:http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/Clientes');
        break;

    case 'Delete':
        $datos = $cliente ->delete_cliente($body['cliente_id']);
        header('Location: http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/Clientes');
        break;
    }
?>