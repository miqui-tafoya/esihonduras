let breadcrumbs = document.getElementById("breadcrumbs")
if (breadcrumbs) {
  let actualLocation = breadcrumbs.innerText.trim()

  let targetArray = actualLocation.includes('.') ? actualLocation.split('.').map(p => p.trim()) : [actualLocation]

  function matchURL(url, routeLink) {
    const parteUrl = url.split('/').pop() || url;
    return parteUrl.toLowerCase() === routeLink.toLowerCase();
  }

  const navLinks = document.querySelectorAll('nav a').forEach(link => {
    const coincide = targetArray.some(routeLink =>
      matchURL(link.href, routeLink)
    );

    if (coincide) {
      link.classList.add('active');
    }
  })
}