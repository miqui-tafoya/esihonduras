<?php

namespace Controller;

use View\Render;

class _405 extends Render {

    public function ERROR_handler($route) {
        return $this->renderView($route, 'error', ['Error 405 - Método no permitido', ['fonts/css/all.min', 'html']], [], [], []);
    }
}
