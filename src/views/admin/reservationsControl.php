<!DOCTYPE>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/styles/header.css">
    <link rel="stylesheet" href="../../assets/styles/slidingMenu.css">
    <link rel="stylesheet" href="../../assets/styles/adminMenu.css">
    <link rel="stylesheet" href="../../assets/styles/reservControl.css">
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
    <div class="reserv-controller">
        <div class="reserv-info-title">
            <div class="name-title">
                Nombre
            </div>
            <div class="phone-title">
                Teléfono
            </div>
            <div class="cantPerson-title">
                No.
            </div>
            <div class="schedule-title">
                Horario
            </div>
            <div class="options-title"> Cancelar </div>
        </div>
        <div class="reserv-info">
            <div class="reserv-name">
                Rosy North
            </div>
            <div class="reserv-phone">
                588-673-3966
            </div>
            <div class="reserv-cantPerson">
                2
            </div>
            <div class="reserv-schedule">
                8:00pm
            </div>
            <div class="options">
                <button id="delete"> X </button>
            </div>
        </div>
        <div class="reserv-info">
            <div class="reserv-name">
                Sidney Marsden
            </div>
            <div class="reserv-phone">
                408-102-1436
            </div>
            <div class="reserv-cantPerson">
                6
            </div>
            <div class="reserv-schedule">
                6:00pm
            </div>
            <div class="options">
                <button id="delete"> X </button>
            </div>
        </div>
        <div class="reserv-info">
            <div class="reserv-name">
                Gabrielle Thomson
            </div>
            <div class="reserv-phone">
                371-888-6223
            </div>
            <div class="reserv-cantPerson">
                4
            </div>
            <div class="reserv-schedule">
                7:00pm
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