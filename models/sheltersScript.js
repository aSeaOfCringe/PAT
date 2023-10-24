'use strict';

// prettier-ignore
const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

// const form = document.querySelector('.form');
// const containerWorkouts = document.querySelector('.workouts');

if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function (position) {

        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;

        console.log(position);

        const coords = [latitude, longitude];

        var map = L.map('map').setView([56.95237103380218, 24.07861953209933], 13);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([56.95237103380218, 24.07861953209933]).addTo(map)
            .bindPopup('Current location')
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
    });
}
