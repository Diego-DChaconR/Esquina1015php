<!DOCTYPE>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/styles/header.css">
    <link rel="stylesheet" href="../../assets/styles/slidingMenu.css">
    <link rel="stylesheet" href="../../assets/styles/adminMenu.css">
    <link rel="stylesheet" href="../../assets/styles/users.css">
    <link rel="stylesheet" href="../../assets/styles/login.css">
    <link rel="stylesheet" href="../../assets/styles/signUp.css">
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
    <div class="users-controller">
        <div class="user-info-title">
            <div class="name-title">
                Nombre
            </div>
            <div class="mail-title">
                Correo Electrónico
            </div>
            <div class="phone-title">
                Teléfono
            </div>
            <div class="options-title"> Bloquear </div>
        </div>
        <div class="user-info">
            <div class="user-name">
                Rosy North
            </div>
            <div class="user-mail">
                rosy_north@protonmail.com
            </div>
            <div class="user-phone">
                371-888-6223
            </div>
            <div class="options">
                <button id="delete"> X </button>
            </div>
        </div>
        <div class="user-info">
            <div class="user-name">
                Sidney Marsden
            </div>
            <div class="user-mail">
                sidney_marsden@outlook.com
            </div>
            <div class="user-phone">
                588-673-3966
            </div>
            <div class="options">
                <button id="delete"> X </button>
            </div>
        </div>
        <div class="user-info">
            <div class="user-name">
                Gabrielle Thomson
            </div>
            <div class="user-mail">
                gabrielle_thomson@outlook.com
            </div>
            <div class="user-phone">
                408-102-1436
            </div>
            <div class="options">
                <button id="delete"> X </button>
            </div>
        </div>
    </div>
    <?php 
        include("../modals/modal-login.php");
        include("../modals/modal-signup.php");
    ?>
    <script src="../../assets/components/payment.js"></script>
    <script src="../../assets/components/header.js"></script>
    <script src="../../assets/components/slidingMenu.js"></script>
</body>

</html>