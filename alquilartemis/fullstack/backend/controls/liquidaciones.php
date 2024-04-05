<?php
header('Content-Type: application/json');
require_once('../config/Conectar.php');
require_once("../models/liquidacion.php");

$liquidacion = new Liquidacion();

$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET['op']) {
    case 'GetAll':
        $datos = $liquidacion->get_liquidacion();
        echo json_encode($datos);
        break;
    
    case "Insert":
        $datos=$liquidacion->insert_liquidacion($body["liquidacion_id"], $body["id_cliente"], $body["producto_liquidado"], $body["fecha_liquidacion"], $body["precio_total"], $body["metodo_pago"]);
        echo json_encode("Insertado correctamente");
        header('Location:http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/Liquidaciones');
        break;

    case 'Delete':
        $datos=$liquidacion->delete_liquidacion($body['liquidacion_id']);
        header('Location: http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/Liquidaciones');
        break;
    }
?>