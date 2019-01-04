var map = L.map('mapid').setView([35.6943900, 51.4215100], 13);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
  attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
  maxZoom: 18,
  id: 'mapbox.streets',
  accessToken: 'pk.eyJ1Ijoic21ha3NzIiwiYSI6ImNqcWk2ZW5mczBiZXg0M255aDk3cnAxY2UifQ.ldAr6ScYwNZRX85aKMrFYw'
}).addTo(map);

var marker;

function onMapClick(e) {
  if (marker) { // check
    marker.remove(); // remove
  }

  marker = L.marker([e.latlng.lat, e.latlng.lng]).addTo(map);
  document.getElementById('lat').value = e.latlng.lat;
  document.getElementById('lng').value = e.latlng.lng;
}

map.on('click', onMapClick);