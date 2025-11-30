<?php
// Instancia Router
use Router\RouteList;

// Instancia Controllers
use Controller\MainCtrl;
use Controller\Captcha;

// Instancia Globales
$default_styles = ['start' => ['fonts/css/all.min', 'html', 'general', 'cabecera', 'footer'], 'end' => ['mediaquery']];
$default_GET = [];
$default_js = ['start' => ['dir', 'menu', 'activePage'], 'end' => []];

$routeList = new RouteList($default_styles, $default_js, $default_GET);

/*
  estructura: add( HTTP method, URI(path), callback, parameters: [layout, [window-title , [css]], GET [[módulos], [local]], POST], [javascript] )

  HTTP method,
  URI(path),
  callback,
  [layout, 
         [window-title , [css]], 
         [[módulos], [local]], 
         POST],
  [javascript]
*/

$routeList->add(
        'get',
        '/error/',
        'error',
        ['error',
                ['Error', []],
                [['head' => [], 'footer' => []],
                        []],
                []],
        []
);

$routeList->add(
        'get',
        '/',
        'home',
        ['main',
                ['Inicio ESI Honduras', ['home']],
                [['head' => [], 'footer' => []],
                        []],
                []],
        []
);

$routeList->add(
        'get',
        '/centrosdesalud',
        'centrosdesalud',
        ['main',
                ['Centros de Salud', ['centros']],
                [['head' => [], 'footer' => []],
                        []],
                []],
        []
);

$routeList->add(
        'get',
        '/regionsalud/',
        'regionsalud',
        ['main',
                ['Centros de Salud', ['centros', 'leaflet']],
                [['head' => [], 'footer' => []],
                        ['centros']],
                []],
        ['leaflet', 'regionsaludHandler']
);

$routeList->add(
        'get',
        '/contacto',
        'contacto',
        ['main',
                ['Contacto', ['contacto']],
                [['head' => [], 'footer' => []],
                        []],
                []],
        []
);

$routeList->add(
        'get',
        '/quienessomos',
        'quienessomos',
        ['main',
                ['Quiénes Somos', ['quienes']],
                [['head' => [], 'footer' => []],
                        []],
                []],
        []
);

$routeList->add(
        'get',
        '/educadores',
        'educadores',
        ['main',
                ['Quiénes Somos - Educadores', []],
                [['head' => [], 'footer' => []],
                        []],
                []],
        []
);

$routeList->add(
        'get',
        '/madresypadres',
        'madresypadres',
        ['main',
                ['Quiénes Somos - Madres y Padres', []],
                [['head' => [], 'footer' => []],
                        []],
                []],
        []
);

$routeList->add(
        'get',
        '/jovenes',
        'jovenes',
        ['main',
                ['Quiénes Somos - Jóvenes', []],
                [['head' => [], 'footer' => []],
                        []],
                []],
        []
);

$routeList->add(
        'get',
        '/faq',
        'faq',
        ['main',
                ['Preguntas Frecuentes', ['faq']],
                [['head' => [], 'footer' => []],
                        []],
                []],
        ['acordeon']
);

$routeList->add(
        'get',
        '/informacionpublica',
        'informacionpublica',
        ['main',
                ['Información Pública', ['infopublica']],
                [['head' => [], 'footer' => []],
                        ['categorias', 'publicaciones']],
                []],
        []
);

$routeList->add(
        'post',
        '/informacionpublica',
        'informacionpublica',
        ['main',
                ['Información Pública', ['infopublica']],
                [['head' => [], 'footer' => []],
                        ['categorias', 'publicaciones']],
                $_POST],
        ['informacionPublicaHandler']
);

$routeList->add(
        'get',
        '/multimedia',
        'multimedia',
        ['main',
                ['Multimedia', []],
                [['head' => [], 'footer' => []],
                        []],
                []],
        []
);

$routeList->add(
        'get',
        '/noticias',
        'noticias',
        ['main',
                ['Noticias', ['noticias']],
                [['head' => [], 'footer' => []],
                        ['hoy', 'destacados', 'noticias', 'categorias']],
                []],
        []
);

$routeList->add(
        'get',
        '/categoria/',
        'categoria',
        ['main',
                ['Categiría', []],
                [['head' => [], 'footer' => []],
                        ['categoria', 'entradas']],
                []],
        []
);

$routeList->add(
        'get',
        '/entrada/',
        'entrada',
        ['main',
                ['', ['entrada']],
                [['head' => [], 'footer' => []],
                        ['entrada']],
                []],
        []
);

$routeList->add(
        'get',
        '/saludsexual',
        'saludsexual',
        ['main',
                ['Salud Sexual', ['saludsexual']],
                [['head' => [], 'footer' => []],
                        []],
                []],
        []
);

$routeList->add(
        'get',
        '/login',
        'login',
        ['main',
                ['Login Administrativo', []],
                [['head' => [], 'footer' => []],
                        []],
                []],
        ['login']
);

$routeList->add(
        'post',
        '/login',
        'login',
        ['main',
                ['Login Administrativo', []],
                [['head' => [], 'footer' => []],
                        []],
                $_POST],
        ['login']
);

// pseudorutas y/o llamadas AJAX

$routeList->add(
        'get',
        '/captcha',
        function () {
                $captcha = new Captcha;
                $captcha->GET_captcha();
        },
        ['', '', [], []],
        []
);

$routeList->add(
        'get',
        '/logout',
        function () {
                MainCtrl::logout();
                header('Location: ' . URL_BASE);
        },
        ['', ['', []], [[], []], []],
        []
);

$routeList->add(
        'post',
        '/refresh',
        function () {
                session_start();
        },
        ['', ['', []], [[], []], []],
        []
);

$routeList->add(
        'post',
        '/exploradormedios',
        function () {
                // $post = new Medios;
                // $post->POST_handler_AJAX();
        },
        ['', '', [], []],
        []
);

$routeList->add(
        'get',
        '/temas',
        function () {
                header('Location:' . URL_BASE . 'temas/1');
                exit;
        },
        ['', '', [], []],
        []
);