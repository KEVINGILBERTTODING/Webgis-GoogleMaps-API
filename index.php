<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Map</title>
</head>

<body>
  <h1>My First Google Map</h1>

  <div id="googleMap" style="width:100%;height:800px;"></div>

  <script>
    function myMap() {
      var mapProp = {
        center: new google.maps.LatLng(-7.0149, 110.3942),
        zoom: 12,
      };
      var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
    }
  </script>

  <script src="https://maps.googleapis.com/maps/api/js?key=&callback=myMap"></script>

</body>

</html>