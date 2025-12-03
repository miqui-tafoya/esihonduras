<?php
$archivo = $body['noticias'];
?>
<span id="breadcrumbs">noticias</span>
<div id="main">
    <div class="contenedor-publica">
        <div class="cabecera-publica">
            <p class="cabecera-uno">
                Archivo de Noticias
            </p>
        </div>

        <!-- Start bloque noticias -->
        <div class="bloque-items">
            <div id="blog-container" class="publicaciones">
            </div>
            <div id="pagination"></div>
        </div>
        <!-- End bloque noticias -->
    </div>
</div>
<script id="entradas-data" type="application/json">
    <?php echo json_encode($archivo, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>
</script>