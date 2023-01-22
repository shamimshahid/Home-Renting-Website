<?php
require_once '../model.php';


$user_id = $_GET['id'];
$data['p_details_id'] = $_GET['p_details_id'];
$owner_id = $_GET['owner_id'];

$p_id = $data['p_details_id'];


// if (add_properties_details($user_id , $p_id)) {
$interestedpeople =  find_interested_people($p_id, $owner_id);

if ($interestedpeople === 1) {
  $status = "Newly Added";

  $change_status = change_status($status, $p_id);
}
$confirm = 'rejected';

$confirm_interested_property = confirm_interested_property($confirm,  $p_id, $owner_id, $user_id);

echo "Successfully Added";
echo "<script>location.href='welcome2.php'</script>";


//   }

 
// else {
// 	echo 'You are not allowed to access this page.';
// } 
