<?php
$audio = $body['audio'];
$video = $body['video'];
$publicaciones = $body['publicaciones'];
?>
<span id="breadcrumbs"><?php echo $metaParams['route'] ?></span>
<div id="main">
    <div class="contenedor-multimedia">

        <!-- inicio bloque uno -->
        <div class="back-color">
            <div class="grid-doble-multimedia">
                <div class="img-grid-multimedia">
                    <!--  <img src="Public/recursos/imagenes/info_jovenes.png" alt=""></a> -->
                </div>
                <div class="txt-grid-doble">
                    <p class="cabecera-uno p-bottom">
                        Multimedia
                    </p>
                    <p class="dos-grid-doble ">
                        Te compartimos otros recursos donde puedes conocer y contar con más información sobre tu derecho
                        a la salud en Honduras así como información actualizada sobre la educación sexual integral.
                        <br><br>
                        ¡Comparte con todos y todas!

                    </p>
                </div>
            </div>
        </div>

        <!-- fin bloque uno -->

        <!-- Start video -->
        <div class="bloque-video">
            <p class="cabecera-multimedia">Video</p>
            <div id="youtube-slider" class="video">
                <div id="ytvideo-slides">
                    <?php
                    foreach ($video as $value): ?>
                        <div class="ytslide">
                            <iframe class="ytvideo" allowfullscreen
                                src="https://www.youtube.com/embed/<?php echo $value['video_url']; ?>?ecver=2&enablejsapi=1">
                            </iframe>
                            <p><?php echo $value['video_titulo']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div id="youtube-slider-prev" class="ytslide-arrow ytleft"><i class="fas fa-chevron-left"></i></div>
                <div id="youtube-slider-next" class="ytslide-arrow ytright"><i class="fas fa-chevron-right"></i></div>
            </div>
        </div>

        <!-- End video -->

        <!-- Start publicaciones -->
        <div class="back-color">
            <div class="bloque-publicaciones">
                <p class="cabecera-multimedia">Publicaciones</p>
                <div id="blog-container" class="publicaciones">
                    <?php
                    if (!isset($responseParams['post']['busca'])) {
                        foreach ($publicaciones as $value) {
                            echo '<div class="item-perfiles-quienes">
                    <div class="img-item-quienes">
                        <img src="' . URL_PUBLIC . 'recursos/portadas/' . $value['portada'] . '" alt="">
                    </div>
                    <div class="info-item-quienes">
                        <p class="titulo-item-quienes">' . $value['entradas_titulo'] . '</p>
                        <p>' . substr($value['cuerpo'], 0, 120) . '...</p>
                        <div class="btn-perfiles">
                            <a href="' . URL_BASE . 'entrada/' . $value['tb_entradas_id'] . '">Ir a contenido <i class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>';
                        }
                    }
                    ?>
                </div>
                <div class="btn-enlace">
                    <a href="<?php echo URL_BASE ?>informacionpublica">VER MÁS ENTRADAS</a>
                </div>
            </div>
        </div>
        <!-- End publicaciones -->

        <!-- Start audio -->
        <div class="bloque-audio">
            <p class="cabecera-multimedia">Podcast</p>

            <div class="grid-podcast">
                <?php foreach ($audio as $value) {
                    echo $value['podcast_url'];
                } ?>
            </div>
        </div>
        <!-- End audio -->

    </div>
</div>