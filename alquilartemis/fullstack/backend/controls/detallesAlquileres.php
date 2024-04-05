<?php
header('Content-Type: application/json');
require_once('../config/Conectar.php');
require_once("../models/detallesAlquiler.php");

$detalleAlq = new DetallesAlquiler();

$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET['op']) {
    case 'GetAll':
        $datos = $detalleAlq->get_detalles_alquiler();
        echo json_encode($datos);
        break;
    
    case "Insert":
        $datos=$detalleAlq->insert_detalles_alquiler($body["salida_detalle_id"], $body["salida_id"], $body["id_producto"], $body["id_obra"], $body["id_empleado"], $body["cantidad_salida"], $body["cantidad_propia_salida"], $body["cantidad_subalquilada_salida"], $body["valor_unidad"], $body["fecha_standBye"], $body["estado"], $body["valor_total"]);
        echo json_encode("Insertado correctamente");
        header('Location:http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/DetallesAlquiler');
        break;

    case 'Delete':
        $datos = $detalleAlq->delete_detalles_alquiler($body['salida_detalle_id']);
        header('Location: http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/DetallesAlquiler');
        break;
    }
?>