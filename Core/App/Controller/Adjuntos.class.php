<?php

namespace Controller;

use Controller\MainCtrl;

class Adjuntos {

    public function adjuntar($tipo, $params) {
        $randstr = MainCtrl::getRand('char', 4);
        $errorsAdj = [];
        $return = [];
        $base_dir = APP_ROOT . DIRECTORY_SEPARATOR . "Public" . DIRECTORY_SEPARATOR . "recursos" . DIRECTORY_SEPARATOR;
        switch ($tipo) {
            case 'portada':
                $target_dir = $base_dir . 'portadas';
                $allow = ['jpg', 'jpeg', 'png', 'webp'];
                break;
            default:
                $target_dir = $base_dir . 'entradas';
                $allow = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
                break;
        }
        switch ($params['file']['upload']['error']) {
            case 1:
                $errorsAdj = MainCtrl::pushAssoc($errorsAdj, 'error_archivo', '<i class="fas fa-exclamation-triangle"></i>El archivo es demasiado grande');
                break;
            case 2:
                $errorsAdj = MainCtrl::pushAssoc($errorsAdj, 'error_archivo', '<i class="fas fa-exclamation-triangle"></i>El archivo es demasiado grande');
                break;
            case 3:
                $errorsAdj = MainCtrl::pushAssoc($errorsAdj, 'error_archivo', '<i class="fas fa-exclamation-triangle"></i>Archivo parcialmente subido, con error');
                break;
            case 4:
                $errorsAdj = MainCtrl::pushAssoc($errorsAdj, 'error_archivo', '<i class="fas fa-exclamation-triangle"></i>No adjuntaste ningún archivo');
                break;
            case 6:
                $errorsAdj = MainCtrl::pushAssoc($errorsAdj, 'error_archivo', '<i class="fas fa-exclamation-triangle"></i>Error en directorio temporal');
                break;
            case 7:
                $errorsAdj = MainCtrl::pushAssoc($errorsAdj, 'error_archivo', '<i class="fas fa-exclamation-triangle"></i>Error en permisos de escritura del directorio objetivo');
                break;
            case 8:
                $errorsAdj = MainCtrl::pushAssoc($errorsAdj, 'error_archivo', '<i class="fas fa-exclamation-triangle"></i>Imposible subir archivo');
                break;
        }

        if (!isset($errorsAdj['error_archivo'])) {
            $file = basename($params['file']['upload']['name']);
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            $file_name = MainCtrl::cleanAdjuntos($params["file"]['upload']["name"]);
            $file_name = preg_replace('/\.(?:[0-9a-z]+)$/', '', $file_name);
            $file_name = str_replace('.', '_', $file_name);
            $file_name = substr($file_name, 0, 10);
            $new_file = date('dmy') . $randstr . $file_name . '.' . $ext;
            $target_file = $target_dir . DIRECTORY_SEPARATOR . $new_file;
            $uploadOk = 1;
            if (!in_array($ext, $allow)) {
                $errorsAdj = MainCtrl::pushAssoc($errorsAdj, 'error_archivo_tipo', '<i class="fas fa-exclamation-triangle"></i>Formato de archivo inválido en <b>' . $params['file']['upload']['name'] . '. Revisa formatos permitidos</b>');
                $uploadOk = 0;
            }
            if ($params['file']['upload']['size'] >= 11000000) {
                $errorsAdj = MainCtrl::pushAssoc($errorsAdj, 'error_archivo_size', '<i class="fas fa-exclamation-triangle"></i>Tamaño de archivo excedido en <b>' . $params['file']['upload']['name'] . '</b>');
                $uploadOk = 0;
            }
            if ($uploadOk !== 0) {
                if (move_uploaded_file($params["file"]['upload']["tmp_name"], $target_file)) {
                    chmod($target_file, 0775);
                    $file_params['galeria_url'] = $new_file;
                    $file_params['metaParent'] = $params['metaParent'];
                } else {
                    $errorsAdj = MainCtrl::pushAssoc($errorsAdj, 'error_archivo', '<i class="fas fa-exclamation-triangle"></i>Error desconocido al subir archivo.');
                }
            }
        }
        if (!empty($errorsAdj)) {
            $return['error'] = $errorsAdj;
        } else {
            $return['exito'] = $file_params;
        }
        return $return;
    }
}
?>