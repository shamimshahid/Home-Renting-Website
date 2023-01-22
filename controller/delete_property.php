<?php
require_once '../model.php';


if (isset($_POST['delete'])) {

	$data['p_id']=$_POST['p_id'];

    $p_id= $data['p_id'];
	  //echo $image;
   if (delete_properties($p_id)) {
 
    echo "Successfully Deleted";
    echo "<script>location.href='welcome3.php'</script>";


  }
}

else {
	echo 'You are not allowed to access this page.';
}


?>
