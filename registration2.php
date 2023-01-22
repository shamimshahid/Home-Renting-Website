<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Owner</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/register.css">
</head>

<body>

  <div class="container-fluid">
    <div class="main">
      <div style="  background-color: #1072e224;" class="nav_bar">
        <div class="logo">
          <img src="image/LOGO1.png" alt="Logo">
        </div>
        <div class="menu">
          <ul>
            <li><a style="color:black;font-weight: 600;" href="index.php">home</a></li>
            <!--               <li><a href="properties.php">properties</a></li>
 -->
            <li><a style="color:black;font-weight: 600;" href="contact.php">contact</a></li>
            <li><a style="color:black;font-weight: 600;" href="about.php">About us</a></li>
            <li id="sbutton" style='border:2px solid green;padding:5px 5px;border-radius:5px;'><a style="color:black;font-weight: 600;" href="registration.php">login or sign up</a></li>


          </ul>
        </div>

      </div>
      <div class="heading">
      </div>

      <!--   -->
      <div class="main_button2">
        <button id="log" type="button" class="btn btn-secondary btn-lg but_css">Login</button>
        <button id="reg" type="button" class="btn btn-secondary btn-lg but_css">Register</button>
        <a href="index.php"><button type="button" class="btn btn-secondary btn-lg but_css">Back to Home</button>
          <a href="registration.php"><button type="button" class="btn btn-secondary btn-lg but_css">Back</button>
          </a>

          <!-- <div class="second_button">
 <label for="log2">If you have a printer than </label>
 <a href="login_register_user2.php"><button id="log2" type="button" class="btn btn-primary btn-lg but_css">Login or Register</button>
</a>
 </div> -->
      </div>

      <div class="form2">

        <form action="controller/createUser.php" method="POST" enctype="multipart/form-data" onsubmit="return Validate()" name="vform" class="form1">
          <div class="register2">
            <div class="">
              <div class="">

                <div class="form-group" id="ownername_div">
                  <label style="color:black;font-weight: 600;" for="name">Owner Name :</label>
                  <input type="text" id="ownername1" name="name" class="form-control" onBlur="checkownernameAvailability()" placeholder="Enter Owner Name">
                  <span id="ownername_error"></span>
                  <span id="ownername-availability-status" style="font-size:12px;"></span>
                </div>

                <div class="form-group" id="email_div">
                  <label style="color:black;font-weight: 600;" for="email">Email :</label>
                  <input type="email" id="email1" name="email" class="form-control" onBlur="checkemailAvailability()" placeholder="Enter Email">
                  <span id="email_error"></span>
                  <span id="owner-email-availability-status" style="font-size:12px;"></span>
                </div>

                <div class="form-group" id="password_div">
                  <label style="color:black;font-weight: 600;" for="password">Password :</label>
                  <input type="password" id="password1" name="password" class="form-control" placeholder="Enter Password">
                  <span id="password_error"></span>
                </div>

                <div class="form-group" id="contact_no_div">
                  <label style="color:black;font-weight: 600;" for="contact">Contact :</label>
                  <input type="text" id="contact_no1" name="contact_no" class="form-control" placeholder="Enter mobile no">
                  <span id="contact_no_error"></span>
                </div>

                <div class="but">
                  <button type="submit" name="createUser2" id="submit" class="btn btn-primary">Register</button>
                </div>

              </div><!-- end left -->

              <!--  </div> -->
              <!-- end right -->
            </div> <!-- end_register_content -->

          </div><!-- end register -->
        </form>
      </div>


      <div class="login_css">
        <form action="controller/User_login.php" method="POST" enctype="multipart/form-data" id="type>
  <p><span style=" font-size:24px; color: black;"><strong>
            <p style="font-size:30px; color:black;">Owner login:</p>
          </strong></span></p>
          <div class="form-group">
            <label style="color:black;font-weight: 600;" for="name">Owner Name :</label>
            <input type="text" name="name" class="form-control" placeholder="Enter User Name" required>
          </div>
          <div class="form-group">
            <label style="color:black;font-weight: 600;" for="password">Password :</label>
            <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
          </div>
          <div class="but">
            <button type="submit" name="User_login2" class="btn btn-secondary">Login</button>
          </div>
      </div>
      </form>
    </div><!-- end login_css -->


    <!-- -->

  </div>






  </div><!-- end container -->

  <script>
    //This function checks email-availability-status
    function checkemailAvailability() {
      $("#loaderIcon").show();
      jQuery.ajax({
        url: "controller/check_availability2.php",
        data: 'email=' + $("#email1").val(),
        type: "POST",
        success: function(data) {
          $("#owner-email-availability-status").html(data);
          $("#loaderIcon").hide();
        },
        error: function() {}
      });
    }

    function checkownernameAvailability() {
      $("#loaderIcon").show();
      jQuery.ajax({
        url: "controller/check_availability2.php",
        data: 'name=' + $("#ownername1").val(),
        type: "POST",
        success: function(data) {
          $("#ownername-availability-status").html(data);
          $("#loaderIcon").hide();
        },
        error: function() {}
      });
    }
  </script>


  <script src="js/registration2.js"></script>
  <script src="js/jquery-3.5.1.min.js"></script>

  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</body>

</html>