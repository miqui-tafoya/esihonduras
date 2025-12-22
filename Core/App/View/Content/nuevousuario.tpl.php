<?php
if (!empty($responseParams)) {
    $post = $responseParams['post'];
    $error = $responseParams['errors'];
}
?>
<div class="dash">
    <div class="configuraciones">
        <p class="cabecera-uno">Nuevo Usuario</p>
        <div class="botn-grupo">
            <a href="<?php echo URL_BASE ?>usuarios/">Administrar Usuarios</a>
            <a href="<?php echo URL_BASE ?>nuevousuario">Nuevo Usuario</a>
        </div>
        <form class="campos-admin" method="post">
            <label for="login_email">Login (Email) <span class="form-error"><?php echo $error['error_login_email'] ?? '' ?></span></label>
            <input class="adm-txt" type="text" value="<?php echo $post['login_email'] ?? '' ?>" name="login_email">
            <label for="nombre">Nombre<span class="form-error"><?php echo $error['error_nombre'] ?? '' ?></span></label>
            <input class="adm-txt" type="text" value="<?php echo $post['nombre'] ?? '' ?>" name="nombre">
            <label for="apellido">Apellido<span class="form-error"><?php echo $error['error_apellido'] ?? '' ?></span></label>
            <input class="adm-txt" type="text" value="<?php echo $post['apellido'] ?? '' ?>" name="apellido">
            <label style="margin-bottom:0.25rem;" for="password">Contraseña <span class="form-error"><?php echo $error['error_password'] ?? '' ?></span></label>
            <span><i class="fas fa-exclamation-circle"></i> Mínimo 7 caracteres</span>
            <input class="adm-txt" type="password" name="password">
            <label for="passwordConf">Confirma Contraseña <span class="form-error"><?php echo $error['error_passwordConf'] ?? '' ?></span></label>
            <input class="adm-txt" type="password" name="passwordConf">
            <button style="margin-top:2rem;" class="btn-primario" type="submit" name="submit-nuevo">Agregar Usuario</button>
        </form>
    </div>
</div>