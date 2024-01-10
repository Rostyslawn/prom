const carousel = document.querySelector(".slider-wrapper");
let imgs = carousel.querySelectorAll('img');
let left = 0;
let timeOutSet = true;

const carousels = document.querySelectorAll(".carousels");

carousels.forEach(slider => {
    const btnLeft = slider.parentNode.querySelector(".btn-left");
    const btnRight = slider.parentNode.querySelector(".btn-right");
    const _el = slider.querySelectorAll(".item");
    let _left = 0;

    if(!btnRight || !btnLeft) return;

    // FIX
    btnLeft.addEventListener("click", () => {
        if(_left >= 0)
            return;

        _left += 100;
        slider.style.left = _left + "%";
    });

    btnRight.addEventListener("click", () => {
        if(_left <= -(_el.length - 1) * 100)
            return;

        _left -= 100;
        slider.style.left = _left + "%";
    });
});

const setTimer = () => {
    if (timeOutSet) {
        timeOutSet = false;
        setTimeout(() => timeOutSet = true, 5000);
    }
};

const main_ch_to_l = () => {
    if (left >= 0) {
        left = -(imgs.length - 1) * 100;
        carousel.style.left = left + "%";
    } else {
        left += 100;
    }

    carousel.style.left = left + "%";

    setTimer();
};

const main_ch_to_r = () => {
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
