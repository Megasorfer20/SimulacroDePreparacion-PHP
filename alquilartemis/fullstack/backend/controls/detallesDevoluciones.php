<?php
header('Content-Type: application/json');
require_once('../config/Conectar.php');
require_once("../models/detallesDevolucion.php");

$detalleDev = new DetallesDevolucion();

$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET['op']) {
    case 'GetAll':
        $datos = $detalleDev->get_detalles_devolucion();
        echo json_encode($datos);
        break;
    
    case "Insert":
        $datos=$detalleDev->insert_detalles_devolucion($body["entrada_detalle_id"], $body["id_entrada"], $body["id_producto"], $body["id_obra"], $body["cantidad_entrada"], $body["cantidad_propia_entrada"], $body["cantidad_subalquilada_entrada"], $body["estado"]);
        echo json_encode("Insertado correctamente");
        header('Location:http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/DetallesDevolucion');
        break;

    case 'Delete':
        $datos = $detalleDev->delete_detalles_devolucion($body['entrada_detalle_id']);
        header('Location: http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/DetallesDevolucion');
        break;
    }
?>