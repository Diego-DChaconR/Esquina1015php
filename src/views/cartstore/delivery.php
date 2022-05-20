<!DOCTYPE>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/styles/header.css">
    <link rel="stylesheet" href="../../assets/styles/slidingMenu.css">
    <link rel="stylesheet" href="../../assets/styles/delivery.css">
    <link rel="stylesheet" href="../../assets/styles/login.css">
    <link rel="stylesheet" href="../../assets/styles/signUp.css">
    <link rel="stylesheet" href="../../assets/styles/payment.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title> Esquina 1015 Restaurant </title>
</head>

<body>
    <?php
        include ("../layouts/header.php");
    ?>
    <div class="delivery-container">
        <form class="delivery-form">
            <input type="text" value="Dirección" class="delivery-info" />
            <div class="special-info">
                <input type="text" value="Agregar una nota" class="delivery-info" />
                <a id="payment-button">
                    <i class="fa fa-credit-card" aria-hidden="true"></i> Método de pago
                </a>
            </div>
        </form>
        <div id="delivery-resume"> </div>
        <div class="buttons">
            <button id="button-confirm"> Confirmar </button>
            <button id="button-cancel"> Cancelar </button>
        </div>
    </div>
    <div id="payment-container">
        <form class="payment-form">
            <legend class="payment-title"> Método de pago </legend>
            <input type="text" value="Nombre del dueño" class="payment-control" required />
            <input type="text" value="Numero de la tarjeta" class="payment-control" required />
            <div class="payment-cart-info">
                <input type="text" value="Fecha(MM/AA)" class="payment-cart" required />
                <input type="text" value="CVV" class="payment-cart" required />
            </div>
            <input type="text" value="País de la tarjeta" class="payment-control" required />
            <div class="payment-buttons">
                <input type="submit" value="Registrar" class="payment-button" />
                <input type="button" value="Cancelar" class="payment-button" />
            </div>
        </form>
    </div>
    <div class="message-container">
        <div class="message">
            <p>
                Hemos confirmado exitosamente tu pedido.
                <br> El tiempo de espera promedio es de 45 minutos.
                <br> Una vez, el repartidor se encuentre cerca de su dirección se pondrá en contacto.
            </p>
        </div>
    </div>
    <?php 
        include("../modals/modal-login.php");
        include("../modals/modal-signup.php");
    ?>
    <script src="../../assets/components/payment.js"></script>
    <script src="../../assets/components/header.js"></script>
    <script src="../../assets/components/showFinalPrice.js"></script>
    <script src="../../assets/components/slidingMenu.js"></script>
</body>

</html>