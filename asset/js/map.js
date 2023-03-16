var map = L.map('map').setView([48.833, 2.333], 7);
const dialog = document.getElementById("mapDialog");
const cancelButton = document.getElementById("cancelButton")

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);
function createCustomIcon (feature, latlng) {
    let myIcon = L.icon({
      iconUrl: 'asset/img/fossil.png',
      shadowUrl: 'asset/img/fossil.png',
      iconSize:     [25, 25], // width and height of the image in pixels
      shadowSize:   [35, 20], // width, height of optional shadow image
      iconAnchor:   [12, 12], // point of the icon which will correspond to marker's location
      shadowAnchor: [12, 6],  // anchor point of the shadow. should be offset
      popupAnchor:  [0, 0] // point from which the popup should open relative to the iconAnchor
    })
    return L.marker(latlng, { icon: myIcon })
  }
navigator.geolocation.getCurrentPosition(function(position) {
    var myIcon = L.icon({
        iconUrl: "./img/fossil.png",
        iconRetinaUrl: "img/fossil.png",
        iconAnchor: null,
        shadowUrl: null,
        shadowSize: null,
        shadowAnchor: null,
        iconSize: [35,35],
        className: 'leaflet-venue-icon'
      });
    // Set map view to user's location
    // Marker
    L.marker([position.coords.latitude, position.coords.longitude]).addTo(map)
        .bindPopup('Vous êtes ici')
        .openPopup();
    //Cercle radius
    var circle = L.circle([position.coords.latitude,  position.coords.longitude], {
        color: 'grey',
        fillColor: '#F7F7FF',
        fillOpacity: 0.2,
        radius: 2000
    }).addTo(map);
    var geojsonFeature = [{
            "type": "Feature",
            "geometry": {
                "type": "Point",
                "coordinates": [ position.coords.longitude + 0.02 ,position.coords.latitude +0.01]
            }
        },
        {
            "type": "Feature",
            "geometry": {
                "type": "Point",
                "coordinates": [ position.coords.longitude + 0.025 ,position.coords.latitude]
            }
        },
        {
            "type": "Feature",
            "geometry": {
                "type": "Point",
                "coordinates": [ position.coords.longitude - 0.01 ,position.coords.latitude  -0.01]
            }
        },
        {
            "type": "Feature",
            "geometry": {
                "type": "Point",
                "coordinates": [ position.coords.longitude - 0.015 ,position.coords.latitude  -0.015]
            }
        }
    ];
    // create an options object that specifies which function will called on each feature
    let myLayerOptions = {
      pointToLayer: createCustomIcon
    }
    // create the GeoJSON layer
    L.geoJSON(geojsonFeature, myLayerOptions).addTo(map).on("click" , function (){
        dialog.showModal();
    })
    map.setView([position.coords.latitude, position.coords.longitude], 13);
});
// Form cancel button closes the dialog box
cancelButton.addEventListener("click", () => {
    dialog.close();
});
