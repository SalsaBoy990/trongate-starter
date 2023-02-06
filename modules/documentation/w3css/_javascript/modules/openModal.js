/*
* Open modal action
*
* */
export function openModal(modalId) {
    document.getElementById(modalId).style.display = "block";
}

export function show(event) {
    const btn = event.target;
    if (btn.parentNode) {
        btn.parentNode.style.display = 'block';
    }
}
