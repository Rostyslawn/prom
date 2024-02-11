let productsDiv = document.querySelector(".for-you .items");
let CsrfToken = null;

const showMoreButton = document.querySelector(".show-more");
const hideButton = document.createElement("button");

const getCsrfToken = () => {
    return CsrfToken ||
        (CsrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
}

const hide_more_products = () => {
    for (let i = 15; i > 0; i--) {
        productsDiv.removeChild(productsDiv.children[i]);
        hideButton.remove();
        showMoreButton.hidden = false;
    }
}

const show_more_products = (url) => {
    let data = {
        products: [],
        session_user: null,
    };

    fetch(url, {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': getCsrfToken()
        },
        body: JSON.stringify(data)
    }).then(response => {
        if (response.ok) return response.json();
        throw new Error('Network response was not ok.');
    }).then(data => {
        if (data.products.length === 0) return;

        const session_user = data.session_user;
        const products = data.products;

        products.forEach((product) => {
            const productHtml = `
                <div class="item">
                    <img src="${product.img}" alt="${product.name}" class="product_img">
                    <div class="head">
                        <div class="prices">
                            ${product.sale ? `
                                <div class="old-price">${product.price} ₴</div>
                                <div class="sale">${product.sale} ₴</div>
                            ` : `
                                <div class="price">${product.price} ₴</div>
                            `}
                        </div>
                        <div class="product_name">
                            <a href="/product?product_name=${product.name}">${product.name}</a>
                        </div>
                    </div>
                    <div class="buttons">
                        <button class="buy">Купити</button>
                        ${session_user ? `
                        <form method="POST" action="/addToCart">
                            <input type="hidden" name="_token" value="${csrfToken}">
                            <input type="hidden" name="product_id" value="${product.id}">
                            <button type="submit" class="like">
                            <img src="/imgs/heartWithOutBG.png" alt="like" class="like">
                            </button>
                        </form>
                        ` : `
                            <button class="like" disabled>
                                <img src="/imgs/heartWithOutBG.png" alt="like" class="like">
                            </button>
                        `}
                    </div>
                </div>
            `;

            productsDiv.insertAdjacentHTML('beforeend', productHtml);
        });

        showMoreButton.hidden = true;
        hideButton.classList.add('show-more', 'container-item');
        hideButton.innerHTML = "Приховати";
        hideButton.addEventListener("click", hide_more_products);
        document.querySelector(".show-more-div").appendChild(hideButton);
    }).catch(error => {
        console.error('Error:', error);
    });
}
