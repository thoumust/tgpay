<?php
include('config.php');
include_once 'setup.php';
include 'userAuth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="styles.css" rel="stylesheet" crossorigin="anonymous">
  <title>Sahod</title>
</head>

<body>
    <div id = "header">
        <div class="container">
          <nav>
              <ul>
                  <li><div class="scene">
                      <div class="cube">
                          <span class="side top" onclick="logout()">Hope you're okay.</span>
                          <span class="side front">Hello, How are you?</span>
                      </div>
                    </div>
                  </li>
              </ul>
          </nav>
    </div>


  <div class="container my-5">
  <form id="survey-form" name="f1" action="userAuth.php" onsubmit="return validation()" method="POST">
            <div class="form_group">
                <label class="sub_title" for="name">Name</label>
                <input required id="name" placeholder="Username" class="form_style" type="text" name="name">
            </div>

            <div class="form_group">
                <label class="sub_title" for="name">Name</label>
                <input required id="pass" placeholder="Password" class="form_style" type="password" name="pass">
            </div>
            <button type="submit" class="btn" name="submit" value="login">Login</button>
  </form>
  </div>

  <script>
    function validation() {
      var id = document.f1.name.value;
      var ps = document.f1.pass.value;
      if (id.length == "" && ps.length == "") {
        alert("User Name and Password fields are empty");
        return false;
      } else {
        if (id.length == "") {
          alert("User Name is empty");
          return false;
        }
        if (ps.length == "") {
          alert("Password field is empty");
          return false;
        }
      }
    }
  </script>
</body>

</html>