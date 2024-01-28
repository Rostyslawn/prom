const main_characteristics = document.querySelector(".main-characteristics");
const description = document.querySelector(".description span");
const showAllCharacteristicsBtn = document.querySelector(".showAllCharacteristics");
const showAllDescriptionBtn = document.querySelector(".showAllDescription");

let characteristicsStatus = false;
let descriptionStatus = false;

const showAllCharacteristics = () => {
    if(characteristicsStatus) return;

    showAllCharacteristicsBtn.style.display = "none";

    main_characteristics.style.height = "auto";
    const button = document.createElement("button");
    button.classList.add('closeAllCharacteristics');
    button.textContent = 'Приховати всi характеристики';
    button.onclick = closeAllCharacteristics;

    main_characteristics.appendChild(button);
    characteristicsStatus = true;
}

const closeAllCharacteristics = () => {
    if(!characteristicsStatus) return;

    showAllCharacteristicsBtn.style.display = "block";

    main_characteristics.removeChild(document.querySelector(".closeAllCharacteristics"));
    main_characteristics.style.height = 191 + "px";

    characteristicsStatus = false;
}

const showAllDescription = () => {
    if(descriptionStatus) return;

    showAllDescriptionBtn.style.display = "none";

    description.style.height = "auto";
    const button = document.createElement("button");
    button.classList.add("closeAllDescription");
    button.textContent = 'Приховати весь опис';
    button.onclick = closeAllDescription;
    button.style.marginTop = 10 + "px";

    description.appendChild(button);
    descriptionStatus = true;
}

const closeAllDescription = () => {
    if(!descriptionStatus) return;

    showAllDescriptionBtn.style.display = "block";

    description.removeChild(document.querySelector(".closeAllDescription"));
    description.style.height = 53 + "px";

    descriptionStatus = false;
}

showAllDescriptionBtn.addEventListener("click", showAllDescription);
showAllCharacteristicsBtn.addEventListener("click", showAllCharacteristics);
