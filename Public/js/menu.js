const menuMovil = document.getElementById('menu-movil')
const CerrarMenuMovil = document.getElementById('cerrar-menu-movil')
const toggle = document.getElementById('toggle-menu')
const body = document.body

toggle.onclick = function () {
    body.style.overflow = 'hidden'
    menuMovil.style.visibility = 'visible'
    menuMovil.classList.add('slide-in')
    menuMovil.classList.remove('slide-out')
};
CerrarMenuMovil.onclick = function () {
    body.style.overflow = 'auto'
    menuMovil.classList.add('slide-out')
    menuMovil.classList.remove('slide-in')
    setTimeout(() => {
        menuMovil.style.visibility = 'hidden'
    }, 300);
};