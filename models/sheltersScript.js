'use strict';

let shelters = ['Animal Friend', 'Juglas Dzivnieku aizsardzibas grupa', 'Ulubele dzīvnieku patversme Līči', 'Rigas pilsetas Dzivnieku patversme', 'Dzīvnieku Patversme Mežavairogi', 'Slokas dzivnieku patversme', 'Remi "Kaķa sirds" patversme un veterinārā klīnika', 'Kaķu biedrība', 'Akvariga', 'Ķepu-Ķepā', 'Tukuma novada dzīvnieku patversme', 'Lacisi , dzivnieku patversme', 'Daugavpils dzivnieku patversme'];

let coordsLat = [56.9412114762812, 56.96950354102735, 56.9547029181603, 56.9547029181603, 56.81175049717983, 56.94570567138849, 56.934248882210426, 56.932290779913934, 56.993709786619114, 56.581360719810085, 56.98216836650238, 57.32232759958307, 55.89608829940356];
let coordsLng = [24.049200662617682, 24.25418043822159, 24.34815930093005, 24.34815930093005, 24.300066953780128, 23.630154132843018, 24.054104089736942, 24.16125297546387, 24.188434481620792, 24.037592411041263, 23.159887790679935, 25.257112383842472, 26.53059840202332];

if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function (position) {

        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;

        console.log(position);

        const coords = [latitude, longitude];
        const coordsKipsala = [56.95237103380218, 24.07861953209933];

        var map = L.map('map').setView(coords, 13);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        let marker;
        for (let i = 0; i < shelters.length; i++) {
            marker = new L.marker([coordsLat[i], coordsLng[i]]).addTo(map)
                .bindPopup(shelters[i])
                .openPopup();

        }

        marker = L.marker(coords).addTo(map)
            .bindPopup(
                L.popup({
                    maxWidth: 250,
                    minWidth: 100,
                    autoClose: false,
                    closeOnClick: false,
                    className: `location-popup`,
                })
            )
            .setPopupContent('Atrašanās vieta')
            .openPopup();

        marker = L.marker(coordsKipsala).addTo(map)
            .bindPopup(
                L.popup({
                    maxWidth: 250,
                    minWidth: 100,
                    autoClose: false,
                    closeOnClick: false,
                    className: `location-popup`,
                })
            )
            .setPopupContent('Ķīpsala')
            .openPopup();

    }, function () {
        alert(`Nevar noteikt atrašanās vietu`);

        const coordsKipsala = [56.95237103380218, 24.07861953209933];

        var map = L.map('map').setView(coordsKipsala, 11);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        let marker;
        for (let i = 0; i < shelters.length; i++) {
            marker = new L.marker([coordsLat[i], coordsLng[i]]).addTo(map)
                .bindPopup(shelters[i])
                .openPopup();

        }

        marker = L.marker(coordsKipsala).addTo(map)
            .bindPopup(
                L.popup({
                    maxWidth: 250,
                    minWidth: 100,
                    autoClose: false,
                    closeOnClick: false,
                    className: `location-popup`,
                })
            )
            .setPopupContent('Ķīpsala')
            .openPopup();
    });
}
