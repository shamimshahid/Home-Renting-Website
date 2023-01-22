<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Property</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/select2.min.css">
  <link rel="stylesheet" href="../css/properties2.css">

</head>

<body>
  <div class="container-fluid">

    <!--       <div class="back">
      <nav class="navbar navbar-light bg-light fixed-top">
      <button type="submit" id="submit" name="interested" class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover mr-1"><a href="../index.php">Back</a></button>
      </nav>

      </div> -->





    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="logo">
        <img src="../image/LOGO1.png" alt="Logo">
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form style="margin-left:350px; " class="form-inline my-2 my-lg-0" action="../controller/search_properties2.php" METHOD="POST">
          <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" size=50>
          <button name="search_properties" class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a style="color:black;font-weight: 600;" class="nav-link" href="../index.php">Home</a>
          </li>
          <li class="nav-item">
            <a style="color:black;font-weight: 600;" class="nav-link" href="../contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a style="color:black;font-weight: 600;" class="nav-link" href="about.php">About Us</a>
          </li>
        </ul>

      </div>
    </nav>

    <ul class="list-unstyled">
      <!-- Products -->
      <?php
      foreach ($property_info as $i => $p_info) : ?>
        <form action="interested_property.php" method="POST">
          <li class="card border shadow-none mb-3 mb-md-5">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img class="card-img" src="../image/<?php echo  $p_info['image']; ?>" alt="Image Description">
              </div>

              <div class="col-md-8">
                <div class="card-body">
                  <div class="mb-2">
                    <a style="font-size: 20px;" class="d-inline-block text-body small font-weight-bold mb-1" href="#"><?php echo  $p_info['house_no']; ?>/<?php echo  $p_info['street']; ?>,<?php echo  $p_info['area']; ?>,<?php echo  $p_info['thana']; ?>,<?php echo  $p_info['district']; ?></a>
                    <span class="d-block font-size-1">
                      <a class="text-inherit" href="#">Floor: <?php echo  $p_info['floor']; ?> Rooms : <?php echo  $p_info['room']; ?></a>
                      <span class="badge badge-success badge-pill ml-1" <?php if ($p_info['status'] == "Booked") { ?> style="background-color:red;" <?php } ?> <?php if ($p_info['status'] == "Someone Interested") { ?> style="background-color:yellow; color:black;" <?php } ?>>
                        <?php
                        echo $p_info['status'];
                        ?>
                      </span>
                    </span><br>
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
                  <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                  <input type="hidden" name="p_id" value="<?php echo $p_info['id']; ?>">

                  <button type="submit" <?php if ($p_info['status'] == "Booked") { ?> disabled="disabled" <?php } ?> id="submit" name="interested" class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover mr-1">Interested</button>
                  <!--               <button type="submit" <?php if ($p_info['status'] == "Booked") { ?> disabled="disabled" <?php } ?><?php if ($check_user_id == $user_id && $check_p_id == $p_info['id']) { ?> disabled="disabled" <?php } ?>  id="submit" name="interested" class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover mr-1">Interested</button>
     -->
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>