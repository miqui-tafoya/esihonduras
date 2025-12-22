<?php
$regiones = [
    1 => 'Atlántida',
    2 => 'Colón',
    3 => 'Comayagua',
    4 => 'Copan',
    5 => 'Cortés',
    6 => 'Choluteca',
    7 => 'El Paraíso',
    8 => 'Francisco Morazán',
    9 => 'Gracias a Dios',
    10 => 'Intibucá',
    11 => 'Islas de la Bahía',
    12 => 'La Paz',
    13 => 'Lempira',
    14 => 'Ocotepeque',
    15 => 'Olancho',
    16 => 'Santa Barbara',
    17 => 'Valle',
    18 => 'Yoro',
    19 => 'Metropolitana Tegucigalpa',
    20 => 'Metropolitana San Pedro Sula',
];
if (!empty($responseParams)) {
    $post = $responseParams['post'];
    $error = $responseParams['errors'];
}
?>
<div class="dash">
    <div class="configuraciones">
        <p class="cabecera-uno">Nuevo Centro de Salud</p>
        <div class="botn-grupo">
            <a href="<?php echo URL_BASE ?>mapa/">Administrar Centros de Salud</a>
            <a href="<?php echo URL_BASE ?>nuevomapa">Nuevo Centro de Salud</a>
        </div>
    </div>
    <form class="campos-admin" method="post">

        <label for="municipio">Municipio<span
                class="form-error"><?php echo $error['error_municipio'] ?? '' ?></span></label>
        <input class="adm-txt" class="campo" type="text" name="municipio"
            value="<?php echo $post['municipio'] ?? '' ?>">

        <label for="aldea">Aldea<span class="form-error"><?php echo $error['error_aldea'] ?? '' ?></span></label>
        <input class="adm-txt" class="campo" type="text" name="aldea" value="<?php echo $post['aldea'] ?? '' ?>">

        <label for="nombre">Nombre del Centro<span
                class="form-error"><?php echo $error['error_nombre'] ?? '' ?></span></label>
        <input class="adm-txt" class="campo" type="text" name="nombre" value="<?php echo $post['nombre'] ?? '' ?>">

        <label for="seccion">Región <span class="form-error"><?php echo $error['error_region'] ?? '' ?></span></label>
        <select style="padding:0 0.5rem;text-transform:uppercase;" class="adm-txt" name="region">
            <option value=""></option>
            <?php
            foreach ($regiones as $key => $value) {
                echo '<option value="' . $key . '" ';
                if (isset($post['region']) && $post['region'] == $key) {
                    echo 'selected';
                }
                echo '>' . $key . '-' . $value . '</option>';
            }
            ?>
        </select>

        <label for="direccion">Dirección <span
                class="form-error"><?php echo $error['error_direccion'] ?? '' ?></span></label>
        <textarea class="adm-field" style="resize: none;" cols="30" rows="2" type="text" name="direccion"
            maxlength="120"><?php echo $post['direccion'] ?? '' ?></textarea>

        <label for="info">Información adicional <span
                class="form-error"><?php echo $error['error_info'] ?? '' ?></span></label>
        <textarea class="adm-field" style="resize: none;" cols="30" rows="2" type="text" name="info"
            maxlength="120"><?php echo $post['info'] ?? '' ?></textarea>

        <label for="coordenadas">Coordenadas del Centro (latitud, longitud)<span
                class="form-error"><?php echo $error['error_coordenadas'] ?? '' ?></span></label>
        <input placeholder="15.00000000, -87.0000000000" class="adm-txt" class="campo" type="text" name="coordenadas" value="<?php echo $post['coordenadas'] ?? '' ?>">

        <button style="margin-top:2rem;" class="btn-primario" type="submit" name="submit-nuevo">Agregar Centro de Salud</button>
    </form>
</div>
</div>