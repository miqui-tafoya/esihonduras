<?php
$pagina = $body['query'];
$paginado = $body['paginado'];
$posts = $body['posts'];
?>
<div class="dash">
    <div class="configuraciones">
        <h1>Administrar Noticias</h1>
        <div class="botn-grupo">
            <a href="<?php echo URL_BASE ?>entrynoticias/">Administrar Noticias</a>
            <a href="<?php echo URL_BASE ?>nuevanoticia">Nueva Noticias</a>
        </div>
    </div>
    <div class="selection">
        <div class="left-sel">
            <select onchange="javascript:location.href = this.value;">
                <option value="#">Ir a</option>
                <?php
                $paginado = range(1, $paginado);
                foreach ($paginado as $paginas) {
                    echo "<option value='" . URL_BASE . "entrynoticias/" . $paginas . "'>Página " . $paginas . "</option>";
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
                <th>ID</th>
                <th>Fecha</th>
                <th style="text-align:left;">Título</th>
                <th style="text-align:left;">Categoría</th>
                <th><i class="fas fa-star"></i></th>
                <th colspan="3">Acción</th>
            </thead>
            <tbody>
                <?php foreach ($posts as $key => $post): ?>
                    <tr>
                        <td style="text-align:center;color:green;"><?php
                        if ($pagina == 1) {
                            echo $key + 1;
                        } else {
                            $nu = $pagina - 1;
                            $nu = $nu * 10;
                            echo $nu + $key + 1;
                        }
                        ?></td>

                        <td style="text-align:center;color:green;"><?php echo $post['tb_entradas_id']; ?></td>

                        <td style="text-align:center;font-size:0.9rem;">
                            <?php echo date("d/m/Y", strtotime($post['entradas_timestamp'])); ?>
                        </td>

                        <td style="font-weight:500;"><?php echo $post['entradas_titulo']; ?><a
                                href="<?php echo URL_BASE ?>entrada/<?php echo $post['tb_entradas_id'] ?>" class="ver-post"
                                target="_blank"><i class="fas fa-external-link-alt"></i></a></td>

                        <td style="text-align:center;">
                            <ul style="list-style:none;">
                                <li style="text-align:left;font-variant:small-caps;color:red;">
                                    <?php echo $post['nombre_categoria'] ?>
                                </li>
                            </ul>
                        </td>


                        <td style="text-align:center">
                            <form id="feat_form" method="post">
                                <input type="hidden" name="tb_entradas_id" value="<?php echo $post['tb_entradas_id']; ?>">
                                <input type="hidden" name="feat" value='<?php echo $post['feat'] == 1 ? '0' : '1' ?>'>
                                <button type="submit" name="feat-submit"
                                    onclick="return confirm('¿Modificar estatus de Destacado?')"
                                    class="button-ghost"><?php echo $post['destacado'] == 1 ? 'sí' : 'no' ?></button>
                            </form>
                        </td>

                        <td><a href="<?php echo URL_BASE ?>editarnoticia/<?php echo $post['tb_entradas_id']; ?>" class="editar"><i
                                    class="fas fa-pen"></i></a></td>

                        <td style="text-align:center">
                            <form method="post">
                                <input type="hidden" name="tb_entradas_id" value="<?php echo $post['tb_entradas_id']; ?>">
                                <button type="submit" name="delete-submit" class="button-ghost"
                                    onclick="return confirm('¿Eliminar Entrada?')"><i
                                        class="fas fa-trash-alt borrar"></i></button>
                            </form>
                        </td>

                        <td style="text-align:center">
                            <form method="post">
                                <input type="hidden" name="tb_entradas_id" value="<?php echo $post['tb_entradas_id']; ?>">
                                <input type="hidden" name="publicado"
                                    value='<?php echo $post['publicado'] == 1 ? '0' : '1' ?>'>
                                <button type="submit" name="publicar-submit"
                                    onclick="return confirm('<?php echo $post['publicado'] == 1 ? '¿Revertir a Borrador?' : '¿Publicar Entrada?' ?>')"
                                    class="button-ghost"><?php echo $post['publicado'] == 1 ? '<i class="fas fa-eraser despublicar"></i>' : '<i class="fas fa-check publicar"></i>' ?></button>
                            </form>
                        </td>

                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>