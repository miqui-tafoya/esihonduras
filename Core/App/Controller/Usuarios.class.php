<?php
namespace Controller;

use View\Render;
use Middleware;
use Model\{
    Database,
    UsuariosModel
};
class Usuarios extends Render {
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

    public function values($params, $query) {
        $clase = explode('\\', __CLASS__);
        $buildClass = '\\Model\\' . ucfirst($clase[1]) . 'Model';
        $load = new $buildClass($query);
        $valores = $load->fetchData($params);
        return $valores;
    }

    //////////////////// Funciones secundarias

    public function process($params) {
        $db = new Database;
        $model = new UsuariosModel;
        unset($params['delete-submit']);
        $id = $params['tb_usuarios_id'];
        unset($params['tb_usuarios_id']);
        $model->deleteEntryData($id);
        header("Location: " . URL_BASE . "usuarios/");
        exit;
    }
}