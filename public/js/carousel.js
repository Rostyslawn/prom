let carousel = document.querySelector(".slider-wrapper");
let imgs = carousel.querySelectorAll('img');
let left = 0;
let timeOutSet = true;

const setTimer = () => {
    if (timeOutSet) {
        timeOutSet = false;
        setTimeout(() => timeOutSet = true, 5000);
    }
};

const ch_to_l = () => {
    if (left >= 0) return;

    left += 100;
    carousel.style.left = left + "%";

    setTimer();
};

const ch_to_r = () => {
    if (left <= -(imgs.length - 1) * 100) {
        left = 0;
    } else {
        left -= 100;
    }

    carousel.style.left = left + "%";

    setTimer();
};

function moveCarousel() {
    if (timeOutSet) {
        if (left > -(imgs.length - 1) * 100) {
            left -= 100;
        } else {
            left = 0;
        }

        carousel.style.left = left + "%";
    }

    setTimer();

    setTimeout(moveCarousel, 5000);
}

setTimeout(moveCarousel, 5000);
