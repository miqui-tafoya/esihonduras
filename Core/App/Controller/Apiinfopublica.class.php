<?php
namespace Controller;

use View\Render;
use Model\{
    Database,
    ApiinfopublicaModel
};
class Apiinfopublica extends Render {
    public function POST_handler($route, $params, $js) {
        unset($_POST['buscar-btn']);
        $this->buscarEntradasApi($_POST);
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
        $model = new ApiinfopublicaModel;
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
        $model = new ApiinfopublicaModel;
        $busqueda = $model->getBusqueda();
        $results = [];
        $hayTextoBusqueda = !empty($params['busca']);

        foreach ($busqueda as $value) {
            $coincide = false;
            if ($hayTextoBusqueda) {
                $arr1 = $this->preparaTitulos($value['tb_entradas_titulo']);
                $arr2 = $this->preparaTags($value['tb_entradas_tags']);
                $arr2b = $this->preparaTags2($value['tb_entradas_tags']);
                $sup_arr = array_merge($arr1, $arr2, $arr2b);
                $sup_arr_unique = array_unique($sup_arr);
                $sup_arr_unique_esc = preg_replace('/[:,¿,?,¡,!,"]/', "", $sup_arr_unique);
                $arr3 = $this->preparaBusqueda($params['busca']);
                $arr3_html = array_map("htmlentities", $arr3);

                if (array_intersect($arr3_html, $sup_arr_unique_esc)) {
                    $coincide = true;
                }
            } else {
                $coincide = true;
            }
            if ($coincide) {
                array_push($results, $value['tb_busca_index_id']);
            }
        }

        unset($params['busca']);
        $data = $this->getBusqueda($params, $results);
        return $data;
    }

    public function buscarEntradasApi($params) {
        $page = isset($params['page']) ? (int) $params['page'] : 1;
        $itemsPerPage = isset($params['itemsPerPage']) ? (int) $params['itemsPerPage'] : 4;

        unset($params['page'], $params['itemsPerPage']);

        if (!isset($params['busca'])) {
            $params['busca'] = '';
        }

        $resultados = $this->busqueda($params);

        $total = count($resultados);
        $offset = ($page - 1) * $itemsPerPage;
        $pageResults = array_slice($resultados, $offset, $itemsPerPage);

        header('Content-Type: application/json; charset=utf-8');
        echo json_encode([
            'data' => $pageResults,
            'total' => $total,
            'page' => $page,
            'itemsPerPage' => $itemsPerPage,
        ]);
        exit;
    }
}