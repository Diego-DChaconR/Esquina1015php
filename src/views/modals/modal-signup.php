<div class="signUp-container">
    <form class="signUp" action="../../controllers/usersController.php" method="POST">
        <legend class="signUp-title"> Registrarse </legend>
        <div class="signUp-personal-info">
            <input type="text" value="Nombre" name="userName" class="form-control" required />
            <input type="text" value="Teléfono" name="userPhone" class="form-control" required />
        </div>
        <input type="email" value="Correo Electrónico" name="userMail" class="form-control" required />
        <input type="password" value="Contraseña" name="userPassword" class="form-control" required />
        <input type="password" value="Contraseña" name="confirmPassword" class="form-control" required />
        <div class="signUp-buttons">
            <input type="submit" value="Registrarse" class="signUp-button" />
            <input type="button" value="Cancelar" class="signUp-button" />
        </div>
    </form>
</div>