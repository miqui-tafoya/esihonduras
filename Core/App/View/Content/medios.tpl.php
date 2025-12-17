<?php
$pagina = $body['query'];
$paginado = $body['paginado'];
$medios = $body['medios'];
?>
<div class="dash">
  <div class="configuraciones">
    <h1>Galería de Medios</h1>
    <div class="botn-grupo">
      <a href="<?php echo URL_BASE ?>medios/">Galería de Medios</a>
    </div>
  </div>
  <div class="selection">
    <div class="left-sel">
      <select onchange="javascript:location.href = this.value;">
        <option value="#">Ir a</option>
        <?php
        $paginado = range(1, $paginado);
        foreach ($paginado as $paginas) {
          echo "<option value='" . URL_BASE . "medios/" . $paginas . "'>Página " . $paginas . "</option>";
        }
        ?>
      </select>
    </div>
    <div class="right-sel"><span>Vista de: Página <?php echo $pagina; ?></span></div>
  </div>
  <div style="max-height:42rem;" class="lista">
    <div class="gal">
      <?php foreach ($medios as $key => $m): ?>
        <ul>
          <li>
            <h3><?php echo $m['galeria_url'] ?></h3>
            <img loading="lazy" src="<?php
            if ($m['metaParent'] == 'portada') {
              echo URL_PUBLIC . "recursos/portadas/";
            } elseif ($m['metaParent'] == 'entrada') {
              echo URL_PUBLIC . "recursos/entradas/";
            }
            echo $m['galeria_url'];
            ?>">
            <div class="id_gal"><span>#<?php
            if ($pagina == 1) {
              echo $key + 1;
            } else {
              $n = $pagina - 1;
              $n = $n * 20;
              echo $n + $key + 1;
            }
            ?></span><span>ID: <?php echo $m['tb_galeria_id'] ?></span></div>
            <p><strong>Meta:</strong> <?php echo $m['metaParent'] ?></p>
            <form style="text-align:center;padding:0.5rem" method="post">
              <input type="hidden" name="tb_galeria_id" value="<?php echo $m['tb_galeria_id']; ?>">
              <button type="submit" name="delete-submit" class="button-ghost" onclick="return confirm('¿Eliminar Medio?')"><i
                  class="fas fa-trash-alt borrar"></i></button>
            </form>
          </li>
        </ul>
      <?php endforeach; ?>
    </div>
  </div>
</div>