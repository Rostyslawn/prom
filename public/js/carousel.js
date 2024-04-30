const carousel = document.querySelector(".slider-wrapper");
let imgs = carousel.querySelectorAll('img');
let left = 0;
let timeOutSet = true;

const carousels = document.querySelectorAll(".carousels");

carousels.forEach(slider => {
    const btnLeft = slider.parentNode.querySelector(".btn-left");
    const btnRight = slider.parentNode.querySelector(".btn-right");
    const items = slider.querySelectorAll(".item");

    let offset = 0;

    if (!btnRight || !btnLeft) return;

    const firstChild = slider.children[0];
    const itemStyle = window.getComputedStyle(firstChild);
    const sliderStyle = window.getComputedStyle(slider);

    const itemWidth = parseInt(itemStyle.getPropertyValue("width"));
    const itemMargin = parseInt(sliderStyle.getPropertyValue("grid-row-gap"));

    const itemTotalWidth = itemWidth + itemMargin;
    const totalWidth = itemTotalWidth * items.length;
    const carouselWidth = slider.clientWidth;

    const maxOffset = Math.max(0, totalWidth - carouselWidth);

    btnRight.addEventListener("click", () => {
        if (offset >= maxOffset)
            return;

        offset += itemTotalWidth;

        if (offset > maxOffset)
            offset = maxOffset;

        slider.style.transform = `translateX(-${offset}px)`;
    });

    btnLeft.addEventListener("click", () => {
        if (offset <= 0)
            return;

        offset -= itemTotalWidth;
        if (offset < 0)
            offset = 0;

        slider.style.transform = `translateX(-${offset}px)`;
    });
});


const setTimer = () => {
    if (!timeOutSet) return;

    timeOutSet = false;
    setTimeout(() => timeOutSet = true, 10000);
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

    setTimeout(moveCarousel, 10000);
}

setTimeout(moveCarousel, 10000);
