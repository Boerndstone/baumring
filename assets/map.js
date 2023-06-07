var map = L.map("map").setView([48.11, 11.0], 10);

if (window.innerWidth < 600) {
  map.setZoom(8);
} else {
  map.setZoom(10);
}

L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution:
    '© <a href="https://www.mapbox.com/about/maps/">Mapbox</a> © <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> <strong><a href="https://www.mapbox.com/map-feedback/" target="_blank">Improve this map</a></strong>',
  maxZoom: 18,
  accessToken:
    "pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw",
}).addTo(map);

var circle = L.circle([48.09182, 10.74069], {
  color: "#613b15",
  fillColor: "#613b1599",
  fillOpacity: 0.5,
  radius: 10000,
}).addTo(map);

var circle = L.circle([48.13458, 11.36653], {
  color: "#29651f",
  fillColor: "#29651fB3",
  fillOpacity: 0.5,
  radius: 10000,
}).addTo(map);
