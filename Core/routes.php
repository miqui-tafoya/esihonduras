<?php
// Instancia Router
use Router\RouteList;

// Instancia Controllers
use Controller\MainCtrl;

// Instancia Globales
$default_styles = ['fonts/css/all.min', 'html'];
$default_GET = [];
$default_js = ['jquery-3.6.1.min', 'dir', 'general', 'menu', 'modal'];

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
        '/',
        'home',
        ['main',
                ['Inicio ESI Honduras', []],
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
