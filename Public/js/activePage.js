let breadcrumbs = document.getElementById("breadcrumbs")
let actualLocation = breadcrumbs.innerText.trim()

if (actualLocation == 'inicio') {
  const navLinks = document.querySelectorAll('#menu-large a, #menu-movil a');
  navLinks[0].classList.add('activo');
  navLinks[13].classList.add('activo');
} else if (breadcrumbs && actualLocation != 'inicio') {
  let targetArray = actualLocation.includes('.') ? actualLocation.split('.').map(p => p.trim()) : [actualLocation]

  function matchURL(url, routeLink) {
    const parteUrl = url.split('/').pop() || url;
    return parteUrl.toLowerCase() === routeLink.toLowerCase();
  }

  const navLinks = document.querySelectorAll('#menu-large a, #menu-movil a');

  navLinks.forEach(link => {
    const coincide = targetArray.some(routeLink =>
      matchURL(link.href, routeLink)
    );

    if (coincide) {
      link.classList.add('activo');
    }
  });
}