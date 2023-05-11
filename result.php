<?php
session_start();
// if($_POST['lecid']=="A01" && $_POST['password']=="FTS01A"){
//   $_SESSION['Admin']=$_POST['lecid'];
// }else if (isset($_SESSION['Admin'])==false) {
//   header("Location: Adminlg.php");
// }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link rel="stylesheet" href="css/bootstrap.css">
<script>
 
  // function selectSub() {
  //   const year =document.getElementById("year").value;
  // const semester =document.getElementById("sem").value;
  // const subject =document.getElementById("subcode");

  //   if(year=="1"&& semester=="sem1"){
  //     console.log(year);
  // console.log(semester);
  //     const option1 =document.createElement("option");
  //     option1.innerHtml="TICT1114aaaaaa";
  //     option1.value="TICT1114";
  //     const option2 =document.createElement("option");
  //     option2.innerHtml="TICT1114";
  //     option2.value="TICT1114";
  //     const option3 =document.createElement("option");
  //     option3.innerHtml="TICT1114";
  //     option3.value="TICT1114";
  //     const option4 =document.createElement("option");
  //     option4.innerHtml="TICT1114";
  //     option4.value="TICT1114";
  //     const option5 =document.createElement("option");
  //     option5.innerHtml="TICT1114";
  //     option5.value="TICT1114";
  //     const option6 =document.createElement("option");
  //     option6.innerHtml="TICT1114";
  //     option6.value="TICT1114";
  //     subject.appendChild(option1);
  //     subject.appendChild(option2);
  //     subject.appendChild(option3);
  //     subject.appendChild(option4);
  //     subject.appendChild(option5);
  //     subject.appendChild(option6);
  // }
  // }
  
</script>
</head>
<body>
    <div class="rounded-5 border border-dark" style="margin-top:10px; margin-left:10px; margin-right:10px;"> 
    <table class="table">
        <tr>
            <th scope="col"><img src="logo.png" alt="" style="width:150px; margin-top:5px; margin-left:185px;"></th>
            <th scope="col"><div style="text-align:center; margin-right:200px;">
                <div> <h1>University of Vavuniya Sri Lanka</h1></div>
                     <div><h1>Faculty of Technological Studies</h1> </div>
                     <div><h2>Exam Results</h2> </div>
                 </div> </th>
            <th scope="col"></th>
           </tr>
        </table>

 </div>  
<br>









<!--<th scope="col">-->
<!-- Logout -->
<!--
  <a href="PHP/clear-session.php">
  <button type="button" class="btn btn-warning"
            style="font-size:20px; margin-top:20px;">Log Out</button>
</a>

</th>
          <br>
          </div> 
  -->
          <nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="adminlg.php"><img src="b.png" width="30px"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home.php"><img src="home.png" width="30px"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link bg-info"  href="PHP/clear-session.php">Log out</a>
      </li>
     
    </ul>
  </div>
</nav>




<div style="text-align:center;">
<h3>Submit Result</h3>
</div>
 <div class="container" style="text-align:center;">
 <br><label style="font-size:20px">Level:</label> 
 <form action="PHP/selectOptionsAdmin.php" method="post">
   <select name="year" id="year" style="margin-right:80px;"><option value="1">Level 1</option>
      <option value="2">Level 2</option>
      <option value="3">Level 3</option>
      <option value="4">Level 4</option>
    </select>
   <!--<label style="font-size:20px">Semester:</label>
   <select name="sem" id="sem" style="margin-right:80px;" >
      <option value="sem2">Semester 2</option>
    </select>-->
      <label style="font-size:20px">Subject Code:</label>
      <select name="subcode" id="subcode"><option value="TICT1114">TICT1114</option>
      
      <option value="TICT1114">TICT1114</option>
      <option value="TICT1123">TICT1123</option>
      <option value="TICT1134">TICT1134</option>
      <option value="TICT1142">TICT1142</option>
      <option value="TICT1152">TICT1152</option>
      <option value="AUX1113">AUX1113</option>

      <option value="TICT1261">TICT1261</option>
      <option value="TICT1223">TICT1223</option>
      <option value="TICT1224">TICT1224</option>
      <option value="TICT1212">TICT1212</option>
      <option value="TICT1252">TICT1252</option>
      <option value="TICT1243">TICT1243</option>
      <option value="TICT1233">TICT1233</option>

      <option value="TICT2113">TICT2113</option>
      <option value="TICT2122">TICT2122</option>
      <option value="TICT2134">TICT2134</option>
      <option value="TICT2142">TICT2142</option>
      <option value="TICT2153">TICT2153</option>
      <option value="TICT2113">TICT2113</option>

      <option value="TICT2212">TICT2212</option>
      <option value="TICT2222">TICT2222</option>
      <option value="TICT2233">TICT2233</option>
      <option value="TICT2244">TICT2244</option>
      <option value="TICT2252">TICT2252</option>
      <option value="TICT2263">TICT2263</option>
      <option value="TICT2212">TICT2212</option>

      <option value="TICT3113">TICT3113</option>
      <option value="TICT3123">TICT3123</option>
      <option value="TICT3142">TICT3142</option>
      <option value="TICT3153">TICT3153</option>
      <option value="TICT3162">TICT3162</option>
      <option value="TICT3112">TICT3112</option>
      <option value="TICT3132">TICT3132</option>

      <option value="TICT3214">TICT3214</option>
      <option value="TICT3222">TICT3222</option>
      <option value="TICT3232">TICT3232</option>
      <option value="TICT3243">TICT3243</option>
      <option value="TICT3252">TICT3252</option>
      <option value="TICT3262">TICT3262</option>
      <option value="AUX3221">AUX3221</option>

      <option value="TICT4116">TICT4116</option>
      <option value="TICT4126">TICT4126</option>

      <option value="TICT4213">TICT4213</option>
      <option value="TICT4223">TICT4223</option>
      <option value="TICT4233">TICT4233</option>
      <option value="TICT4242">TICT4242</option>
      <option value="TICT4253">TICT4253</option>
      <option value="TICT4262">TICT4262</option>
      <option value="TICT4272">TICT4272</option>

   </select>
   <input type="submit" value="Select">
 </form>
    
<br>

    <table class="table table-bordered" style="border-spacing:20px; margin-top:20px;" >
      <thead>
        <tr>
          <th>Index No</th>
          <th>Reg No</th>
          <th>Grade</th>
        </tr>
      </thead>
      <tbody>
       <form action="PHP/insertResult.php" method="post">
         <?php
         
         require "PHP/dbcon.php";
         if(isset($_SESSION['year'])){
          $year=$_SESSION['year'];
          $query="SELECT index_no,reg_no from studentdetails where year='$year'";
          $result=mysqli_query($con,$query);
          $counter=1;
          while ($data=mysqli_fetch_array($result)) {
            
            ?>
            <tr>
              <td><?php echo $data['index_no']?></td>
              <td><?php echo $data['reg_no'] ?></td>
              <td><select type="text" id="<?php echo 'grade'.$counter ?>" name="<?php echo 'grade'.$counter ?>">
              
              <option value="A+">A+</option>
              <option value="A">A</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B">B</option>
              <option value="B-">B-</option>
              <option value="C+">C+</option>
              <option value="C">C</option>
              <option value="C-">C-</option>
              <option value="D+">D+</option>
              <option value="D">D</option>
              <option value="D-">D-</option>
              <option value="E">E</option>
              <option value="ab">Ab</option>
              <option value="ab">MC</option>
            
              </select>
            </td>
            </tr>
            <?php
            $counter++;
          }
         }
         
         ?>
         <input type="submit" value="Submit">
       </form>
      </tbody>
    </table>
  </div>










 </body>
 </html>