<div class="login-container">
    <form class="login">
        <img id="img-login" src="../../assets/images/user.png">
        <legend class="login-title"> Iniciar Sesión </legend>
        <input type="email" value="Correo Electrónico" class="form-control" required />
        <input type="password" value="Contraseña" class="form-control" required />
        <div class="login-buttons">
            <input type="submit" value="Entrar" class="login-button" />
            <input type="submit" value="Administrador" class="login-button" onclick="window.location.href='../admin/users.php'" />
            <input type="button" value="Cancelar" class="login-button" />
        </div>
    </form>
</div>