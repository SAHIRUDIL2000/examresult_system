<?php
require 'ConnectTestDB.php';
if (isset($_POST['submit'])) {
    $name=$_POST['Name'];
    $telno=$_POST['Telno'];
    $email=$_POST['Email'];
    $regno=$_POST['Regno'];
    $indexno=$_POST['Indexno'];
    $password=$_POST['Password'];


    $query="INSERT INTO student(regnum,email,city) VALUES('$name','$telno','$email','$regno','$indexno','$password')";
    if (mysqli_query($con,$query)) {
        echo "Data Inserted";
    }
    else{
        echo mysqli_error($con);
    }
}else {
    echo "not Submited";
}

?>



