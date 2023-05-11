<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script>
    function displayMessage(Element, Message) {
      Element.innerHTML = Message;
      Element.classList.remove("invisible");
    }
    function checkPassoword() {
      let element = document.getElementById("messageError");
      console.log();
      if (
        document.getElementById("password").value ==
        document.getElementById("repass").value
      ) {
        element.classList.add("invisible");
        return true;
      } else {
        element.innerHTML = "Passwords do not match!";
        element.classList.remove("invisible");
        return false;
      }
    }
    function submitData(event) {
      event.preventDefault();
      if (checkPassoword()) {
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
        fetch("PHP/Register.php", requestOptions)
          .then((response) => response.json())
          .then((data) => functionOne(data))
          .catch((error) => console.log("error", error));
      }
      function functionOne(data) {
        let element = document.getElementById("messageUserName");
        console.log(data);
        if (data["Available"] == "not") {
          // alert("invalid UserName or Password");
          element.innerHTML = "User name is already taken!";
          element.classList.remove("invisible");
          setTimeout(() => {
            element.classList.add("invisible");
          }, 2000);
        }
        if (data["Insert"] == "success") {
          // localStorage.User_Name = data["User_Name"];
          window.location.href = "stulog.php";
        }
      }
    }
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

  <table>
    <tr>
      <th><a href="user.php"><img src="b.png" alt="" style="width:50px; margin-bottom:70px; margin-left:10px;"></a>
      <a href="home.php"><img src="home.png" alt="" style="width:50px; margin-bottom:70px; margin-left:10px;"></a></th>
      <th><img src="stu.jpg" alt=""
          style="width:100px; height:100px; margin-bottom:10px; margin-top:10px; margin-left:475px;"></th>
      <th></th>
    </tr>
  </table>

  <h2 style="color:blue;">
    <center>Create Your Account</center>
  </h2><br>

  <form action="" method="post">
    <table align="center">

      <tr>
        <th>Registration No</th>
        <th>:</th>
        <th style="margin-left:30px;">
          <input type="text" name="regno" id="regno" placeholder="2018/ICTS/00">
          <div id="messageUserName" class="invisible"></div>
        </th>
      </tr>

      <tr style="padding-top:20%;">
        <th>Password(6 or more characters)</th>
        <th>:</th>
        <th><input class="form-control" type="password" id="password" name="password" minlength="6" required></th>
      </tr>
      <tr>
        <th>Re-enter password</th>
        <th>:</th>
        <th><input class="form-control" type="password" id="repass" name="repass" required></th>
      </tr>
    </table>
    <div id="messageError" class="invisible"></div>
    <div style="text-align:center;">
      <button type="submit" class="btn btn-outline-dark" style="font-size:15px; margin-top:20px;"
        onClick="submitData(event)"><b>Create</b></button></a>
      <br>
      <p style="margin-top:20px;">Already have account? <a href="stulog.php">Log in</a></p>
    </div>
  </form>









</body>

</html>