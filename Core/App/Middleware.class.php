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
}
