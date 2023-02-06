/*
*  Dropdown toggle action
*
* */
export function toggleDropdown(dropdownId, toggleClass = "w3-show") {
    const x = document.getElementById(dropdownId);
    if (x.classList) {
        x.classList.toggle(toggleClass);
    } else {
        // Fallback for IE9
        const toggleClassString = " " + toggleClass
        if (x.className.indexOf(toggleClass) === -1) {
            x.className += toggleClassString;
        } else {
            x.className = x.className.replace(toggleClassString, "");
        }
    }
}
