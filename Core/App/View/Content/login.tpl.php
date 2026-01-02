<?php
if (isset($responseParams['post'])) {
    $error = $responseParams['response'];
    $login = $responseParams['post']['login_email'];
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
                <label for="nombre">Email
                    <br><span><?php echo $error['error_login'] ?? '' ?></span>
                </label>
                <input type="text" value="<?php echo $login ?? '' ?>" name="login_email">
            </div>
            <div class="bloque">
                <label for="pass">Contraseña
                    <br><span><?php echo $error['error_password'] ?? '' ?></span>
                </label>
                <div style="display:flex;flex-direction:row; width:100%">
                    <input id="password" type="password" name="password">
                    <span class="ver-pass" onclick="ver()"><i class="fas fa-2x fa-eye"></i></span>
                </div>
            </div>

            <div class="bloque-captcha">
                <label for="captcha">Captcha
                    <br><span><?php echo $error['error_captcha'] ?? '' ?></span>
                </label>
                <div style="display:flex;flex-direction:row;margin: 5px auto 0 auto">
                    <img style="height:50px;width:130px;" src="captcha" id="captcha_image" />
                    <span style="margin: 5px 10px;cursor:pointer" class="ver-pass" onclick="refreshCaptcha()" style="margin-top: 5px;">
                        <i class="fas fa-2x fa-refresh"></i></span>
                </div>
                <input maxlength="5" type="text" name="captcha_code">
                <div class="btn-enlace">
                    <input type="submit" name="login-btn" class="btn" value="Entrar">
                </div>
        </form>
    </div>
</div>