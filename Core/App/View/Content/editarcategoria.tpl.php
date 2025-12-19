<?php
$categoria = $body['categoria'];
if (!empty($responseParams)) {
    $post = $responseParams['post'];
    $error = $responseParams['errors'];
}
$selectTipo = $post['tipo'] ?? $categoria['tipo'] ?? '';
?>
<div class="dash">
    <div class="configuraciones">
        <h1>Actualizar Categoría</h1>
        <div class="botn-grupo">
            <a href="<?php echo URL_BASE ?>entrycategorias/">Administrar Categorias</a>
            <a href="<?php echo URL_BASE ?>nuevacategoria">Nueva Categoria</a>
        </div>
    </div>
    <form class="campos-admin" method="post">
        <input type="hidden" name="tb_categorias_id" value="<?php echo $post['tb_categorias_id'] ?? $categoria['tb_categorias_id'] ?>">
        <label for="nombre_categoria">Nombre para la categoría <span
                class="form-error"><?php echo $error['error_tema'] ?? '' ?></span></label>
        <input id="tema-n" class="adm-txt" class="campo" type="text" name="nombre_categoria"
            value="<?php echo $post['nombre_categoria'] ?? $categoria['nombre_categoria'] ?>" onchange="llenar()">
        <label for="slug_categoria">Slug <span class="form-error"><?php echo $error['error_slug'] ?? '' ?></span></label>
        <input id="tema-s" class="adm-txt" class="campo" type="text" name="slug_categoria"
            value="<?php echo $post['slug_categoria'] ?? $categoria['slug_categoria'] ?>">
        <label for="seccion">Sección <span
                class="form-error"><?php echo $error['error_tipo'] ?? '' ?></span></label>
        <select style="padding:0 0.5rem;text-transform:uppercase;" class="adm-txt" name="tipo">
            <option value=""></option>
            <option <?php if (isset($selectTipo) && $selectTipo == 'publica'):
                echo "selected";
            endif; ?>
                value="publica">Información Pública</option>
            <option <?php if (isset($selectTipo) && $selectTipo == 'noticia'):
                echo "selected";
            endif; ?>
                value="noticia">Noticias</option>
        </select>
        <button style="margin-top:2rem;" class="btn" type="submit" name="submit-update">Actualizar Categoria</button>
    </form>
</div>
</div>