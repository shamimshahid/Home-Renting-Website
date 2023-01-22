<?php
require_once '../model.php';

// Establish database connection
//include("dbconfig.php");
// code user Email availablity
if(!empty($_POST["email"])) {
  $email= $_POST["email"];
    check_email2($email);
}


 if(!empty($_POST["name"])) {
  $owner_name= $_POST["name"];
  check_owner_name($owner_name);
}

?>