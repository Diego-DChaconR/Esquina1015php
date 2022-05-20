const deliveryResume = document.getElementById("delivery-resume");
const cancelButton = document.getElementById("button-cancel");
const keyPriceCart = "pricecart";

var id = "";

document.addEventListener("DOMContentLoaded", function() {
    deletePrice()
    cancelButton.addEventListener("click", () => {
        window.location.href = '../../views/cartstore/productlist.php';
    });
    paintDelivery();
});

function paintDelivery() {
    let list = getList(keyPriceCart);

    let html = '';

    for (var i = 0; i < list.length; i++) {
        html +=
            `<div>
                <span> Subtotal: </span>
                <span> $${list[i].totalPrice}</span>
            </div>
            <div>
                <span> Cuota de envío: </span>
                <span> $${list[i].totalPrice/5} </span>
            </div>
            <div>
                <span> Total: </span>
                <span> $${parseInt(list[i].totalPrice) + list[i].totalPrice/5} </span>
            </div>`;

        id = list[i].id;
    }

    deliveryResume.innerHTML = html;
}

function getList(key) {
    let list = JSON.parse(localStorage.getItem(key));

    if (list === null) {
        return [];
    } else {
        return list;
    }
}

function deletePrice() {
    let list = getList(keyPriceCart);

    if (list.length > 1) {
        list[0] = list.pop();
    }

    localStorage.setItem(keyPriceCart, JSON.stringify(list));
}