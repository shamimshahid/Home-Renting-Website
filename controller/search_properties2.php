<?php
require_once '../model.php';


if (isset($_POST['search_properties'])) {


    $data = $_POST['search'];

    // echo $_POST['search'];
    // $price = $_POST['price'];
    // $arr = (explode("-", $price));
    // echo $arr[0];
    $property_info = '';
    if ($_POST['search'] && $_POST['price'] && $_POST['room']) {
        $area = $_POST['search'];
        $price = $_POST['price'];
        $arr = (explode("-", $price));
        $price1 = $arr[0];
        $price2 = $arr[1];
        $room = $_POST['room'];
        $arr = (explode("-", $room));
        $room1 = $arr[0];
        $room2 = $arr[1];
        $property_info = search_properties_By_area_and_price_and_room($data, $price1, $price2, $room1, $room2);
    } elseif ($_POST['search'] && $_POST['price'] && !$_POST['room']) {
        $area = $_POST['search'];
        $price = $_POST['price'];
        $arr = (explode("-", $price));
        $price1 = $arr[0];
        $price2 = $arr[1];
        $property_info = search_properties_By_area_and_price($area, $price1, $price2);
    } elseif ($_POST['search'] && $_POST['room'] && !$_POST['price']) {
        $room = $_POST['room'];
        $arr = (explode("-", $room));
        $room1 = $arr[0];
        $room2 = $arr[1];
        $property_info = search_properties_By_area_and_room($_POST['search'], $room1, $room2);
    } elseif ($_POST['price'] && $_POST['room'] && !$_POST['search']) {
        $price = $_POST['price'];
        $arr = (explode("-", $price));
        $price1 = $arr[0];
        $price2 = $arr[1];
        $room = $_POST['room'];
        $arr = (explode("-", $room));
        $room1 = $arr[0];
        $room2 = $arr[1];
        $property_info = search_properties_By_price_and_room($price1, $price2, $room1, $room2);
    } elseif ($_POST['price'] && !$_POST['search'] && !$_POST['room']) {
        $price = $_POST['price'];
        $arr = (explode("-", $price));
        $price1 = $arr[0];
        $price2 = $arr[1];
        $property_info = search_properties_By_price($price1, $price2);
    } elseif ($_POST['room'] && !$_POST['price'] && !$_POST['search']) {
        $room = $_POST['room'];
        $arr = (explode("-", $room));
        $room1 = $arr[0];
        $room2 = $arr[1];
        $property_info = search_properties_By_room($room1, $room2);
    } elseif ($_POST['search'] && !$_POST['price'] && !$_POST['room']) {
        $property_info = search_properties($_POST['search']);
    } else {
        $property_info = search_properties($_POST['search']);
    }


    // $property_info=search_properties($data);



    require_once '../search_properties2.php';

    // echo "<script>location.href='../search_properties.php'</script>";    
} else {
    echo 'You are not allowed to access this page.';
}
