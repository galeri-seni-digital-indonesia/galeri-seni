const hamburgerButton = document.querySelector("#hamburger");
const drawerMobile = document.querySelector("#drawerMobile");
const header = document.querySelector("header");
const content = document.querySelector("#mainContent");
const btnMerch = document.querySelector("#btnMerch");

const hamburgerMenu = document.querySelector(".hamburger-menu-container");

const toggleDrawer = (event, drawer) => {
    event.stopPropagation();
    drawer.classList.toggle("close-drawer");
    btnMerch.classList.toggle("opacity-0");
    hamburgerMenu.classList.toggle("open");
};

const closeDrawer = (event, drawer) => {
    event.stopPropagation();
    drawer.classList.add("close-drawer");
    btnMerch.classList.remove("opacity-0");
    hamburgerMenu.classList.remove("open");
};

hamburgerButton.addEventListener("click", (event) => {
    toggleDrawer(event, drawerMobile);
});

header.addEventListener("click", (event) => {
   closeDrawer(event, drawerMobile);
});

content.addEventListener("click", (event) => {
   closeDrawer(event, drawerMobile);
});