<?php
/*
Template Name: mapa-mik
*/
?>
<?php include ('header-map.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Mapa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- All the stuff you need to install from Leaflet -->
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.4.4/leaflet.css" />
<link rel="stylesheet" href="http://mik.krakow.pl/wp-content/themes/sg_mik/leaflet/marker-cluster/dist/MarkerCluster.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.4/leaflet.ie.css" /><![endif]-->
    <script src="http://cdn.leafletjs.com/leaflet-0.4.4/leaflet.js"></script>
<script src="http://mik.krakow.pl/wp-content/themes/sg_mik/leaflet/leaflet-plugins/layer/vector/KML.js"></script>
<script src="http://mik.krakow.pl/wp-content/themes/sg_mik/leaflet/leaflet-plugins/layer/Icon.Canvas.js"></script>
<script src="http://mik.krakow.pl/wp-content/themes/sg_mik/leaflet/marker-cluster/dist/leaflet.markercluster-src.js"></script>
<script src="http://mik.krakow.pl/wp-content/themes/sg_mik/leaflet/marker-cluster/dist/leaflet.markercluster.js"></script>


    <!-- jQuery so we can easily make our popup -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://mik.krakow.pl/wp-content/themes/sg_mik/json/muzeum-malopolska.js"></script>
<script src="http://mik.krakow.pl/wp-content/themes/sg_mik/json/szlaki-malopolski.js"></script>     
	<style>
				
		#map {
position: absolute;
top: 3em;
right: 0;
bottom: 0;
left: 0;
z-index: 1;
		}
	</head>
	</style>
<body>
    <!-- The <div> where we're put the map -->
    <div id="map"></div>
    <script type="text/javascript">
        
        // Prep the background tile layer graciously provided by stamen.com
var cmAttr = 'Map data &copy; 2012 OpenStreetMap contributors, Imagery &copy; 2012 CloudMade',
	mbAttr = 'Podkład <a href="http://osm.org">OpenStreetMap</a> via <a href="http://mapbox.com/about/maps/">MapBox</a> ',
	cmUrl = 'http://{s}.tile.cloudmade.com/7c46823741974be9baefe30f05fbf5a1/{styleId}/256/{z}/{x}/{y}.png',
	osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';

var cloudmade = new L.TileLayer(cmUrl, {styleId: 44094, attribution: cmAttr, maxZoom: 16, minZoom: 7}),
	osm = new L.TileLayer(osmUrl, {maxZoom: 16, minZoom: 7});

function onEachFeature(feature, layer) {
			layer.bindPopup(feature.properties.Name + feature.properties.Description);
		}	
		
var malopolskiemuzea = new L.layerGroup();

var szlakimalopolski = new L.layerGroup();

var map = new L.Map('map', {
    center: new L.LatLng(49.877186, 20.085497),  
    zoom: 10,
    layers: [cloudmade]
});
        
var baseLayers = {
			"CloudMade": cloudmade,
			"OSM": osm				
		};
var overlays = {
			"Małopolskie Muzea": malopolskiemuzea,
			"Szlaki Małopolski": szlakimalopolski
			
		};

L.control.layers(baseLayers, overlays, {
    position: 'topleft'
}).addTo(map);

L.control.scale().addTo(map);



var MarkerMuzeum = {
    radius: 5.5,
    fillColor: "#3183bd",
    color: "#000",
    weight: 1,
    opacity: 1,
    fillOpacity: 0.8
};


var MarkerSzlaki = {
    radius: 5.5,
    fillColor: "#ff7800",
    color: "#000",
    weight: 1,
    opacity: 1,
    fillOpacity: 0.8
};

/*var muzeaMal;
muzeaMal = L.geoJson(null,{
pointToLayer: function (feature, latlng) {
        return L.circleMarker(latlng, MarkerMuzeum);
   	},
onEachFeature: onEachFeature 
}).addTo(malopolskiemuzea);
muzeaMal.addData(muzea);
*/

//var muzeaMalkml


var malopolskiemuzea = new L.KML("http://mik.krakow.pl/wp-content/themes/sg_mik/json/MuzeawMalopolsce.kml").addTo(malopolskiemuzea);



var szlakiMal;
szlakiMal = L.geoJson(null,{
pointToLayer: function (feature, latlng) {
        return L.circleMarker(latlng, MarkerSzlaki);
   	},
onEachFeature: onEachFeature 
}).addTo(szlakimalopolski);
szlakiMal.addData(szlaki);

    </script>
</body>
</html>