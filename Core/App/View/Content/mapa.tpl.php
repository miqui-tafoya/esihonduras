<?php
$pagina = $body['query'];
$paginado = $body['paginado'];
$mapas = $body['mapa'];
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
?>
<div class="dash">
    <div class="configuraciones">
        <h1>Administrar Mapas por Región</h1>
        <div class="botn-grupo">
            <a href="<?php echo URL_BASE ?>mapa/">Administrar Centros de Salud</a>
            <a href="<?php echo URL_BASE ?>nuevomapa">Nuevo Centro de Salud</a>
        </div>
    </div>
    <div class="selection">
        <div class="left-sel">
            <select onchange="javascript:location.href = this.value;">
                <option value="#">Regiones:</option>
                <?php
                $paginado = range(1, $paginado);
                foreach ($paginado as $paginas) {
                    echo "<option value='" . URL_BASE . "mapa/" . $paginas . "'>Región " . $paginas . " - " . $regiones[$paginas] . "</option>";
                }
                ?>
            </select>
        </div>
        <div class="right-sel"><span>Vista de: Región <?php echo $pagina; ?> - <?php echo $region ?></span></div>
    </div>
    <div class="lista">
        <table>
            <thead>
                <th>Municipio</th>
                <th>Aldea</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Información Adicional</th>
                <th>Coordenadas</th>
                <th colspan="3">Acción</th>
            </thead>
            <tbody>
                <?php foreach ($mapas as $key => $mapa): ?>
                    <tr>
                        <td style="text-align:center;color:green;"><?php echo $mapa['municipio'] ?? 'N/A'; ?></td>
                        <td style="text-align:center;color:green;"><?php echo $mapa['aldea'] ?? 'N/A'; ?></td>
                        <td style="text-align:center;color:green;"><?php echo $mapa['nombre'] ?? 'N/A'; ?></td>
                        <td style="text-align:center;color:green;"><?php echo $mapa['direccion'] ?? 'N/A'; ?></td>
                        <td style="text-align:center;color:green;"><?php echo $mapa['info'] ?? 'N/A'; ?></td>
                        <td style="text-align:center;color:green;"><?php echo $mapa['coordenadas'] ?? 'N/A'; ?></td>

                        <td><a href="<?php echo URL_BASE ?>editarmapa/<?php echo $mapa['tb_centros_id']; ?>" class="editar"><i
                                    class="fas fa-pen"></i></a></td>

                        <td style="text-align:center">
                            <form method="post">
                                <input type="hidden" name="tb_centros_id" value="<?php echo $mapa['tb_centros_id']; ?>">
                                <button type="submit" name="delete-submit" class="button-ghost"
                                    onclick="return confirm('¿Eliminar Centro de Salud?')"><i
                                        class="fas fa-trash-alt borrar"></i></button>
                            </form>
                        </td>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>