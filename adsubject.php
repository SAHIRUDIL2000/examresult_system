<?php
require 'ConnectTestDB.php';
if (isset($_POST['submit'])) {
   
    $Subcode=$_POST['SubCode'];
    $name=$_POST['Name'];
   
    $query="INSERT INTO student(regnum,email,city) VALUES('$Subcode','$name')";
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



