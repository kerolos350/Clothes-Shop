// Close the avatar menu if the click is not onto the avatar logo
document.addEventListener("click", (event) => {
    var avatarMenu = document.getElementById("avatar-Check");
    var menu = document.getElementById("avatar-menu");
    var avatarImg =document.getElementById("avatar-img")
    if (event.target !== avatarMenu && event.target !== avatarImg) {
        menu.style.display = "";
        avatarMenu.checked = false;
    }
});