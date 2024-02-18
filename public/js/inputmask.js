import Inputmask from "inputmask";

const inputs = document.querySelectorAll("input[name='login']");

if(inputs) {
    const phonemaskexample = {
        mask: "+380 (99) 99-99-99"
    };

    inputs.forEach((input) => {
        const phonemask = new Inputmask(phonemaskexample);

        phonemask.mask(input);
    });
}
