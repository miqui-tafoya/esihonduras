<?php
$categoria = $body['categoria'];
$entradas = $body['entradas'];
?>
<span id="breadcrumbs"><?php echo ($categoria['tipo'] === 'publica') ? 'informacionpublica' : 'noticias' ; ?></span>
<div id="main">
    <h1><?php echo $categoria['nombre_categoria'] ?></h1>
</div>