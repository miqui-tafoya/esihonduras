<?php
namespace Controller;

use View\Render;
use Imagick;
use ImagickDraw;
use ImagickPixel;
class Captcha extends Render {

    public function GET_captcha() {
        header('Content-Type: image/png');
        header("Pragma: no-cache");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        $captcha_code = MainCtrl::getRand('captcha', 5);
        $_SESSION['captcha_code'] = password_hash($captcha_code, PASSWORD_BCRYPT);
        $width = 110;
        $height = 70;

        $imagick = new Imagick();
        $imagick->newImage($width, $height, new ImagickPixel('rgb(130, 120, 135)'));
        $imagick->setImageFormat('png');

        // objeto
        $draw = new ImagickDraw();
        $draw->setFont('fonts/capt.ttf');
        $draw->setFontSize(36);
        $draw->setFillColor(new ImagickPixel('rgb(150, 160, 165)'));

        // posición
        $metrics = $imagick->queryFontMetrics($draw, $captcha_code);
        $x = ($width - $metrics['textWidth']) / 2;
        $y = ($height + $metrics['textHeight']) / 2 - 10;
        $draw->annotation($x, $y, $captcha_code);

        // líneas
        $draw->setStrokeColor(new ImagickPixel('rgb(150, 160, 165)'));
        $draw->setStrokeWidth(1);
        for ($i=0; $i < 5; $i++) { 
            $draw->line(rand(0,100), rand(0,100), rand(0,100), rand(0,100));
        }

        // texto
        $imagick->drawImage($draw);

        // distorciones
        $imagick->addNoiseImage(imagick::NOISE_LAPLACIAN);
        $imagick->swirlImage(50);
        $imagick->waveImage(8, 90);
        $imagick->blurImage(1, 0.5);

        $imagick->cropImage(110, 50, 0, (70 - 38) / 2);
        $imagick->setImagePage(0, 0, 0, 0); // Reset virtual canvas metadata

        // imprimir
        echo $imagick;
        $imagick->clear();
        $imagick->destroy();
    }
}