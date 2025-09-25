<?php

namespace Router;

class RouteList {

    private array $params;
    private array $js;
    private array $get;
    protected array $routes = [];

    public function __construct($default_styles = [], $default_js = [], $default_GET = []) { // construír defaults si es que existen
        !empty($default_styles) ? $this->params = $default_styles : $this->params = [];
        !empty($default_js) ? $this->js = $default_js : $this->js = [];
        !empty($default_GET) ? $this->get = $default_GET : $this->get = [];
    }

    public function add($method, $path, $callback, $params, $js = []) { // agrega ruta al listado y acomoda parámetros para lectura de Router
        empty($js) ? $js = $this->js : $js = array_merge($this->js, $js); //agregar default js
        if (!is_callable($callback)) { // el callback de la ruta NO es función
            empty($params[1][1]) ? $params[1][1] = $this->params : $params[1][1] = array_merge($this->params, $params[1][1]); // agregar estilos default
            empty($params[2][0]) ? $params[2][0] = $this->get : $params[2][0] = array_merge($this->get, $params[2][0]); // agregar GET default
        }
        $this->routes[$method][$path] = [$callback, $params, $js];
    }

    public function fetchRoutes() { // obtiene rutas existentes
        return $this->routes;
    }
}