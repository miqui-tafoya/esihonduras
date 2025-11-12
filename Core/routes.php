<?php
// Instancia Router
use Router\RouteList;

// Instancia Controllers
use Controller\MainCtrl;

// Instancia Globales
$default_styles = ['fonts/css/all.min', 'html','general','cabecera','footer','mediaquery'];
$default_GET = [];
$default_js = ['dir', 'menu'];

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
                ['Centros de Salud', []],
                [['head' => [], 'footer' => []],
                        []],
                []],
        []
);

$routeList->add(
        'get',
        '/contacto',
        'contacto',
        ['main',
                ['Contacto', []],
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
                ['Quiénes Somos', []],
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
                ['Preguntas Frecuentes', []],
                [['head' => [], 'footer' => []],
                        []],
                []],
        []
);

$routeList->add(
        'get',
        '/informacionpublica',
        'informacionpublica',
        ['main',
                ['Información Pública', []],
                [['head' => [], 'footer' => []],
                        []],
                []],
        []
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
                ['Noticias', []],
                [['head' => [], 'footer' => []],
                        []],
                []],
        []
);

$routeList->add(
        'get',
        '/saludsexual',
        'saludsexual',
        ['main',
                ['Salud Sexual', []],
                [['head' => [], 'footer' => []],
                        []],
                []],
        []
);

$routeList->add(
        'get',
        '/pag/',
        'pag',
        ['portada',
                ['', ['jquery.bbslider', 'portada', 'entradas', 'media-query', 'ads']],
                [['menu' => ['taxonomia', 'categorias', 'legal'], 'head' => ['pagina'], 'descubre' => ['discover', 'comic'], 'footer' => ['top']],
                        ['pagina']],
                []],
        ['share', 'ads']
);

$routeList->add(
        'post',
        '/act',
        'act',
        ['simple',
                ['', ['jquery.bbslider', 'portada', 'entradas', 'media-query']],
                [['menu' => ['taxonomia', 'categorias', 'legal'], 'head' => ['pagina'], 'footer' => []],
                        []],
                $_POST],
        []
);


$routeList->add(
        'post',
        '/entr/',
        'entr',
        ['admin',
                ['', ['jquery.bbslider', 'portada', 'entradas', 'admin', 'media-query']],
                [['menu' => ['taxonomia', 'categorias', 'legal'], 'head' => ['pagina'], 'footer' => []],
                        ['paginado', 'posts', 'staff']],
                $_POST],
        ['admin']
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
