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
        $response = $this->busqueda($_POST);
        $POST_response['post']['busca'] = $_POST['busca'];
        unset($_POST['busca']);
        $POST_response['post']['filtros'] = $_POST;
        $POST_response['response'] = $response;
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

    public function preparaTitulos($titulos) {
        $arr1 = [];
        $arr1 = explode(" ", $titulos);
        $t_arr1 = array_map('trim', $arr1);
        return $t_arr1;
    }
    public function preparaTags($tags) {
        $arr1 = [];
        $arr1 = explode(",", $tags);
        $t_arr1 = array_map('trim', $arr1);
        return $t_arr1;
    }
    public function preparaTags2($tags) {
        $arr1 = [];
        $arr1 = explode(" ", $tags);
        $search = ',';
        $replace = '';
        $arr1 = array_map(function ($item) use ($search, $replace) {
            return str_replace($search, $replace, $item);
        }, $arr1);
        $t_arr1 = array_map('trim', $arr1);
        return $t_arr1;
    }
    public function preparaBusqueda($bus) {
        $arr1 = [];
        $arr1 = explode(" ", $bus);
        $t_arr1 = array_map('trim', $arr1);
        return $t_arr1;
    }
    private function getBusqueda($filtros, $busqueda) {
        $model = new InformacionpublicaModel;
        $res = [];
        if (empty($filtros)) {
            foreach ($busqueda as $value) {
                $data = $model->getEntradas($value);
                array_push($res, $data);
            }
        } else {
            $plano = [];
            foreach ($busqueda as $value) {
                $data = $model->getEntradasFiltradas($filtros, $value);
                if (!empty($data)) {
                    array_push($plano, $data);
                }
            }
            $res = array_column($plano, 0);
        }
        return $res;
    }

    public function busqueda($params) {
        $model = new InformacionpublicaModel;
        $busqueda = $model->getBusqueda();
        $results = [];
        foreach ($busqueda as $value) {
            $arr1 = $this->preparaTitulos($value['tb_entradas_titulo']);
            $arr2 = $this->preparaTags($value['tb_entradas_tags']);
            $arr2b = $this->preparaTags2($value['tb_entradas_tags']);
            $sup_arr = array_merge($arr1, $arr2, $arr2b);
            $sup_arr_unique = array_unique($sup_arr);
            $sup_arr_unique_esc = preg_replace('/[:,¿,?,¡,!,"]/', "", $sup_arr_unique);
            $arr3 = $this->preparaBusqueda($params['busca']);
            $arr3_html = array_map("htmlentities", $arr3);
            if (!empty($params['busca'])) {
                if (array_intersect($arr3_html, $sup_arr_unique_esc)) {
                    array_push($results, $value['tb_busca_index_id']);
                }
            } else {
                array_push($results, $value['tb_busca_index_id']);
            }
        }
        unset($params['busca']);
        $data = $this->getBusqueda($params, $results);
        return $data;
    }
}