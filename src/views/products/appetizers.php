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
    <h1>Entradas</h1>
    <div class="cards-container">
        <div class="card">
            <div class="card-information">
                <h2 class="card-title"> Choriqueso </h2>
                <p class="card-description"> Chorizo mexicano con queso oaxaqueño acompañado con 5 tortillas de harina </p>
                <div class="buy-container">
                    <button class="card-button" value=0>Agregar al carrito </button>
                    <div class="units">
                        <select name="unidades" id="unidades" required">
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
            <img class="card-img" src="../../assets/images/Appetizers/choriqueso.jpg">
        </div>
        <div class="card">
            <div class="card-information">
                <h2 class="card-title"> Sopa de Fideos </h2>
                <p class="card-description"> El plato viene acompañado con 3 tortillas de maiz </p>
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
                    <div class="cost"> $40 </div>
                </div>
            </div>
            <img class="card-img" src="../../assets/images/Appetizers/sopaFideos.jpg">
        </div>
        <div class="card">
            <div class="card-information">
                <h2 class="card-title"> Caldo de Verduras </h2>
                <p class="card-description"> Caldo con papa, col, pimiento, zanahoria y hojs de cilandro, con 3 tortillas de maíz </p>
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
                    <div class="cost"> $40 </div>
                </div>
            </div>
            <img class="card-img" src="../../assets/images/Appetizers/caldoVerduras.webp">
        </div>
        <div class="card">
            <div class="card-information">
                <h2 class="card-title"> Ceviche de Camaron </h2>
                <p class="card-description"> Mezcla de camaron, tomate, cebolla roja, cilandro y aguacate </p>
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
                    <div class="cost"> $100 </div>
                </div>
            </div>
            <img class="card-img" src="../../assets/images/Appetizers/cevicheCamaron.webp">
        </div>
        <div class="card">
            <div class="card-information">
                <h2 class="card-title"> Frijoles Charros </h2>
                <p class="card-description"> Frijoles cocidos con salchicha, tocino, jamon, cebolla, ajo y chile </p>
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
                    <div class="cost"> $60 </div>
                </div>
            </div>
            <img class="card-img" src="../../assets/images/Appetizers/frijolesCharros.jpg">
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