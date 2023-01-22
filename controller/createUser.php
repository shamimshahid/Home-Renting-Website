<?php
require_once '../model.php';


if (isset($_POST['createUser'])) {
	$data['username'] = $_POST['username'];
	$data['email'] = $_POST['email'];
	$data['password'] = $_POST['password'];
	$data['contact_no'] = $_POST['contact_no'];
	$data['type'] = $_POST['type'];
	$data['members'] = $_POST['members'];

   if (addUser($data)) {
	echo "<script>location.href='../registration.php'</script>";

  } 
}
elseif (isset($_POST['createUser2'])) {
    $data['name'] = $_POST['name'];
    $data['email'] = $_POST['email'];
    $data['password'] = $_POST['password'];
    $data['contact'] = $_POST['contact_no'];


  if (addUser2($data)) {
    echo "<script>location.href='../registration2.php'</script>";


  }
}
else {
	echo 'You are not allowed to access this page.';
}


?>
