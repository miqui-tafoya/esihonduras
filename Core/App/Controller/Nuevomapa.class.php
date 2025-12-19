<?php
namespace Controller;

use View\Render;
use Middleware;
use Model\{
    Database,
    NuevomapaModel
};
class Nuevomapa extends Render {
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


    public function values($params) {
        $clase = explode('\\', __CLASS__);
        $buildClass = '\\Model\\' . ucfirst($clase[1]) . 'Model';
        $load = new $buildClass();
        $valores = $load->fetchData($params);
        return $valores;
    }

    //////////////////// Funciones secundarias

    public function validaMapa($input) {
        $model = new NuevomapaModel();
        $errors = [];

        if (empty($input['municipio'])) {
            $errors = MainCtrl::pushAssoc($errors, 'error_municipio', '<i class="fas fa-exclamation-triangle"></i>Ingresa municipio');
        } elseif (!empty(!preg_match("/^[0-9a-zA-ZñÑÀÁàáÈÉèéÌÍìíÒÓòóÙÚùúäÄëËïÏüÜöÖCÇç\-:).( ]*$/", $input['municipio']))) {
            $errors = MainCtrl::pushAssoc($errors, 'error_municipio', '<i class="fas fa-exclamation-triangle"></i>Haz ingresado un caracter inválido. Caracteres permitidos: letras, números, acentos, diéresis, espacios, guión medio');
        }

        if (empty($input['aldea'])) {
            $errors = MainCtrl::pushAssoc($errors, 'error_aldea', '<i class="fas fa-exclamation-triangle"></i>Ingresa aldea');
        } elseif (!empty(!preg_match("/^[0-9a-zA-ZñÑÀÁàáÈÉèéÌÍìíÒÓòóÙÚùúäÄëËïÏüÜöÖCÇç\-:).( ]*$/", $input['aldea']))) {
            $errors = MainCtrl::pushAssoc($errors, 'error_aldea', '<i class="fas fa-exclamation-triangle"></i>Haz ingresado un caracter inválido. Caracteres permitidos: letras, números, acentos, diéresis, espacios, guión medio');
        }

        if (empty($input['nombre'])) {
            $errors = MainCtrl::pushAssoc($errors, 'error_nombre', '<i class="fas fa-exclamation-triangle"></i>Ingresa nombre del centro');
        } elseif (!empty(!preg_match("/^[0-9a-zA-ZñÑÀÁàáÈÉèéÌÍìíÒÓòóÙÚùúäÄëËïÏüÜöÖCÇç\-:)(., ]*$/", $input['nombre']))) {
            $errors = MainCtrl::pushAssoc($errors, 'error_nombre', '<i class="fas fa-exclamation-triangle"></i>Haz ingresado un caracter inválido. Caracteres permitidos: letras, números, acentos, diéresis, espacios, guión medio, punto, coma');
        }

        if (empty($input['coordenadas'])) {
            $errors = MainCtrl::pushAssoc($errors, 'error_coordenadas', '<i class="fas fa-exclamation-triangle"></i>Ingresa coordenadas');
        } elseif (!empty(!preg_match("/^[0-9\-., ]*$/", $input['coordenadas']))) {
            $errors = MainCtrl::pushAssoc($errors, 'error_coordenadas', '<i class="fas fa-exclamation-triangle"></i>Haz ingresado un caracter inválido. Caracteres permitidos: números, signo negativo, coma, punto');
        }

        if (empty($input['region'])) {
            $errors = MainCtrl::pushAssoc($errors, 'error_region', '<i class="fas fa-exclamation-triangle"></i>Elige una región');
        }

        if (!empty(!preg_match("/^[0-9a-zA-ZñÑÀÁàáÈÉèéÌÍìíÒÓòóÙÚùúäÄëËïÏüÜöÖCÇç\-:.)(,# ]*$/", $input['direccion']))) {
            $errors = MainCtrl::pushAssoc($errors, 'error_direccion', '<i class="fas fa-exclamation-triangle"></i>Haz ingresado un caracter inválido. Caracteres permitidos: letras, números, acentos, diéresis, espacios, guión medio, punto, coma, hashtag');
        }

        if (!empty(!preg_match("/^[0-9a-zA-ZñÑÀÁàáÈÉèéÌÍìíÒÓòóÙÚùúäÄëËïÏüÜöÖCÇç\-:., ]*$/", $input['info']))) {
            $errors = MainCtrl::pushAssoc($errors, 'error_info', '<i class="fas fa-exclamation-triangle"></i>Haz ingresado un caracter inválido. Caracteres permitidos: letras, números, acentos, diéresis, espacios, guión medio, punto, coma');
        }

        return $errors;
    }

    public function process($params) {
        $model = new NuevomapaModel();
        $errors = $this->validaMapa($params);
        if (count($errors) === 0) {
            unset($params['submit-nuevo']);
            $params['municipio'] = htmlentities($params['municipio'], ENT_QUOTES, "UTF-8");
            $params['aldea'] = htmlentities($params['aldea'], ENT_QUOTES, "UTF-8");
            $params['nombre'] = htmlentities($params['nombre'], ENT_QUOTES, "UTF-8");
            $params['direccion'] = htmlentities($params['direccion'], ENT_QUOTES, "UTF-8");
            $params['info'] = htmlentities($params['info'], ENT_QUOTES, "UTF-8");
            $params['direccion'] = empty($params['direccion']) ? NULL : $params['direccion'];
            $params['info'] = empty($params['info']) ? NULL : $params['info'];
            $model->sendData($params);
            header("Location: " . URL_BASE . "mapa/");
            exit;
        }
        return $errors;
    }
}