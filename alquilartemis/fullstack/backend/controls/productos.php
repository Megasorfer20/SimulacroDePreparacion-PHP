<?php
header('Content-Type: application/json');
require_once('../config/Conectar.php');
require_once("../models/producto.php");

$producto = new Producto();

$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET['op']) {
    case 'GetAll':
        $datos = $producto->get_producto();
        echo json_encode($datos);
        break;
    
    case "Insert":
        $datos=$producto->insert_producto($body["producto_id"], $body["nombre_producto"], $body["precio_producto"], $body["peso_producto"]);
        echo json_encode("Insertado correctamente");
        header('Location:http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/Productos');
        break;

    case 'Delete':
        $datos = $producto ->delete_producto($body['producto_id']);
        header('Location: http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/Productos');
        break;
    }
?>