<?php
namespace Controller;

use View\Render;
use Middleware;
use Model\{
    Database,
    NuevousuarioModel
};
class Nuevousuario extends Render {
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

    public function validaUsuario($input) {
        $model = new NuevousuarioModel;
        $errors = [];

        if (empty($input['login_email'])) {
            $errors = MainCtrl::pushAssoc($errors, 'error_login_email', '<i class="fas fa-exclamation-triangle"></i>Ingresa email');
        } elseif (!empty(!filter_var($input['login_email'], FILTER_VALIDATE_EMAIL))) {
            $errors = MainCtrl::pushAssoc($errors, 'error_login_email', '<i class="fas fa-exclamation-triangle"></i>Formato de email inválido');
        } elseif (!empty(strlen($input['login_email']) > 100)) {
            $errors = MainCtrl::pushAssoc($errors, 'error_login_email', '<i class="fas fa-exclamation-triangle"></i>Este email es demasiado largo, ingresa uno menor a 100 caracteres');
        }
        $emails = $model->getEmails();
        if (in_array(str_replace(' ', '', $input['login_email']), $emails)) {
            $errors = MainCtrl::pushAssoc($errors, 'error_login_email', '<i class="fas fa-exclamation-triangle"></i>Este email ya existe en nuestra base de datos, elige otro');
        }

        if (empty($input['nombre'])) {
            $errors = MainCtrl::pushAssoc($errors, 'error_nombre', '<i class="fas fa-exclamation-triangle"></i>Ingresa nombre para mostrar');
        } elseif (!empty(strlen($input['nombre']) > 0 && strlen($input['nombre']) < 3)) {
            $errors = MainCtrl::pushAssoc($errors, 'error_nombre', '<i class="fas fa-exclamation-triangle"></i>Ingresa un nombre para mostrar con al menos 3 caracteres');
        } elseif (!empty(strlen($input['nombre']) > 70)) {
            $errors = MainCtrl::pushAssoc($errors, 'error_nombre', '<i class="fas fa-exclamation-triangle"></i>Ingresa un nombre para mostrar menor o igual a 70 caracteres');
        } elseif (!empty(!preg_match("/^[0-9a-zA-ZñÑÀÁàáÈÉèéÌÍìíÒÓòóÙÚùúäÄëËïÏüÜöÖCÇç)(_,.'\- ]*$/", $input['nombre']))) {
            $errors = MainCtrl::pushAssoc($errors, 'error_nombre', '<i class="fas fa-exclamation-triangle"></i>Haz ingresado un caracter inválido. Caracteres permitidos: letras, números, acentos, diéresis, espacios, comilla simple, guión medio');
        }

        if (empty($input['apellido'])) {
            $errors = MainCtrl::pushAssoc($errors, 'error_apellido', '<i class="fas fa-exclamation-triangle"></i>Ingresa apellido para mostrar');
        } elseif (!empty(strlen($input['apellido']) > 0 && strlen($input['apellido']) < 3)) {
            $errors = MainCtrl::pushAssoc($errors, 'error_apellido', '<i class="fas fa-exclamation-triangle"></i>Ingresa un apellido para mostrar con al menos 3 caracteres');
        } elseif (!empty(strlen($input['apellido']) > 70)) {
            $errors = MainCtrl::pushAssoc($errors, 'error_apellido', '<i class="fas fa-exclamation-triangle"></i>Ingresa un apellido para mostrar menor o igual a 70 caracteres');
        } elseif (!empty(!preg_match("/^[0-9a-zA-ZñÑÀÁàáÈÉèéÌÍìíÒÓòóÙÚùúäÄëËïÏüÜöÖCÇç)(_,.'\- ]*$/", $input['apellido']))) {
            $errors = MainCtrl::pushAssoc($errors, 'error_apellido', '<i class="fas fa-exclamation-triangle"></i>Haz ingresado un caracter inválido. Caracteres permitidos: letras, números, acentos, diéresis, espacios, comilla simple, guión medio');
        }

        if (empty($input['password'])) {
            $errors = MainCtrl::pushAssoc($errors, 'error_password', '<i class="fas fa-exclamation-triangle"></i>Ingresa password');
        } elseif (!empty(strlen($input['password']) > 0 && strlen($input['password']) < 7)) {
            $errors = MainCtrl::pushAssoc($errors, 'error_password', '<i class="fas fa-exclamation-triangle"></i>Ingresa un password con al menos 7 caracteres');
        } elseif (!empty(strlen($input['password']) > 20)) {
            $errors = MainCtrl::pushAssoc($errors, 'error_password', '<i class="fas fa-exclamation-triangle"></i>Ingresa un password menor o igual a 20 caracteres');
        }

        if (empty($input['passwordConf'])) {
            $errors = MainCtrl::pushAssoc($errors, 'error_passwordConf', '<i class="fas fa-exclamation-triangle"></i>Vuelve a ingresar password');
        }

        if (!empty($input['passwordConf']) && !empty($input['password'])) {
            if ($input['passwordConf'] !== $input['password']) {
                $errors = MainCtrl::pushAssoc($errors, 'error_passwordConf', '<i class="fas fa-exclamation-triangle"></i>Las passwords no coinciden');
            }
        }

        return $errors;
    }
    public function process($params) {
        $model = new NuevousuarioModel();
        $errors = $this->validaUsuario($params);
        if (count($errors) === 0) {
            unset($params['submit-nuevo'], $params['passwordConf']);
            $params['nombre'] = htmlentities($params['nombre'], ENT_QUOTES, "UTF-8");
            $params['apellido'] = htmlentities($params['apellido'], ENT_QUOTES, "UTF-8");
            $params['password'] = password_hash($params['password'], PASSWORD_DEFAULT);
            $params['permisos'] = 1;
            $model->sendData($params);
            header("Location: " . URL_BASE . "usuarios/");
            exit;
        }
        return $errors;
    }
}