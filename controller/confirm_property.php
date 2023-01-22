<?php
require_once '../model.php';


    $user_id=$_GET['id'];
    $data['p_details_id']=$_GET['p_details_id'];
    $owner_id=$_GET['owner_id'];
    
    $p_id=$data['p_details_id'];

  echo $p_id;

  $p=image($p_id);
 
  echo $p;

    $main_img=$p;
     echo "../image/".$main_img;             
    $img=imagecreatefromjpeg("../image/".$main_img);
    $watermark=imagecreatefrompng("../image/5.png");


    $iwidth = imagesx($img);
    $iheight = imagesy($img);
    
    
    $wwidth = imagesx($watermark);
    $wheight = imagesy($watermark);

    $sx = $iwidth -  $wwidth;
    $sy = $iheight - $wheight;

    imagecopy(
        $img , $watermark,
        $sx, $sy,
        5, 5,
        $wwidth , $wheight
    );

    imagejpeg($img,"../image/".$main_img, 100);
    //echo "ok"; 



      if (add_properties_details($user_id , $p_id)) {


        $status="Booked";

        $change_status=change_status($status, $p_id);
        $confirm='yes';

        $confirm_interested_property=confirm_interested_property($confirm,  $p_id, $owner_id, $user_id);

    echo "Successfully Added";
    echo "<script>location.href='welcome2.php'</script>";


  }

 
else {
	echo 'You are not allowed to access this page.';
} 


?>
