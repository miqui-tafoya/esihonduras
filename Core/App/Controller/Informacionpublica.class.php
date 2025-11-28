<?php
namespace Controller;

use View\Render;
//use Middleware;
use Model\{
    Database,
    InformacionpublicaModel
};
class Informacionpublica extends Render {
    public function GET_handler($route, $params, $js) {
        return $this->renderView($route, $params[0], $params[1], $params[2], $params[3], $js);
    }
    public function POST_handler($route, $params, $js) {
        $POST_response = [];
        unset($_POST['buscar-btn']);
        $response = empty($_POST['busca']) ? [] : $this->busqueda($_POST);
        $POST_response['post']['busca'] = $_POST['busca'];
        $POST_response['response'] = $response;
        return $this->renderView($route, $params[0], $params[1], $params[2], $POST_response, $js);
    }

    public function queryStringValues($key, $value) {
        $clase = explode('\\', __CLASS__);
        $buildClass = '\\Model\\' . ucfirst($clase[1]) . 'Model';
        $load = new $buildClass;
        $valores = $load->fetchQueryStringData($key, $value);
        return $valores;
    }
    public function values($params) {
        $clase = explode('\\', __CLASS__);
        $buildClass = '\\Model\\' . ucfirst($clase[1]) . 'Model';
        $load = new $buildClass();
        $valores = $load->fetchData($params);
        return $valores;
    }

    //////////////////// Funciones secundarias

    public function busqueda($params) {
        $model = new BusquedaModel;
        $busqueda = $model->getBusqueda();
        $results = [];
        foreach ($busqueda as $key => $value) {
            $arr1 = $this->preparaTitulos($value['p_titulo']);
            $arr2 = $this->preparaTags($value['pm_tags']);
            $arr2b = $this->preparaTags2($value['pm_tags']);
            $sup_arr = array_merge($arr1, $arr2, $arr2b);
            $sup_arr_unique = array_unique($sup_arr);
            $sup_arr_unique_esc = preg_replace('/[:,¿,?,¡,!,"]/', "", $sup_arr_unique);
            $arr3 = $this->preparaBusqueda($params['busca']);
            $arr3_html = array_map("htmlentities", $arr3);
            if (array_intersect($arr3_html, $sup_arr_unique_esc)) {
                array_push($results, $value['post_id']);
            }
        }
        $data = $this->getBusqueda($results);
        return $data;
    }
}