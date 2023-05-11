<?php
session_start();
require "dbcon.php";
$user = $_POST['UserName'];
$pass = $_POST['Password'];

$query = "select id from user where id='$user' and password='$pass';";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);
if ($data == null) {
    // echo "invalid";
    echo json_encode("invalid");
} else {
    // echo "valid";
    $_SESSION['username'] = $data["id"];
    echo json_encode("valid");
}
?>