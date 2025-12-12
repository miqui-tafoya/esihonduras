<?php
namespace Controller;

use View\Render;
//use Middleware;
use Model\{
    Database,
    ApicategoriasModel
};
class Apicategorias extends Render {
    public function GET_handler($route, $params, $js) {
    }
    public function values($params) {
        $clase = explode('\\', __CLASS__);
        $buildClass = '\\Model\\' . ucfirst($clase[1]) . 'Model';
        $load = new $buildClass;
        if (key_exists('querystring', $params) === true) {
            $querystring = $params['querystring'];
            unset($params['querystring']);
            $valores = $load->fetchQueryStringData($querystring);
        }
        $valores = $load->fetchData($params);
        return $valores;
    }
}