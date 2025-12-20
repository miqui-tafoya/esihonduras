<?php
namespace Controller;

use View\Render;
use Middleware;
use Model\{
    Database,
    EntrynoticiasModel
};
class Entrynoticias extends Render {
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
        $update_autor = isset($params[3]['update_autor-submit']) ? true : false;
        $featured = isset($params[3]['feat-submit']) ? true : false;
        $delete = isset($params[3]['delete-submit']) ? true : false;
        $publicar = isset($params[3]['publicar-submit']) ? true : false;
        if ($update_autor) {
            $this->process('update', $params[3]);
        } elseif ($featured) {
            $response = $this->process('featured', $params[3]);
        } elseif ($delete) {
            $this->process('delete', $params[3]);
        } elseif ($publicar) {
            $this->process('publicar', $params[3]);
        }
        // manejo de respuesta previa a Render
        $POST_response['post'] = $params[3];
        if (isset($response)) {
            $POST_response['error'] = $response;
        }
        // Renderizado de Frontend
        return $this->renderView($route, $params[0], $params[1], $params[2], $POST_response, $js);
    }


    public function values($params, $query) {
        $clase = explode('\\', __CLASS__);
        $buildClass = '\\Model\\' . ucfirst($clase[1]) . 'Model';
        $load = new $buildClass($query);
        $valores = $load->fetchData($params);
        return $valores;
    }

    //////////////////// Funciones secundarias

    public function process($type, $params) {
        $db = new Database;
        $model = new EntrynoticiasModel;
        switch ($type) {
            case 'update':
                unset($params['update_autor-submit']);
                $id = $params['tb_entradas_id'];
                unset($params['tb_entradas_id']);
                $model->updateEntryData($params, $id);
                header("Location: " . URL_BASE . "entrynoticias/");
                exit;
            case 'featured':
                unset($params['feat-submit']);
                $id = $params['tb_entradas_id'];
                unset($params['tb_entradas_id']);
                $destacados = $model->getDestacados();
                if ((int) $destacados[0]['cantidad'] >= 3 && $params['destacado'] == 1) {
                    $error = 'No pueden haber más de 3 Noticias destacadas';
                    return $error;
                }
                $model->updateEntryData($params, $id);
                header("Location: " . URL_BASE . "entrynoticias/");
                exit;
            case 'publicar':
                unset($params['publicar-submit']);
                $id = $params['tb_entradas_id'];
                unset($params['tb_entradas_id']);
                $model->updateEntryData($params, $id);
                header("Location: " . URL_BASE . "entrynoticias/");
                exit;
            case 'delete':
                unset($params['delete-submit']);
                $id = $params['tb_entradas_id'];
                unset($params['tb_entradas_id']);
                $model->deleteEntryData($id);
                header("Location: " . URL_BASE . "entrynoticias/");
                exit;
        }
    }
}