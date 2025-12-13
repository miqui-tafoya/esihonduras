<?php
if (isset($responseParams['post'])) {
    $error = $responseParams['response'];
    $login = $responseParams['post']['login'];
}
?>
<div id="main">
    <div class="contenedor-login">
        <div class="intro">
            <p class="cabecera-uno p-bottom">Acceso</p>
            <p class="cuerpo-texto">Bienvenido al administrador de contenido de la plataforma ESI Honduras</p>
        </div>
        <form method="post" class="bloque-form">
            <div class="bloque">
                <label for="nombre">Nombre de usuario o Email
                    <br><span><?php echo $error['error_login'] ?? '' ?></span>
                </label>
                <input type="text" value="<?php echo $login ?? '' ?>" name="login">
            </div>
            <div class="bloque">
                <label for="pass">Contraseña
                    <br><span><?php echo $error['error_password'] ?? '' ?></span>
                </label>
                <div style="display:flex;flex-direction:row; width:100%">
                    <input id="password" type="password" name="password">
                    <span  onclick="ver()"><i class="fas fa-eye"></i></span>
                </div>
            </div>

            <div class="bloque-captcha">
            <label for="captcha">Captcha
                <br><span><?php echo $error['error_captcha'] ?? '' ?></span>
            </label>
            <img style="height:50px;width:130px;margin: 5px auto 0 auto" src="captcha" id="captcha_image" />
            <input maxlength="5" type="text" name="captcha_code">
            <div style="margin: 0.4rem auto 1rem auto; text-align: center"><a style=" color: #ff3366"
                    href="<?php echo URL_BASE ?>recupera">¿Olvidaste tu
                    contraseña?</a></div>
            </div>

            <div class="btn-enlace">
                <input type="submit" name="login-btn" class="btn" value="Entrar">
            </div>
        </form>
    </div>
</div>