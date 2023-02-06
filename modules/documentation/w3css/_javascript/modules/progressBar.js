/*
*   Progress Bar action
*
* */
export function moveProgressBar(progressBarId, speed = 10) {
    const elem = document.getElementById(progressBarId);
    let width = 1;
    const id = setInterval(frame, speed);

    function frame() {
        if (width === 100) {
            clearInterval(id);
        } else {
            width++;
            elem.style.width = width + '%';
            elem.innerHTML = width * 1 + '%';
        }
    }
}
