/*
* Close modal action
*
* */
export function closeModal(modalId) {
    document.getElementById(modalId).style.display = "none";
}

export function hide(event) {
    const btn = event.target;
    if (btn.parentNode) {
        btn.parentNode.style.display = 'none';
    }
}
