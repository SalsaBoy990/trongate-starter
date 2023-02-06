/*
*  Close alert action
*
* */
export function closeAlert(event) {
    const target = (event.target) ? event.target : event.srcElement;
    target.parentElement.style.display = 'none';

}
