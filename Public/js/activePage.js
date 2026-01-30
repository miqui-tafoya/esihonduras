let breadcrumbs = document.getElementById("breadcrumbs");

if (breadcrumbs) {
  let actualLocation = breadcrumbs.innerText.trim();
  const navLinks = document.querySelectorAll('#menu-large a, #menu-movil a');

  if (actualLocation === 'inicio') {
    if (navLinks[0]) navLinks[0].classList.add('activo');
    if (navLinks[13]) navLinks[13].classList.add('activo');
  } else {
    let targetArray = actualLocation.includes('.')
      ? actualLocation.split('.').map(p => p.trim())
      : [actualLocation];

    function matchURL(url, routeLink) {
      const parteUrl = url.split('/').pop() || url;
      return parteUrl.toLowerCase() === routeLink.toLowerCase();
    }

    navLinks.forEach(link => {
      const coincide = targetArray.some(routeLink =>
        matchURL(link.href, routeLink)
      );

      if (coincide) {
        link.classList.add('activo');
      }
    });
  }
}