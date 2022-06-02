var login = document.getElementById("Login-icon");
var headerMenu = document.getElementsByClassName("header-menu")[0];
var userPhoto = document.getElementById("User-photo");
var adminIcon = document.getElementById("admin-icon");

document.addEventListener("DOMContentLoaded", function() {
    controlUser_img();
    userPhoto.addEventListener("click", controlPhotoMenu);
});

function controlUser_img() {
    if (userPhoto.style.display != "initial") {
        userPhoto.style.display = "initial";
        adminIcon.style.display = "initial";
        login.style.display = "none";
        headerMenu.style.justifyContent = "space-evenly";
    } else {
        userPhoto.style.display = "none";
        adminIcon.style.display = "none";
    }
}