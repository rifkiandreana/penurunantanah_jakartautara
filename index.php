<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Peta Penurunan Tanah</title>
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
     integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
     crossorigin=""/>

     <style>
        #map { height: 720px; }
     </style>
</head>

<body>
<div id="map"></div>
    
</body>
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
    crossorigin=""></script>
    <script> var map = L.map('map').setView([-6.138414, 106.863956], 13);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    var marker = L.marker([-6.130907, 106.877187]).addTo(map);
    marker.bindPopup("<b>Keacamatan Tanjung Priok</b><br>Terjadi penurunan tanah 10 cm<br>").openPopup();

    var marker = L.marker([-6.127166, 106.945793]).addTo(map);
    marker.bindPopup("<b>Kecamatan Cilincing</b><br>Terjadi penurunan tanah 21 cm<br>Harus tetap Waspada!!!</br>").openPopup();

    var marker = L.marker([-6.109519, 106.902381]).addTo(map);
    marker.bindPopup("<b>Keacamatan Koja</b><br>Terjadi penurunan tanah 11 cm<br>").openPopup();

    var marker = L.marker([-6.122538, 106.831463]).addTo(map);
    marker.bindPopup("<b>Keacamatan Pademangan</b><br>Terjadi penurunan tanah 12 cm").openPopup();

    var marker = L.marker([-6.115067, 106.758476]).addTo(map);
    marker.bindPopup("<b>Keacamatan Penjaringan</b><br>Terjadi Penurunan tanah 12 cm").openPopup();


    function onMapClick(e) {
    alert("You clicked the map at " + e.latlng);
}

map.on('click', onMapClick);
</script>
</html>