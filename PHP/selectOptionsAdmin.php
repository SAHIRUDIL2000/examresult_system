<?php
session_start();
$_SESSION['year']=$_POST['year'];
$_SESSION['subcode']=$_POST['subcode'];
header("Location:../result.php");
?>