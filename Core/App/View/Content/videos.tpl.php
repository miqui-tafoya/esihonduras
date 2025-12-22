<?php
$videos = $body['videos'];
?>
<div class="dash">
    <div class="configuraciones">
        <p class="cabecera-uno">Administrar Videos</p>
    </div>
    <div class="lista">
        <table>
            <thead>
                <th>ID Youtube</th>
                <th>Título</th>
                <th>Acción</th>
            </thead>
            <tbody>
                <?php foreach ($videos as $key => $video): ?>
                    <tr>
                        <form method="post">
                            <input type="hidden" name="tb_videos_id" value="<?php echo $video['tb_videos_id']; ?>">
                            <td style="text-align:center;"><input class="ytfield" type="text" name="video_url"
                                    value="<?php echo $video['video_url']; ?>"></td>
                            <td style="text-align:center;"><input class="ytfield" type="text" name="video_titulo"
                                    value="<?php echo $video['video_titulo']; ?>"></td>
                            <td style="text-align:center;"><button class="ytedit" type="submit" name="update-yt"><i
                                        class="fas fa-save"></i></button></td>
                        </form>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>