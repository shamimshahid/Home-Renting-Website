<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Map</title>
  <script src="../js/jquery-3.5.1.min.js"></script>
  <!-- Bootstrap file -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <style>
    .button {

      margin-bottom: 200px;
      position: absolute;
      margin-top: 200px;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);

    }

    .button button {

      font-size: 28px;
    }

    #map {
      position: absolute;
      top: 70px;
      left: 0;
      bottom: 359px;
      right: 0;
    }
  </style>
</head>


<body>

  <h1>Your Current Location :</h1>
  <div id="map"></div>
  <div id="googleMap" style="width: 100%;height:400px; "></div>

  <div class="button">
    <button id="button" type="button" name="button" class="btn btn-outline-success my-2 my-sm-0 search-btn">Save Property</button>
  </div>



  <input type="hidden" id="house_no" name="map" value='<?php echo   $data['house_no']; ?>'>
  <input type="hidden" id="street" name="map" value='<?php echo   $data['street']; ?>'>
  <input type="hidden" id="area" name="map" value='<?php echo   $data['area']; ?>'>
  <input type="hidden" id="thana" name="map" value='<?php echo   $data['thana']; ?>'>
  <input type="hidden" id="district" name="map" value='<?php echo   $data['district']; ?>'>
  <input type="hidden" id="floor" name="map" value='<?php echo   $data['floor']; ?>'>
  <input type="hidden" id="room" name="map" value='<?php echo   $data['room']; ?>'>
  <input type="hidden" id="price" name="map" value='<?php echo   $data['price']; ?>'>
  <input type="hidden" id="id" name="map" value='<?php echo   $data['id']; ?>'>
  <input type="hidden" id="image_name" name="map" value='<?php echo   $image3 ?>'>


















  <script>
    function initMap() {


      let latitude = '';
      let longitude = '';

      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          console.log(position)
          latitude = position.coords.latitude;
          longitude = position.coords.longitude;

          map2(latitude, longitude);

        });
      }

      function map2(latitude, longitude) {
        console.log(latitude);
        console.log(longitude);
        var map = L.map("map").setView([latitude, longitude], 18);
        L.tileLayer(
          "https://api.maptiler.com/maps/streets/256/{z}/{x}/{y}.png?key=TsHXgdQAfV5WPz2hOZ0V", {
            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
          }
        ).addTo(map);
        var marker = L.marker([latitude, longitude]).addTo(map);

        // const uluru = { lat: latitude, lng: longitude };
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


        $('#button').click(function() {
          var house_no = $('#house_no').val();
          var street = $('#street').val();
          var area = $('#area').val();
          var thana = $('#thana').val();
          var district = $('#district').val();
          var floor = $('#floor').val();
          var room = $('#room').val();
          var price = $('#price').val();
          var id = $('#id').val();
          var image_name = $('#image_name').val();
          $.ajax({
            url: 'add_owner_map.php',
            type: 'POST',
            data: {
              lat: latitude,
              long: longitude,
              house_no: house_no,
              street: street,
              area: area,
              thana: thana,
              district: district,
              floor: floor,
              room: room,
              price: price,
              id: id,
              image_name: image_name
            },
            success: function(response) {
              //alert(response);
              location.href = 'welcome2.php'
            },
            error: function(error) {

            }
          });
        });

      }

    }
  </script>


  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgEFd1S4iVxaQwAFrRJg5gmtYd3RW2wRc&callback=initMap"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>