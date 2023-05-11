<?php
session_start();
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
} else {
  $username = "null";
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="css/bootstrap.css">

  <script>
    var level;
    var semester;
    let results;
    function submitLevel(params) {
      document.getElementById("level").classList.add('d-none');
      document.getElementById("semester").classList.remove('d-none');
      document.getElementById("title").innerHTML = "Level " + params;
      level = params;
      switch (params) {
        case 1:
          document.getElementById("title").classList.add("text-warning");
          break;
        case 2:
          document.getElementById("title").classList.add("text-danger");
          break;
        case 3:
          document.getElementById("title").classList.add("text-primary");
          break;
        case 4:
          document.getElementById("title").classList.add("text-success");
          break;
        default:
          break;
      }
    }
    function submitSemester(params) {
      document.getElementById("semester").classList.add('d-none');
      document.getElementById("Result Division").classList.remove('d-none');
      document.getElementById("title").classList.add('d-none');
      semester = params;
      submitData();
    }
    function submitData() {
      // event.preventDefault();
      var myHeaders = new Headers();
      myHeaders.append("Content-Type", "application/x-www-form-urlencoded");

      var urlencoded = new URLSearchParams();
      urlencoded.append(
        "id",
        document.getElementById("regno").value
        // "2018/ICTS/67"
      );
      urlencoded.append(
        "level",
        level
      );
      urlencoded.append(
        "semester",
        semester
      );

      var requestOptions = {
        method: "POST",
        headers: myHeaders,
        body: urlencoded,
        redirect: "follow",
      };
      fetch("PHP/GetResults.php", requestOptions)
        .then((response) => response.json())
        .then((data) => displayData(data))
        .catch((error) => console.log("error", error));
    }

    function displayData(data) {
      console.log(data);
      results = JSON.stringify(data);
      const table = document.getElementById("Result Division");
      for (const key in data) {
        const row = document.createElement("tr");
        const subCode = document.createElement("td");
        const subName = document.createElement("td");
        const Grade = document.createElement("td");

        subCode.innerHTML = data[key][0];

        subName.innerHTML = data[key][1];

        Grade.innerHTML = data[key][2];

        row.appendChild(subCode);
        row.appendChild(subName);
        row.appendChild(Grade);
        table.appendChild(row);

      }


    }
    function DownloadData() {
      localStorage.setItem("ID", document.getElementById("regno").value);
      localStorage.setItem("Level", level);
      localStorage.setItem("Semester", semester);
      localStorage.setItem("Results", results);

      window.location.href = "Download.Html";
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



  <!--<a href="level.php"><img src="b.png" alt="" style="width:50px; margin-bottom:30px; margin-left:10px;"></a>
  <a href="home.php"><img src="home.png" alt="" style="width:50px; margin-bottom:30px; margin-left:10px;"></a>
  <div class="container" style="text-align:right;">
<a href="PHP/clear-session.php" style="font-size:20px; margin-left:700px;">
  <button type="button" class="btn btn-dark"
            >Log Out</button>
</a>

          <br>
          </div> -->

  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
        <li class="nav-item">
          <a class="nav-link bg-info" href="stulog.php">Log out</a>
        </li>

      </ul>
    </div>
  </nav>


  <div style="display:flex; justify-content:center; align-items:center; flex-direction:column">
    <div>
      <?php echo $_SESSION['username'] ?>
    </div>
    <div id="level">
      <div style="text-align:center;">
        <button type="button" onclick="submitLevel(1)" class="btn btn-warning"
          style="font-size:20px; margin-top:20px;">Level 1</button>
      </div>
      <div style="text-align:center;">
        <button type="button" onclick="submitLevel(2)" class="btn btn-danger"
          style="font-size:20px; margin-top:20px;">Level 2</button>
      </div>
      <div style="text-align:center;">
        <button type="button" onclick="submitLevel(3)" class="btn btn-primary"
          style="font-size:20px; margin-top:20px;">Level 3</button>
      </div>
      <div style="text-align:center;">
        <button type="button" onclick="submitLevel(4)" class="btn btn-success"
          style="font-size:20px; margin-top:20px;">Level 4</button>
      </div>
    </div>
    <h2>
      <center style="color:gold;" id="title"></center>
    </h2>

    <div class="d-none" style="text-align:center;" id="semester">
      <div style="text-align:center;">
        <button type="button" onclick="submitSemester(1)" class="btn btn-secondary"
          style="font-size:20px; margin-top:20px;">Semester 1</button>
      </div>
      <div style="text-align:center;">
        <button type="button" onclick="submitSemester(2)" class="btn btn-secondary"
          style="font-size:20px; margin-top:20px;">Semester 2</button>
      </div>
    </div>




    <!-- Hide this Line -->

    <!--  -->





    <table id="Result Division" class="d-none table table-bordered table table-striped" style="text-align:center;">
      <tr>

        <th colspan="3">
          <div onclick="DownloadData()">Download Certificate</div>
        </th>
      </tr>
      <tr>
        <th>Subject Code</th>
        <th>Subject Name</th>
        <th>Result</th>
      </tr>
    </table>
    <div id="temp"></div>
  </div>
  <input class="d-none" type="text" id="regno" value="<?php echo $username ?>">
  <input class="d-none" type="text" id="indexno" value="<?php echo $username ?>">
</body>

</html>