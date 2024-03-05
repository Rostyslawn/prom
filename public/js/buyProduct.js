const buyProduct = (url) => {
    const btn = event.target;
    const product_id = btn.parentNode.querySelector(".product_id").value;

    let data = {
        product_id: product_id
    }

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
    }).catch(error => {
        console.error('Error:', error);
    });
}
