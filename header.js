//Darkmode

var themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
var themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");

// Change the icons inside the button based on previous settings
if (
    localStorage.getItem("color-theme") === "dark" ||
    (!("color-theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    themeToggleLightIcon.classList.remove("hidden");
} else {
    themeToggleDarkIcon.classList.remove("hidden");
}

var themeToggleBtn = document.getElementById("theme-toggle");

themeToggleBtn.addEventListener("click", function () {
    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle("hidden");
    themeToggleLightIcon.classList.toggle("hidden");

    // if set via local storage previously
    if (localStorage.getItem("color-theme")) {
        if (localStorage.getItem("color-theme") === "light") {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        } else {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        }

        // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains("dark")) {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        } else {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        }
    }
});

//menu mobile

const menuMobile = document.getElementById("menuMobile");
const burger = document.getElementById("burger");

function open() {
    if (menuMobile.classList.contains("hidden")) {
        menuMobile.classList.remove("hidden");
        menuMobile.classList.add("flex");
    } else {
        menuMobile.classList.add("hidden");
        menuMobile.classList.remove("flex");
    }
}

burger.addEventListener("click", open);

//Dropdown CV

const buttonCv = document.getElementById("dropdownNavbarLink");
const dropdownCV = document.getElementById("drowpdown");

function dropdown() {
    if (dropdownCV.classList.contains("hidden")) {
        dropdownCV.classList.remove("hidden");
        dropdownCV.classList.add("flex");
    } else {
        dropdownCV.classList.add("hidden");
        dropdownCV.classList.remove("flex");
    }
}

buttonCv.addEventListener("click", dropdown);
