//Carrousel

// Panorama
const panorama = document.getElementById("carrousel_panorama"),
    panoramaWidth = panorama.offsetWidth;

// Fleches de contrôle
const prevButton = document.getElementById("carrousel-prev"),
    nextButton = document.getElementById("carrousel-next");

// Container des ronds de contrôles
const navIndicatorsContainer = document.getElementById("nav-indicator");

// Attribution des positions par défaut
function setDefaultPosition() {
    for (let i = 0; i < panorama.childElementCount; i++) {
        panorama.children[i].style = `left: ${panoramaWidth * i}px`;
    }
    panorama.setAttribute("style", `left: 0px`);
}

setDefaultPosition();

// Contrôles du caroussel
let leftShift = 0;
// Flèche Next
nextButton.addEventListener("click", () => {
    if (
        Math.abs(leftShift) >=
        panoramaWidth * (panorama.childElementCount - 1)
    ) {
        leftShift = 0;
        panorama.setAttribute("style", `left: ${leftShift}px`);
    } else {
        leftShift -= panoramaWidth;
        panorama.setAttribute("style", `left: ${leftShift}px`);
    }
});

// FLèche Prev
prevButton.addEventListener("click", () => {
    if (leftShift >= 0) {
        leftShift = -Math.abs(panoramaWidth * (panorama.childElementCount - 1));
        panorama.setAttribute("style", `left: ${leftShift}px`);
    } else {
        leftShift += panoramaWidth;
        panorama.setAttribute("style", `left: ${leftShift}px`);
    }
});

// Indicateurs de navigation
for (let i = 0; i < navIndicatorsContainer.childElementCount; i++) {
    navIndicatorsContainer.children[i].addEventListener("click", () => {
        leftShift = -Math.abs(panoramaWidth * i);
        panorama.setAttribute("style", `left: ${leftShift}px`);
    });
}
