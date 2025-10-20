<?php

namespace Controller;

class MainCtrl {
  public function fetchController($route, $method, $querystring) {
    $route[1][1]['route'] = $route[0]; // agrega ruta a MetaParams
    if ($method == 'get') { // GET
      if (!empty($route[1][2])) {
        if (!array_key_exists('query', $route[1][2][1])) { // la ruta NO tiene query dinámico
          $i = 0;
          foreach ($route[1][2][0] as $key => $value) { // obtiene valores GET Globales para esta ruta
            foreach ($value as $key2 => $value2) {
              $route[1][2][0][$key] = $this->fetchGlobalValues($key, $value);
              $i++;
            }
          }
          $route[1][2][1] = $this->fetchValues($route[0], $route[1][2][1]); // obtiene valores GET para esta ruta
          if (!empty($querystring)) {
            $i = 1;
            foreach ($querystring as $key => $value) {
              $valores = $this->fetchQueryStringValues($route[0], $key, $value); // obtiene valores GET del Query String para esta ruta
              $route[1][2][1][$key][0] = $value;
              if (!empty($valores)) {
                $route[1][2][1][$key][$i] = $valores;
              }
              $i++;
            }
          }
        } else { // la ruta SÍ tiene query dinámico
          $query = $route[1][2][1]['query'];
          $values = $this->fetchValues($route[0], $route[1][2][1], $query); // obtiene valores GET para query de ruta dinámica
          $clean = $route[1][2][1];
          $callback = function ($value, $key) use (&$clean) {
            if (is_numeric($key)) {
              unset($clean[$key]);
            }
          };
          array_walk($clean, $callback);
          $i = 0;
          foreach ($route[1][2][0] as $key => $value) { // obtiene valores GET para esta ruta
            foreach ($value as $key2 => $value2) {
              $route[1][2][0][$key] = $this->fetchGlobalValues($key, $value, $query);
              $route[1][2][0][$key]['query'] = $clean['query'];
              $i++;
            }
          }
          $route[1][2][1] = array_merge($values, $clean); // fusiona en un array los valores obtenidos y la orden del query original
        }
      }
      $buildClass = '\\Controller\\' . ucfirst($route[0]); // Construye Controlador para la ruta
      $selectedObject = new $buildClass;
      return $selectedObject->GET_handler($route[0], $route[1], $route[2]); // GET_handler(ruta, parámetros, javascript)
    } elseif ($method == 'post') { // POST
      if (!empty($route[1][2])) {
        if (!array_key_exists('query', $route[1][2][1])) { // la ruta NO tiene query dinámico
          $i = 0;
          foreach ($route[1][2][0] as $key => $value) { // obtiene valores GET Globales para esta ruta
            foreach ($value as $key2 => $value2) {
              $route[1][2][0][$key] = $this->fetchGlobalValues($key, $value);
              $i++;
            }
          }
          $route[1][2][1] = $this->fetchValues($route[0], $route[1][2][1]); // obtiene valores GET para esta ruta
          if (!empty($querystring)) {
            $i = 1;
            foreach ($querystring as $key => $value) {
              $valores = $this->fetchQueryStringValues($route[0], $key, $value); // obtiene valores GET del Query String para esta ruta
              $route[1][2][1][$key][0] = $value;
              if (!empty($valores)) {
                $route[1][2][1][$key][$i] = $valores;
              }
              $i++;
            }
          }
        } else { // la ruta SÍ tiene query dinámico
          $query = $route[1][2][1]['query'];
          $values = $this->fetchValues($route[0], $route[1][2][1], $query); // obtiene valores GET para query de ruta dinámica
          $clean = $route[1][2][1];
          $callback = function ($value, $key) use (&$clean) {
            if (is_numeric($key)) {
              unset($clean[$key]);
            }
          };
          array_walk($clean, $callback);
          $i = 0;
          foreach ($route[1][2][0] as $key => $value) { // obtiene valores GET para esta ruta
            foreach ($value as $key2 => $value2) {
              $route[1][2][0][$key] = $this->fetchGlobalValues($key, $value, $query);
              $route[1][2][0][$key]['query'] = $clean['query'];
              $i++;
            }
          }
          $route[1][2][1] = array_merge($values, $clean);
        }
      }
      $buildClass = '\\Controller\\' . ucfirst($route[0]); // Construye Controlador para la ruta
      $selectedObject = new $buildClass;
      return $selectedObject->POST_handler($route[0], $route[1], $route[2]); // POST_handler(ruta, parámetros, javascript)
    }
  }
  public function fetchValues($ctrl, $params = [], $query = null) {
    $buildClass = '\\Controller\\' . ucfirst($ctrl);
    $selectedObject = new $buildClass;
    $arr = $selectedObject->values($params, $query);
    return $arr;
  }
  public function fetchQueryStringValues($ctrl, $querystring, $queryvalue) {
    $buildClass = '\\Controller\\' . ucfirst($ctrl);
    $selectedObject = new $buildClass;
    $arr = $selectedObject->queryStringValues($querystring, $queryvalue);
    return $arr;
  }
  public function fetchGlobalValues($ctrl, $params = [], $query = null) {
    $buildClass = '\\Controller\\' . ucfirst($ctrl);
    $selectedObject = new $buildClass;
    $arr = $selectedObject->values($params, $query);
    return $arr;
  }
  public function validateModel($route, $path) {
    $buildClass = '\\Model\\' . ucfirst($route) . 'Model';
    $selectedObject = new $buildClass;
    return $selectedObject->validateId($path);
  }

  /////////////Funciones Personalizadas

  public static function pushAssoc($array, $key, $value) {
    $array[$key] = $value;
    return $array;
  }

  public static function arrayassoc_unique($multiArray) {
    $uniqueArray = array();

    foreach ($multiArray as $subArray) {

      if (!in_array($subArray, $uniqueArray)) {
        $uniqueArray[] = $subArray;
      }
    }
    return $uniqueArray;
  }

  public static function getRand($x, $num) {
    switch ($x) {
      case 'num':
        $characters = '0123456789';
        break;
      case 'char':
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_';
        break;
      case 'pass':
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_()?[]!$%#:;+=*';
        break;
      case 'captcha':
        $characters = '23456abcdefgHijkLmnprstUyz';
        break;
    }
    $randomChain = '';
    $max = strlen($characters) - 1;
    for ($i = 0; $i < $num; $i++) {
      $index = mt_rand(0, $max);
      $randomChain .= $characters[$index];
    }
    return $randomChain;
  }

  public static function clean($string) {
    $string = str_replace(' ', '_', $string);
    $string = str_replace('-', '_', $string);
    $dict = ['Š' => 'S', 'š' => 's', 'Ž' => 'Z', 'ž' => 'z', 'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'A', 'Ç' => 'C', 'È' => 'E', 'É' => 'E',
      'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U',
      'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'a', 'ç' => 'c',
      'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o',
      'ö' => 'o', 'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ý' => 'y', 'þ' => 'b', 'ÿ' => 'y'];
    $string = strtr($string, $dict);
    $string = preg_replace('/[^A-Za-z0-9_]/', '', $string);
    return $string;
  }
  public static function cleanAdjuntos($string) {
    $dict = ['Š' => 'S', 'š' => 's', 'Ž' => 'Z', 'ž' => 'z', 'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'A', 'Ç' => 'C', 'È' => 'E', 'É' => 'E',
      'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U',
      'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'a', 'ç' => 'c',
      'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o',
      'ö' => 'o', 'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ý' => 'y', 'þ' => 'b', 'ÿ' => 'y', '-' => '_', ',' => '_', ':' => '_', ';' => '_', '(' => '_', ')' => '_',
      '[' => '_', ']' => '_', '+' => '_', '@' => '_', '{' => '_', '}' => '_', '/' => '_', '\\' => '_', '´' => '_', '`' => '_', '¨' => '_', '^' => '_', '~' => '_', '#' => '_', '*' => '_'];
    $string = strtr($string, $dict);
    $string = preg_replace('/\s+/', '_', $string);
    $string = htmlentities($string, ENT_QUOTES, 'UTF-8');
    return $string;
  }

  /////////////Logout

  public static function logout() {
    session_start();
    session_unset();
    session_destroy();
  }
}