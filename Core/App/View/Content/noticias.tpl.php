<?php
$destacados = $body['destacados'];
$noticias = $body['noticias'];
$hoy = $body['hoy'];
$categorias = $body['categorias'];
?>
<span id="breadcrumbs"><?php echo $metaParams['route'] ?></span>
<div id="main">

    <div class="contenedor-noticias">

        <div class="intro-noticias">
            <p class="cabecera-uno">Noticias</p>
            <p class="cuerpo-texto">Aquí podrás encontrar información de tu interés</p>
        </div>

        <!-- Grid uno -->
        <div class="grid-uno-noticias">

            <div class="list-categorias" style="overflow-y:auto">
                <p class="cabecera-blog-uno">Categorias</p>
                <ul class="bloque-list-categorias">
                    <?php
                    if (empty($categorias)) {
                        echo '<p>No hay Categorías registradas</p>';
                    } else {
                        foreach ($categorias as $value) {
                            echo '<li><a href="' . URL_BASE . 'categoria/' . $value['slug_categoria'] . '">' . $value['nombre_categoria'] . '</a></li>';
                        }
                    }
                    ?>
                </ul>
            </div>
            
            <div class="bloque-foto-noticias">
                <?php
                if (empty($hoy['entradas_titulo'])) {
                    echo '<p>No hay Noticia destacada reciente</p>';
                } else {
                    echo '<div class="img-grid-noticias">
                    <div class="link-destacada">
                        <p class="txt-destacada-uno">' . $hoy['entradas_titulo'] . ' </p>
                        <div class="txt-destacada-dos">' . $hoy['resumen'] . '...</div>
                        <div class="link-info-destacado">
                            <a href="' . URL_BASE . 'entrada/' . $hoy['tb_entradas_id'] . '">Leer más</a>
                        </div>
                    </div>
                    <img src="' . URL_PUBLIC . 'recursos/portadas/' . $hoy['portada'] . '" alt="">
                </div>';
                }
                ?>
            </div>

            <div class="bloque-destacadas">
                <p class="cabecera-blog-uno">Entradas destacadas</p>
                <?php
                if (empty($destacados)) {
                    echo '<p>No hay Noticias destacadas</p>';
                } else {
                    foreach ($destacados as $value) {
                        echo '<div class="items-destacadas">
                    <div class="img-item-destacada">
                        <img src="' . URL_PUBLIC . 'recursos/portadas/' . $value['portada'] . '" alt="">
                    </div>
                    <div class="txt-item-destacadas">
                        <a href="' . URL_BASE . 'entrada/' . $value['tb_entradas_id'] . '">
                            <h5 class="titulo-destacadas">' . $value['entradas_titulo'] . '</h5>' . $value['resumen'] . '...</p>
                        </a>
                    </div>

                </div>';

                    }
                }
                ?>
            </div>
        </div>
        <!-- Fin uno -->

        <!-- Inicio uno -->
        <div class="grid-dos-noticias">
            <p class="cabecera-dos-faq p-vertical">Entradas recientes</p>
            <div class="bloque-items-recientes">
                <?php
                if (empty($noticias)) {
                    echo '<p>No existen entradas</p>';
                } else {
                    $entradasMostrar = array_slice($noticias, 0, 4);
                    foreach ($entradasMostrar as $value) {
                        echo '
                    <div class="item-reciente">
                        <div class="img-item-reciente">
                            <img src="' . URL_PUBLIC . 'recursos/portadas/' . $value['portada'] . '" alt="">
                        </div>
                        <div class="txt-item-reciente">
                            <a href="' . URL_BASE . 'entrada/' . $value['tb_entradas_id'] . '">
                                <h5 class="titulo-destacadas">' . $value['entradas_titulo'] . '</h5>' . $value['resumen'] . '...</p>
                            </a>
                        </div>

                        <div class="nombre-publicado">
                        <p>Publicado el: ' . $value['entradas_timestamp'] . '</p>
                        </div>

                    </div>
                ';
                    }
                }
                ?>
            </div>

            <div class="btn-enlace">
                <a href="<?php echo URL_BASE ?>archivo">VER TODAS LAS ENTRADAS</a>
            </div>
        </div>
        <!-- Fin dos -->
    </div>
</div>