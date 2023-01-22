<?php
require_once '../model.php';


if (isset($_POST['addproperties'])) {
	$data['house_no'] = $_POST['house_no'];
	$data['street'] = $_POST['street'];
	$data['area'] = $_POST['area'];
	$data['thana'] = $_POST['thana'];
	$data['district'] = $_POST['district'];
  $data['floor'] = $_POST['floor'];
	$data['room'] = $_POST['room'];
  $data['price'] = $_POST['price'];
  
	$data['id']=$_POST['id'];

  $image2=rand(10,10000);

  $image = $_FILES['image']['name'];
  $image_tmp =$_FILES['image']['tmp_name'];
  $image3=$image2.basename($image);
  	// Get text
  	// image file directory
	  $target = "../image/".$image3;

	
   		/* $last_id = addproperties($data, $image3);
 */
		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
		}else{
		$msg = "Failed to upload image";
		}

	//echo "<script>location.href='welcome2.php'</script>";


  
  require_once '../addmap.php';

  //echo "<script>location.href='../addmap.php'</script>";



}

else {
	echo 'You are not allowed to access this page.';
}


?>
