<?php
if (isset($responseParams['post'])) {
    $error = $responseParams['response'];
    $login = $responseParams['post']['login'];
}
?>
<div id="main">
    <div>
        <h1>Acceso</h1>
        <form method="post">
            <label for="nombre">Nombre de usuario o Email
                <br><span><?php echo $error['error_login'] ?? '' ?></span>
            </label>
            <input type="text" value="<?php echo $login ?? '' ?>" name="login">
            <label for="pass">Contraseña
                <br><span><?php echo $error['error_password'] ?? '' ?></span>
            </label>
            <div style="display:flex;flex-direction:row">
                <input id="password" type="password" name="password">
                <span style="margin: 1rem 0;padding: 0.5rem 0 0.5rem 0.5rem;" onclick="ver()"><i
                        class="fas fa-eye"></i></span>
            </div>
            <label for="captcha">Captcha
                <br><span><?php echo $error['error_captcha'] ?? '' ?></span>
            </label>
            <img style="height:50px;width:130px;margin: 5px auto 0 auto" src="captcha" id="captcha_image" />
            <input maxlength="5" type="text" name="captcha_code">
            <div style="margin: 0.4rem auto 1rem auto; text-align: center"><a style=" color: #ff3366"
                    href="<?php echo URL_BASE ?>recupera">¿Olvidaste tu
                    contraseña?</a></div>
            <input type="submit" name="login-btn" class="btn" value="entrar">
        </form>
    </div>
</div>