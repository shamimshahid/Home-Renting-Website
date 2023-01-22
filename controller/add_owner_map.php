<?php

require_once '../model.php';

/* 
$latitude  = $_POST['lat'];
$longitude = $_POST['long'];
 */
$data['latitude'] = $_POST['lat'];
$data['longitude'] = $_POST['long'];


$data['house_no'] = $_POST['house_no'];
$data['street'] = $_POST['street'];
$data['area'] = $_POST['area'];
$data['thana'] = $_POST['thana'];
$data['district'] = $_POST['district'];
$data['floor'] = $_POST['floor'];
$data['room'] = $_POST['room'];
$data['price'] = $_POST['price'];
$data['id'] = $_POST['id'];

$image_name = $_POST['image_name'];


 addproperties($data, $image_name);
/*
if (move_uploaded_file($image_tmp, $image_target)) {
    $msg = "Image uploaded successfully";
    }else{
    $msg = "Failed to upload image";
    }
  */
//$id= $_POST['id'];

/*
echo "longitude :" .$image_name;
echo "house_no :" .$data['house_no'];
* echo "street :" .$street;
echo "area :" .$area;
echo "thana :" .$thana;
echo "district :" .$district;
echo "floor :" .$floor;
echo "room :" .$room;
echo "image_name :" .$image_name;
echo "image_target :" .$image_target; */


//add_location($latitude, $longitude, $id);

//echo "<script>location.href='welcome2.php'</script>";

//echo "latitude :".$latitude ."\n";
//echo "longitude :" .$longitude;

//header('Location: welcome2.php');

//header("Location: welcome2.php");







?>