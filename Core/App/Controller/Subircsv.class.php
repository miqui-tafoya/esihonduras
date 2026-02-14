<?php
namespace Controller;

use View\Render;
use Middleware;
use Exception;
use Model\Database;

class Subircsv extends Render {
    public function GET_handler($route, $params, $js) {
        // verifica credenciales
        $credenciales = new Middleware;
        $credenciales->Credencial('login');
        // permisos
        if ($_SESSION['permisos'] !== '1') {
            header("Location: " . URL_BASE);
            exit;
        }
        return $this->renderView($route, $params[0], $params[1], $params[2], $params[3], $js);
    }
    public function POST_handler_ASYNC() {
        $cors = new Middleware;
        $db = new Database;
        header('Content-Type: application/json');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
        header("Access-Control-Allow-Origin: " . $cors->getCorsOrigin());

        try {
            if (!isset($_FILES['csvFile']) || $_FILES['csvFile']['error'] !== UPLOAD_ERR_OK) {
                throw new Exception('Error al subir archivo');
            }

            $fileInfo = pathinfo($_FILES['csvFile']['name']);
            if (strtolower($fileInfo['extension']) !== 'csv') {
                throw new Exception('El archivo debe ser extensión .csv');
            }
            $tmpFile = $_FILES['csvFile']['tmp_name'];

            $tabla = 'tb_centros';

            $columnasEsperadas = ['tb_centros_id', 'region', 'municipio', 'aldea', 'nombre', 'direccion', 'info', 'coordenadas'];

            $resultado = $db->replaceTableFromCSV($tabla, $tmpFile, $columnasEsperadas);

            echo json_encode($resultado);

        } catch (Exception $e) {
            echo json_encode([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
        exit;
    }

    public function values($params) {
        $clase = explode('\\', __CLASS__);
        $buildClass = '\\Model\\' . ucfirst($clase[1]) . 'Model';
        $load = new $buildClass();
        $valores = $load->fetchData($params);
        return $valores;
    }
}