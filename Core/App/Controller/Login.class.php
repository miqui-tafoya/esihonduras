<?php

namespace Controller;

use View\Render;
use Middleware;
use Model\LoginModel;

class Login extends Render {

    public function GET_handler($route, $params, $js) {
        if (!isset($_SESSION['captcha_code'])) {
            header("Refresh:0");
        }
        // verifica credenciales
        $credenciales = new Middleware;
        $credenciales->Credencial('loggedin');
        return $this->renderView($route, $params[0], $params[1], $params[2], $params[3], $js);
    }

    public function POST_handler($route, $params, $js) {
        $model = new LoginModel;
        // operaciones previas al envío de datos al Modelo
        $POST_response = [];
        unset($params[3]['login-btn']);
        // manejo de respuesta previa a Render
        $login_email = $model->sendData_fetchLogin_email($params[3]);
        $response = $this->processUser($params[3], $login_email);
        $POST_response['post'] = $params[3];
        $POST_response['response'] = $response;
        // Renderizado de Frontend
        return $this->renderView($route, $params[0], $params[1], $params[2], $POST_response, $js);
        // estructura: return $this->renderView(route, layout[0], título[1], body-elements[2], POST_response, js)
    }

    public function values($params) {
        $clase = explode('\\', __CLASS__);
        $buildClass = '\\Model\\' . ucfirst($clase[1]) . 'Model';
        $load = new $buildClass();
        $valores = $load->fetchData($params);
        return $valores;
    }

    //////////////////// Funciones secundarias

    public function validaLogin($params) {
        $errors = [];
        if (empty($params['login_email'])) {
            $errors = MainCtrl::pushAssoc($errors, 'error_login', '<i class="fas fa-exclamation-triangle"></i> Ingresa tu Email');
        }
        if (empty($params['password'])) {
            $errors = MainCtrl::pushAssoc($errors, 'error_password', '<i class="fas fa-exclamation-triangle"></i> Ingresa tu Contraseña');
        }
        if (empty($params['captcha_code'])) {
            $errors = MainCtrl::pushAssoc($errors, 'error_captcha', '<i class="fas fa-exclamation-triangle"></i> Ingresa CAPTCHA');
        }
        if (!empty($params['captcha_code'])) {
            if (!password_verify($params['captcha_code'], $_SESSION['captcha_code'])) {
                $errors = MainCtrl::pushAssoc($errors, 'error_captcha', '<i class="fas fa-exclamation-triangle"></i> CAPTCHA incorrecto');
            }
        }
        return $errors;
    }
    public function processUser($params, $login_email) {
        $model = new LoginModel;
        $errors = $this->validaLogin($params);
        if (count($errors) !== 0) {
            return $errors;
        }
        if (!isset($login_email['login_email'])) {
            $errors = [
                'error_login' => '<i class="fas fa-exclamation-triangle"></i> Revisa tu Email',
            ];
            return $errors;
        } elseif (isset($login_email['login_email'])) {
            $login['login_email'] = $login_email['login_email'];
            $login['password'] = $login_email['password'];
        }
        if (isset($login['login_email'])) {
            // if ($params['password'] !== $login['password']) {
            if (!password_verify($params['password'], $login['password'])) {
                $errors = [
                    'error_password' => '<i class="fas fa-exclamation-triangle"></i> Revisa tu Contraseña'
                ];
                return $errors;
            }
        }
        $usuario = $model->sendData_fetchUsuario($login['login_email']);
        $this->loginSESSION($usuario);
    }
    public function loginSESSION($usuario) {
        unset($_SESSION['captcha_code']);
        $_SESSION['id'] = (int) $usuario['tb_usuarios_id'];
        $_SESSION['login_email'] = $usuario['login_email'];
        $_SESSION['nombre'] = $usuario['nombre'] . ' ' . $usuario['apellido'];
        $_SESSION['permisos'] = $usuario['permisos'];

        if ($_SESSION['permisos'] == 1) {
            header('location: ' . URL_BASE . 'dashboard');
            exit();
        } else {
            header('location: ' . URL_BASE);
            exit;
        }
    }
}