// Lightbox (Modal and Slideshow)

export function openLightbox(modalId = "modalLightOne") {
    document.getElementById(modalId).style.display = "block";
}

export function closeLightbox(modalId = "modalLightOne") {
    document.getElementById(modalId).style.display = "none";
}


export var slideIndexLightbox = 1;
showLightboxItems(slideIndexLightbox);

export function stepLightbox(n, lightboxItemClass = "lightbox-item", dotsClass = "lightbox-dots", captionId = "lightbox-caption-id") {
    showLightboxItems(slideIndexLightbox += n, lightboxItemClass, dotsClass, captionId);
}


export function currentLightbox(n) {
    showLightboxItems(slideIndexLightbox = n);
}

export function showLightboxItems(n, lightboxItemClass = "lightbox-item", dotsClass = "lightbox-dots", captionId = "lightbox-caption-id") {
    const x = document.getElementsByClassName(lightboxItemClass);
    const dots = document.getElementsByClassName(dotsClass);
    const captionText = document.getElementById(captionId);
    if (n > x.length) {
        slideIndexLightbox = 1;
    }
    if (n < 1) {
        slideIndexLightbox = x.length;
    }
    for (let i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (let i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-opacity-off", "");

    }
    x[slideIndexLightbox - 1].style.display = "block";
    dots[slideIndexLightbox - 1].className += " w3-opacity-off";
    captionText.innerHTML = dots[slideIndexLightbox - 1].alt;
}
