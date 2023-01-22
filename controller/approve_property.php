<?php
require_once '../model.php';


if (isset($_POST['approved'])) {


    $p_id= $_POST['p_id'];
    $approved="yes";
	  //echo $image;

    
   if (approved_properties($approved, $p_id)) {

    echo "Successfully Approved";
    echo "<script>location.href='welcome3.php'</script>";


  }
}

if (isset($_POST['reject'])) {


    $p_id= $_POST['p_id'];
    $approved="rejected";
	  //echo $image;
   if (rejected_properties($approved, $p_id)) {

    echo "Successfully Rejected";
    echo "<script>location.href='welcome3.php'</script>";


  }
}

else {
	echo 'You are not allowed to access this page.';
}


?>
