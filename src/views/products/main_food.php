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
    <h1> Platos Fuertes </h1>
    <div class="cards-container">
        <div class="card">
            <div class="card-information">
                <h2 class="card-title"> Chilaquiles Rojos </h2>
                <p class="card-description"> Los chilaquiles vienen cubiertos con queso fresco y crema, acompañados de frijoles. </p>
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
                    <div class="cost"> $70 </div>
                </div>
            </div>
            <img class="card-img" src="../../assets/images/Main_Meals/chilaquilesR.jpg">
        </div>
        <div class="card">
            <div class="card-information">
                <h2 class="card-title"> Birria </h2>
                <p class="card-description"> Acompañada de cebolla y cilandro picados con 5 tortillas de maíz </p>
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
                    <div class="cost"> $110 </div>
                </div>
            </div>
            <img class="card-img" src="../../assets/images/Main_Meals/birria.jpg">
        </div>
        <div class="card">
            <div class="card-information">
                <h2 class="card-title"> Menudo </h2>
                <p class="card-description"> Menudo de pancita de res con cebolla y chile para acompañar. Adicional 2 piezas de pan caserode papa. </p>
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
                    <div class="cost"> $100 </div>
                </div>
            </div>
            <img class="card-img" src="../../assets/images/Main_Meals/menudo.jpg">
        </div>
        <div class="card">
            <div class="card-information">
                <h2 class="card-title"> Pozole </h2>
                <p class="card-description"> Pozole de maiz blanco con carne de res, añadiendo lechuga, rabano, cebolla y limon. </p>
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
            <img class="card-img" src="../../assets/images/Main_Meals/pozole.jpg">
        </div>
        <div class="card">
            <div class="card-information">
                <h2 class="card-title"> Tamal Oaxacaqueño </h2>
                <p class="card-description"> Tamal en hoja de platano de carne de puerco en chile rojo </p>
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
            <img class="card-img" src="../../assets/images/Main_Meals/tamalOaxaqueño.jpg">
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