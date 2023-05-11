<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script>
    function submitData(event) {
      event.preventDefault();
      var myHeaders = new Headers();
      myHeaders.append("Content-Type", "application/x-www-form-urlencoded");

      var urlencoded = new URLSearchParams();
      urlencoded.append(
        "UserName",
        document.getElementById("regno").value
      );
      urlencoded.append(
        "Password",
        document.getElementById("password").value
      );

      var requestOptions = {
        method: "POST",
        headers: myHeaders,
        body: urlencoded,
        redirect: "follow",
      };
      fetch("PHP/LogIn.php", requestOptions)
        .then((response) => response.json())
        .then((data) => functionOne(data))
        .catch((error) => console.log("error", error));
    }
    function functionOne(data) {
      if (data == "valid") {
        window.location.href = "/examresult_system/level.php";
      }
      else {
        window.location.href = "/examresult_system/stulog.php";
      }
    }
  </script>
</head>

<body>
  <div class="rounded-5 border border-dark" style="margin-top:10px; margin-left:10px; margin-right:10px;">

    <table class="table">
      <tr>
        <th scope="col"><img src="logo.png" alt="" style="width:150px; margin-top:5px; margin-left:185px;"></th>
        <th scope="col">
          <div style="text-align:center; margin-right:200px;">
            <div>
              <h1>University of Vavuniya Sri Lanka</h1>
            </div>
            <div>
              <h1>Faculty of Technological Studies</h1>
            </div>
            <div>
              <h2>Exam Results</h2>
            </div>
          </div>
        </th>
        <th scope="col"></th>
      </tr>
    </table>

  </div>

  <table>
    <tr>
      <th><a href="user.php"><img src="b.png" alt="" style="width:50px; margin-bottom:70px; margin-left:10px;"></a>
        <a href="home.php"><img src="home.png" alt="" style="width:50px; margin-bottom:70px; margin-left:10px;"></a>
      </th>
      <th><img src="stu.jpg" alt=""
          style="width:100px; height:100px; margin-bottom:10px; margin-top:10px; margin-left:480px;"></th>
      <th></th>
    </tr>
  </table>

  <h2 style="color:blue;">
    <center>Join Your Account</center>
  </h2><br>
  <form action="" method="post">
    <table align="center">
      <?php if (isset($_GET['error'])) { ?>
        <p class="error">
          <?php echo $_GET['error']; ?>
        </p>
      <?php } ?>
      <tr>
        <th>Registration Number</th>
        <th>:</th>
        <th style="margin-left:30px;"><input type="text" id="regno" name="regno" placeholder="2018/ICTS/00" required>
        </th>
      </tr>
      <tr style="padding-top:20%;">
        <th>Password(6 or more characters)</th>
        <th>:</th>
        <th><input type="password" id="password" name="password" required minlength="6"></th>
      </tr>


    </table>
    <div style="text-align:center;">
      <button type="submit" class="btn btn-outline-dark" style="font-size:20px; margin-top:20px;"
        onclick="submitData(event)"><b>Login</b></button>

    </div>
    <div style="text-align:center;">
      <p style="margin-top:20px;">Create account? <a href="Stuacc.php">Sign in</a></p>
    </div>
  </form>
</body>

</html>