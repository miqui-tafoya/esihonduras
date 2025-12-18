<?php
$entrada = $body['entrada'];
?>
<span id="breadcrumbs"><?php echo ($entrada['tipo'] === 'publica') ? 'informacionpublica' : 'noticias'; ?></span>
<div id="main">
    <div class="contenedor-publica">
        <div class="cabecera-entrada">
            <div class="btn-back">
                <?php echo ($entrada['tipo'] === 'publica') ? '<a href="' . URL_BASE . 'informacionpublica" ><i class="fa-solid fa-arrow-left-long"></i>Regresar a información pública</a>' : '<a href="' . URL_BASE . 'noticias"><i class="fa-solid fa-arrow-left-long"></i>Regresar a noticias</a>'; ?>
            </div>
        </div>
        <div class="bloque-entrada">
            <div class="nombre-publicado">
                <p><?php echo $entrada['entradas_timestamp']; ?></p>
            </div>
            <div class="img-entrada">
                <img src="<?php echo URL_PUBLIC . 'recursos/entradas/' . $entrada['portada']; ?>" alt="">
            </div>
            <div>
                <p class="cabecera-dos-publica"><?php echo $entrada['entradas_titulo']; ?></p>
            </div>
            <div class="p-vertical">
                <p class="cuerpo-texto"><?php echo $entrada['cuerpo']; ?></p>
            </div>
        </div>
    </div>
</div>