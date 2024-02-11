let productsDiv = document.querySelector(".for-you .items");
let CsrfToken = null;

const showMoreButton = document.querySelector(".show-more");
const hideButton = document.createElement("button");

const getCsrfToken = () => {
    return CsrfToken ||
        (CsrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
}

const hide_more_products = () => {
    for(let i = 15; i > 0; i--) {
        productsDiv.removeChild(productsDiv.children[i]);
        hideButton.remove();
        showMoreButton.hidden = false;
    }
}

const show_more_products = (url) => {
    let data = {
        products: []
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

        const products = data.products;

        products.forEach((product) => {
            const item = document.createElement('div');
            item.classList.add('item');

            let priceElement;

            // FIX HTML
            if (product.sale) {
                priceElement = `
                    <div class="prices">
                        <div class="old-price">${product.price} ₴</div>
                        <div class="sale">${product.sale} ₴</div>
                    </div>`;
            } else {
                priceElement = `
                    <div class="prices">
                        <div class="price">${product.price} ₴</div>
                    </div>`;
            }

            item.innerHTML = `
                <img src="${product.img}" alt="${product.name}" class="product_img">
                <div class="head">
                    ${priceElement}
                    <div class="product_name">
                        <a href="${'{{ route("product", ["product_name" => "product->name"]) }}'}">${product.name}</a>
                    </div>
                </div>
                <div class="buttons">
                    <button class="buy">Купити</button>
                    <form method="POST" action="{{ route('addToCart') }}">
                        @csrf
                        <input type="hidden" name="product_id" value="${product.id}">
                        <button type="submit" class="like"><img src="{{ asset('imgs/heartWithOutBG.png') }}" alt="like" class="like"></button>
                    </form>
                </div>
            `;

            productsDiv.appendChild(item);
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
