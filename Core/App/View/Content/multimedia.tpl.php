<?php
$audio = $body['audio'];
$video = $body['video'];
$publicaciones = $body['publicaciones'];
?>
<span id="breadcrumbs"><?php echo $metaParams['route'] ?></span>
<div id="main">
    <div class="contenedor-multimedia">

        <!-- Start video -->
        <div class="bloque-video">

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

        <!-- Start audio -->
        <div>
            <?php foreach ($audio as $value) {
                echo $value['podcast_url'];
            } ?>
        </div>
        <!-- End audio -->

    </div>
</div>