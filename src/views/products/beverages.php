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
    <h1>Bebidas</h1>
    <div class="cards-container">
        <div class="card">
            <div class="card-information">
                <h2 class="card-title"> Atole de guayaba</h2>
                <p class="card-description"> Atole tipico de guayaba en porción de una taza (240ml). </p>
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
                    <div class="cost"> $25 </div>
                </div>
            </div>
            <img class="card-img" src="../../assets/images/Beverages/atole.jpg">
        </div>
        <div class="card">
            <div class="card-information">
                <h2 class="card-title"> Chocalate </h2>
                <p class="card-description"> Chocolate oaxaqueño en porción de una taza (240ml). </p>
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
                    <div class="cost"> $25 </div>
                </div>
            </div>
            <img class="card-img" src="../../assets/images/Beverages/chocolate.jpg">
        </div>
        <div class="card">
            <div class="card-information">
                <h2 class="card-title"> Agua de jamaica </h2>
                <p class="card-description"> Agua fresca de jamaica recien hecha en porción de 500ml. </p>
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
            <img class="card-img" src="../../assets/images/Beverages/jamaica.jpg">
        </div>
        <div class="card">
            <div class="card-information">
                <h2 class="card-title"> Agua de horchata </h2>
                <p class="card-description"> Agua fresca de horchata en porción de 500ml. </p>
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
                    <div class="cost"> $20 </div>
                </div>
            </div>
            <img class="card-img" src="../../assets/images/Beverages/horchata.jpg">
        </div>
        <div class="card">
            <div class="card-information">
                <h2 class="card-title"> Carajillo </h2>
                <p class="card-description"> <b> Para mayores de 18, </b> una mezcla de brandi con cafe huasteco de Xilitla servido en un vaso de 200ml</p>
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
            <img class="card-img" src="../../assets/images/Beverages/carajillo.jpg">
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