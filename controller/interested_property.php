<?php
require_once '../model.php';


session_start();
if (isset($_POST['interested'])) {

  
  //echo $image;
  if (isset($_SESSION['id'])) {
    $data['user_id'] = $_SESSION['id'];
    $data['p_id'] = $_POST['p_id'];
    $p_id = $data['p_id'];
    interested_properties($data, $p_id);
    $status = "Someone Interested";
    $change_status = change_status($status, $p_id);

    echo "Successfully Added";
    echo "<script>location.href='welcome.php'</script>";
  } else {
    echo "<script>alert('Please log In !')</script>";
    echo "<script>location.href='../registration.php'</script>";
  }
} else {
  echo 'You are not allowed to access this page.';
}
