<?php
class Middleware {
    public function Credencial($tipo) {
        switch ($tipo) {
            case 'loggedin':
                if (!empty($_SESSION['id'])) {
                    if ($_SESSION['permisos'] !== '1') {
                        header('Location: ' . URL_BASE);
                        exit;
                    } else {
                        header('Location: ' . URL_BASE . 'dashboard');
                        exit;
                    }
                }
                break;
            case 'login':
                if (empty($_SESSION['id'])) {
                    header("Location: " . URL_BASE . 'login');
                    exit;
                }
                break;
        }
    }
    /**
     * Obtiene el origen CORS apropiado para las respuestas HTTP
     *
     * Valida dinámicamente el origen de la petición y devuelve el valor
     * correcto para el header Access-Control-Allow-Origin, permitiendo
     * que el sitio funcione con o sin 'www' en el dominio.
     *
     * @param string|null $mode Si es '*', devuelve '*' (permite cualquier origen).
     *                          Si es null, valida contra el dominio actual.
     * @return string El origen permitido o '*'
     *
     * @example
     * // Permitir solo el dominio actual (con o sin www)
     * header("Access-Control-Allow-Origin: " . $mid->getCorsOrigin());
     *
     * @example
     * // Permitir cualquier origen (útil para APIs públicas)
     * header("Access-Control-Allow-Origin: " . $mid->getCorsOrigin('*'));
     */
    public function getCorsOrigin($mode = null) {
        if ($mode === '*') {
            return '*';
        }
        $origin = $_SERVER['HTTP_ORIGIN'] ?? '';
        $baseDomain = str_replace(['https://', 'http://', 'www.'], '', SITE_URL);
        if (strpos($origin, $baseDomain) !== false) {
            return $origin;
        }
        return SITE_URL;
    }
}
