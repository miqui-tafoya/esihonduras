<?php
namespace Controller;

use View\Render;
use Model\MadresypadresModel;
class Madresypadres extends Render {
    public function GET_handler($route, $params, $js) {
        return $this->renderView($route, $params[0], $params[1], $params[2], $params[3], $js);
    }

    public function GET_AJAX_handler() {
        header('Content-Type: application/json; charset=utf-8');
        $model = new MadresypadresModel();
        $actividades = $model->getActividades();

        $actividadKeys = array_keys($actividades);
        $totalActividades = count($actividadKeys);

        $index = isset($_GET['index']) ? intval($_GET['index']) : 1;
        if ($index < 1)
            $index = 1;
        if ($index > $totalActividades)
            $index = $totalActividades;

        $actualKey = $actividadKeys[$index - 1];
        $actualActividad = $actividades[$actualKey];

        if (strpos($actualKey, 'quiz-') === 0) {
            $tipo = 'quiz';
        } elseif (strpos($actualKey, 'accordion-') === 0) {
            $tipo = 'accordion';
        } elseif (strpos($actualKey, 'slides-') === 0) {
            $tipo = 'slides';
        } else {
            $tipo = 'unknown';
        }

        $response = [
            'index' => $index,
            'total_activities' => $totalActividades,
            'key' => $actualKey,
            'type' => $tipo,
            'data' => $actualActividad,
            'activity_keys' => $actividadKeys,
        ];
        echo json_encode($response, JSON_UNESCAPED_UNICODE);
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