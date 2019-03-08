
function myMap() {
  var mapCanvas = document.getElementById("map");
  var Rockville = new google.maps.LatLng(39.095710, -77.153770);
  var Gaithersburg = new google.maps.LatLng(39.151390, -77.200683);
  var Bethesda = new google.maps.LatLng(38.988223, -77.094189);

  var mapOptions = {center: Rockville, zoom: 10};
  var map = new google.maps.Map(mapCanvas,mapOptions);

  var rockvilleMarker = new google.maps.Marker({
    position: Rockville
    
  });
  var GaithersburgMarker = new google.maps.Marker({
    position: Gaithersburg
    
  });
  var BethesdaMarker = new google.maps.Marker({
    position: Bethesda
  });
  
  rockvilleMarker.setMap(map);
  GaithersburgMarker.setMap(map);
  BethesdaMarker.setMap(map);
}