<?php
header('Content-Type: application/json');
require_once('../config/Conectar.php');
require_once("../models/empleado.php");

$empleado = new Empleado();

$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET['op']) {
    case 'GetAll':
        $datos = $empleado->get_empleado();
        echo json_encode($datos);
        break;
    
    case "Insert":
        $datos=$empleado->insert_empleado($body["empleado_id"], $body["nombre_empleado"], $body["edad_empleado"], $body["telefono_empleado"], $body["cedula_empleado"]);
        echo json_encode("Insertado correctamente");
        header('Location:http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/Empleados');
        break;

    case 'Delete':
        $datos = $empleado ->delete_empleado($body['empleado_id']);
        header('Location: http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/Empleados');
        break;
    }
?>