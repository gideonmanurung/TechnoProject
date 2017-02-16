@extends('layouts.appLogin')

@section('content')
<header>
<div class="container">
<div class="row">
</head>

<body>
  <div id="map" style="width:100%;height:500px;"></div>

<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var myCenter=new google.maps.LatLng(51.508742,-0.120850);
  var mapOptions = {center: myCenter, zoom: 9};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  google.maps.event.addListener(map, 'click', function(event) {
    placeMarker(map, event.latLng);
  });
}

function placeMarker(map, location) {
  var marker = new google.maps.Marker({
    position: location,
    map: map
  });
  var infowindow = new google.maps.InfoWindow({
    content: 'Latitude: ' + location.lat() + '<br>Longitude: ' + location.lng()
  });
  infowindow.open(map,marker);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>

</body>
</header>
@endsection
