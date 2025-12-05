<?php
namespace Controller;

use View\Render;
use Model\EducadoresModel;
class Educadores extends Render {
    public function GET_handler($route, $params, $js) {
        return $this->renderView($route, $params[0], $params[1], $params[2], $params[3], $js);
    }

    public function GET_AJAX_handler() {
        header('Content-Type: application/json; charset=utf-8');
        $model = new EducadoresModel();
        $slides = $model->getActividades();
        $total = count($slides);
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        if ($page < 1) {
            $page = 1;
        }
        if ($page > $total) {
            $page = $total;
        }
        echo json_encode([
            'page' => $page,
            'total' => $total,
            'content' => $slides[$page]
        ]);
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