const buttons = document.querySelectorAll(".filters .item");

buttons.forEach(button => {
    button.addEventListener("click", () => {
        buttons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');
    });
});

const left_side = document.querySelector(".container .left-side");

left_side.addEventListener("mouseenter", () => {
    left_side.style.overflowY = "scroll";
    document.body.style.overflow = "hidden";
});

left_side.addEventListener("mouseleave", () => {
    left_side.style.overflowY = "hidden";
    document.body.style.overflow = "";
});
