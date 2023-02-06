/*
*  Accordions Toggle action
*
* */
export function toggleAccordion(accordionId, toggleClass = "w3-show", headerActiveClass = "w3-dark-grey", accordionItemClass = "accordion-item") {
    const x = document.getElementById(accordionId);

    // Hide all accordion items
    const y = document.getElementsByClassName(accordionItemClass);
    for (let i = 0; i < y.length; i++) {
        const accordionItem = y[i];
        if (accordionItem.classList.contains(toggleClass)) {
            accordionItem.classList.remove(toggleClass);
        }
        if (accordionItem.previousElementSibling.classList.contains(headerActiveClass)) {
            accordionItem.previousElementSibling.classList.remove(headerActiveClass);
        }
    }

    if (x.classList) {
        x.classList.toggle(toggleClass);
        x.previousElementSibling.classList.toggle(headerActiveClass);
    } else {
        // Fallback for IE9 and earlier
        const toggleClassString = " " + toggleClass;
        if (x.className.indexOf(toggleClass) === -1) {
            x.className += toggleClassString;
        } else {
            x.className = x.className.replace(toggleClassString, "");
        }
    }
}
