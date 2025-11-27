<?php 
$entrada = $body['entrada'];
?>
<span id="breadcrumbs"><?php echo ($entrada['tipo'] === 'publica') ? 'informacionpublica' : 'noticias' ; ?></span>
<div id="main">
<?php echo ($entrada['tipo'] === 'publica') ? '<a href="'.URL_BASE.'informacionpublica">regresar a información publica</a>' : '<a href="'.URL_BASE.'noticias">regresar a noticias</a>' ; ?>    
<br>
<?php echo $entrada['entradas_timestamp']; ?>
<br>
<?php echo URL_PUBLIC.'recursos/entradas/'.$entrada['portada']; ?>
<br>
<?php echo $entrada['entradas_titulo']; ?>
<br>
<?php echo $entrada['cuerpo']; ?>
</div>