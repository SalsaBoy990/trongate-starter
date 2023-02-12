/*
*  W3 Animations action
*
* */
export function animate(animationName = "normal", animatedItemsClass = "animate") {
    const x = document.getElementsByClassName(animatedItemsClass);
    for (let i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    document.getElementById(animationName).style.display = "block";
}
