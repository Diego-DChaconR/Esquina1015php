const card = document.getElementsByClassName("Card");
const cardButtons = document.querySelectorAll(".card-button");
const cardTitle = document.getElementsByClassName("card-title");
const Cost = document.getElementsByClassName("cost");
const prodAmounts = document.querySelectorAll("#unidades");
const Cart = document.getElementById("Cart");
const keyList = "productList";

var cant = "1";
var inCart = false;

document.addEventListener("DOMContentLoaded", function() {
    printClick();
});

function printClick() {
    prodAmounts.forEach(pA => {
        pA.addEventListener("click", setAmount);
    })

    cardButtons.forEach(b => {
        b.addEventListener("click", addToCart);
    })
}

function setAmount(e) {
    e.preventDefault();
    e.stopPropagation();
    cant = this.selectedOptions[0].value;
}

function addToCart(e) {
    e.preventDefault();
    e.stopPropagation();

    let product = {
        id: Date.now(),
        name: cardTitle[this.value].innerText,
        amount: cant.toString(),
        price: Cost[this.value].innerText.replace('$', ''),
    };

    let list = getProducts();
    list.push(product);
    localStorage.setItem(keyList, JSON.stringify(list));

    if (inCart) {
        setTimeout(() => {
            Cart.style.color = "#ff0044cb";
        }, 200);

        setTimeout(() => {
            Cart.style.color = "whitesmoke";
        }, 850);
    }
}

function getProducts() {
    let list = JSON.parse(localStorage.getItem(keyList));

    if (list === null) {
        inCart = false;
        return [];
    } else {
        inCart = true;
        return list;
    }
}