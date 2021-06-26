/**
 * Definiendo las variables y la funcion para el menu hamburguesa
 */

const menuHamburguesa = document.querySelector("#menu-toggle");
const menuHamburguesaTop = document.querySelector("#menu-toggle-top");
const menuPopup = document.querySelector("#menu-popup");
const menuClose = document.querySelector("#menu-close-popup");

menuHamburguesa.addEventListener("click", function() {
    menuPopup.classList.add("show");
})

menuHamburguesaTop.addEventListener("click", function() {
    menuPopup.classList.add("show");
})

menuClose.addEventListener("click", function() {
    menuPopup.classList.remove("show");
})

/**
 * Mostar el menu flotante de arriba tamaño DESKTOP
 */

const headerTop = document.querySelector("#header-top");

function headerFloatShow() {
    // console.log(scrollY);

    if(this.scrollY >= 560) {
        headerTop.classList.add("show");
    } else {
        headerTop.classList.remove("show");
    }

}

window.addEventListener("scroll", headerFloatShow);

/**
 * Hacer scroll para volver arriba
 */

const scrollTopBtn = document.querySelector("#scroll-top");

function ShowScrollTop() {
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
    });
}

scrollTopBtn.addEventListener("click", ShowScrollTop);

// Mostrar scroll top en la ventana

function scrollTop() {
    // When the scroll is higher than 560 viewport height, add the scroll class to thea tag with the scroll-top class
    if (this.scrollY >= 560) {
        scrollTopBtn.classList.add("show");
    } else {
        scrollTopBtn.classList.remove("show");
    }
}

window.addEventListener("scroll", scrollTop);