<?php
header('Content-Type: application/json');
require_once('../config/Conectar.php');
require_once("../models/devolucion.php");

$devolucion = new Devolucion();

$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET['op']) {
    case 'GetAll':
        $datos = $devolucion->get_devolucion();
        echo json_encode($datos);
        break;
    
    case "Insert":
        $datos = $devolucion->insert_devolucion($body["entrada_id"], $body["id_salida"], $body["id_empleado"], $body["id_cliente"], $body["fecha_entrada"], $body["hora_entrada"], $body["observaciones_entrada"]);
        echo json_encode("Insertado correctamente");
        header('Location:http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/Devoluciones');
        break;

    case 'Delete':
        $datos = $devolucion ->delete_devolucion($body['entrada_id']);
        header('Location: http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/Devoluciones');
        break;
    }
?>