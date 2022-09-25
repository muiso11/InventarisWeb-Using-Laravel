var menuIcon = document.querySelector(".logo");
var sidebar = document.querySelector(".sidebar");

menuIcon.onclick = function () {
    sidebar.classList.toggle("small-sidebar");
}

