<?php
namespace Controller;

use View\Render;
//use Middleware;
use Model\{
    Database,
    EducadoresModel
};
class Educadores extends Render {
    public function GET_handler($route, $params, $js) {
        // verifica credenciales
        // $credenciales = new Middleware;
        // $credenciales->Credencial('login');
        // permisos
        // if ($_SESSION['propio']['permisos'][0] !== '1') {
        //     header("Location: " . URL_BASE);
        //     exit;
        // }
        return $this->renderView($route, $params[0], $params[1], $params[2], $params[3], $js);
    }



    public function values($params) {
        $clase = explode('\\', __CLASS__);
        $buildClass = '\\Model\\' . ucfirst($clase[1]) . 'Model';
        $load = new $buildClass();
        $valores = $load->fetchData($params);
        return $valores;
    }

//////////////////// Funciones secundarias

    //public function process($params) {
    //  exit;
    //}
}