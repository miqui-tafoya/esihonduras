<?php
// Instancia Router
use Router\RouteList;

// Instancia Controllers
use Controller\MainCtrl;
use Controller\Captcha;
use Controller\Educadores;
use Controller\Madresypadres;
use Controller\Jovenes;
use Controller\Medios;
use Controller\Cargarmedio;

// Instancia Globales
$default_styles = ['start' => ['fonts/css/all.min', 'html', 'general', 'cabecera', 'footer', 'modal'], 'end' => ['mediaquery']];
$default_GET = [];
$default_js = ['start' => ['jquery-3.6.1.min', 'dir', 'menu', 'activePage'], 'end' => ['modal']];

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
                ['Error', ['error']],
                [[],
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
                [[],
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
                [[],
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
                [[],
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
                [[],
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
                [[],
                        []],
                []],
        []
);

$routeList->add(
        'get',
        '/educadores',
        'educadores',
        ['main',
                ['Quiénes Somos - Educadores', ['slideseducadores', 'educadores']],
                [[],
                        []],
                []],
        ['slideseducadores']
);

$routeList->add(
        'get',
        '/madresypadres',
        'madresypadres',
        ['main',
                ['Quiénes Somos - Madres y Padres', ['madresypadres', 'actividades']],
                [[],
                        []],
                []],
        ['actividadespadres']
);

$routeList->add(
        'get',
        '/jovenes',
        'jovenes',
        ['main',
                ['Quiénes Somos - Jóvenes', ['jovenes', 'actividades']],
                [[],
                        []],
                []],
        ['actividadesjovenes']
);

$routeList->add(
        'get',
        '/faq',
        'faq',
        ['main',
                ['Preguntas Frecuentes', ['faq']],
                [[],
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
                [[],
                        ['categorias', 'publicaciones']],
                []],
        []
);

$routeList->add(
        'post',
        '/informacionpublica',
        'informacionpublica',
        ['main',
                ['Información Pública', ['infopublica', 'paginado']],
                [[],
                        ['categorias']],
                $_POST],
        ['informacionPublicaHandler']
);

$routeList->add(
        'get',
        '/multimedia',
        'multimedia',
        ['main',
                ['Multimedia', ['infopublica', 'slider', 'multimedia', 'noticias']],
                [[],
                        ['audio', 'video', 'publicaciones']],
                []],
        ['slider']
);

$routeList->add(
        'get',
        '/noticias',
        'noticias',
        ['main',
                ['Noticias', ['noticias']],
                [[],
                        ['hoy', 'destacados', 'noticias', 'categorias']],
                []],
        []
);

$routeList->add(
        'get',
        '/archivo',
        'archivo',
        ['main',
                ['Archivo', ['infopublica', 'paginado']],
                [[],
                        []],
                []],
        ['archivoHandler']
);

$routeList->add(
        'get',
        '/categoria/',
        'categoria',
        ['main',
                ['Categiría', ['infopublica', 'paginado', 'entrada']],
                [[],
                        ['categoria', 'entradas']],
                []],
        ['categoriasHandler']
);

$routeList->add(
        'get',
        '/entrada/',
        'entrada',
        ['main',
                ['', ['entrada', 'posts']],
                [[],
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
                [[],
                        []],
                []],
        []
);

$routeList->add(
        'get',
        '/login',
        'login',
        ['main',
                ['Login Administrativo', ['login']],
                [[],
                        []],
                []],
        ['login']
);

$routeList->add(
        'post',
        '/login',
        'login',
        ['main',
                ['Login Administrativo', ['login']],
                [[],
                        []],
                $_POST],
        ['login']
);

$routeList->add(
        'get',
        '/dashboard',
        'dashboard',
        ['admin',
                ['Administración', ['admin']],
                [[],
                        []],
                []],
        ['admin']
);

$routeList->add(
        'get',
        '/entrynoticias/',
        'entrynoticias',
        ['admin',
                ['Administración de Noticias', ['admin']],
                [[],
                        ['paginado', 'posts']],
                []],
        ['admin']
);

$routeList->add(
        'post',
        '/entrynoticias/',
        'entrynoticias',
        ['admin',
                ['Administración de Noticias', ['admin']],
                [[],
                        ['paginado', 'posts']],
                $_POST],
        ['admin']
);

$routeList->add(
        'get',
        '/nuevanoticia',
        'nuevanoticia',
        ['admin',
                ['', ['admin', 'ckstyle', '../vendor/ckeditor5/ckeditor5']],
                [[],
                        ['categorias']],
                []],
        ['admin', 'session']
);

$routeList->add(
        'post',
        '/nuevanoticia',
        'nuevanoticia',
        ['admin',
                ['', ['admin', 'ckstyle', '../vendor/ckeditor5/ckeditor5']],
                [[],
                        ['categorias']],
                $_POST],
        ['admin', 'session']
);

$routeList->add(
        'get',
        '/editarnoticia/',
        'editarnoticia',
        ['admin',
                ['', ['admin', 'ckstyle', '../vendor/ckeditor5/ckeditor5']],
                [[],
                        ['categorias', 'noticia']],
                []],
        ['admin', 'session']
);

$routeList->add(
        'post',
        '/editarnoticia/',
        'editarnoticia',
        ['admin',
                ['', ['admin', 'ckstyle', '../vendor/ckeditor5/ckeditor5']],
                [[],
                        ['categorias', 'noticia']],
                $_POST],
        ['admin', 'session']
);

$routeList->add(
        'get',
        '/entryinfopublica/',
        'entryinfopublica',
        ['admin',
                ['Administración de Información Pública', ['admin']],
                [[],
                        ['paginado', 'posts']],
                []],
        ['admin']
);

$routeList->add(
        'post',
        '/entryinfopublica/',
        'entryinfopublica',
        ['admin',
                ['Administración de Información Pública', ['admin']],
                [[],
                        ['paginado', 'posts']],
                $_POST],
        ['admin']
);

$routeList->add(
        'get',
        '/nuevainfopublica',
        'nuevainfopublica',
        ['admin',
                ['', ['admin', 'ckstyle', '../vendor/ckeditor5/ckeditor5']],
                [[],
                        ['categorias']],
                []],
        ['admin', 'session']
);

$routeList->add(
        'post',
        '/nuevainfopublica',
        'nuevainfopublica',
        ['admin',
                ['', ['admin', 'ckstyle', '../vendor/ckeditor5/ckeditor5']],
                [[],
                        ['categorias']],
                $_POST],
        ['admin', 'session']
);

$routeList->add(
        'get',
        '/editarinfopublica/',
        'editarinfopublica',
        ['admin',
                ['', ['admin', 'ckstyle', '../vendor/ckeditor5/ckeditor5']],
                [[],
                        ['categorias', 'publica']],
                []],
        ['admin', 'session']
);

$routeList->add(
        'post',
        '/editarinfopublica/',
        'editarinfopublica',
        ['admin',
                ['', ['admin', 'ckstyle', '../vendor/ckeditor5/ckeditor5']],
                [[],
                        ['categorias', 'publica']],
                $_POST],
        ['admin', 'session']
);

$routeList->add(
        'get',
        '/entrycategorias/',
        'entrycategorias',
        ['admin',
                ['', ['admin']],
                [[],
                        ['paginado', 'categorias']],
                []],
        ['admin']
);

$routeList->add(
        'post',
        '/entrycategorias/',
        'entrycategorias',
        ['admin',
                ['', ['admin']],
                [[],
                        ['paginado', 'categorias']],
                $_POST],
        ['admin']
);

$routeList->add(
        'get',
        '/nuevacategoria',
        'nuevacategoria',
        ['admin',
                ['', ['admin']],
                [[],
                        []],
                []],
        ['admin']
);

$routeList->add(
        'post',
        '/nuevacategoria',
        'nuevacategoria',
        ['admin',
                ['', ['admin']],
                [[],
                        []],
                $_POST],
        ['admin']
);

$routeList->add(
        'get',
        '/editarcategoria/',
        'editarcategoria',
        ['admin',
                ['', ['admin']],
                [[],
                        ['categoria']],
                []],
        ['admin']
);

$routeList->add(
        'post',
        '/editarcategoria/',
        'editarcategoria',
        ['admin',
                ['', ['admin']],
                [[],
                        ['categoria']],
                $_POST],
        ['admin']
);

$routeList->add(
        'get',
        '/videos',
        'videos',
        ['admin',
                ['', ['admin']],
                [[],
                        ['videos']],
                []],
        ['admin']
);

$routeList->add(
        'post',
        '/videos',
        'videos',
        ['admin',
                ['', ['admin']],
                [[],
                        ['videos']],
                $_POST],
        ['admin']
);

$routeList->add(
        'get',
        '/podcast',
        'podcast',
        ['admin',
                ['', ['admin']],
                [[],
                        ['podcast']],
                []],
        ['admin']
);

$routeList->add(
        'post',
        '/podcast',
        'podcast',
        ['admin',
                ['', ['admin']],
                [[],
                        ['podcast']],
                $_POST],
        ['admin']
);

$routeList->add(
        'get',
        '/medios/',
        'medios',
        ['admin',
                ['', ['admin']],
                [[],
                        ['paginado', 'medios']],
                []],
        ['admin']
);

$routeList->add(
        'post',
        '/medios/',
        'medios',
        ['admin',
                ['', ['admin']],
                [[],
                        ['paginado', 'medios']],
                $_POST],
        ['admin']
);

$routeList->add(
        'get',
        '/mapa/',
        'mapa',
        ['admin',
                ['', ['admin']],
                [[],
                        ['paginado', 'mapa']],
                []],
        ['admin']
);

$routeList->add(
        'post',
        '/mapa/',
        'mapa',
        ['admin',
                ['', ['admin']],
                [[],
                        ['paginado', 'mapa']],
                $_POST],
        ['admin']
);

$routeList->add(
        'get',
        '/nuevomapa',
        'nuevomapa',
        ['admin',
                ['', ['admin']],
                [[],
                        []],
                []],
        ['admin']
);

$routeList->add(
        'post',
        '/nuevomapa',
        'nuevomapa',
        ['admin',
                ['', ['admin']],
                [[],
                        []],
                $_POST],
        ['admin']
);

$routeList->add(
        'get',
        '/editarmapa/',
        'editarmapa',
        ['admin',
                ['', ['admin']],
                [[],
                        ['centro']],
                []],
        ['admin']
);

$routeList->add(
        'post',
        '/editarmapa/',
        'editarmapa',
        ['admin',
                ['', ['admin']],
                [[],
                        ['centro']],
                $_POST],
        ['admin']
);

$routeList->add(
        'get',
        '/usuarios/',
        'usuarios',
        ['admin',
                ['', ['admin']],
                [[],
                        ['paginado', 'usuarios']],
                []],
        ['admin']
);

$routeList->add(
        'post',
        '/usuarios/',
        'usuarios',
        ['admin',
                ['', ['admin']],
                [[],
                        ['paginado', 'usuarios']],
                $_POST],
        ['admin']
);

$routeList->add(
        'get',
        '/nuevousuario',
        'nuevousuario',
        ['admin',
                ['', ['admin']],
                [[],
                        []],
                []],
        ['admin']
);

$routeList->add(
        'post',
        '/nuevousuario',
        'nuevousuario',
        ['admin',
                ['', ['admin']],
                [[],
                        []],
                $_POST],
        ['admin']
);

$routeList->add(
        'get',
        '/editarusuario/',
        'editarusuario',
        ['admin',
                ['', ['admin']],
                [[],
                        ['usuario']],
                []],
        ['admin']
);

$routeList->add(
        'post',
        '/editarusuario/',
        'editarusuario',
        ['admin',
                ['', ['admin']],
                [[],
                        ['usuario']],
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
                $post = new Medios;
                $post->POST_handler_AJAX();
        },
        ['', '', [], []],
        []
);

$routeList->add(
        'post',
        '/subirimagen',
        function () {
                $post = new Cargarmedio;
                $post->POST_handler_AJAX();
        },
        ['', '', [], []],
        []
);

$routeList->add(
        'get',
        '/slideseducadores',
        function () {
                $post = new Educadores;
                $post->GET_AJAX_handler();
        },
        ['', '', [], []],
        []
);

$routeList->add(
        'get',
        '/slidespadres',
        function () {
                $post = new Madresypadres();
                $post->GET_AJAX_handler();
        },
        ['', '', [], []],
        []
);

$routeList->add(
        'get',
        '/slidesjovenes',
        function () {
                $post = new Jovenes();
                $post->GET_AJAX_handler();
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

// API

$routeList->add(
        'get',
        '/apientradas',
        'apientradas',
        ['',
                ['', ['']],
                [[],
                        []],
                []],
        []
);

$routeList->add(
        'get',
        '/apicategorias',
        'apicategorias',
        ['',
                ['', ['']],
                [[],
                        []],
                []],
        []
);

$routeList->add(
        'post',
        '/apiinfopublica',
        'apiinfopublica',
        ['',
                ['', ['']],
                [[],
                        []],
                $_POST],
        []
);