// make some fixes
let carousel = document.querySelector(".slider-wrapper");
let left = 0;

function ch_to_l() {
    if(left >= 0) {
        return
    }

    left += 100;
    carousel.style.left = left + "%";
}

function ch_to_r() {
    if(left <= -300) {
        return
    }

    left -= 100;
    carousel.style.left = left + "%";
}
