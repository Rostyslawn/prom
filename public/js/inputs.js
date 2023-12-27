const inputs = document.querySelectorAll(".input-event");

inputs.forEach(input => {
    // parentNode = ../
    const button = input.parentNode.parentNode.querySelector(".submit");

    if(!button) return;

    input.addEventListener('input', (e) => {
        if(input.value.trim() == "")
            return button.style.opacity = 0.5;

        button.style.opacity = 1
    });
});
