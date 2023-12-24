const login_menu = document.querySelector(".login-menu");
const auth_menu = document.querySelector(".authorization");
const reg_menu = document.querySelector(".registration");
const body = document.querySelector("body");
const modal_bg = document.querySelector(".modal-bg");

const open_login_menu = () => {
    login_menu.classList.toggle("open");
    modals();
}

const open_cart_menu = () => {
    //
    modals();
}

const open_auth_menu = () => {
    auth_menu.classList.toggle("open");
}

const open_reg_menu = () => {
    reg_menu.classList.toggle("open");
}

const modals = () => {
    body.classList.toggle("no-scroll");
    modal_bg.classList.toggle("active");
}

const close_modals = () => {
    auth_menu.classList.remove("open");
    login_menu.classList.remove("open");
    reg_menu.classList.remove("open");
    body.classList.remove("no-scroll");
    modal_bg.classList.remove("active");
}
