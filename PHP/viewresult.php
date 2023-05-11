<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
    <div class="rounded-5 border border-dark" style="margin-top:10px; margin-left:10px; margin-right:10px;"> 
    <table class="table">
      
          <tr>
            <th scope="col"><img src="logo.png" alt="" style="width:130px; margin-top:20px; margin-left:35px;"></th>
            <th scope="col"> <div style="text-align:center; margin-right:10px;">
                <div> <h1>UNIVERSITY OF VAVUNIYA SRI LANKA</h1></div>
                     <div><h1>Faculty of Technological Studies</h1> </div>
                     <div><h2>Exam Results</h2> </div>
                 </div> </th>
            <th scope="col"><img src="logo.png" alt="" style="width:150px; margin-top:20px;"></th>
           </tr>
        
    </table>
 </div>  
<br>
<div style="text-align:center;">
<h3>View Result</h3>
</div>
 <div class="container" style="text-align:center;">
 <label style="font-size:20px">Level:</label> 
 <form action="PHP/selectOptionsAdmin.php" method="post">
  <label style="font-size:20px">Subject Code:</label>
      <select name="subcode" id="subcode"><option value="TICT1114">TICT1114</option>
      <option value="TICT1123">TICT1123</option>
      <option value="TICT1134">TICT1134</option>
      <option value="TICT1142">TICT1142</option>
      <option value="TICT1152">TICT1152</option>
      <option value="aux1113">AUX1113</option>
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
         session_start();
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
              <td><input type="text" id="<?php echo 'grade'.$counter ?>" name="<?php echo 'grade'.$counter ?>"></td>
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