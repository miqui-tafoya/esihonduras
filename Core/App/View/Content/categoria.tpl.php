<?php
$categoria = $body['categoria'];
$entradas = $body['entradas'];
?>
<span id="breadcrumbs"><?php echo ($categoria['tipo'] === 'publica') ? 'informacionpublica' : 'noticias' ; ?></span>
<div id="main">
    <div class="contenedor-publica">
        <div class="cabecera-publica">
            <p class="cabecera-uno">
                <?php echo $categoria['nombre_categoria'] ?>
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
    <?php echo json_encode($entradas, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>
</script>