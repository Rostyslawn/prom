const buttons = document.querySelectorAll(".filters .item");

buttons.forEach(button => {
    button.addEventListener("click", () => {
        buttons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');
    });
});

const draw = (data) => {
    const productsDiv = document.querySelector(".products");
    productsDiv.innerHTML = "";

    data.forEach((product) => {
        const productHtml = `
                <div class="product">
                            <div class="product-img">
                                <img alt="${product.name}" src="${product.img}">
                            </div>
                            <div class="product-name">
                                ${product.name}
                            </div>
                            <div class="status">В наявностi</div>
                            <div class="prices">
                                ${product.sale ? `
                                    <div class="old-price">${product.price} ₴</div>
                                    <div class="sale">${product.sale} ₴</div>
                                ` : `
                                    <div class="price">${product.price} ₴</div>
                                `}
                            </div>
                            <div class="buttons">
                                <input type="hidden" class="product_id" value="${product.id}">
                                <button onclick="buyProduct('/ajax/buy')" class="buy">Купити</button>
                                <button onclick="addToCart('/ajax/addToCart')" class="like"><img
                                        src="/imgs/likes.png"></button>
                            </div>
                            <div class="seller">
                                <span>${product.seller}</span>
                            </div>
                        </div>
            `;

        productsDiv.insertAdjacentHTML('beforeend', productHtml);
    });
}

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
        draw(data.data);
    }).catch(error => {
        console.error('Error:', error);
    });
}
