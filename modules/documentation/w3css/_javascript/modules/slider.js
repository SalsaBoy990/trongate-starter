/*
* Slideshow actions
*
* */
export var slideIndex = 1;

export function slideSwitcher(n) {
    slideIndex = slideIndex + n;
    showSlides(slideIndex);
}

export function currentSlide(n) {
    showSlides(slideIndex = n);
}

export function showSlides(n) {
    const x = document.getElementsByClassName("slide-item");
    const dots = document.getElementsByClassName("slide-dots");
    if (n > x.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = x.length;
    }

    for (let i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (let i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
    }
    x[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " w3-white";
}

