const menuMovil = document.getElementById('menu-movil')
const CerrarMenuMovil = document.getElementById('cerrar-menu-movil')
const header = document.getElementById('head')

header.onclick = function () {
    menuMovil.style.visibility = 'visible';
    menuMovil.classList.add('slide-in');
    menuMovil.classList.remove('slide-out');
};
CerrarMenuMovil.onclick = function () {
    menuMovil.classList.add('slide-out');
    menuMovil.classList.remove('slide-in');
    setTimeout(() => {
        menuMovil.style.visibility = 'hidden';
    }, 300);
};