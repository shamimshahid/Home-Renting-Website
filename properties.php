<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>properties</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="assets/vendor/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="properties.css">
  </head>
  <body>
  <div class="main">
    <div class="nav_bar">
      <div class="logo">
       <img src="image/LOGO1.png" alt="Logo">
       </div>
      <div class="menu">
        <ul>
           <li><a href="index.php">home</a></li>
              <li><a href="properties.php">properties</a></li>


                       <li><a href="contact.php">contact</a></li>
                         <li><a href="about.php">About us</a></li>
                         <li id="sbutton"style='border:2px solid green;padding:5px 5px;border-radius:5px;'><a href="registration.php">login or sign up</a></li>


        </ul>
      </div>

   </div>
 </div>
   <!-- Search Section -->


  <div class="main2">
    <div class="search">
      <!-- Search Section -->
      <div class="bg-navy">
        <div class="bg-img-hero-center" style="background-color: #070707c2;">
          <div class="container space-1">
            <div class="w-lg-80 mx-lg-auto">
              <!-- Input -->
              <form class="input-group input-group-merge input-group-borderless">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="askQuestions">
                    <i class="fas fa-search"></i>
                    <!---<img src="search.png" alt=""> -->
                  </span>
                </div>
                <input size=50 type="search" class="form-control" placeholder="Search for answers" aria-label="Search for answers" aria-describedby="askQuestions">

                <!--- -->
                <div class="col-lg-6 align-self-lg-end text-lg-right">
                  <ul class="list-inline mb-2">
                    <li class="list-inline-item">
                      <!-- Select -->
                      <select class="js-custom-select"
                            data-hs-select2-options='{
                              "minimumResultsForSearch": "Infinity",
                              "customClass": "btn btn-xs btn-white dropdown-toggle",
                              "dropdownAutoWidth": true,
                              "width": "auto"
                            }'>
                        <option value="mostRecent" selected>Sort by</option>
                        <option value="newest">Newest first</option>
                        <option value="priceHighLow">Price (high - low)</option>
                        <option value="priceLowHigh">Price (low - high)</option>
                        <option value="topSellers">Top sellers</option>
                      </select>
                      <!-- End Select -->
                    </li>
                    <li class="list-inline-item">
                      <!-- Select -->
                      <select class="js-custom-select"
                            data-hs-select2-options='{
                              "minimumResultsForSearch": "Infinity",
                              "customClass": "btn btn-xs btn-white dropdown-toggle",
                              "dropdownAutoWidth": true,
                              "width": "auto"
                            }'>
                        <option value="alphabeticalOrderSelect1" selected>A-to-Z</option>
                        <option value="alphabeticalOrderSelect2">Z-to-A</option>
                      </select>
                      <!-- End Select -->
                    </li>
                  </ul>
                </div>
                <!--- -->
              </form>
              <!-- End Input -->

            </div>

          </div>
        </div>
      </div>
      <!-- End Search Section -->

        </div>

  </div>






  <div class="container">
    <ul class="list-unstyled">
      <!-- Products -->
      <li class="card border shadow-none mb-3 mb-md-5">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img class="card-img" src="assets/img/320x320/img8.jpg" alt="Image Description">
          </div>

          <div class="col-md-8">
            <div class="card-body">
              <div class="mb-2">
                <a class="d-inline-block text-body small font-weight-bold mb-1" href="#">Accessories</a>
                <span class="d-block font-size-1">
                  <a class="text-inherit" href="#">Herschel backpack in dark blue</a>
                  <span class="badge badge-success badge-pill ml-1">New arrival</span>
                </span>
                <div class="d-block">
                  <span class="h5">৳56.99</span>
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
                  <span>0</span>
                </a>
              </div>
              <button type="button" class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover mr-1">Add to Cart</button>
              <button type="button" class="btn btn-sm btn-soft-secondary btn-pill transition-3d-hover">
                <i class="far fa-heart mr-1"></i> Wishlist
              </button>
            </div>
          </div>
        </div>
      </li>
      <!-- End Products -->

      <!-- Products -->
      <li class="card border shadow-none mb-3 mb-md-5">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img class="card-img" src="assets/img/320x320/img4.jpg" alt="Image Description">
          </div>

          <div class="col-md-8">
            <div class="card-body">
              <div class="mb-2">
                <a class="d-inline-block text-body small font-weight-bold mb-1" href="#">Clothing</a>
                <span class="d-block font-size-1">
                  <a class="text-inherit" href="#">Blueberry hoodie</a>
                  <span class="badge badge-danger badge-pill ml-1">Sold out</span>
                </span>
                <div class="d-block">
                  <span class="h5">৳91.88</span>
                </div>
              </div>

              <div class="mb-3">
                <a class="d-inline-flex align-items-center small" href="#">
                  <div class="text-warning mr-2">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star text-muted"></i>
                  </div>
                  <span>40</span>
                </a>
              </div>
              <button type="button" class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover mr-1">Add to Cart</button>
              <button type="button" class="btn btn-sm btn-soft-secondary btn-pill transition-3d-hover">
                <i class="far fa-heart mr-1"></i> Wishlist
              </button>
            </div>
          </div>
        </div>
      </li>
      <!-- End Products -->
    </ul>
  </div>
  <!-- End Products List Section -->
  <!--- -->









  <footer>
  <div class="footer">
     <p>© Copyright 2020, All Rights Reserved</p>
  </div>
  </footer>



      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <!-- JS Global Compulsory -->
      <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
      <script src="assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
      <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

      <!-- JS Blueberry -->
      <script src="assets/js/hs.core.js"></script>
      <!-- JS Implementing Plugins -->
<script src="assets/vendor/select2/dist/js/select2.full.min.js"></script>

<!-- JS Blueberry -->
<script src="assets/js/hs.select2.js"></script>

<!-- JS Plugins Init. -->
<script>
  $(document).on('ready', function () {
    // initialization of select2
    $('.js-custom-select').each(function () {
      var select2 = $.HSCore.components.HSSelect2.init($(this));
    });
  });
</script>
</body>
</html>
