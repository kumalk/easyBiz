document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("mobile-menu-toggle");
    const navMenu = document.getElementById("top_bar_navi_box");

    menuToggle.addEventListener("click", function () {
        navMenu.classList.toggle("active");
    });
});