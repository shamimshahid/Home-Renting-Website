<?php
require_once '../model.php';

// require_once 'welcome.php';

if (isset($_POST['search_properties1'])) {


    $data = $_POST['search'];

    $property_info = search_properties($data);

    $check_user_id = user_id_interested_property($_POST['user_id']);

    // print_r($property_info);
    // print_r($check_user_id);
    $address = './welcome.php';
    echo "<a href='" . $address . "'><-Back</a>";
    include  '../search_properties.php';
} else {
    echo 'You are not allowed to access this page.';
}
