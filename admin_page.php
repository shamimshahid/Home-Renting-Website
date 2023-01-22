<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Admin</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/owner.css">
</head>

<body>

  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top main_nav">
      <a class="navbar-brand" href="#"><span style="color : #ff4a4a">Admin</span> Page</a>
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
            <span class="title">Home</span>
          </a></li>
        <li><a href="#" id="show" class="btn">
            <span class="title">Approve Request</span>
          </a></li>


      </ul>
    </div>
    <div class="part_1">
      <div class="container">
        <ul class="list-unstyled">
          <!-- Property -->
          <?php
          foreach ($property_info_admin_page as $i => $p_info) : ?>
            <form action="delete_property.php" method="POST">
              <li class="card border shadow-none mb-3 mb-md-5">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img class="card-img" src="../image/<?php echo  $p_info['image']; ?>" alt="Image Description">
                  </div>

                  <div class="col-md-8">
                    <div class="card-body">
                      <div class="mb-2">
                        <a class="d-inline-block text-body small font-weight-bold mb-1" href="#"><?php echo  $p_info['house_no']; ?>/<?php echo  $p_info['street']; ?>,<?php echo  $p_info['area']; ?>,<?php echo  $p_info['thana']; ?>,<?php echo  $p_info['district']; ?></a>
                        <span class="badge badge-success badge-pill ml-1" <?php if ($p_info['status'] == "Booked") { ?> style="background-color:red;" <?php } ?> <?php if ($p_info['status'] == "Someone Interested") { ?> style="background-color:yellow; color:black;" <?php } ?>>
                          <?php
                          echo $p_info['status'];
                          ?>
                        </span>
                        <span class="d-block font-size-1">

                          <a class="text-inherit" href="#">Floor :<?php echo  $p_info['floor']; ?> Room no :<?php echo  $p_info['room']; ?></a><br>
                          Email :<a class="text-inherit" href="mailto:<?php echo  $p_info['email']; ?>"><?php echo  $p_info['email']; ?> </a><br>
                          Contact :<a class="text-inherit" href="tel:88 <?php echo  $p_info['contact']; ?>"><?php echo  $p_info['contact']; ?></a>

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
                      <input type="hidden" name="p_id" value="<?php echo $p_info['id']; ?>">

                      <button type="submit" id="submit" name="delete" class="btn btn-sm btn-outline-danger btn-pill transition-3d-hover mr-1">Delete</button>



                    </div>
                  </div>
                </div>
              </li>
            </form>
            <!-- End Property -->
          <?php endforeach; ?>
          <!-- End Property -->
        </ul>
      </div>
    </div><!-- end part-1 -->
    <div class="part_2">
      <div class="container">

        <ul class="list-unstyled">
          <!-- Property -->
          <?php
          foreach ($property_info as $i => $p_info) : ?>
            <form action="approve_property.php" method="POST">
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
                      <input type="hidden" name="p_id" value="<?php echo $p_info['id']; ?>">

                      <button type="submit" id="submit" name="approved" class="btn btn-sm btn-outline-success btn-pill transition-3d-hover mr-1">Approve</button>
                      <button type="submit" id="submit" name="reject" class="btn btn-sm btn-outline-danger btn-pill transition-3d-hover mr-1">Reject</button>
                    </div>
                  </div>
                </div>
              </li>
            </form>
            <!-- End Property -->
          <?php endforeach; ?>
          <!-- End Property -->
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
  </div><!-- end contaiber -->



  <script type="text/javascript">
    document.getElementById('add').addEventListener("click", function() {
      document.querySelector('.part_1').style.display = "flex";
      document.querySelector('.part_2').style.display = "none";
      document.querySelector('.part_3').style.display = "none";

    });
    document.getElementById('show').addEventListener("click", function() {
      document.querySelector('.part_1').style.display = "none";
      document.querySelector('.part_2').style.display = "flex";
      document.querySelector('.part_3').style.display = "none";


    });
    document.getElementById('request').addEventListener("click", function() {
      document.querySelector('.part_1').style.display = "none";
      document.querySelector('.part_3').style.display = "flex";
      document.querySelector('.part_2').style.display = "none";
    });
  </script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>