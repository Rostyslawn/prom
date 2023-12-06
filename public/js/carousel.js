let carousel = document.querySelector(".slider-wrapper");
let imgs = carousel.querySelectorAll('img');
let left= 0;

const ch_to_l = () => {
    if(left >= 0) return;

    left += 100;
    carousel.style.left = left + "%";
}

const ch_to_r = () => {
    if(left <= -(imgs.length - 1) * 100) return;

    left -= 100;
    carousel.style.left = left + "%";
}
