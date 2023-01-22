<?php 
require_once '../model.php';

// Establish database connection 
//include("dbconfig.php");
// code user Email availablity
if(!empty($_POST["email"])) {
  $email= $_POST["email"];
    check_email($email);
}


 if(!empty($_POST["username"])) {
  $user_name= $_POST["username"];
  check_user_name($user_name);
}

?>