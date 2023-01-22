<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
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
            <!--               <li><a style="color:black;" href="properties.php">properties</a></li>
 -->

            <li><a style="color:black;font-weight: 600;" href="contact.php">contact</a></li>
            <li><a style="color:black;font-weight: 600; " href="about.php">About us</a></li>

          </ul>
        </div>

      </div>
      <div class="heading">
      </div>
      <!--- -->
      <div>

        <div class="main_button">
          <div class="btn1">

            <button id="log" type="button" class="btn  btn-secondary btn-lg but_css1">Login</button>
            <button id="reg" type="button" class="btn btn-secondary btn-lg but_css">Register</button>
            <a href="index.php"><button type="button" class="btn btn-secondary btn-lg but_css">Back to Home</button>
            </a>
          </div>
          <div class="btn2">

            <div class="second_button">
              <label style="color:black;font-weight: 600;" for="log2">If you are an owner then</label><br>
              <a href="registration2.php"><button id="log2" type="button" class="btn btn-secondary btn-lg but_css">Login or Register</button>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="form">

        <form action="controller/createUser.php" method="POST" enctype="multipart/form-data" onsubmit="return Validate()" name="vform" class="form1">
          <div class="register">
            <div class="register_content">
              <div class="left">

                <div class="form-group" id="username_div">
                  <label style="color:black;font-weight: 600;" for="user_name">User Name :</label>
                  <input type="text" id="username1" name="username" class="form-control" onBlur="checkusernameAvailability()" placeholder="Enter User Name">
                  <span id="username_error"></span>
                  <span id="username-availability-status" style="font-size:12px;"></span>
                </div>

                <div class="form-group" id="email_div">
                  <label style="color:black;font-weight: 600;" for="email">Email :</label>
                  <input type="email" id="email1" name="email" class="form-control" onBlur="checkemailAvailability()" placeholder="Enter Email">
                  <span id="email_error"></span>
                  <span id="user-email-availability-status" style="font-size:12px;"></span>

                </div>

                <div class="form-group" id="password_div">
                  <label style="color:black;font-weight: 600;" for="password">Password :</label>
                  <input type="password" id="password1" name="password" class="form-control" placeholder="Enter Password">
                  <span id="password_error"></span>
                </div>

              </div><!-- end left -->
              <div class="right">
                <div class="form-group" id="contact_no_div">
                  <label style="color:black;font-weight: 600;" for="contact">Contact :</label>
                  <input type="text" id="contact_no1" name="contact_no" class="form-control" placeholder="Enter mobile no">
                  <span id="contact_no_error"></span>
                </div>

                <div class="form-group type" id="type_div">
                  <label style="color:black;font-weight: 600;" for="Type">Select Type :</label>
                  <select class="form-control" id="type1" name="type">
                    <option value=""></option>
                    <option style="color:black;font-weight: 600;" value="bachelor">Bachelor</option>
                    <option style="color:black;font-weight: 600;" value="family">Family</option>
                  </select>
                  <span id="type_error"></span>
                </div>

                <div class="form-group" id="members_div">
                  <label style="color:black;font-weight: 600;" for="Type">Select member :</label>
                  <select class="form-control" id="members" name="members">
                    <option value=""></option>
                    <option value="1-3">1-3</option>
                    <option value="1-6">1-6</option>
                    <option value="1-8">1-8</option>
                    <option value="1-10">1-10</option>
                  </select>
                  <span id="members_error"></span>
                </div>


                <div class="but">
                  <button type="submit" id="submit" name="createUser" class="btn btn-primary">Register</button>
                </div>

              </div><!-- end right -->
            </div> <!-- end_register_content -->

          </div><!-- end register -->
        </form>
      </div>


      <div class="login_css">
        <form action="controller/User_login.php" method="POST" enctype="multipart/form-data" id="type>
  <div class=" form-group">

          <div class="form-group">
            <label style="color:black;font-weight: 600;" for="user_name">User Name :</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Enter User Name" required>
          </div>
          <div class="form-group">
            <label style="color:black;font-weight: 600;" for="password">Password :</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" required>
          </div>
          <div class="but">
            <button type="submit" name="User_login" class="btn btn-primary">Login</button>
          </div>
        </form>
      </div><!-- end login_css -->






    </div><!-- end container -->


    <!-- -->
  </div>

  <script>
    //This function checks email-availability-status
    function checkemailAvailability() {
      $("#loaderIcon").show();
      jQuery.ajax({
        url: "controller/check_availability.php",
        data: 'email=' + $("#email1").val(),
        type: "POST",
        success: function(data) {
          $("#user-email-availability-status").html(data);
          $("#loaderIcon").hide();
        },
        error: function() {}
      });
    }

    function checkusernameAvailability() {
      $("#loaderIcon").show();
      jQuery.ajax({
        url: "controller/check_availability.php",
        data: 'username=' + $("#username1").val(),
        type: "POST",
        success: function(data) {
          $("#username-availability-status").html(data);
          $("#loaderIcon").hide();
        },
        error: function() {}
      });
    }
  </script>

  <script src="js/registration.js"></script>
  <script src="js/jquery-3.5.1.min.js"></script>

  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



</body>

</html>