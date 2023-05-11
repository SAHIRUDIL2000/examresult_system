<?php
session_start();
require 'dbcon.php';
if(isset($_SESSION['subcode'])&& isset($_SESSION['year'])){
$subcode=$_SESSION['subcode'];
$year=$_SESSION['year'];
$query="SELECT count(reg_no) FROM studentdetails";
$query2="SELECT name FROM subject WHERE subject_code='$subcode'";
$query3="SELECT index_no,reg_no from studentdetails WHERE year='$year'";
$result=mysqli_query($con,$query);
$result2=mysqli_query($con,$query2);
$result3=mysqli_query($con,$query3);
$data=mysqli_fetch_array($result);
$data2=mysqli_fetch_array($result2);
$subname=$data2[0];
$counter=1;
while ($data3=mysqli_fetch_array($result3)) {
    $index_no=$data3['index_no'];
    $reg_no=$data3['reg_no'];
    $grade=$_POST['grade'.$counter];
    $result4=mysqli_query($con,"SELECT grade FROM result WHERE reg_no='$reg_no' AND subject_code='$subcode'");
    if(mysqli_fetch_array($result4)==null){
    if(mysqli_query($con,"INSERT INTO result(index_no,reg_no,subject_code,sub_name,grade) VALUES ('$index_no','$reg_no','$subcode','$subname','$grade')")){
        echo "inserted".$counter;
    }
    else{
        echo mysqli_errno($con);
    }
}else{
    if(mysqli_query($con,"UPDATE result SET grade='$grade' WHERE reg_no='$reg_no';")){
        echo "inserted".$counter;
    }
    else{
        echo mysqli_errno($con);
    }
}
    $counter++;
}}
header("Location:../result.php")

?>