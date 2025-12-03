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
            <div class="grid-doble">
                <div class="img-grid-doble">
                    <img src="Public/recursos/imagenes/multimedia" alt=""></a>
                </div>
                <div class="txt-grid-doble">
                    <p class="cabecera-uno">
                        Multimedia
                    </p>
                    <p class="dos-grid-doble ">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

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
                        </div>
                    <?php endforeach; ?>
                </div>
                <div id="youtube-slider-prev" class="ytslide-arrow ytleft"><i class="fas fa-chevron-left"></i></div>
                <div id="youtube-slider-next" class="ytslide-arrow ytright"><i class="fas fa-chevron-right"></i></div>
            </div>
        </div>

        <!-- End video -->

        <!-- Start publicaciones -->
        <div class="bloque-publicaciones">
            <p class="cabecera-multimedia">Publicaciones</p>
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