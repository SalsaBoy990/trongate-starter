/*
*  Tab Switcher action
*
* */
export function switchTab(event, tabId, tabsClass = "tabs", buttonClass = "tabActivateButton", activeButtonClass = "red") {
    const x = document.getElementsByClassName(tabsClass);
    for (let i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    const activeButton = document.getElementsByClassName(buttonClass);
    const activeButtonClassString = " " + activeButtonClass;
    for (let i = 0; i < x.length; i++) {
        activeButton[i].className = activeButton[i].className.replace(activeButtonClassString, "");
    }
    document.getElementById(tabId).style.display = "block";
    event.currentTarget.className += activeButtonClassString;
}
