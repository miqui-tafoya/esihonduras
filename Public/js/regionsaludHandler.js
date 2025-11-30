document.addEventListener('DOMContentLoaded', () => {
    const map = L.map('mapa').setView([15.59045000, -87.3621599996], 8);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    const coordScript = document.getElementById('coords-data');
    const coords = JSON.parse(coordScript.textContent);

    coords.forEach((lugar) => {
        const marker = L.marker([lugar.lat, lugar.lng]).addTo(map);

        marker.bindPopup(`
            <b>${lugar.nombre}</b><br>
            Municipio: ${lugar.municipio}<br>
            Aldea: ${lugar.aldea}
        `);

        marker.bindTooltip(lugar.nombre);
    });

    window.addEventListener('resize', function () {
        map.invalidateSize();
    });

    const mapOverlay = document.getElementById('map-overlay');
    if (mapOverlay) {
        mapOverlay.addEventListener('click', function () {
            this.style.display = 'none';
            map.invalidateSize();
        });
    }
});