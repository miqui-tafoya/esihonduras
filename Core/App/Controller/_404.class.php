<?php

namespace Controller;

use View\Render;

class _404 extends Render {

    public function ERROR_handler($route) {
        return $this->renderView($route, 'error', ['Error 404 - No Encontrado', ['fonts/css/all.min', 'html']], [], [], []);
    }
}
