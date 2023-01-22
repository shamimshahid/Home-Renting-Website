<?php 
require_once '../model.php';

session_start();

if (isset($_SESSION['user_name'])) {

	try {
        $logged_as = $_SESSION['user_name'];

		$property_info=property_info_admin();
		$property_info_admin_page= property_info_admin_page();

		require_once '../admin_page.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}
else{

	echo "<h1>Please log In !</h1>";

	echo "<br><a href='logout.php'>Go Home</a><br>";

}


 ?>