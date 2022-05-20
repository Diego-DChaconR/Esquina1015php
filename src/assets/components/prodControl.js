const editButton = document.getElementById('edit');
const deleteButton = document.getElementById('delete');
const addProduct = document.getElementById('add-product');
const modalAddProduct = document.getElementById('modal-add-product');
const modalEditProduct = document.getElementById('modal-edit-product');
const cancelButton = document.getElementsByClassName('cancelar');

document.addEventListener('DOMContentLoaded', () => {
    controlModalEditProduct();
    controlModalAddProduct();
    console.log(cancelButton);
    editButton.addEventListener('click', controlModalEditProduct);
    cancelButton[1].addEventListener('click', controlModalEditProduct);
    addProduct.addEventListener('click', controlModalAddProduct);
    cancelButton[0].addEventListener('click', controlModalAddProduct);
});

function controlModalAddProduct() {
    if (modalAddProduct.style.display != "none") {
        modalAddProduct.style.display = "none";
    } else {
        modalAddProduct.style.display = "flex";
    }
}

function controlModalEditProduct() {
    if (modalEditProduct.style.display != "none") {
        modalEditProduct.style.display = "none";
    } else {
        modalEditProduct.style.display = "flex";
    }
}