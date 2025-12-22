<?php
$pagina = $body['query'];
$paginado = $body['paginado'];
$usuarios = $body['usuarios'];
?>
<div class="dash">
  <div class="configuraciones">
    <p class="cabecera-uno">Administrar Usuarios</p>
    <div class="botn-grupo">
      <a href="<?php echo URL_BASE ?>usuarios/">Administrar Usuarios</a>
      <a href="<?php echo URL_BASE ?>nuevousuario">Nuevo Usuario</a>
    </div>
  </div>
  <div class="selection">
    <div class="left-sel">
      <select onchange="javascript:location.href = this.value;">
        <option value="#">Ir a</option>
        <?php
        $paginado = range(1, $paginado);
        foreach ($paginado as $paginas) {
          echo "<option value='" . URL_BASE . "usuarios/" . $paginas . "'>Página " . $paginas . "</option>";
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
        <th>Login Email</th>
        <th>Nombre</th>
        <th colspan="2">Acción</th>
      </thead>
      <tbody>
        <?php foreach ($usuarios as $key => $usuario): ?>
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

            <td style="text-align:center;"><?php echo $usuario['login_email']; ?></td>

            <td style="text-align:center;font-weight:500;"><?php echo ($usuario['nombre'] . ' ' . $usuario['apellido']) ?? ''; ?></td>

            <td><a href="<?php echo URL_BASE; ?>editarusuario/<?php echo $usuario['tb_usuarios_id']; ?>" class="editar"><i class="fas fa-pen"></i></a></td>

            <td style="text-align:center">
              <form method="post">
                <input type="hidden" name="tb_usuarios_id" value="<?php echo $usuario['tb_usuarios_id']; ?>">
                <button type="submit" name="delete-submit" class="button-ghost" onclick="return confirm('¿Eliminar Usuario?')"><i
                    class="fas fa-trash-alt borrar"></i></button>
              </form>
            </td>
          <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>