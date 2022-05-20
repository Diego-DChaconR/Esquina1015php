//Productos
const nav = document.getElementsByClassName("Nav-a");
var subnav = document.getElementsByClassName("sub-Nav-bar");
var subnavEx = document.getElementsByClassName("sub-Nav-extra");
const login = document.getElementById("Login-icon");
const loginShow = document.getElementsByClassName("login-menu-li");
const loginButtons = document.getElementsByClassName("login-button");
const signUpButtons = document.getElementsByClassName("signUp-button");
const cart = document.getElementById("Cart");

function dropdownMenu() {
    if (subnav[0].style.display == "none") {
        nav[0] = setNavStyle(nav[0], 1);
    } else {
        nav[0] = setNavStyle(nav[0], 0);
    }
    subnav[0] = setSubNavStyle(subnav[0], nav[0]);
}

//Mas
function dropdownMenuExtra() {
    var subnavEx = document.getElementsByClassName("sub-Nav-extra");
    if (subnavEx[0].style.display == "none") {
        nav[nav.length - 1] = setNavStyle(nav[nav.length - 1], 1);
    } else {
        nav[nav.length - 1] = setNavStyle(nav[nav.length - 1], 0);
    }
    subnavEx[0] = setSubNavExtraStyle(subnavEx[0], nav[nav.length - 1]);
}

function setNavStyle(nav, op) {
    nav.style.borderRadius = "3px 3px 0 0";
    if (op != 0) {
        nav.style.color = "#131313";
        nav.style.backgroundColor = "#E7BD70";
        nav.style.border = "1px solid black";
        nav.style.padding = "3px 3px 15px 3px";
    } else {
        nav.style.color = "#E7BD70";
        nav.style.backgroundColor = "#131313";
        nav.style.borderColor = "transparent";
    }
    return nav;
}

function hoverStyle() {
    if (subnav[0].style.display != "flex") {
        nav[0].style.color = "#131313";
        nav[0].style.backgroundColor = "#E7BD70";
        nav[0].style.borderColor = "#E7BD70";
        nav[0].style.padding = "3px"
    }
}

function hoverStyleExtra() {
    if (subnavEx[0].style.display != "flex") {
        nav[nav.length - 1].style.color = "#131313";
        nav[nav.length - 1].style.backgroundColor = "#E7BD70";
        nav[nav.length - 1].style.borderColor = "#E7BD70";
        nav[nav.length - 1].style.padding = "3px"
    }
}

function resetHoverStyle() {
    if (subnav[0].style.display != "flex") {
        nav[0] = setNavStyle(nav[0], 0);
    }
}

function resetHoverStyleExtra() {
    if (subnavEx[0].style.display != "flex") {
        nav[nav.length - 1] = setNavStyle(nav[nav.length - 1], 0);
    }
}

function setSubNavStyle(subNav, nav) {
    subNav.style.backgroundColor = "#E7BD70";
    subNav.style.borderRadius = "0 3px 3px 3px";
    subNav.style.left = nav.getBoundingClientRect().left + 1; //crea el submenu 'productos' en la posicion justa
    controlSubMenu();
    return subNav;
}

function setSubNavExtraStyle(subNav, nav) {
    subNav.style.backgroundColor = "#E7BD70";
    subNav.style.borderRadius = "0 3px 3px 3px";
    subNav.style.left = nav.getBoundingClientRect().left + 1; //crea el submenu 'productos' en la posicion justa
    controlSubMenuExtra();
    return subNav;
}

function hoverStyleCart() {
    cart.style.color = "#FF0046";
}

function resethoverStyleCart() {
    cart.style.color = "whitesmoke";
}

function controlLogin() {
    var loginMenu = document.getElementsByClassName("login-menu");
    if (loginMenu[0].style.display != "none") {
        loginMenu[0].style.display = "none";
    } else {
        loginMenu[0].style.display = "block";
    }
}

function controlSubMenu() {
    if (subnav[0].style.display != "none") {
        subnav[0].style.display = "none";
    } else {
        subnav[0].style.display = "flex";
    }
}

function controlSubMenuExtra() {
    console.log(subnavEx[0]);
    if (subnavEx[0].style.display != "none") {
        subnavEx[0].style.display = "none";
    } else {
        subnavEx[0].style.display = "flex";
    }
}

function controlLoginForm() {
    var loginForm = document.getElementsByClassName("login-container");
    if (loginForm[0].style.display != "none") {
        loginForm[0].style.display = "none";
    } else {
        loginForm[0].style.display = "flex";
    }
}

function controlSignUpForm() {
    var SignUp = document.getElementsByClassName("signUp-container");
    if (SignUp[0].style.display != "none") {
        SignUp[0].style.display = "none";
    } else {
        SignUp[0].style.display = "flex";
    }
}

function modifyMenu() {

    controlSubMenu();
    controlSubMenuExtra();
    controlLogin();
    controlLoginForm();
    controlSignUpForm();

    nav[0].addEventListener("click", dropdownMenu);
    nav[0].addEventListener("mouseover", hoverStyle);
    nav[0].addEventListener("mouseout", resetHoverStyle);

    nav[nav.length - 1].addEventListener("click", dropdownMenuExtra);
    nav[nav.length - 1].addEventListener("mouseover", hoverStyleExtra);
    nav[nav.length - 1].addEventListener("mouseout", resetHoverStyleExtra);

    cart.addEventListener("mouseover", hoverStyleCart);
    cart.addEventListener("mouseout", resethoverStyleCart);
    login.addEventListener("click", controlLogin);
    loginShow[0].addEventListener("click", controlSignUpForm);
    loginShow[1].addEventListener("click", controlLoginForm);
    signUpButtons[1].addEventListener("click", controlSignUpForm);
    loginButtons[2].addEventListener("click", controlLoginForm);
}

document.addEventListener("DOMContentLoaded", function() {
    modifyMenu();
});