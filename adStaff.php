<?php
require 'ConnectTestDB.php';
if (isset($_POST['submit'])) {
    $name=$_POST['Name'];
    $id=$_POST['Id'];
    $email=$_POST['Email'];
    $password=$_POST['Password'];


    $query="INSERT INTO student(regnum,email,city) VALUES('$name','$id','$email','$password')";
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



