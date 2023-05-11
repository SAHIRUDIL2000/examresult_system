<?php
session_start();
require 'dbcon.php';
$user = $_POST['UserName'];
$pass = $_POST['Password'];

$queryInsert = "INSERT INTO `user` (`id`, `password`) VALUES ('$user', '$pass')";
$queryCheck = "SELECT id FROM user WHERE id='$user'";
$response = array();
if (mysqli_query($con, $queryInsert)) {

    $response['Insert'] = 'success';
} else {

    $response['InsertError'] = mysqli_error($con);
}
$result = mysqli_query($con, $queryCheck);
$data = mysqli_fetch_assoc($result);
if ($data == null) {

    $response['Available'] = "Database";
} else {

    $response['Available'] = "not";
}
echo json_encode($response);
?>