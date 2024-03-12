const buttons = document.querySelectorAll(".filters .item");

buttons.forEach(button => {
    button.addEventListener("click", () => {
        buttons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');
    });
});

function filter(form) {
    const url = form.action;
    const formData = new FormData(form);

    fetch(url, {
       method: "POST",
        headers: {
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": getCsrfToken(),
        },
        body: formData
    }).then(response => {
        if (response.ok) return response.json();
        throw new Error('Network response was not ok.');
    }).then((data) => {
        if (data.error) return makeError(data.error);
        if(data.message) return makeMessage(data.message); // fix

        console.log(data);
    }).catch(error => {
        console.error('Error:', error);
    });
}
