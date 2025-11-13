let map = L.map('mapa').setView([15.59045000, -87.3621599996], 10)

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map)

L.marker([15.59045000, -87.3621599996]).addTo(map)