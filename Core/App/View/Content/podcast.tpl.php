<?php
$podcast = $body['podcast'];
?>
<div class="dash">
    <div class="configuraciones">
        <h1>Administrar Podcast</h1>
    </div>
    <div class="lista">
        <table>
            <thead>
                <th>Embed</th>
                <th>Título</th>
                <th>Acción</th>
            </thead>
            <tbody>
                <?php foreach ($podcast as $key => $audio): ?>
                    <tr>
                        <form method="post">
                            <input type="hidden" name="tb_podcast_id" value="<?php echo $audio['tb_podcast_id']; ?>">
                            <td style="text-align:center;"><textarea style="resize:none" rows="10" cols="50" class="ytfield"
                                    name="podcast_url"><?php echo $audio['podcast_url']; ?></textarea></td>
                            <td style="text-align:center;"><input class="ytfield" type="text" name="podcast_titulo"
                                    value="<?php echo $audio['podcast_titulo']; ?>"></td>
                            <td style="text-align:center;"><button class="ytedit" type="submit" name="update-pod"><i
                                        class="fas fa-save"></i></button></td>
                        </form>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>