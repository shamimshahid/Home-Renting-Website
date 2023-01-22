<?php
require_once '../model.php';

session_start();

if (isset($_SESSION['name'])) {
    try {

        $logged_as = $_SESSION['name'];
        $owner_id=$_SESSION['id'];


		$property_info_owner=property_info_owner($owner_id);
		$property_reject_info_owner=property_reject_info_owner($owner_id);

        $shows=show_interested_people($owner_id);
        // $shows=show_interested_people($owner_id);
        require_once '../owner_home_page.php';

    } catch (Exception $ex) {
        echo $ex->getMessage();
    }

}


else{

    echo "<h1>Please log In !</h1>";

    echo "<br><a href='logout.php'>Go Home</a><br>";

}
