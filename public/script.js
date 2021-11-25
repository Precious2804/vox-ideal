const hamburger = document.querySelector("#hamburger");
const navUL = document.querySelector("#nav-ul")

hamburger.addEventListener("click", () => {
    navUL.classList.toggle('show');
})