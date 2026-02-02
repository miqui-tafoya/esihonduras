<?php
?>
<div id="menu-large">
    <div class="back-menu">
        <div class="logo-menu"> <img src="<?php echo URL_PUBLIC ?>recursos/imagenes/logo_esi.png" alt=""></div>
        <ul>
            <li><a href="<?php echo URL_BASE ?>">Inicio</a></li>
            <div class="dropdown">
                <li>
                    <a href="<?php echo URL_BASE ?>quienessomos" class="dropbtn">Quiénes somos</a>
                    <div class="dropdown-content">
                        <a href="<?php echo URL_BASE ?>educadores">Educadores</a>
                        <a href="<?php echo URL_BASE ?>madresypadres">Madres y Padres</a>
                        <a href="<?php echo URL_BASE ?>jovenes">Jóvenes</a>
                    </div>

                </li>
            </div>
            <li><a href="<?php echo URL_BASE ?>saludsexual">Salud Sexual</a></li>
            <li><a href="<?php echo URL_BASE ?>centrosdesalud">Centros de Salud</a></li>
            <li><a href="<?php echo URL_BASE ?>informacionpublica">Información Pública</a></li>
            <li><a href="<?php echo URL_BASE ?>faq">Preguntas y dudas</a></li>
            <li><a href="<?php echo URL_BASE ?>multimedia">Multimedia</a></li>
            <li><a href="<?php echo URL_BASE ?>noticias">Noticias</a></li>
            <li><a href="<?php echo URL_BASE ?>contacto">Contacto</a></li>
            <li class="btn-130"><a href="https://sistema130.gob.hn/" target="_blank">Sistema 130</a></li>
        </ul>
    </div>
</div>


<div id="menu-movil" class="slide-out back-menu-movil" style="visibility: hidden;">
    <div class="logo-menu-movil"> <img src="<?php echo URL_PUBLIC ?>recursos/imagenes/logo_esi.png" alt=""></div>
    <div class="menu-area">
        <ul>
            <li><a href="<?php echo URL_BASE ?>">Inicio</a></li>
            <li style="flex-direction:column"><a href="<?php echo URL_BASE ?>quienessomos">Quienes Somos</a>
                <ul class="sub-menu-movil">
                    <li><a href="<?php echo URL_BASE ?>educadores">Educadores</a></li>
                    <li><a href="<?php echo URL_BASE ?>madresypadres">Madres y Padres</a></li>
                    <li><a href="<?php echo URL_BASE ?>jovenes">Jóvenes</a></li>
                </ul>
            </li>
            <li><a href="<?php echo URL_BASE ?>saludsexual">Salud Sexual</a></li>
            <li><a href="<?php echo URL_BASE ?>centrosdesalud">Centros de Salud</a></li>
            <li><a href="<?php echo URL_BASE ?>informacionpublica">Información Pública</a></li>
            <li><a href="<?php echo URL_BASE ?>faq">Preguntas y dudas</a></li>
            <li><a href="<?php echo URL_BASE ?>multimedia">Multimedia</a></li>
            <li><a href="<?php echo URL_BASE ?>noticias">Noticias</a></li>
            <li><a href="<?php echo URL_BASE ?>contacto">Contacto</a></li>
            <li class="btn-130"><a href="https://sistema130.gob.hn/" target="_blank">Sistema 130</a></li>
            <li><a id="cerrar-menu-movil">X Cerrar</a></li>
        </ul>
    </div>
</div>