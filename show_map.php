<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Map</title>
  <script src="js/jquery-3.5.1.min.js"></script>

</head>
<style>
  #map {
    position: absolute;
    top: 65px;
    left: 70px;
    bottom: 65px;
    right: 70px;
  }

  .back {
    margin-top: 25px;
  }

  .back a {
    background: #0062cc;
    color: white;
    padding: 15px 15px;
    text-decoration: none;
    border-radius: 5px;
  }
</style>

<body>
  <div class="back">
    <a href="./controller/welcome.php">Back</a>
  </div>
  <div id="googleMap" style="width: 100%;height:900px; "></div>
  <div id="map"></div>

  <input type="hidden" id="latitude" value="<?php echo $_GET['latitude']; ?>">
  <input type="hidden" id="longitude" value="<?php echo $_GET['longitude']; ?>">







  <script>
    function initMap() {
      "use strict"
      let latitude1 = $('#latitude').val();
      let longitude1 = $('#longitude').val();

      var latitude2 = parseFloat(latitude1);
      var longitude2 = parseFloat(longitude1);


      console.log(latitude1);
      console.log(longitude1);

      console.log(latitude2);
      console.log(longitude2);

      var map = L.map("map").setView([latitude2, longitude2], 18);
      L.tileLayer(
        "https://api.maptiler.com/maps/streets/256/{z}/{x}/{y}.png?key=TsHXgdQAfV5WPz2hOZ0V", {
          attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
        }
      ).addTo(map);
      var marker = L.marker([latitude2, longitude2]).addTo(map);


      // const uluru = { lat: latitude2, lng: longitude2 };
      //     // The map, centered at Uluru
      //     const map = new google.maps.Map(document.getElementById("googleMap"), {
      //       zoom: 18,
      //       center: uluru,
      //     });
      //     // The marker, positioned at Uluru
      //     const marker = new google.maps.Marker({
      //       position: uluru,
      //       map: map,
      //     });
    }
  </script>


  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgEFd1S4iVxaQwAFrRJg5gmtYd3RW2wRc&callback=initMap"></script>

</body>

</html>