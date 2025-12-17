<?php
$pagina = $body['query'];
$paginado = $body['paginado'];
$categorias = $body['categorias'];
?>
<div class="dash">
  <div class="configuraciones">
    <h1>Administrar Categorias</h1>
    <div class="botn-grupo">
      <a href="<?php echo URL_BASE ?>entrycategorias/">Administrar Categorias</a>
      <a href="<?php echo URL_BASE ?>nuevacategoria">Nueva Categoria</a>
    </div>
  </div>
  <div class="selection">
    <div class="left-sel">
      <select onchange="javascript:location.href = this.value;">
        <option value="#">Ir a</option>
        <?php
        $paginado = range(1, $paginado);
        foreach ($paginado as $paginas) {
          echo "<option value='" . URL_BASE . "entrycategorias/" . $paginas . "'>Página " . $paginas . "</option>";
        }
        ?>
      </select>
    </div>
    <div class="right-sel"><span>Vista de: Página <?php echo $pagina; ?></span></div>
  </div>
  <div class="lista">
    <table>
      <thead>
        <th>#</th>
        <th>Categoría</th>
        <th>Sección</th>
        <th>Slug</th>
        <th colspan="2">Acción</th>
      </thead>
      <tbody>
        <?php foreach ($categorias as $key => $tema): ?>
          <tr>
            <td style="text-align:center;color:var(--g600);"><?php
            if ($pagina == 1) {
              echo $key + 1;
            } else {
              $nu = $pagina - 1;
              $nu = $nu * 10;
              echo $nu + $key + 1;
            }
            ?></td>

            <td style="text-align:center;font-weight:bold"><?php echo $tema['nombre_categoria']; ?></td>

            <td style="text-align:center;font-weight:bold"><?php echo $tema['tipo']; ?></td>

            <td style="text-align:center;color:var(--g600);"><?php echo $tema['slug_categoria']; ?></td>

            <td><a href="<?php echo URL_BASE ?>editarcategoria/<?php echo $tema['tb_categorias_id']; ?>" class="editar"><i class="fas fa-pen"></i></a></td>

            <td style="text-align:center">
              <form method="post">
                <input type="hidden" name="tb_categorias_id" value="<?php echo $tema['tb_categorias_id']; ?>">
                <button type="submit" name="delete-submit" class="button-ghost" onclick="return confirm('¿Eliminar Tema?')"><i
                    class="fas fa-trash-alt borrar"></i></button>
              </form>
            </td>

          <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>