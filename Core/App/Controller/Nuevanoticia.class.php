<?php
namespace Controller;

use View\Render;
use Middleware;
use Model\{
    Database,
    NuevanoticiaModel
};
class Nuevanoticia extends Render {
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
        $params[3]['file'] = $_FILES;
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

    public function validaEntrada($input) {
        $model = new NuevanoticiaModel();
        $errors = [];

        if (empty($input['entradas_titulo'])) {
            $errors = MainCtrl::pushAssoc($errors, 'error_titulo', '<i class="fas fa-exclamation-triangle"></i>Ingresa Título');
        } elseif (!empty(strlen($input['entradas_titulo']) > 0 && strlen($input['entradas_titulo']) < 3)) {
            $errors = MainCtrl::pushAssoc($errors, 'error_titulo', '<i class="fas fa-exclamation-triangle"></i>Ingresa un Título con al menos 3 caracteres');
        } elseif (!empty(strlen($input['entradas_titulo']) > 70)) {
            $errors = MainCtrl::pushAssoc($errors, 'error_titulo', '<i class="fas fa-exclamation-triangle"></i>Ingresa un Título menor o igual a 70 caracteres');
        } elseif (!empty(!preg_match("/^[0-9a-zA-ZñÑÀÁàáÈÉèéÌÍìíÒÓòóÙÚùúäÄëËïÏüÜöÖCÇç¿?¡!\-: ]*$/", $input['entradas_titulo']))) {
            $errors = MainCtrl::pushAssoc($errors, 'error_titulo', '<i class="fas fa-exclamation-triangle"></i>Caracter inválido encontrado. Permitidos: letras, números, acentos, diéresis, espacios, guión medio, exclamación, interrogración');
        }
        $titulo = $model->getTitulo();
        if (in_array(str_replace(' ', '', $input['entradas_titulo']), $titulo)) {
            $errors = MainCtrl::pushAssoc($errors, 'error_titulo', '<i class="fas fa-exclamation-triangle"></i>Este Título ya existe');
        }

        if (empty($input['categoria'])) {
            $errors = MainCtrl::pushAssoc($errors, 'error_tema_id', '<i class="fas fa-exclamation-triangle"></i>Elige una categoría');
        }

        if (!isset($input['omitir-portada'])) {
            if (empty($input['file']['upload']['name'])) {
                $errors = MainCtrl::pushAssoc($errors, 'error_imagen', '<i class="fas fa-exclamation-triangle"></i>No ingresaste ningún archivo');
            }
        }

        return $errors;
    }

    public function process($params) {
        $model = new NuevanoticiaModel();
        $adjuntos = new Adjuntos();
        $errors = $this->validaEntrada($params);
        if (count($errors) === 0) {
            unset($params['submit-nuevo']);
            $params_img['file'] = $params['file'];
            $params_img['metaParent'] = 'portada';
            if (!isset($params['omitir-portada'])) {
                $params_img['file'] = $params['file'];
                $params_img['metaParent'] = 'portada';
                $returnAdjuntos = $adjuntos->adjuntar('portada', $params_img);
            } else {
                $returnAdjuntos['exito'] = 'permit';
            }
            if (!empty($returnAdjuntos)) {
                if (!empty($returnAdjuntos['error'])) {
                    $errors = $returnAdjuntos['error'];
                } elseif (!empty($returnAdjuntos['exito'])) {

                    if (!isset($params['omitir-portada'])) {
                        $tb_galeria_id = $model->sendData('galeria', $returnAdjuntos['exito']);
                    } else {
                        $tb_galeria_id = 1;
                    }

                    $params['tipo'] = 'noticia';
                    $params['tb_usuarios_id'] = $_SESSION['id'];
                    $params['entradas_titulo'] = htmlentities($params['entradas_titulo'], ENT_QUOTES, "UTF-8");
                    $params['resumen'] = MainCtrl::resumir($params['cuerpo']);
                    $params['cuerpo'] = htmlentities($params['cuerpo'], ENT_QUOTES, "UTF-8");
                    $params['publicado'] = 0;
                    $params['tb_galeria_id'] = $tb_galeria_id;

                    unset($params['omitir-portada'], $params['file']);
                    $model->sendData('entradas', $params);

                    header("Location: " . URL_BASE . "entrynoticias/");
                    exit;
                }
            }
        }
        return $errors;
    }
}