<?php
header('Content-Type: application/json');
require_once('../config/Conectar.php');
require_once("../models/alquiler.php");

$alquiler = new Alquiler();

$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET['op']) {
    case 'GetAll':
        $datos = $alquiler->get_alquiler();
        echo json_encode($datos);
        break;
    
    case "Insert":
        $datos=$alquiler->insert_alquiler($body["salida_id"], $body["id_cliente"], $body["id_empleado"], $body["fecha_salida"], $body["hora_salida"], $body["subtotalPeso"], $body["placaTransporte"], $body["observaciones_salida"]);
        echo json_encode("Insertado correctamente");
        header('Location:http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/Alquileres');
        break;

    case 'Delete':
        $datos = $alquiler ->delete_alquiler($body['salida_id']);
        header('Location: http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/Alquileres');
        break;
    }
?>