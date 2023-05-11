<?php
session_start();
require 'dbcon.php';
$user = $_SESSION['username'];
// $user=$_POST['id'];
$level = $_POST['level'];
$semester = $_POST['semester'];
$query = "SELECT result.subject_code,result.sub_name,result.grade FROM result INNER join subject ON subject.subject_code=result.subject_code WHERE subject.year='$level' AND subject.semester='$semester' AND result.reg_no='$user';";
// $queryCheck = "SELECT id FROM user WHERE id='$user'";
$response = array();
if (mysqli_query($con, $query)) {

    // $response['Insert'] = 'success';
} else {

    // $response['InsertError'] = mysqli_error($con);
}
$result = mysqli_query($con, $query);
while($data = mysqli_fetch_array($result)){
    $response[]=$data;
}
// if ($data == null) {

//     $response['Available'] = "Database";
// } else {

//     $response['Available'] = "not";
// }
echo json_encode($response);
?>