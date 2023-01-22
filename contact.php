<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .box {
            background-color: rgb(235, 235, 235);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.08);
            margin: 0 0 30px 0;
            padding: 16px;
        }

        .nav_bar {
            width: 100%;
            height: 80px;
            background-color: #070707c2;
        }

        .nav_bar .logo {
            float: left;
            margin-left: 50px;
            margin-top: 10px;
        }

        .nav_bar .menu ul {
            float: right;
            margin-top: 30px;
            margin-right: 20px;
        }

        .menu li {
            list-style: none;
            display: inline-block;
            margin-left: 20px;
            margin-right: 20px;
        }

        .menu li a {
            text-transform: uppercase;
            text-decoration: none;
            color: #fff;
        }

        .row {
            margin-left: 150px;
            margin-top: 20px;
        }

        .row2 {
            display: flex;
        }
    </style>
</head>

<body>
    <div>

        <div class="main">
            <div class="nav_bar">
                <div class="logo">
                    <img src="image/LOGO1.png" alt="Logo">
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="index.php">home</a></li>
                        <li><a href="contact.php">contact</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li id="button" style='border:2px solid green;padding:5px 5px;border-radius:5px;'><a href="registration.php">login or sign up</a></li>


                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content col-sm-15">


                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1730.8078578017767!2d90.38470877827201!3d23.731770985278093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8c5f2f06371%3A0x67c25f1dc1358790!2sPostal%20%26%20T%26T%20Colony%2C%20Dhaka%201205!5e0!3m2!1sen!2sbd!4v1597680124344!5m2!1sen!2sbd" width="1200" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>

                <div class="row2">
                    <div class="col-sm-6">
                        <div class="box">
                            <h3 class="no-margin">Our Address</h3>

                            <p>D-2/8,Postal & BTCL Quarter,Newmarket,Dhaka-1205</p>
                            <p><a href="tel:88 01531965575">+88 01531965575</a></p>
                            <p><a href="mailto:shadsham2000@gmail.com">shadsham2000@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="box">
                            <h3 class="no-margin">Leave your message here</h3>
                            <p>(Typically replies in minutes..)</p>
                            <div role="form" class="wpcf7" id="wpcf7-f419-p966-o1" lang="en-US" dir="ltr">
                                <div class="screen-reader-response"></div>
                                <!--         <form action="/my-contact-page/#wpcf7-f419-p966-o1" method="post" class="wpcf7-form ng-pristine ng-valid" novalidate="novalidate">
 -->
                                <form method="POST" action="controller/contact.php" role="form">

                                    <div class="messages"></div>


                                    <p><label>Name<br>
                                            <span class="wpcf7-form-control-wrap your-name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
                                    <p><label>Email<br>
                                            <span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </label></p>
                                    <p><label>PHONE<br>
                                            <span class="wpcf7-form-control-wrap your-phone"><input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </label></p>
                                    <p><label> Subject<br>
                                            <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"></span> </label></p>
                                    <p><label>Message<br>
                                            <span class="wpcf7-form-control-wrap your-message"><textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" style="overflow: hidden; overflow-wrap: break-word; height: 96px;"></textarea></span> </label></p>
                                    <p><input type="submit" value="Send" class="btn btn-info btn-send"></p>
                                </form>
                                <!--         <p class="form-message"></p>
 -->
                            </div>
                        </div>
                    </div>
                </div>
                </article>


            </div><!-- /.content -->

        </div><!-- /.row -->


    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</body>

</html>