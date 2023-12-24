const inputs = document.querySelectorAll(".input-event");

inputs.forEach(input => {
    // parentNode = ../
    const button = input.parentNode.parentNode.querySelector(".submit");

    if(!button) return;

    input.addEventListener('input', (e) => button.style.opacity = 1);
});
