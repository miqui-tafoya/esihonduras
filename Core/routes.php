<?php
/**
 * Configuración de Rutas
 *
 * Aquí se definen todas las rutas existentes de tu proyecto.
 *
 * TIPOS DE RUTAS PERMITIDAS POR PHP-ALFv1:
 * - Ruta dinámica para errores
 * - Ruta estática GET/POST
 * - Ruta dinámica GET/POST
 * - Pseudoruta GET/POST con función que llama método AJAX de Controlador
 * - Pseudoruta GET/POST con función declarada por el usuario
 * - Endpoint GET/POST
 *
 * ESTRUCTURA DEL MÉTODO add():
 *
 * Sintaxis: add(HTTP method, URI(path), callback, parameters, javascript)
 *
 * Parámetros:
 * - HTTP method: 'get' o 'post'
 * - URI(path): '/ruta' para rutas estáticas, o '/ruta/' para rutas dinámicas
 * - callback: string (nombre de MVC a invocar) o callable (función anónima).
 *   Aquí se registra el nombre que el framework buscará en Controller, Model y View
 * - parameters: [layout, [Título de ventana, [css]], [[propiedades de módulos], [propiedades locales]]]
 *   Los layouts se registran en Render y se crean sus archivos correspondientes en Core/View/Layouts
 * - javascript: array de scripts específicos de la ruta
 *
 * Formato legible:
 * $routeList->add(
 *     'método',                                 // HTTP method (get o post)
 *     '/ruta',                                  // URI
 *     'MVC',                                    // callback
 *     ['layout',                                // layout a usar
 *         ['Título de ventana', ['css1', ...]], // título y estilos específicos (nombres de archivos sin la extensión .css)
 *         [['módulo' => ['propiedad', ...]],    // módulos GET
 *          ['propiedad', ...]]                  // propiedades locales
 *     ],
 *     ['script1', ...]                    // scripts específicos (nombres de archivos sin la extensión .js)
 * );
 * 
 * NOTA IMPORTANTE:
 * Las rutas con formularios, por ejemplo, deben tener sus dos rutas: la ruta get y la ruta post.
 *
 * EJEMPLOS DE USO:
 *
 * Ruta estática GET:
 * $routeList->add(
 *      'get',
 *      '/contacto',
 *      'contacto',
 *      ['layout_simple',
 *           ['Contáctanos', ['estilos-contacto', 'estilos-formularios']],
 *           [['head' => ['usuario', 'fecha'], ['footer' => ['usuario', 'fecha']],
 *            ['directorio', 'nombres', 'apellidos']]
 *      ],
 *      ['script-enviar']
 * );
 *
 * Ruta estática POST:
 * $routeList->add(
 *      'post',
 *      '/contacto',
 *      'contacto',
 *      ['layout_simple',
 *           ['Contáctanos', ['estilos-contacto', 'estilos-formularios']],
 *           [['head' => ['usuario', 'fecha'], ['footer' => ['usuario', 'fecha']],
 *            ['directorio', 'nombres', 'apellidos']]
 *      ],
 *      ['script-enviar']
 * );
 *
 * Ruta dinámica GET (con parámetro):
 * $routeList->add('get', '/usuario/{id}', 'usuario', ['main', ['Usuario', []], [[],[]]], []);
 *
 * Pseudoruta con función (AJAX):
 * $routeList->add('post', '/api/guardar', function() {
 *     MainCtrl::guardarDatos();
 * }, ['', ['', []], [[],[]]], []);
 *
 * - Instancia Controllers
 *   Aquí se hace referencia a aquellos controladores que sean requerimiento para
 *   métodos utilizados en las pseudorutas, por ejemplo, para llamadas AJAX.
 *
 * - Instancia Globales
 *
 *   default_styles: Define hojas de estilo globales con dos posiciones ('start' y 'end').
 *   Orden de carga: 'start' → estilos específicos de ruta → 'end'.
 *   Útil para librerías como FontAwesome (inicio) o Media Queries (final).
 *   Ruta base: Public/styles
 *   Ejemplo: 'fonts/css/all.min' (sin extensión .css)
 *   $default_styles = ['start' => ['fonts/css/all.min', 'html'], 'end' => ['media-query']];
 *
 *   default_GET: Propiedades globales requeridas en todo el sistema.
 *   Deben estar registradas en Render y en sus respectivas clases.
 *   Ejemplo: ['head' => ['foo'], 'footer' => ['bar']] invoca las propiedades
 *   'foo' y 'bar' de los Controladores-Modelo 'Head' y 'Footer'.
 *
 *   default_js: Define scripts globales con dos posiciones ('start' y 'end').
 *   Orden de carga: 'start' → scripts específicos de ruta → 'end'.
 *   Útil para librerías como jQuery que deben cargarse primero.
 *   Ruta base: Public/js
 *   Ejemplo: 'dir/script' (sin extensión .js)
 *   $default_js = ['start' => ['jquery-3.6.1.min'], 'end' => ['script1-final', 'script2-final']];
 */

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

$routeList->add(
        'get',
        '/error/',
        'error',
        ['error',
                ['Error', ['error']],
                [[],
                        []]],
        []
);

$routeList->add(
        'get',
        '/',
        'home',
        ['main',
                ['Inicio ESI Honduras', ['home']],
                [[],
                        []]],
        ['home']
);

$routeList->add(
        'get',
        '/centrosdesalud',
        'centrosdesalud',
        ['main',
                ['Centros de Salud', ['centros']],
                [[],
                        []]],
        []
);

$routeList->add(
        'get',
        '/regionsalud/',
        'regionsalud',
        ['main',
                ['Centros de Salud', ['centros', 'leaflet']],
                [[],
                        ['centros']]],
        ['leaflet', 'regionsaludHandler']
);

$routeList->add(
        'get',
        '/contacto',
        'contacto',
        ['main',
                ['Contacto', ['contacto']],
                [[],
                        []]],
        []
);

$routeList->add(
        'get',
        '/quienessomos',
        'quienessomos',
        ['main',
                ['Quiénes Somos', ['quienes']],
                [[],
                        []]],
        []
);

$routeList->add(
        'get',
        '/educadores',
        'educadores',
        ['main',
                ['Quiénes Somos - Educadores', ['slideseducadores', 'educadores']],
                [[],
                        []]],
        ['slideseducadores']
);

$routeList->add(
        'get',
        '/madresypadres',
        'madresypadres',
        ['main',
                ['Quiénes Somos - Madres y Padres', ['madresypadres', 'actividades']],
                [[],
                        []]],
        ['actividadespadres']
);

$routeList->add(
        'get',
        '/jovenes',
        'jovenes',
        ['main',
                ['Quiénes Somos - Jóvenes', ['jovenes', 'actividades']],
                [[],
                        []]],
        ['actividadesjovenes']
);

$routeList->add(
        'get',
        '/faq',
        'faq',
        ['main',
                ['Preguntas Frecuentes', ['faq']],
                [[],
                        []]],
        ['acordeon']
);

$routeList->add(
        'get',
        '/informacionpublica',
        'informacionpublica',
        ['main',
                ['Información Pública', ['infopublica']],
                [[],
                        ['categorias', 'publicaciones']]],
        []
);

$routeList->add(
        'post',
        '/informacionpublica',
        'informacionpublica',
        ['main',
                ['Información Pública', ['infopublica', 'paginado']],
                [[],
                        ['categorias']]],
        ['informacionPublicaHandler']
);

$routeList->add(
        'get',
        '/multimedia',
        'multimedia',
        ['main',
                ['Multimedia', ['infopublica', 'slider', 'multimedia', 'noticias']],
                [[],
                        ['audio', 'video', 'publicaciones']]],
        ['slider']
);

$routeList->add(
        'get',
        '/noticias',
        'noticias',
        ['main',
                ['Noticias', ['noticias']],
                [[],
                        ['hoy', 'destacados', 'noticias', 'categorias']]],
        []
);

$routeList->add(
        'get',
        '/archivo',
        'archivo',
        ['main',
                ['Archivo', ['infopublica', 'paginado']],
                [[],
                        []]],
        ['archivoHandler']
);

$routeList->add(
        'get',
        '/categoria/',
        'categoria',
        ['main',
                ['Categiría', ['infopublica', 'paginado', 'entrada']],
                [[],
                        ['categoria', 'entradas']]],
        ['categoriasHandler']
);

$routeList->add(
        'get',
        '/entrada/',
        'entrada',
        ['main',
                ['', ['entrada', 'posts']],
                [[],
                        ['entrada']]],
        []
);

$routeList->add(
        'get',
        '/saludsexual',
        'saludsexual',
        ['main',
                ['Salud Sexual', ['saludsexual']],
                [[],
                        []]],
        []
);

$routeList->add(
        'get',
        '/login',
        'login',
        ['main',
                ['Login Administrativo', ['login']],
                [[],
                        []]],
        ['login']
);

$routeList->add(
        'post',
        '/login',
        'login',
        ['main',
                ['Login Administrativo', ['login']],
                [[],
                        []]],
        ['login']
);

$routeList->add(
        'get',
        '/dashboard',
        'dashboard',
        ['admin',
                ['Administración', ['admin']],
                [[],
                        []]],
        ['admin']
);

$routeList->add(
        'get',
        '/entrynoticias/',
        'entrynoticias',
        ['admin',
                ['Administración de Noticias', ['admin']],
                [[],
                        ['paginado', 'posts']]],
        ['admin']
);

$routeList->add(
        'post',
        '/entrynoticias/',
        'entrynoticias',
        ['admin',
                ['Administración de Noticias', ['admin']],
                [[],
                        ['paginado', 'posts']]],
        ['admin']
);

$routeList->add(
        'get',
        '/nuevanoticia',
        'nuevanoticia',
        ['admin',
                ['', ['admin', 'ckstyle', '../vendor/ckeditor5/ckeditor5']],
                [[],
                        ['categorias']]],
        ['admin', 'session']
);

$routeList->add(
        'post',
        '/nuevanoticia',
        'nuevanoticia',
        ['admin',
                ['', ['admin', 'ckstyle', '../vendor/ckeditor5/ckeditor5']],
                [[],
                        ['categorias']]],
        ['admin', 'session']
);

$routeList->add(
        'get',
        '/editarnoticia/',
        'editarnoticia',
        ['admin',
                ['', ['admin', 'ckstyle', '../vendor/ckeditor5/ckeditor5']],
                [[],
                        ['categorias', 'noticia']]],
        ['admin', 'session']
);

$routeList->add(
        'post',
        '/editarnoticia/',
        'editarnoticia',
        ['admin',
                ['', ['admin', 'ckstyle', '../vendor/ckeditor5/ckeditor5']],
                [[],
                        ['categorias', 'noticia']]],
        ['admin', 'session']
);

$routeList->add(
        'get',
        '/entryinfopublica/',
        'entryinfopublica',
        ['admin',
                ['Administración de Información Pública', ['admin']],
                [[],
                        ['paginado', 'posts']]],
        ['admin']
);

$routeList->add(
        'post',
        '/entryinfopublica/',
        'entryinfopublica',
        ['admin',
                ['Administración de Información Pública', ['admin']],
                [[],
                        ['paginado', 'posts']]],
        ['admin']
);

$routeList->add(
        'get',
        '/nuevainfopublica',
        'nuevainfopublica',
        ['admin',
                ['', ['admin', 'ckstyle', '../vendor/ckeditor5/ckeditor5']],
                [[],
                        ['categorias']]],
        ['admin', 'session']
);

$routeList->add(
        'post',
        '/nuevainfopublica',
        'nuevainfopublica',
        ['admin',
                ['', ['admin', 'ckstyle', '../vendor/ckeditor5/ckeditor5']],
                [[],
                        ['categorias']]],
        ['admin', 'session']
);

$routeList->add(
        'get',
        '/editarinfopublica/',
        'editarinfopublica',
        ['admin',
                ['', ['admin', 'ckstyle', '../vendor/ckeditor5/ckeditor5']],
                [[],
                        ['categorias', 'publica']]],
        ['admin', 'session']
);

$routeList->add(
        'post',
        '/editarinfopublica/',
        'editarinfopublica',
        ['admin',
                ['', ['admin', 'ckstyle', '../vendor/ckeditor5/ckeditor5']],
                [[],
                        ['categorias', 'publica']]],
        ['admin', 'session']
);

$routeList->add(
        'get',
        '/entrycategorias/',
        'entrycategorias',
        ['admin',
                ['', ['admin']],
                [[],
                        ['paginado', 'categorias']]],
        ['admin']
);

$routeList->add(
        'post',
        '/entrycategorias/',
        'entrycategorias',
        ['admin',
                ['', ['admin']],
                [[],
                        ['paginado', 'categorias']]],
        ['admin']
);

$routeList->add(
        'get',
        '/nuevacategoria',
        'nuevacategoria',
        ['admin',
                ['', ['admin']],
                [[],
                        []]],
        ['admin']
);

$routeList->add(
        'post',
        '/nuevacategoria',
        'nuevacategoria',
        ['admin',
                ['', ['admin']],
                [[],
                        []]],
        ['admin']
);

$routeList->add(
        'get',
        '/editarcategoria/',
        'editarcategoria',
        ['admin',
                ['', ['admin']],
                [[],
                        ['categoria']]],
        ['admin']
);

$routeList->add(
        'post',
        '/editarcategoria/',
        'editarcategoria',
        ['admin',
                ['', ['admin']],
                [[],
                        ['categoria']]],
        ['admin']
);

$routeList->add(
        'get',
        '/videos',
        'videos',
        ['admin',
                ['', ['admin']],
                [[],
                        ['videos']]],
        ['admin']
);

$routeList->add(
        'post',
        '/videos',
        'videos',
        ['admin',
                ['', ['admin']],
                [[],
                        ['videos']]],
        ['admin']
);

$routeList->add(
        'get',
        '/podcast',
        'podcast',
        ['admin',
                ['', ['admin']],
                [[],
                        ['podcast']]],
        ['admin']
);

$routeList->add(
        'post',
        '/podcast',
        'podcast',
        ['admin',
                ['', ['admin']],
                [[],
                        ['podcast']]],
        ['admin']
);

$routeList->add(
        'get',
        '/medios/',
        'medios',
        ['admin',
                ['', ['admin']],
                [[],
                        ['paginado', 'medios']]],
        ['admin']
);

$routeList->add(
        'post',
        '/medios/',
        'medios',
        ['admin',
                ['', ['admin']],
                [[],
                        ['paginado', 'medios']]],
        ['admin']
);

$routeList->add(
        'get',
        '/mapa/',
        'mapa',
        ['admin',
                ['', ['admin']],
                [[],
                        ['paginado', 'mapa']]],
        ['admin']
);

$routeList->add(
        'post',
        '/mapa/',
        'mapa',
        ['admin',
                ['', ['admin']],
                [[],
                        ['paginado', 'mapa']]],
        ['admin']
);

$routeList->add(
        'get',
        '/nuevomapa',
        'nuevomapa',
        ['admin',
                ['', ['admin']],
                [[],
                        []]],
        ['admin']
);

$routeList->add(
        'post',
        '/nuevomapa',
        'nuevomapa',
        ['admin',
                ['', ['admin']],
                [[],
                        []]],
        ['admin']
);

$routeList->add(
        'get',
        '/editarmapa/',
        'editarmapa',
        ['admin',
                ['', ['admin']],
                [[],
                        ['centro']]],
        ['admin']
);

$routeList->add(
        'post',
        '/editarmapa/',
        'editarmapa',
        ['admin',
                ['', ['admin']],
                [[],
                        ['centro']]],
        ['admin']
);

$routeList->add(
        'get',
        '/usuarios/',
        'usuarios',
        ['admin',
                ['', ['admin']],
                [[],
                        ['paginado', 'usuarios']]],
        ['admin']
);

$routeList->add(
        'post',
        '/usuarios/',
        'usuarios',
        ['admin',
                ['', ['admin']],
                [[],
                        ['paginado', 'usuarios']]],
        ['admin']
);

$routeList->add(
        'get',
        '/nuevousuario',
        'nuevousuario',
        ['admin',
                ['', ['admin']],
                [[],
                        []]],
        ['admin']
);

$routeList->add(
        'post',
        '/nuevousuario',
        'nuevousuario',
        ['admin',
                ['', ['admin']],
                [[],
                        []]],
        ['admin']
);

$routeList->add(
        'get',
        '/editarusuario/',
        'editarusuario',
        ['admin',
                ['', ['admin']],
                [[],
                        ['usuario']]],
        ['admin']
);

$routeList->add(
        'post',
        '/editarusuario/',
        'editarusuario',
        ['admin',
                ['', ['admin']],
                [[],
                        ['usuario']]],
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
        ['', ['', []], [[],[]]],
        []
);

$routeList->add(
        'get',
        '/logout',
        function () {
                MainCtrl::logout();
                header('Location: ' . URL_BASE);
        },
        ['', ['', []], [[],[]]],
        []
);

$routeList->add(
        'post',
        '/refresh',
        function () {
                session_start();
        },
        ['', ['', []], [[],[]]],
        []
);

$routeList->add(
        'post',
        '/exploradormedios',
        function () {
                $post = new Medios;
                $post->POST_handler_AJAX();
        },
        ['', ['', []], [[],[]]],
        []
);

$routeList->add(
        'post',
        '/subirimagen',
        function () {
                $post = new Cargarmedio;
                $post->POST_handler_AJAX();
        },
        ['', ['', []], [[],[]]],
        []
);

$routeList->add(
        'get',
        '/slideseducadores',
        function () {
                $post = new Educadores;
                $post->GET_AJAX_handler();
        },
        ['', ['', []], [[],[]]],
        []
);

$routeList->add(
        'get',
        '/slidespadres',
        function () {
                $post = new Madresypadres();
                $post->GET_AJAX_handler();
        },
        ['', ['', []], [[],[]]],
        []
);

$routeList->add(
        'get',
        '/slidesjovenes',
        function () {
                $post = new Jovenes();
                $post->GET_AJAX_handler();
        },
        ['', ['', []], [[],[]]],
        []
);

$routeList->add(
        'get',
        '/temas',
        function () {
                header('Location:' . URL_BASE . 'temas/1');
                exit;
        },
        ['', ['', []], [[],[]]],
        []
);

// API

$routeList->add(
        'get',
        '/apientradas',
        'apientradas',
        ['', ['', []], [[],[]]],
        []
);

$routeList->add(
        'get',
        '/apicategorias',
        'apicategorias',
        ['', ['', []], [[],[]]],
        []
);

$routeList->add(
        'post',
        '/apiinfopublica',
        'apiinfopublica',
        ['', ['', []], [[],[]]],
        []
);