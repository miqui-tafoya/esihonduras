<?php
$centrosalud = $body['propiedad'];
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
$query = $body['query'] ?? null;
$region = $regiones[$query] ?? null;
$coordenadas = [];
foreach ($centrosalud as $key => $value) {
    [$latStr, $lngStr] = array_map('trim', explode(',', $value['coordenadas']));
    $coordenadas[] = [(float)$latStr, (float)$lngStr];
}
?>
<div class="contenedor-centros">
    <div class="txt-centros">
        <p class="centros-uno">Centros de Salud</p>
        <p class="centros-dos">Conoce el mapa interactivo Derechos ESI, en el podrás encontrar la ubicación de
            hospitales y centros de salud que brindan servicios de salud sexual y reproductiva en Honduras.
        </p>
        <h3><?php echo $region ?></h3>
    </div>

    <div class="grid-centros">
        <div class="side-centros">
            <div class="listado-enlaces">
                <ul>
                    <li><a href="<?php echo URL_BASE ?>regionsalud/1">(01) Región Sanitaria Atlántida</a></li>
                    <li><a href="<?php echo URL_BASE ?>regionsalud/2">(02) Región Sanitaria Colón</a></li>
                    <li><a href="<?php echo URL_BASE ?>regionsalud/3">(03) Región Sanitaria Comayagua </a></li>
                    <li><a href="<?php echo URL_BASE ?>regionsalud/4">(04) Región Sanitaria Copan</a></li>
                    <li><a href="<?php echo URL_BASE ?>regionsalud/5">(05) Región Sanitaria Cortés </a></li>
                    <li><a href="<?php echo URL_BASE ?>regionsalud/6">(06) Región Sanitaria Choluteca </a></li>
                    <li><a href="<?php echo URL_BASE ?>regionsalud/7">(07) Región Sanitaria El Paraíso </a></li>
                    <li><a href="<?php echo URL_BASE ?>regionsalud/8">(08) Región Sanitaria Francisco Morazán</a></li>
                    <li><a href="<?php echo URL_BASE ?>regionsalud/9">(09) Región Sanitaria Gracias a Dios</a></li>
                    <li><a href="<?php echo URL_BASE ?>regionsalud/10">(10) Región Sanitaria Intibucá</a></li>
                    <li><a href="<?php echo URL_BASE ?>regionsalud/11">(11) Región Sanitaria Islas de la Bahía</a></li>
                    <li><a href="<?php echo URL_BASE ?>regionsalud/12">(12) Región Sanitaria La Paz</a></li>
                    <li><a href="<?php echo URL_BASE ?>regionsalud/13">(13) Región Sanitaria Lempira </a></li>
                    <li><a href="<?php echo URL_BASE ?>regionsalud/14">(14) Región Sanitaria Ocotepeque </a></li>
                    <li><a href="<?php echo URL_BASE ?>regionsalud/15">(15) Región Sanitaria Olancho </a></li>
                    <li><a href="<?php echo URL_BASE ?>regionsalud/16">(16) Región Sanitaria Santa Barbara</a></li>
                    <li><a href="<?php echo URL_BASE ?>regionsalud/17">(17) Región Sanitaria Valle</a></li>
                    <li><a href="<?php echo URL_BASE ?>regionsalud/18">(18) Región Sanitaria Yoro</a></li>
                    <li><a href="<?php echo URL_BASE ?>regionsalud/19">(19) Región Metropolitana Tegucigalpa</a></li>
                    <li><a href="<?php echo URL_BASE ?>regionsalud/20">(20) Región Metropolitana San Pedro Sula</a></li>
                </ul>
            </div>
        </div>

        <div class="contenedor-openstreetmap">
            <div id="map-overlay" style="display:block"></div>
            <div id="mapa" class="openstreetmap"></div>
        </div>
    </div>

</div>
<script id="coords-data" type="application/json">
    <?php echo json_encode($coordenadas, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>
</script>