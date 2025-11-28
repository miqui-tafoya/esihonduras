<?php
$entrada = $body['entrada'];
?>
<span id="breadcrumbs"><?php echo ($entrada['tipo'] === 'publica') ? 'informacionpublica' : 'noticias'; ?></span>
<div id="main">


    <div class="contenedor-publica">
        <div class="btn-back">
            <?php echo ($entrada['tipo'] === 'publica') ? '<a href="' . URL_BASE . 'informacionpublica" ><i class="fa-solid fa-arrow-left-long"></i>Regresar a información pública</a>' : '<a href="' . URL_BASE . 'noticias"><i class="fa-solid fa-arrow-left-long"></i>Regresar a noticias</a>'; ?>
        </div>

        <?php echo $entrada['entradas_timestamp']; ?>
        <br>
        <?php echo URL_PUBLIC . 'recursos/entradas/' . $entrada['portada']; ?>
        <br>
        <?php echo $entrada['entradas_titulo']; ?>
        <br>
        <?php echo $entrada['cuerpo']; ?>

    </div>
</div>