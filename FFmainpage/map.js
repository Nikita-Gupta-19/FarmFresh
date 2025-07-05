// Set your desired location (Ghaziabad area)
const position = { lat: 28.6633, lng: 77.296447 };

// Initialize and add the map
let map;

async function initMap() {
  // Request needed libraries.
  //@ts-ignore
  const { Map } = await google.maps.importLibrary("maps");
  const { AdvancedMarkerView } = await google.maps.importLibrary("marker");

  // The map, centered at the custom location
  map = new Map(document.getElementById("map"), {
    zoom: 17,
    center: position,
    mapId: "DEMO_MAP_ID",
  });

  // Add a marker at the specified location
  addMarker(position);

  // You can add more markers here if needed using the same function
  // addMarker({ lat: ..., lng: ... });

  function addMarker(loc) {
    const marker = new AdvancedMarkerView({
      map: map,
      position: loc,
    });
  }
}

initMap();
