/*
* Tabbed Image Gallery Image Switcher action
*
* */
export function openTabbedImage(imageId, tabbedImageClass = "tabbed-image-gallery-item", tabbedImageButtonClass = "tabbed-image-gallery-button") {
    const x = document.getElementsByClassName(tabbedImageClass);
    for (let i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    document.getElementById(imageId).style.display = "block";
}
