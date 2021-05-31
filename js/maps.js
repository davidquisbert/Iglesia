(function() {
    "use strict";

        var map = L.map('mapa').setView([-17.800498, -63.139892], 16);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([-17.800498, -63.139892]).addTo(map)
            .bindPopup('Iglesia Paz de Dios.<br> Santa Cruz.')
            .openPopup();
    });