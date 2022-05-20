<!DOCTYPE>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/styles/header.css">
    <link rel="stylesheet" href="../../assets/styles/slidingMenu.css">
    <link rel="stylesheet" href="../../assets/styles/cards.css">
    <link rel="stylesheet" href="../../assets/styles/login.css">
    <link rel="stylesheet" href="../../assets/styles/signUp.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title> Esquina 1015 Restaurant </title>
</head>

<body>
    <?php
        include ("../layouts/header.php");
    ?>
    <h1>Postres</h1>
    <div class="cards-container">
        <div class="card">
            <div class="card-information">
                <h2 class="card-title"> Churros </h2>
                <p class="card-description"> Churros con azucar morena y un acompañamiento de chocolate (6 unidades). </p>
                <div class="buy-container">
                    <button class="card-button" value=0>Agregar al carrito </button>
                    <div class="units">
                        <select name="unidades" id="unidades" required>
                            <option value="1">x1</option>
                            <option value="2">x2</option>
                            <option value="3">x3</option>
                            <option value="4">x4</option>
                            <option value="5">x5</option>
                            <option value="6">x6</option>
                            <option value="7">x7</option>
                            <option value="8">x8</option>
                            <option value="9">x9</option>
                        </select>
                    </div>
                    <div class="cost"> $80 </div>
                </div>
            </div>
            <img class="card-img" src="../../assets/images/Desserts/churros.jpg">
        </div>
        <div class="card">
            <div class="card-information">
                <h2 class="card-title"> Buñuelos </h2>
                <p class="card-description"> Buñuelos bañados en azucar morena (3 unidades). </p>
                <div class="buy-container">
                    <button class="card-button" value=1>Agregar al carrito </button>
                    <div class="units">
                        <select name="unidades" id="unidades" required>
                            <option value="1">x1</option>
                            <option value="2">x2</option>
                            <option value="3">x3</option>
                            <option value="4">x4</option>
                            <option value="5">x5</option>
                            <option value="6">x6</option>
                            <option value="7">x7</option>
                            <option value="8">x8</option>
                            <option value="9">x9</option>
                        </select>
                    </div>
                    <div class="cost"> $60 </div>
                </div>
            </div>
            <img class="card-img" src="../../assets/images/Desserts/buñuelos.jpg">
        </div>
        <div class="card">
            <div class="card-information">
                <h2 class="card-title"> Arroz con leche </h2>
                <p class="card-description"> Porción de 250ml con lechera y una pizca de canela en polvo. </p>
                <div class="buy-container">
                    <button class="card-button" value=2>Agregar al carrito </button>
                    <div class="units">
                        <select name="unidades" id="unidades" required>
                            <option value="1">x1</option>
                            <option value="2">x2</option>
                            <option value="3">x3</option>
                            <option value="4">x4</option>
                            <option value="5">x5</option>
                            <option value="6">x6</option>
                            <option value="7">x7</option>
                            <option value="8">x8</option>
                            <option value="9">x9</option>
                        </select>
                    </div>
                    <div class="cost"> $20 </div>
                </div>
            </div>
            <img class="card-img" src="../../assets/images/Desserts/arroz_leche.webp">
        </div>
        <div class="card">
            <div class="card-information">
                <h2 class="card-title"> Capirotada </h2>
                <p class="card-description"> Pan en jarabe de piloncillo rayadura de naranja, cacahuate, pasas, nueces, coco seco y chispitas arcoiris. </p>
                <div class="buy-container">
                    <button class="card-button" value=3>Agregar al carrito </button>
                    <div class="units">
                        <select name="unidades" id="unidades" required>
                            <option value="1">x1</option>
                            <option value="2">x2</option>
                            <option value="3">x3</option>
                            <option value="4">x4</option>
                            <option value="5">x5</option>
                            <option value="6">x6</option>
                            <option value="7">x7</option>
                            <option value="8">x8</option>
                            <option value="9">x9</option>
                        </select>
                    </div>
                    <div class="cost"> $60 </div>
                </div>
            </div>
            <img class="card-img" src="../../assets/images/Desserts/capirotada.jpg">
        </div>
        <div class="card">
            <div class="card-information">
                <h2 class="card-title"> Jericalla </h2>
                <p class="card-description"> Postre a base de huevo, leche, vainilla, canela y azúcar </p>
                <div class="buy-container">
                    <button class="card-button" value=4>Agregar al carrito </button>
                    <div class="units">
                        <select name="unidades" id="unidades" required>
                            <option value="1">x1</option>
                            <option value="2">x2</option>
                            <option value="3">x3</option>
                            <option value="4">x4</option>
                            <option value="5">x5</option>
                            <option value="6">x6</option>
                            <option value="7">x7</option>
                            <option value="8">x8</option>
                            <option value="9">x9</option>
                        </select>
                    </div>
                    <div class="cost"> $30 </div>
                </div>
            </div>
            <img class="card-img" src="../../assets/images/Desserts/jericalla.jpg">
        </div>
        <div id="space"></div>
    </div>
    <?php 
        include("../modals/modal-login.php");
        include("../modals/modal-signup.php");
    ?>
    <script src="../../assets/components/header.js"></script>
    <script src="../../assets/components/slidingMenu.js"></script>
    <script src="../../assets/components/addProduct.js"></script>
</body>

</html>