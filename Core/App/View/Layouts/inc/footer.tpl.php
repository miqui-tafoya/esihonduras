<?php
?>
<div id="footer">
    <div class="logos-footer">
        <div class="grid-mapa-sitio">
            <lu class="ul-logos">
                <li><img src="<?php echo URL_PUBLIC ?>recursos/imagenes/sesal.png" alt=""></li>
                <li><img src="<?php echo URL_PUBLIC ?>recursos/imagenes/stlcc.png" alt=""></li>
                <li><img src="<?php echo URL_PUBLIC ?>recursos/imagenes/agah.png" alt=""></li>
                <li><img src="<?php echo URL_PUBLIC ?>recursos/imagenes/paeah.png" alt=""></li>

                <li><img src="<?php echo URL_PUBLIC ?>recursos/imagenes/sedesol.png" alt=""></li>
                <li><img src="<?php echo URL_PUBLIC ?>recursos/imagenes/cultivando.png" alt=""></li>
                <li><img src="<?php echo URL_PUBLIC ?>recursos/imagenes/ue.png" alt=""></li>
                <li><img src="<?php echo URL_PUBLIC ?>recursos/imagenes/ogp.png" alt=""></li>
            </lu>
        </div>
    </div>

    <div class="info-footer">
        <div class="uno-info-footer">
            <p> ESI Honduras - 2025</p>
            <?php if(!isset($_SESSION['id'])): ?>
            <div class="btn-login"> <a href="<?php echo URL_BASE ?>login">Login <i
                        class="fa-solid fa-sign-in-alt"></i></a></div>
            <?php else: ?>
            <div class="btn-login"> <a href="<?php echo URL_BASE ?>dashboard">Dashboard <i
                        class="fa-solid fa-tachometer-alt"></i></a></div>
            <div class="btn-login"> <a href="<?php echo URL_BASE ?>logout">Logout <i
                        class="fa-solid fa-sign-out-alt"></i></a></div>
            <?php endif ?>
        </div>
        <div class="dos-info-footer">
            <p>Nuestras redes sociales</p>
            <div class="redes-footer">
                <a href=""> <i class="fa-brands fa-tiktok"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
                <a href=""> <i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
        <div class="tres-info-footer">
            <div class="mapa-sitio-footer">
                <p>Mapa de sitio</p>
                <div class="grid-mapa-sitio">
                    <ul>
                        <li><a href="index">Inicio</a></li>
                        <li style="flex-direction:column"><a href="quienessomos">Quienes Somos</a>
                            <ul class="sub-menu-footer">
                                <li><a href="">Educadores</a></li>
                                <li><a href="">Madres y Padres</a></li>
                                <li><a href="">Jóvenes</a></li>
                            </ul>
                        </li>
                        <li><a href="saludsexual">Salud Sexual</a></li>
                    </ul>
                    <ul>
                        <li><a href="centrosdesalud">Centros de Salud</a></li>
                        <li><a href="informacionpublica">Información Pública</a></li>
                        <li><a href="faq">Preguntas y dudas</a></li>

                    </ul>
                    <ul>
                        <li><a href="multimedia">Multimedia</a></li>
                        <li><a href="noticias">Noticias</a></li>
                        <li><a href="contacto">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>