<?php
$categorias = $body['categorias'];
$publicaciones = $body['publicaciones'];
// dd($categorias);
// dd($publicaciones);
?>
<span id="breadcrumbs"><?php echo $metaParams['route'] ?></span>
<div id="main">

    <div class="contenedor-publica">
        <div class="cabecera-publica">
            <p class="cabecera-uno">
                Información Pública
            </p>
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

        <!-- Start bloque buscar -->
        <div class="bloque-buscar">

            <p class="cabecera-dos-publica">Buscar por palabra </p>
            <form action="" class="layout-busqueda">
                <label class="p-bottom">Ingresa una palabra</label>
                <input type="text" id="" name="fname"><br><br>

            </form>

        </div>
        <!-- End bloque buscar -->

        <!-- Start bloque filtros -->
        <div class="bloque-filtrar">
            <p class="cabecera-dos-publica">Filtrar por categoría: </p>

            <form action="#" class="layout-filtros">

                <div class="item-filtro">
                    <input type="checkbox" id="protocolo" name="protocolo" value="Protocolo" class="filtro-check">
                    <label for="protocolo"> Protocolo </label>
                </div>

                <div class="item-filtro">
                    <input type="checkbox" id="politica" name="politica" value="Política" class="filtro-check">
                    <label for="politica"> Política </label>
                </div>

                <div class="item-filtro">
                    <input type="checkbox" id="norma" name="norma" value="Norma" class="filtro-check">
                    <label for="norma"> Norma</label>
                </div>

                <div class="item-filtro">
                    <input type="checkbox" id="lineamientos" name="lineamientos" value="Lineamientos"
                        class="filtro-check">
                    <label for="lineamientos"> Lineamientos</label>
                </div>

                <div class="item-filtro">
                    <input type="checkbox" id="guias" name="guias" value="lineamientos" class="filtro-check">
                    <label for="guias"> Guías</label>
                </div>

                <div class="item-filtro">
                    <input type="checkbox" id="otros" name="otros" value="Otros" class="filtro-check">
                    <label for="otros">Otros</label>
                </div>
                <div class="btn-enlace">
                    <button type="submit" value="Filtrar">Filtrar<i class="fa-solid fa-filter"></i></button>

                </div>
            </form>

        </div>

        <!-- End bloque filtros -->

        <!-- Start bloque información -->

        <div class="bloque-items">

            <p class="cabecera-dos-publica">Todas las publicaciones</p>

            <div class="publicaciones">
                <?php foreach ($publicaciones as $value) {
                    echo '<div class="item-perfiles-quienes">
                    <div class="img-item-quienes">
                        <img src="' . URL_PUBLIC . 'recursos/entradas/' . $value['portada'] . '" alt="">
                    </div>
                    <div class="info-item-quienes">
                        <p class="titulo-item-quienes">'.$value['entradas_titulo'].'</p>
                        <p>' . substr($value['cuerpo'], 0, 120) . '...</p>
                        <div class="btn-perfiles">
                            <a href="' . URL_BASE . 'entrada/' . $value['tb_entradas_id'] . '">Ir a contenido <i class="fa-solid fa-arrow-right-long"></i></a>
                        </div>

                    </div>

                </div>';
                }?>
            </div>
        </div>

        <!-- End bloque información -->

    </div>
</div>