<?php
require_once '../model.php';


if (isset($_POST['User_login'])) {
	$data['username'] = $_POST['username'];
    $data['password'] = $_POST['password'];


  if (loginUser($data)) {

  }
}







if (isset($_POST['User_login2'])) {
	$data['name'] = $_POST['name'];
    $data['password'] = $_POST['password'];


  if (loginUser2($data)) {


  }
}


else {
	echo 'You are not allowed to access this page.';
}

?>
