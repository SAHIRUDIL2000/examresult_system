<?php
require 'ConnectTestDB.php';
if (isset($_POST['submit'])) {
    $indexno=$_POST['Indexno'];
    $regno=$_POST['Regno'];
    $Subjectcode=$_POST['Subjectcode'];
    $Grade=$_POST['Grade'];

    $query="INSERT INTO student(regnum,email,city) VALUES('$indexno','$regno','$Subjectcode','$Grade')";
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



