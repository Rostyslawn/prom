// addToCart, buyProduct

const errorDivParent = document.querySelector(".global-errors");

const makeError = (errormessage) => {
    const errorDiv = document.createElement("div");
    errorDiv.classList.add("error");
    errorDiv.innerHTML = errormessage;

    errorDivParent.appendChild(errorDiv);


    setTimeout(() => {
        errorDiv.classList.add("show");
    }, 50);

    setTimeout(() => {
        errorDiv.classList.remove("show");
        errorDiv.removeChild(errorDiv);
    }, 5000);

    console.log(errormessage);
}
