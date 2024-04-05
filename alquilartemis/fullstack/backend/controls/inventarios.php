<?php
header('Content-Type: application/json');
require_once('../config/Conectar.php');
require_once("../models/inventario.php");

$inventario = new Inventario();

$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET['op']) {
    case 'GetAll':
        $datos = $inventario->get_inventario();
        echo json_encode($datos);
        break;
    
    case "Insert":
        $datos=$inventario->insert_inventario($body["inventario_id"], $body["id_producto"], $body["cantidad_inicial"], $body["cantidad_ingresos"], $body["cantidad_salidas"], $body["cantidad_final"], $body["fecha_inventario"], $body["tipo_operacion"]);
        echo json_encode("Insertado correctamente");
        header('Location:http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/Inventarios');
        break;

    case 'Delete':
        $datos=$inventario->delete_inventario($body['inventario_id']);
        header('Location: http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/Inventarios');
        break;
    }
?>