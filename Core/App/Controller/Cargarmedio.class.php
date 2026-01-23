<?php
namespace Controller;

use View\Render;
use Middleware;
use Controller\Adjuntos;
use Model\{
    Database,
    CargarmedioModel
};
class Cargarmedio extends Render {
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

    public function POST_handler_AJAX() {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $model = new CargarmedioModel;
        $params['file'] = $_FILES;
        $returnAdjuntos = $this->processAJAX($params);

        if (!empty($returnAdjuntos)) {
            if (!empty($returnAdjuntos['error'])) {
                echo json_encode([
                    'error' => [
                        'message' => 'Error al subir archivo'
                    ]
                ]);
            } elseif (!empty($returnAdjuntos['exito'])) {
                $model->sendData($returnAdjuntos['exito']);
                echo json_encode([
                    'url' => URL_PUBLIC . 'recursos/entradas/' . $returnAdjuntos['exito']['galeria_url']
                ]);
            }
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

    //////////////////// Funciones secundarias

    public function processAJAX($params) {
        $adjuntos = new Adjuntos;
        $tipo = 'entrada';
        $params['metaParent'] = $tipo;
        $returnAdjuntos = $adjuntos->adjuntar($tipo, $params);
        return $returnAdjuntos;
    }
}
