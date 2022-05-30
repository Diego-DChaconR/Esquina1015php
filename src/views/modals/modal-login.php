<div class="login-container">
    <form class="login" action="../../controllers/usersController.php" method="POST" autocomplete="off" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="POST">
        <img id="img-login" src="../../assets/images/user.png">
        <legend class="login-title"> Iniciar Sesión </legend>
        <input type="email" value="Correo Electrónico" class="form-control" name="userMail"required />
        <input type="password" value="Contraseña" class="form-control" name="password" required />
        <div class="login-buttons">
            <input type="submit" value="Entrar" class="login-button" />
            <input type="submit" value="Administrador" class="login-button" onclick="window.location.href='../admin/users.php'" />
            <input type="button" value="Cancelar" class="login-button" />
        </div>
    </form>
</div>