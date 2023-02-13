var menuToggle = document.querySelector('#menuToggle');
var nav = document.querySelector('#navSite');
menuToggle.addEventListener("pointerdown", () => {
  menuToggle.classList.toggle("is-active");
  nav.classList.toggle("has-nav-toggled");
}, false);
