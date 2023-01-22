<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Owner</title>

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <script src="../js/jquery-3.5.1.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/owner.css">
</head>
<style>
  #map {
    position: absolute;
    top: -70px;
    left: 204px;
    bottom: 359px;
    right: 0;
  }
</style>

<body>

  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top main_nav">
      <a class="navbar-brand" href="#"><span style="color : #ff4a4a">Owner</span> Page</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link log_reg" href="#">Logged in as <span style="color : #ff4a4a;  text-transform: uppercase;"><strong><?php echo $logged_as; ?></strong></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link log_reg" href="logout.php"><span style="color : #00346b">LogOut</span></a>
          </li>
        </ul>
      </div>
    </nav>


    <div class="sidebar" id="sidebar">
      <ul>

        <li><a href="#" id="add" class="btn">
            <span class="title">Add</span>
          </a></li>
        <li><a href="#" id="show" class="btn">
            <span class="title">Approved</span>
          </a></li>
        <li><a href="#" id="reject" class="btn">
            <span class="title">Rejected</span>
          </a></li>
        <li><a href="#" id="request" class="btn">
            <span class="title">Interested People</span>
          </a></li>


      </ul>
    </div>
    <div class="part_1">
      <form action="addproperties.php" method="POST" enctype="multipart/form-data" id="type">

        <div id="map"></div>
        <div id="googleMap" style="width: 1000px;height:400px; margin-left: 200px;"></div>

        <div class="left">

          <div class="form-group">

            <label for="house_no">House no :</label>
            <input type="text" id="house_no" name="house_no" class="form-control" placeholder="Enter house no" required>
          </div>
          <div class="form-group">
            <label for="street">Road/Street/Block :</label>
            <input type="text" id="street" name="street" class="form-control" placeholder="Enter Road/Street/Block" required>
          </div>
          <div class="form-group">
            <label for="area">Area :</label>
            <input type="text" id="area" name="area" class="form-control" placeholder="Enter Area" required>
          </div>
          <div class="form-group">
            <label for="thana">Thana :</label>
            <input type="text" id="thana" name="thana" class="form-control" placeholder="Enter thana" required>
          </div>


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
                var map = L.map("map").setView([latitude, longitude], 100);
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


              }


            }
          </script>


          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgEFd1S4iVxaQwAFrRJg5gmtYd3RW2wRc&callback=initMap"></script>

        </div><!-- end left -->
        <div class="right">
          <div class="form-group">
            <label for="district">District :</label>
            <input type="text" id="district" name="district" class="form-control" placeholder="Enter District" required>
          </div>
          <div class="form-group">
            <label for="floor">Floor :</label>
            <input type="text" id="floor" name="floor" class="form-control" placeholder="Enter floor" required>
          </div>
          <label for="room">Select Room :</label>

          <select class="form-control  id=" type" name="room" form="type">

            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>

          </select>
          <div class="price">
            <div class="form-group">
              <label for="price">price :</label>
              <input type="text" id="price" name="price" class="form-control" placeholder="Enter Price" required>
            </div>
            <div class="form-group">
              <label for="price">Add your House Image :</label>
              <input type="file" name="image">
            </div>



          </div>

          <input type="hidden" name="map" value='<?php echo $ab; ?>'>

          <input type="hidden" name="id" value="<?php echo $owner_id; ?>">
          <div class="but">
            <button type="submit" name="addproperties" class="btn btn-primary" style="margin-bottom:80px">Next</button>
          </div>
        </div><!-- end right -->
      </form>
    </div>







    <div class="part_2">
      <div class="container">
        <ul class="list-unstyled">
          <!-- Products -->
          <?php
          foreach ($property_info_owner as $i => $p_info) : ?>
            <form action="interested_property.php" method="POST">
              <li class="card border shadow-none mb-3 mb-md-5">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img class="card-img" src="../image/<?php echo  $p_info['image']; ?>" alt="Image Description">
                  </div>

                  <div class="col-md-8">
                    <div class="card-body">
                      <div class="mb-2">
                        <a class="d-inline-block text-body small font-weight-bold mb-1" href="#"><?php echo  $p_info['house_no']; ?>/<?php echo  $p_info['street']; ?>,<?php echo  $p_info['thana']; ?>,<?php echo  $p_info['district']; ?></a>
                        <span class="d-block font-size-1">
                          <a class="text-inherit flor-room" href="#">Floor :<?php echo  $p_info['floor']; ?> Room no :<?php echo  $p_info['room']; ?></a>
                          <span class="badge badge-success badge-pill ml-1" <?php if ($p_info['status'] == "Booked") { ?> style="background-color:red;" <?php } ?> <?php if ($p_info['status'] == "Someone Interested") { ?> style="background-color:yellow; color:black;" <?php } ?>>
                            <?php
                            echo $p_info['status'];
                            ?>
                          </span>
                        </span>
                        <div class="d-block">
                          <span class="h5">৳<?php echo  $p_info['price']; ?></span>
                        </div>
                      </div>

                      <div class="mb-3">
                        <a class="d-inline-flex align-items-center small" href="#">
                          <div class="text-warning mr-2">
                            <i class="far fa-star text-muted"></i>
                            <i class="far fa-star text-muted"></i>
                            <i class="far fa-star text-muted"></i>
                            <i class="far fa-star text-muted"></i>
                            <i class="far fa-star text-muted"></i>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </form>
            <!-- End Products -->
          <?php endforeach; ?>
          <!-- End Products -->
        </ul>
      </div>
    </div><!-- end part-2 -->






    <div class="part_3">
      <table class="table table-hover">
        <thead class="bg-info th">
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Contact No</th>
            <th scope="col">Type</th>
            <th scope="col">House No</th>
            <th scope="col">House Area</th>
            <th scope="col">Thana</th>
            <th scope="col">Floor</th>
            <th scope="col">ROOM</th>
            <th scope="col">Confirm</th>
            <th scope="col">Reject</th>

          </tr>
        </thead>
        <tbody>
          <?php foreach ($shows as $i => $show) : ?>
            <tr>
              <td><?php echo $show['username'] ?></td>
              <td><?php echo $show['email'] ?></td>
              <td><?php echo $show['contact_no'] ?></td>
              <td><?php echo $show['type'] ?></td>
              <td><?php echo $show['house_no'] ?></td>
              <td><?php echo $show['area'] ?></td>
              <td><?php echo $show['thana'] ?></td>
              <td><?php echo $show['floor'] ?></td>
              <td><?php echo $show['room'] ?></td>
              <td>
                <a href="confirm_property.php?id=<?php echo $show['id'] ?> && p_details_id=<?php echo $show['p_details_id'] ?> && owner_id=<?php echo $owner_id ?>">Confirm</a>
              </td>
              <td>
                <a href="not_confirm_property.php?id=<?php echo $show['id'] ?> && p_details_id=<?php echo $show['p_details_id'] ?> && owner_id=<?php echo $owner_id ?>">Reject</a>
              </td>
            </tr>
          <?php endforeach; ?>


        </tbody>
      </table>

    </div>


    <div class="part_4">
      <div class="container">
        <ul class="list-unstyled">
          <!-- Products -->
          <?php
          foreach ($property_reject_info_owner as $i => $p_info) : ?>
            <form action="interested_property.php" method="POST">
              <li class="card border shadow-none mb-3 mb-md-5">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img class="card-img" src="../image/<?php echo  $p_info['image']; ?>" alt="Image Description">
                  </div>

                  <div class="col-md-8">
                    <div class="card-body">
                      <div class="mb-2">
                        <a class="d-inline-block text-body small font-weight-bold mb-1" href="#"><?php echo  $p_info['house_no']; ?>/<?php echo  $p_info['street']; ?>,<?php echo  $p_info['thana']; ?>,<?php echo  $p_info['district']; ?></a>
                        <span class="d-block font-size-1">
                          <a class="text-inherit flor-room" href="#">Floor :<?php echo  $p_info['floor']; ?> Room no :<?php echo  $p_info['room']; ?></a>
                          <span class="badge badge-success badge-pill ml-1" <?php if ($p_info['status'] == "Booked") { ?> style="background-color:red;" <?php } ?> <?php if ($p_info['status'] == "Someone Interested") { ?> style="background-color:yellow; color:black;" <?php } ?>>
                            <?php
                            echo $p_info['status'];
                            ?>
                          </span>
                        </span>
                        <div class="d-block">
                          <span class="h5">৳<?php echo  $p_info['price']; ?></span>
                        </div>
                      </div>

                      <div class="mb-3">
                        <a class="d-inline-flex align-items-center small" href="#">
                          <div class="text-warning mr-2">
                            <i class="far fa-star text-muted"></i>
                            <i class="far fa-star text-muted"></i>
                            <i class="far fa-star text-muted"></i>
                            <i class="far fa-star text-muted"></i>
                            <i class="far fa-star text-muted"></i>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </form>
            <!-- End Products -->
          <?php endforeach; ?>
          <!-- End Products -->
        </ul>
      </div>
    </div>
  </div><!-- end contaiber -->



  <script type="text/javascript">
    document.getElementById('add').addEventListener("click", function() {
      document.querySelector('.part_1').style.display = "flex";
      document.querySelector('.part_2').style.display = "none";
      document.querySelector('.part_3').style.display = "none";
      document.querySelector('.part_4').style.display = "none";

    });
    document.getElementById('show').addEventListener("click", function() {
      document.querySelector('.part_1').style.display = "none";
      document.querySelector('.part_2').style.display = "flex";
      document.querySelector('.part_3').style.display = "none";
      document.querySelector('.part_4').style.display = "none";


    });
    document.getElementById('request').addEventListener("click", function() {
      document.querySelector('.part_1').style.display = "none";
      document.querySelector('.part_3').style.display = "flex";
      document.querySelector('.part_2').style.display = "none";
      document.querySelector('.part_4').style.display = "none";
    });
    document.getElementById('reject').addEventListener("click", function() {
      document.querySelector('.part_1').style.display = "none";
      document.querySelector('.part_3').style.display = "none";
      document.querySelector('.part_2').style.display = "none";
      document.querySelector('.part_4').style.display = "flex";
    });
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>