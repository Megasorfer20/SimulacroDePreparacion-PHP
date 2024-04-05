<?php
header('Content-Type: application/json');
require_once('../config/Conectar.php');
require_once("../models/obra.php");

$obra = new Obra();

$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET['op']) {
    case 'GetAll':
        $datos = $obra->get_obra();
        echo json_encode($datos);
        break;
    
    case "Insert":
        $datos=$obra->insert_obra($body["obra_id"], $body["nombre_obra"], $body["fecha_obra"], $body["hora_obra"], $body["observaciones_obra"]);
        echo json_encode("Insertado correctamente");
        header('Location:http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/Obras');
        break;

    case 'Delete':
        $datos = $obra ->delete_obra($body['obra_id']);
        header('Location: http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/Obras');
        break;
    }
?>