<?php
if (!empty($responseParams)) {
    $post = $responseParams['post'];
    $error = $responseParams['errors'];
}
$omitirPortada = $post['omitir-portada'] ?? '';
$categoria_id = $post['categoria'] ?? [];
$categorias = $body['categorias'];
?>
<div id="modal_container">
    <div id="modal_header">
        <p><i class="fas fa-exclamation-circle"></i> Atención</p>
    </div>
    <div id="modal_body"></div>
    <div id="modal_buttons">
        <div id="btnCancelar" class="button_modal cancelar"></div>
        <div id="btnAceptar" class="button_modal aceptar"></div>
    </div>
</div>
<div class="dash-entradas">
       <div class="configuraciones">
        <h1>Nueva Información Pública</h1>
        <div class="botn-grupo">
            <a href="<?php echo URL_BASE ?>entryinfopublica/">Administrar Información Pública</a>
            <a href="<?php echo URL_BASE ?>nuevainfopublica">Nueva Información Pública</a>
        </div>
        <form class="campos-admin-entradas" method="post" enctype="multipart/form-data">
            <label for="entradas_titulo">Título <span
                    class="form-error"><?php echo $error['error_titulo'] ?? '' ?></span></label>
            <input class="adm-txt" class="campo" type="text" name="entradas_titulo" maxlength="119"
                value="<?php echo $post['entradas_titulo'] ?? '' ?>">

            <label for="cuerpo">Cuerpo del Artículo <span
                    class="form-error"><?php echo $error['error_contenido'] ?? '' ?></span></label>
            <div class="contenedor-ck">
                <div class="main-container">
                    <div class="editor-container editor-container_classic-editor editor-container_include-word-count editor-container_include-fullscreen"
                        id="editor-container">
                        <div class="editor-container__editor">
                            <textarea id="editor" type="text" name="cuerpo"></textarea>
                        </div>
                        <div class="editor_container__word-count" id="editor-word-count"></div>
                    </div>
                </div>
            </div>
            <script type="importmap">
    {
      "imports": {
        "ckeditor5": "./Public/vendor/ckeditor5/ckeditor5.js",
        "ckeditor5/": "./Public/vendor/ckeditor5/"
      }
    }
    </script>
            <script type="module" src="Public/js/ckmain.js"></script>
            <?php if (!empty($responseParams)) {
                if (!empty($post['cuerpo'])) {
                    ?>
                    <script>
                        const editorContent = <?php echo json_encode(htmlspecialchars_decode($post['cuerpo'])) ?>;

                        const waitForEditor = () => {
                            if (window.editorInstance) {
                                window.editorInstance.setData(editorContent);
                            } else {
                                setTimeout(waitForEditor, 50);
                            }
                        };

                        waitForEditor();
                    </script>
                <?php }
            } ?>
    </div>

    <div class="configuraciones-2">
        <h1>Configuración</h1>
        <label style="margin-bottom:0.5rem;" for="portada">Imagen Portada <span
                class="form-error"><?php echo $error['error_imagen'] ?? '' ?></span></label>
        <fieldset class="fieldgroup-edit">
            <fieldset class="checkbox-edit">
                <label for="omitir-portada"> Omitir Portada</label>
                <div class="checkbox4">
                    <?php if (empty($responseParams)): ?>
                        <input style="visibility:hidden;" type="checkbox" id="checkbox4" name="omitir-portada" />
                    <?php else: ?>
                        <?php if (empty($omitirPortada)): ?>
                            <input style="visibility:hidden;" type="checkbox" id="checkbox4" name="omitir-portada" />
                        <?php else: ?>
                            <input checked style="visibility:hidden;" type="checkbox" id="checkbox4" name="omitir-portada" />
                        <?php endif; ?>
                    <?php endif; ?>
                    <label for="checkbox4"></label>
                </div>
            </fieldset>
            <input class="campo-file-edit" type="file" name="upload">
        </fieldset>

        <label style="margin-bottom:0.5rem;" for="categoria">Categoría <span
                class="form-error"><?php echo $error['error_tema_id'] ?? '' ?></span></label>
        <select class="adm-sel" style="display: block;width: 100%;margin-bottom: 1rem;" class="campo" name="categoria">
            <?php foreach ($categorias as $cat): ?>
                <option <?php if (!empty($categoria_id) && $categoria_id == $cat['tb_categorias_id']): ?>
                    <?php echo "selected"; ?>
                    <?php endif; ?> value="<?php echo $cat['tb_categorias_id']; ?>">
                    <?php echo html_entity_decode($cat['nombre_categoria']); ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label style="margin: 1.5rem 0 0.25rem 0;" for="tags">Palabras clave <span
                class="form-error"><?php echo $error['error_tags'] ?? '' ?></span></label>
        <span style="display: block;margin-bottom: 0.5rem;color: var(--g800);font-size: 0.8rem;padding: 0;"><i
                class="fas fa-exclamation-circle"></i> separados por coma</span>
        <input class="adm-txt" class="campo" type="text" name="tags" value="<?php echo $post['tags'] ?? '' ?>"
            maxlength="223">

        <button style="margin-top:2rem;display:flex;" class="btn-primario" type="submit" name="submit-nuevo">Agregar
            Borrador</button>
        </form>
    </div>
</div>