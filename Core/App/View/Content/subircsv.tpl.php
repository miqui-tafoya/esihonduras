<div class="dash">
    <div class="configuraciones">
        <p class="cabecera-uno">Subir .csv</p>
        <div class="botn-grupo">
            <a href="<?php echo URL_BASE ?>mapa/">Administrar Centros de Salud</a>
            <a href="<?php echo URL_BASE ?>nuevomapa">Nuevo Centro de Salud</a>
            <a href="<?php echo URL_BASE ?>subircsv"><i class="fas fa-database"></i> Subir .csv</a>
        </div>
    </div>
    <form id="formacsv" class="campos-admin" enctype="multipart/form-data">
        <label for="nombre_categoria">Cargar archivo .csv<span
                class="form-error"><?php echo $error['error_tema'] ?? '' ?></span></label>
        <input type="file" name="csvFile" id="csvFile" accept=".csv">
        <div id="loading"></div>
        <div id="mensaje"></div>
        <button style="margin-top:2rem;" class="btn-primario" type="submit" name="submit-nuevo">Cargar y Reemplazar Base
            de Datos de Mapas</button>
    </form>
</div>