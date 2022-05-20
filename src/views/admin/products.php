<!DOCTYPE>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/styles/header.css">
    <link rel="stylesheet" href="../../assets/styles/slidingMenu.css">
    <link rel="stylesheet" href="../../assets/styles/adminMenu.css">
    <link rel="stylesheet" href="../../assets/styles/products.css">
    <link rel="stylesheet" href="../../assets/styles/login.css">
    <link rel="stylesheet" href="../../assets/styles/signUp.css">
    <link rel="stylesheet" href="../../assets/styles/modal-add-product.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title> Esquina 1015 Restaurant </title>
</head>

<body>
    <?php
        include ("../layouts/header.php");
    ?>
    <?php
        include ("../layouts/headerAdmin.php");
    ?>
    <div class="to-add">
        <button id="add-product">
            Agregar producto
        </button>
    </div>
    <div class="products-controller">
        <div class="product-info-title">
            <div class="name-title">
                Nombre
            </div>
            <div class="category-title">
                Categoria
            </div>
            <div class="description-title">
                Descripción
            </div>
            <div class="price-title">
                Precio
            </div>
            <div class="options-title"> Opciones </div>
        </div>
        <div class="product-info">
            <div class="product-name">
                Chilaquiles Rojos
            </div>
            <div class="product-category">
                Plato Fuerte
            </div>
            <div class="product-description">
                Los chilaquiles vienen cubiertos con queso fresco y crema, acompañados de frijoles.
            </div>
            <div class="product-price">
                $70
            </div>
            <div class="options">
                <button id="delete"> X </button>
                <button id="edit"> 📝 </button>
            </div>
        </div>
        <div class="product-info">
            <div class="product-name">
                Pozole
            </div>
            <div class="product-category">
                Plato Fuerte
            </div>
            <div class="product-description">
                Pozole de maiz blanco con carne de res, añadiendo lechuga, rabano, cebolla y limon.
            </div>
            <div class="product-price">
                $100
            </div>
            <div class="options">
                <button id="delete"> X </button>
                <button id="edit"> 📝 </button>
            </div>
        </div>
        <div class="product-info">
            <div class="product-name">
                Birria
            </div>
            <div class="product-category">
                Plato Fuerte
            </div>
            <div class="product-description">
                Acompañada de cebolla y cilandro picados con 5 tortillas de maíz
            </div>
            <div class="product-price">
                $110
            </div>
            <div class="options">
                <button id="delete"> X </button>
                <button id="edit"> 📝 </button>
            </div>
        </div>
    </div>
    <?php 
        include("../modals/modal-login.php");
        include("../modals/modal-signup.php");
        include("../modals/modal-add-product.php");
        include("../modals/modal-edit-product.php"); 
    ?>
    <script src="../../assets/components/header.js"></script>
    <script src="../../assets/components/slidingMenu.js"></script>
    <script src="../../assets/components/prodControl.js"></script>
</body>

</html>