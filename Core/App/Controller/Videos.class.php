<?php
namespace Controller;

use View\Render;
use Middleware;
use Model\{
    Database,
    VideosModel
};
class Videos extends Render {
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
    public function POST_handler($route, $params, $js) {
        // operaciones previas al envío de datos al Modelo
        $POST_response = [];
        $this->process($params[3]);
        // manejo de respuesta previa a Render
        $POST_response['post'] = $params[3];
        // Renderizado de Frontend
        return $this->renderView($route, $params[0], $params[1], $params[2], $POST_response, $js);
    }


    public function values($params) {
        $clase = explode('\\', __CLASS__);
        $buildClass = '\\Model\\' . ucfirst($clase[1]) . 'Model';
        $load = new $buildClass();
        $valores = $load->fetchData($params);
        return $valores;
    }

    //////////////////// Funciones secundarias

    public function process($params) {
        $model = new VideosModel;
        unset($params['update-yt']);
        $id = $params['tb_videos_id'];
        unset($params['tb_videos_id']);
        $model->updateEntryData($params, $id);
        header("Location: " . URL_BASE . "videos");
        exit;
    }
}