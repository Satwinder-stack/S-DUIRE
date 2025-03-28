// Members: 
// De Jesus, Franz Mark
// Gonzales, John Patrick
// Guaio, Karl
// Jeerh, Satwinder 
// Section: WD-202

// For payment method in the checkout usingcard
document.getElementById("payment_method").addEventListener("change", function() {
    var paymentMethod = this.value;
    var cardDetailsSection = document.getElementById("card_details");

    if (paymentMethod === "Card") {
        cardDetailsSection.style.display = "block";
        document.getElementById("card_number").setAttribute("required", "true");
        document.getElementById("card_expiry").setAttribute("required", "true");
        document.getElementById("card_cvv").setAttribute("required", "true");
    } else {
        cardDetailsSection.style.display = "none";
        document.getElementById("card_number").removeAttribute("required");
        document.getElementById("card_expiry").removeAttribute("required");
        document.getElementById("card_cvv").removeAttribute("required");
    }
});

// To show the map
document.addEventListener("DOMContentLoaded", function () {
    var mapElement = document.getElementById("map");
    if (mapElement) {
        initMap();
    }
});

// To initialize the map
function initMap() {
    var storeLat = 15.1331;
    var storeLon = 120.5900;
    var map = L.map('map').setView([storeLat, storeLon], 12);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
    var storeMarker = L.marker([storeLat, storeLon]).addTo(map).bindPopup("📍Store").openPopup();
    var userMarker;

    map.on('click', function(e) {
        var userLat = e.latlng.lat;
        var userLon = e.latlng.lng;
        document.getElementById('latitude').value = userLat;
        document.getElementById('longitude').value = userLon;

        if (userMarker) {
            userMarker.setLatLng([userLat, userLon]).bindPopup("\ud83d\udccc Your Location").openPopup();
        } else {
            userMarker = L.marker([userLat, userLon]).addTo(map).bindPopup("\ud83d\udccc Your Location").openPopup();
        }

        var distance = calculateDistance(storeLat, storeLon, userLat, userLon);
        document.getElementById('distance').innerText = distance + ' km';
        document.getElementById('distance_input').value = distance;
    });
}

document.getElementById('province').addEventListener('change', function() {
    var provinceId = this.value;
    if (provinceId) {
        fetch('get_cities.php?province_id=' + provinceId)
            .then(response => response.json())
            .then(data => {
                var citySelect = document.getElementById('city');
                citySelect.innerHTML = "<option value=''>Select City</option>";
                data.forEach(function(city) {
                    var option = document.createElement('option');
                    option.value = city.id;
                    option.textContent = city.name;
                    citySelect.appendChild(option);
                });
                document.getElementById('barangay').innerHTML = "<option value=''>Select Barangay</option>";
                
                setTimeout(function () {
                    if (!map) {
                        initMap();
                    }
                }, 500);
            });
    }
});

// To calculate the distance
function calculateDistance(lat1, lon1, lat2, lon2) {
    var R = 6371;
    var dLat = (lat2 - lat1) * Math.PI / 180;
    var dLon = (lon2 - lon1) * Math.PI / 180;
    var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
            Math.cos(lat1 * Math.PI / 180) * Math.cos(lat2 * Math.PI / 180) *
            Math.sin(dLon / 2) * Math.sin(dLon / 2);
    var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
    return (R * c).toFixed(2);
}
