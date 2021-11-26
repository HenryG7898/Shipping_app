// grap everything we need
const btn = document.querySelector(".mobile-menu-button");
const sidebar = document.querySelector(".sidebar");

// add event listener
btn.addEventListener("click", () => {
    sidebar.classList.toggle("-translate-x-full");
});
