'use strict';

let shelters = ['Animal Friend', 'Juglas Dzivnieku aizsardzibas grupa', 'Ulubele dzīvnieku patversme Līči', 'Rigas pilsetas Dzivnieku patversme', 'Dzīvnieku Patversme Mežavairogi'];

let coordsLat = [56.9412114762812, 56.96950354102735, 56.9547029181603, 56.9547029181603, 56.81175049717983];
let coordsLng = [24.049200662617682, 24.25418043822159, 24.34815930093005, 24.34815930093005, 24.300066953780128];

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

        map.on('click', function (mapEvent) {
            console.log(mapEvent);
            const { lat, lng } = mapEvent.latlng;

            L.marker([lat, lng])
                .addTo(map)
                .bindPopup(L.popup({
                    maxWidth: 250,
                    minWidth: 100,
                }))
                .setPopupContent(`lat${lat}, lng${lng}`)
                .openPopup();

            // marker.bindPopup("Popup content");
            // marker.on('mouseover', function (e) {
            //     this.openPopup();
            // });

            // marker.on('mouseout', function (e) {
            //     this.closePopup();
            // });

        });

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


