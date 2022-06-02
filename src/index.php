<!DOCTYPE>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/header.css">
    <link rel="stylesheet" href="assets/styles/slidingMenu.css">
    <link rel="stylesheet" href="assets/styles/container.css">
    <link rel="stylesheet" href="assets/styles/login.css">
    <link rel="stylesheet" href="assets/styles/signUp.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title> Esquina 1015 Restaurant </title>
</head>

<body>
    <?php
        session_start();
    ?>
    <header class="Encabezado">
        <a href="index.php"><img src="assets/images/Logo.png" id="Logo"></a>
        <div class="header-menu">
            <div class="Nav-bar">
                <ul class="Nav">
                    <li class="Nav-li"><a class="Nav-a" href="#!">Productos</a></li>
                    <ul class="sub-Nav-bar">
                        <li class="sub-Nav-li"><a class="sub-Nav-a" href="views/products/appetizers.php">Entradas</a></li>
                        <li class="sub-Nav-li"><a class="sub-Nav-a" href="views/products/main_food.php">Platos fuertes</a></li>
                        <li class="sub-Nav-li"><a class="sub-Nav-a" href="views/products/desserts.php">Postres</a></li>
                        <li class="sub-Nav-li"><a class="sub-Nav-a" href="views/products/beverages.php">Bebidas</a></li>
                    </ul>
                    <li class="Nav-li"><a class="Nav-a" href="views/others/branches.php">Sucursales</a></li>
                    <li class="Nav-li"><a class="Nav-a" href="views/others/contacts.php">Contactanos</a></li>
                    <li class="Nav-li"><a class="Nav-a" href="#!">Mas</a></li>
                    <ul class="sub-Nav-extra">
                        <li class="sub-Nav-extra-li"><a class="sub-Nav-extra-a" href="views/others/reservations.php">Reservaciones</a></li>
                        <li class="sub-Nav-extra-li"><a class="sub-Nav-extra-a">Menú Digital</a></li>
                    </ul>
                </ul>
            </div>
            <div class="Nav-buttons">
                <a href="views/cartstore/productlist.php" id="Cart">
                    <i class="fa fa-shopping-cart"></i>
                    <span id="badge">0</span>
                </a>
                <a href="#!" id="Login-icon"><i class="fas fa-sign-in-alt"></i></a>
                <ul class="login-menu">
                    <li class="login-menu-li"><a class="login-menu-a" href="#!">Registrarse</a></li>
                    <li class="login-menu-li"><a class="login-menu-a" href="#!">Iniciar Sesión</a></li>
                </ul>
                <a href="views/admin/users.php" id="admin-icon"><i class="fa fa-cogs" aria-hidden="true"></i></a>
                <a href="#!" id="Menu-bars"><i class="fa fa-bars" aria-hidden="true"></i></a>
            </div>
        </div>
        <?php
            echo "<img src = data:image/jpeg;base64," . $_SESSION['foto'] . " id = 'User-photo'>";
        ?>
        <ul class="photo-menu">
            <li class="photo-menu-li"><a class="photo-menu-a" href="#!">Mi cuenta</a></li>
            <?php
                include ("views/modals/modal-delete-session-index.php");
            ?>
        </ul>
    </header>
    <div class="sliding-menu-container">
        <div class="sliding-menu">
            <i id="close-sliding-menu" class="fa fa-window-close" aria-hidden="true"></i>
            <div class="sliding-menu-nav-bar">
                <ul class="nav-list">
                    <li class="nav-item"><a class="nav-item-a" href="#!">Productos</a></li>
                    <ul class="sub-nav-list">
                        <li class="sub-nav-item"><a class="sub-nav-item-a" href="views/products/appetizers.php">Entradas</a></li>
                        <li class="sub-nav-item"><a class="sub-nav-item-a" href="views/products/main_food.php">Platos fuertes</a></li>
                        <li class="sub-nav-item"><a class="sub-nav-item-a" href="views/products/desserts.php">Postres</a></li>
                        <li class="sub-nav-item"><a class="sub-nav-item-a" href="views/products/beverages.php">Bebidas</a></li>
                    </ul>
                    <li class="nav-item"><a class="nav-item-a" href="views/others/branches.php">Sucursales</a></li>
                    <li class="nav-item"><a class="nav-item-a" href="views/others/contacts.php">Contactanos</a></li>
                    <li class="nav-item"><a class="nav-item-a" href="#!">Mas</a></li>
                    <ul class="sub-nav-more">
                        <li class="sub-nav-more-li"><a class="sub-nav-more-a" href="views/others/reservations.php">Reservaciones</a></li>
                        <li class="sub-nav-more-li"><a class="sub-nav-more-a">Menú Digital</a></li>
                    </ul>
                </ul>
            </div>
            <div class="sliding-menu-buttons">
                <a href="views/cartstore/productlist.php" id="cart-sliding"><i class="fa fa-shopping-cart"></i></a>
                <a href="#!" id="login-sliding"><i class="fas fa-sign-in-alt"></i></a>
                <ul class="login-sliding-menu">
                    <li class="login-sliding-menu-li"><a class="login-sliding-menu-a" href="#!">Registrarse</a></li>
                    <li class="login-sliding-menu-li"><a class="login-sliding-menu-a" href="#!">Iniciar Sesión</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <img src="assets/images/Restaurant_Images/ImgPrincipal.webp" id="Princ-img">
        <p class="date-fund">
            Fundado desde 1975 con el apoyo y el cariño familiar.
        </p>
        <p class="rest-info">
            Con un alto nivel culinario, en el que todas personas pueden satisfacer su paladar al suave danzón de la gastronomía mexicana.
            <br> Alberga una gran variedad de platillos que van desde las frondosas tierras del sur hasta el árido norte de la república mexicana.
            <br> Esquina 1015 siempre se esmera por crear experiencias culinarias inolvidables entre sus clientes, mejorar los momentos familiares y llevar el sazón de México a cada hogar.
        </p>
        <div class="img-container">
            <img id="scroll-img" src="assets/images/Restaurant_Images/pCom1.jpeg">
            <img id="scroll-img" src="assets/images/Restaurant_Images/diseñoHuasteco.jpg">
            <img id="scroll-img" src="assets/images/Restaurant_Images/pCom2.jpg">
            <img id="scroll-img" src="assets/images/Restaurant_Images/pCom3.webp">
            <img id="scroll-img" src="assets/images/Restaurant_Images/pCom4.jpg">
        </div>
        <div class="opinion-container">
            <div class="opinion-card">
                <img class="opinion-card-img" src="assets/images/People_Opinion/Person1.jpg" />
                <div class="opinion-card-info">
                    <h3 class="opinion-card-title"> Agustín Hernández Pou </h3>
                    <p class="opinion-card-op"> Excelente comida con un gran servicio </p>
                </div>
            </div>
            <div class="opinion-card">
                <img class="opinion-card-img" src="assets/images/People_Opinion/Person2.jpg" />
                <div class="opinion-card-info">
                    <h3 class="opinion-card-title"> Lucía Leal Corbacho </h3>
                    <p class="opinion-card-op"> Una muy buena opción para disfrutar platillos tipicos </p>
                </div>
            </div>
            <div class="opinion-card">
                <img class="opinion-card-img" src="assets/images/People_Opinion/Person3.jpg" />
                <div class="opinion-card-info">
                    <h3 class="opinion-card-title"> Aitana Páez Sobrino </h3>
                    <p class="opinion-card-op"> Excelente sabor y calidad </p>
                </div>
            </div>
            <div class="opinion-card">
                <img class="opinion-card-img" src="assets/images/People_Opinion/Person4.jpg" />
                <div class="opinion-card-info">
                    <h3 class="opinion-card-title"> Florina Isern Abella </h3>
                    <p class="opinion-card-op"> Deliciosos los chiles en nogada </p>
                </div>
            </div>
            <div class="opinion-card">
                <img class="opinion-card-img" src="assets/images/People_Opinion/Person5.jpg" />
                <div class="opinion-card-info">
                    <h3 class="opinion-card-title"> Armando Joaquin Abella </h3>
                    <p class="opinion-card-op"> Sin duda, una de las mejores opciones para probar comida </p>
                </div>
            </div>
            <div id="space"></div>
        </div>
    </div>
    <div class="login-container">
        <form class="login" action="controllers/accessController.php" method="POST" autocomplete="off" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="POST">
            <img id="img-login" src="assets/images/user.png">
            <legend class="login-title"> Iniciar Sesión </legend>
            <input type="email" value="Correo Electrónico" class="form-control" id="login-mail" name="userMail"required />
            <input type="password" value="Contraseña" class="form-control" id="login-password" name="userPassword" required />
            <div class="login-buttons">
                <input type="submit" value="Entrar" class="login-button" />
                <input type="button" value="Cancelar" class="login-button" />
            </div>
        </form>
    </div>
    <div class="signUp-container">
        <form class="signUp" action="controllers/usersController.php" method="POST" autocomplete="off" enctype="multipart/form-data">
            <legend class="signUp-title"> Registrarse </legend>
            <div class="signUp-personal-info">
                <input type="text" value="Nombre" name="userName" id="sign-name" class="form-control" required />
                <input type="text" value="Teléfono" name="userPhone" id="sign-phone" class="form-control" required />
            </div>
            <input type="email" value="Correo Electrónico" name="userMail" id="sign-mail" class="form-control" required />
            <input type="password" value="Contraseña" name="userPassword" id="sign-password" class="form-control" required />
            <input type="password" value="Contraseña" name="confirmPassword" id="sign-password2" class="form-control" required />
            <div class="toPhoto">
                <label for="photo">Foto: </label>
                <input type="file" name="photo">
            </div>
            <div class="signUp-buttons">
                <input type="submit" value="Registrarse" class="signUp-button" />
                <input type="button" value="Cancelar" class="signUp-button" />
            </div>
        </form>
    </div>
    <?php
        if(array_key_exists("mail", $_SESSION)) {
            echo "<script src='assets/components/ctrlUserphoto.js'></script>";
        }
        include ("assets/components/header.php");
    ?>
    <script src="assets/components/controlRegister.js"></script>
    <script src="assets/components/slidingMenu.js"></script>
</body>

</html>