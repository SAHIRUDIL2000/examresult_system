<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="examresult_system";

if(!$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    die("failed to connect!");
}
?>