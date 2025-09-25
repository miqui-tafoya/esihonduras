<?php

namespace View;

abstract class Render {

    protected function renderView($view, $layout, $metaParams, $bodyParams = [], $responseParams = [], $js = []) {
        $body = !empty($bodyParams[1]) ? $bodyParams[1] : [];
        $footer = !empty($bodyParams[0]) ? $bodyParams[0]['footer'] : [];
        $head = !empty($bodyParams[0]) ? $bodyParams[0]['head'] : [];
        $layoutContent = $this->layoutContent($layout);
        $viewContent = $this->viewContent($view, $metaParams, $body, $responseParams);
        $viewHead = $this->viewHead($head);
        $viewMenu = $this->viewMenu();
        $viewJs = $this->viewJs($js);
        $viewFooter = $this->viewFooter($footer);
        $viewModal = $this->viewModal();
        switch ($layout) {
            case 'main':
            case 'error':
                $viewMeta = $this->viewMeta($metaParams);
                $templates = [$viewMeta, $viewHead, $viewMenu, $viewModal, $viewContent, $viewFooter, $viewJs];
                $markup = ['{{meta}}', '{{head}}', '{{menu}}', '{{modal}}', '{{content}}', '{{footer}}', '{{js}}'];
                break;
            case 'admin':
                $viewMeta = $this->viewMeta($metaParams);
                $templates = [$viewMeta, $viewMenu, $viewHead, $viewModal, $viewContent, $viewFooter, $viewJs];
                $markup = ['{{meta}}', '{{menu}}', '{{head}}', '{{modal}}', '{{content}}', '{{footer}}', '{{js}}'];
                break;
            default:
                $viewMeta = $this->viewMeta($metaParams);
                $templates = [$viewMeta, $viewMenu, $viewHead, $viewModal, $viewContent, $viewFooter, $viewJs];
                $markup = ['{{meta}}', '{{menu}}', '{{head}}', '{{modal}}', '{{content}}', '{{footer}}', '{{js}}'];
                break;
        }
        return str_replace($markup, $templates, $layoutContent);
    }

    private function layoutContent($layout) {
        ob_start();
        include_once COREAPP . "View/Layouts/$layout.tpl.php";
        return ob_get_clean();
    }
    private function viewMeta($metaParams) {
        ob_start();
        include_once COREAPP . 'View/Layouts/inc/meta.tpl.php';
        return ob_get_clean();
    }
    private function viewHead($head) {
        ob_start();
        include_once COREAPP . 'View/Layouts/inc/head.tpl.php';
        return ob_get_clean();
    }
    private function viewMenu() {
        ob_start();
        include_once COREAPP . 'View/Layouts/inc/menu.tpl.php';
        return ob_get_clean();
    }
    public function viewModal() {
        ob_start();
        include_once COREAPP . 'View/Layouts/inc/modal.tpl.php';
        return ob_get_clean();
    }
    private function viewContent($view, $metaParams, $body, $responseParams) {
        ob_start();
        include_once COREAPP . "View/Content/$view.tpl.php";
        return ob_get_clean();
    }
    private function viewFooter($footer) {
        ob_start();
        include_once COREAPP . 'View/Layouts/inc/footer.tpl.php';
        return ob_get_clean();
    }
    private function viewJs($js) {
        ob_start();
        include_once COREAPP . 'View/Layouts/inc/js.tpl.php';
        return ob_get_clean();
    }
}