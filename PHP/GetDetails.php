<?php
session_start();
require 'dbcon.php';

$user = $_POST['Id'];
$query = "SELECT first_name,last_name,index_no FROM studentdetails WHERE reg_no='$user';";
// $queryCheck = "SELECT id FROM user WHERE id='$user'";
$response = array();
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);
$response['Name'] = $data['first_name'] . " " . $data['last_name'];
$response['Index'] = $data['index_no'];

// if ($data == null) {

//     $response['Available'] = "Database";
// } else {

//     $response['Available'] = "not";
// }
echo json_encode($response);
?>