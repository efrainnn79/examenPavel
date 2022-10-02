<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <style type="text/css">
        #map{
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }

    </style>
</head>
<body>
    <div id="map"></div>
 <script type="text/javascript">
    var map=L.map('map').setView([-17.393046395369876, -66.1572502813004],20); //centrado del mapa
    L.tileLayer('https://api.maptiler.com/maps/basic/{z}/{x}/{y}.png?key=eRdqZhGowQEpZaCFy21g',{
    attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
    }).addTo(map);
    var icono=L.icon({
        iconUrl:'https://icon-library.com/images/png-home-icon/png-home-icon-7.jpg',
        iconSize:[64,64]
    });

    var icono2=L.icon({
        iconUrl:'https://www.pngkit.com/png/full/17-178229_school-building-icon-school-icon-vector-png.png',
        iconSize:[64,64]
    });

    var marker=L.marker([-17.393046395369876, -66.1572502813004],{icon: icono}).addTo(map); //marcador
    var marker2=L.marker([-17.395799125177984, -66.15817601663574],{icon: icono2}).addTo(map); //marcador
    var circulo=L.circle([-17.39256519571093, -66.15889179319518],{
        color:'red',
        fillColor:'#ff0033',
        fillOpacity:0.2,
        radius:50
    }).addTo(map);

    var poligono=L.polygon([
        [-17.392139797980633, -66.15782887898851],
        [-17.39199977976469, -66.15559608758778],
        [-17.394039164950083, -66.15520056453201]
    ]).addTo(map);
    marker.bindPopup("<h1>Plaza principal</h1>").openPopup();
    circulo.bindPopup("<h1>Correo</h1><p>Correos de bolivia</p>");
    poligono.bindPopup("<h1>Zona central</h1><p>Centros de cochabamba</p>");

    var ruta ={"type":"FeatureCollection","features":[{"type":"Feature","geometry":{"type":"LineString","coordinates":[[-66.15213426,-17.39838968],[-66.15213426,-17.39838968]]},"id":"7362cacc-a3a8-498e-91ae-f5c52eb76321","properties":{"name":"ruta2"}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[-66.1577571,-17.39925575],[-66.1587965,-17.39260577],[-66.14996157,-17.3909376],[-66.14942584,-17.39418626],[-66.15267,-17.39461228],[-66.15213426,-17.39838968]]},"id":"3d2103c1-9ea3-4000-a6a9-4d2d29dd8116","properties":{"name":""}}]}
    L.geoJSON(ruta).addTo(map);
    L.control.scale({
        metric:true,
        imperial:true,
        position:'topright'
    }).addTo(map);
 </script>
</body>
</html>