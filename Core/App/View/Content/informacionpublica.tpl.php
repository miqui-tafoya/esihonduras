<?php
$categorias = $body['categorias'];
$publicaciones = $body['publicaciones'] ?? [];
if (isset($responseParams['post']['busca'])) {
    $busqueda = $responseParams['post']['busca'];
    $filtros = $responseParams['post']['filtros'];
}
?>
<span id="breadcrumbs"><?php echo $metaParams['route'] ?></span>
<div id="main">

    <div class="contenedor-publica">
        <div class="cabecera-publica">
            <p class="cabecera-dos-publica">
                La información es para todas y todos y los derechos ESI también.
            </p>
            <p class="cuerpo-texto">Derechos ESI pone a tu disposición la información pública y los datos abiertos sobre
                salud sexual y reproductiva en Honduras.
                El acceso a la información sobre los programas, lineamientos, políticas en derechos sexuales y
                reproductivos también es un derecho, contribuyendo a la formulación y evaluación de políticas públicas
                basadas en evidencia.
                Podrás encontrar información organizada en seis categorías: Protocolo, Políticas públicas, normas,
                lineamientos, guías y otros.
            </p>
        </div>
        <!-- Start bloque filtros -->
        <div class="layout-filtros">
            <form id="form-busqueda" method="post">

                <div class="bloque-buscar">
                    <p class="cabecera-dos-publica">Buscar por palabra </p>
                    <label class="p-bottom">Ingresa una palabra</label>
                    <input type="text" placeholder="Buscar..." name="busca"
                        value="<?php echo $busqueda ?? '' ?>"><br><br>
                </div>
                <p class="cabecera-dos-publica">Filtrar por categoría: </p>
                <div class="bloque-filtrar">
                    <?php foreach ($categorias as $value) {
                        $checked = isset($filtros[$value['tb_categorias_id']]) ? 'checked="checked"' : '';
                        echo '<div class="item-filtro">
        <input type="checkbox" 
               name="' . $value['tb_categorias_id'] . '" 
               value="' . $value['tb_categorias_id'] . '"
               class="filtro-check" 
               ' . $checked . '>
        <label for="cat-' . $value['tb_categorias_id'] . '"> ' . $value['nombre_categoria'] . ' </label>
    </div>';
                    } ?>
                    <div class="btn-enlace">
                        <button type="submit" name="buscar-btn">Filtrar<i class="fa-solid fa-filter"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End bloque filtros -->
    <!-- Start bloque información -->
    <div class="bloque-items">
        <p class="cabecera-dos-publica">
            <?php echo !isset($responseParams['post']['busca']) ? 'Publicaciones Recientes' : 'Resultados de Búsqueda' ?>
        </p>
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
        <div id="pagination"></div>
    </div>
    <!-- End bloque información -->
</div>
</div>