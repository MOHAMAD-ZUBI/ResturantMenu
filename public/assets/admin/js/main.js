const sideBarLink = document.querySelectorAll(".sidebar-links");
const collapseLinks = document.querySelectorAll(".collapse-link");
const closeSideBar = document.getElementById("collapseBar");
const sidebar = document.getElementById("sidebar");

closeSideBar.addEventListener("click", (e) => {
    sidebar.classList.toggle("close");
});

const activeClassHover = (item, eventName, className) => {
    item.forEach((buttons) => {
        buttons.addEventListener(eventName, (e) => {
            item.forEach((btn) => {
                btn.classList.remove(className);
            });
            buttons.classList.add(className);
        });
    });
};

activeClassHover(sideBarLink, "click", "active");

activeClassHover(collapseLinks, "click", "active");
activeClassHover(collapseLinks, "mouseover", "hover");
