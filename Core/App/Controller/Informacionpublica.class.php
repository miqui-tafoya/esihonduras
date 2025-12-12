<?php
namespace Controller;

use View\Render;

class Informacionpublica extends Render {
    public function GET_handler($route, $params, $js) {
        return $this->renderView($route, $params[0], $params[1], $params[2], $params[3], $js);
    }
    public function POST_handler($route, $params, $js) {
        $POST_response = [];
        unset($_POST['buscar-btn']);
        $POST_response['post']['busca'] = $_POST['busca'];
        unset($_POST['busca']);
        $POST_response['post']['filtros'] = $_POST;
        return $this->renderView($route, $params[0], $params[1], $params[2], $POST_response, $js);
    }

    public function values($params) {
        $clase = explode('\\', __CLASS__);
        $buildClass = '\\Model\\' . ucfirst($clase[1]) . 'Model';
        $load = new $buildClass();
        $valores = $load->fetchData($params);
        return $valores;
    }
}