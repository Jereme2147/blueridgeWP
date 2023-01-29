// onload becuse JS was loading in the wrong order.
window.onload = function afterWebPageLoad() {
    const menuIcon = document.getElementById("menu-icon");
    const mobileMenu = document.getElementById("mobile-menu");
// const searchExpand = document.getElementById("search-expand");
// const searchDiv = document.getElementById("search-div");
// const mobileSearch = document.getElementById("mobile-search");
// let desktop = window.matchMedia("(min-width: 600px)");
    
    menuIcon.addEventListener('click', function () {
        console.log("fuck right off dick");
        if (mobileMenu.style.opacity == "1") {
            mobileMenu.style.opacity = '0';
            mobileMenu.style.pointerEvents = 'none';
            // mobileMenu.style.top = '0'; 
        } else {
            mobileMenu.style.opacity = "1";
            mobileMenu.style.pointerEvents = "auto";
            // mobileMenu.style.top = "55px";
        }
    })
    // console.log(chkObject("menu-icon"));
}



function chkObject(elemId) {
    return (document.getElementById(elemId)) ? true : false;
}