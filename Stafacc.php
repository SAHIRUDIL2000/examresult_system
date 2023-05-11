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
            <th scope="col"><img src="c.jpg" alt="" style="width:150px; margin-top:20px; margin-left:40px;"></th>
            <th scope="col"> <div style="text-align:center; margin-right:10px;">
                <div> <h1>University of Vavuniya Sri Lanka</h1></div>
                     <div><h1>Faculty of Technological Studies</h1> </div>
                     <div><h2>Exam Results</h2> </div>
                 </div> </th>
            <th scope="col"><img src="c.jpg" alt="" style="width:150px; margin-top:20px;"></th>
           </tr>
        
    </table>
 
  
</div>   

<<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="stulog.php"><img src="b.png" width="30px"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home.php"><img src="home.png" width="30px"></a>
      </li>
      
     
    </ul>
  </div>
</nav>

<h2 style="color:blue;"><center>Create Your Account</center></h2><br>

<form action="stafflg.php" method="post">
    <table align="center">

<tr><th>Lecture Id</th><th>:</th><th style="margin-left:30px;"><input type="text" id="lecid" name="lecid" placeholder="L00" required></th></tr>
<tr style="padding-top:20%;"><th>Password(6 or more characters)</th><th>:</th><th><input type="password" id="password" name="password" required></th></tr>
<tr><th>Re-enter password</th><th>:</th><th><input type="password" id="password" name="password" required></th></tr>

</table>
<div style="text-align:center;">
<button type="submit" class="btn btn-outline-dark" style="font-size:15px; margin-top:20px;">Create</button></a>
<br>
<p style="margin-top:20px;">Already have account? <a href="stafflg.php">Log in</a></p>
</div>
</form>

    
           



</body>
</html>