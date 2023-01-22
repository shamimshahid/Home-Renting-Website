<?php

require_once '../model.php';

session_start();

if (isset($_SESSION['username'])) {

	try {
    	
		$logged_as = $_SESSION['username'];
		$user_id = $_SESSION['id'];

		//echo $user_id;
		
		$property_info=property_info();

		$check_user_id=user_id_interested_property($user_id);

		$confirm=show_confirm_interested_property($user_id);

		$interested_people=show_someone_interested_people();

		//print_r($interested_people);
		//$check_p_id=p_id_interested_property($user_id);

		//echo $check_p_id;
			
		
		
		require_once '../user_home_page.php';

/* 		endforeach;
 */

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }

}

else{

/* 	echo "<h1>Please log In !</h1>";
	echo "<br><a href='logout.php'>Go Home</a><br>"; */

	echo "<script>alert('Please log In !')</script>";
	echo "<script>location.href='../registration.php'</script>";

}


 ?>