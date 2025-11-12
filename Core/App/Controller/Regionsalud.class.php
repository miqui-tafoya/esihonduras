<?php
namespace Controller;

use View\Render;
//use Middleware;
use Model\{
    Database,
    RegionsaludModel
};
class Regionsalud extends Render {
    public function GET_handler($route, $params, $js) {
        return $this->renderView($route, $params[0], $params[1], $params[2], $params[3], $js);
    }

    public function values($params, $query) {
        $clase = explode('\\', __CLASS__);
        $buildClass = '\\Model\\' . ucfirst($clase[1]) . 'Model';
        $load = new $buildClass($query);
        $valores = $load->fetchData($params);
        return $valores;
    }

//////////////////// Funciones secundarias

    //public function process($params) {
    //  exit;
    //}
}