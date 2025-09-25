<?php
class Middleware {
    public function Credencial($tipo) {
        switch ($tipo) {
            case 'loggedin':
                if (!empty($_SESSION['id'])) {
                    if ($_SESSION['rol'] !== 'member') {
                        header('Location: ' . URL_BASE . 'dashboard');
                        exit;
                    } else {
                        header('Location: ' . URL_BASE . 'test');
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
