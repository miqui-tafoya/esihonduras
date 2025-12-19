<?php
namespace Controller;

use View\Render;
use Middleware;
use Model\{
    Database,
    EditarcategoriaModel
};
class Editarcategoria extends Render {
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
        $response = $this->process($params[3]);
        // manejo de respuesta previa a Render
        $POST_response['post'] = $params[3];
        $POST_response['errors'] = $response;
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

    public function validaTema($input) {
        $model = new EditarcategoriaModel();
        $errors = [];

        if (empty($input['slug_categoria'])) {
            $errors = MainCtrl::pushAssoc($errors, 'error_slug', '<i class="fas fa-exclamation-triangle"></i>Ingresa slug');
        } elseif (!empty(strlen($input['slug_categoria']) > 0 && strlen($input['slug_categoria']) < 1)) {
            $errors = MainCtrl::pushAssoc($errors, 'error_slug', '<i class="fas fa-exclamation-triangle"></i>Ingresa un slug con al menos 1 caracter');
        } elseif (!empty(strlen($input['slug_categoria']) > 25)) {
            $errors = MainCtrl::pushAssoc($errors, 'error_slug', '<i class="fas fa-exclamation-triangle"></i>Ingresa un slug menor o igual a 25 caracteres');
        } elseif (!empty(!preg_match("/^[0-9a-z\-]*$/", $input['slug_categoria']))) {
            $errors = MainCtrl::pushAssoc($errors, 'error_slug', '<i class="fas fa-exclamation-triangle"></i>Haz ingresado un caracter inválido. Caracteres permitidos: letras minúsculas, números, guión medio');
        }

        if (empty($input['nombre_categoria'])) {
            $errors = MainCtrl::pushAssoc($errors, 'error_tema', '<i class="fas fa-exclamation-triangle"></i>Ingresa Título');
        } elseif (!empty(strlen($input['nombre_categoria']) > 0 && strlen($input['nombre_categoria']) < 3)) {
            $errors = MainCtrl::pushAssoc($errors, 'error_tema', '<i class="fas fa-exclamation-triangle"></i>Ingresa un Título con al menos 3 caracteres');
        } elseif (!empty(strlen($input['nombre_categoria']) > 70)) {
            $errors = MainCtrl::pushAssoc($errors, 'error_tema', '<i class="fas fa-exclamation-triangle"></i>Ingresa un Título menor o igual a 70 caracteres');
        } elseif (!empty(!preg_match("/^[0-9a-zA-ZñÑÀÁàáÈÉèéÌÍìíÒÓòóÙÚùúäÄëËïÏüÜöÖCÇç\-: ]*$/", $input['nombre_categoria']))) {
            $errors = MainCtrl::pushAssoc($errors, 'error_tema', '<i class="fas fa-exclamation-triangle"></i>Haz ingresado un caracter inválido. Caracteres permitidos: letras, números, acentos, diéresis, espacios, guión medio');
        }

        if (empty($input['tipo'])) {
            $errors = MainCtrl::pushAssoc($errors, 'error_tipo', '<i class="fas fa-exclamation-triangle"></i>Elige una sección');
        }

        return $errors;
    }

    public function process($params) {
        $model = new EditarcategoriaModel();
        $errors = $this->validaTema($params);
        if (count($errors) === 0) {
            $id = $params['tb_categorias_id'];
            unset($params['submit-update'], $params['tb_categorias_id']);
            $params['nombre_categoria'] = htmlentities($params['nombre_categoria'], ENT_QUOTES, "UTF-8");
            $model->updateEntryData($params, $id);
            header("Location: " . URL_BASE . "entrycategorias/");
            exit;
        }
        return $errors;
    }
}