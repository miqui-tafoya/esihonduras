<?php
$categoria = $body['categoria'];
?>
<div id="main">
    <div class="contenedor-publica">
        <div class="cabecera-entrada">
            <div class="btn-back">
                <a href="<?php echo URL_BASE ?>noticias"><i class="fa-solid fa-arrow-left-long"></i>Regresar a noticias</a>
            </div>
        </div>
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
<script>
    let categoria = <?php echo $categoria['tb_categorias_id']; ?>
</script>