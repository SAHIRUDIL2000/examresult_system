<?php
session_start();
require 'dbcon.php';
$user = $_SESSION['username'];
$level = $_POST['level'];
$semester = $_POST['semester'];
if ($pass == $re) {
    $queryInsert = "INSERT INTO `user` (`id`, `password`) VALUES ('$user', '$pass')";
    $queryCheck = "SELECT id FROM user WHERE id='$user'";
    $result = mysqli_query($con, $queryCheck);
    $data = mysqli_fetch_assoc($result);
    $response = array();
    if (mysqli_query($con, $queryInsert)) {
    } else {

        echo mysqli_error($con);
    }

    if ($data == null) {

        echo 'Registration Successful!';
        // header("Location: ../stulog.php");
    } else {

        echo "You have already registered! Please Log in";
        // header("Location: ../stulog.php");
    }
} else {
    echo "Passwords don't match";

    // header("Location: ../Stuacc.php");
}
?>