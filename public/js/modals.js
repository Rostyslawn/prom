const login_menu = document.querySelector(".login-menu");
const body = document.querySelector("body");
const modal_bg = document.querySelector(".modal-bg");

const open_login_menu = () => {
    login_menu.classList.toggle("open");
    modals();
}

const modals = () => {
    body.classList.toggle("no-scroll");
    modal_bg.classList.toggle("active");
}
