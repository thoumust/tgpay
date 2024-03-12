<?php
include('config.php');
if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  $email = $_POST['sahod'];
  $address = $_POST['nasalpakan'];

  $sql = "INSERT into `tagasalpak`(name,sahod,nasalpakan)
  VALUES('$name','$email','$address')";
  $result = mysqli_query($con, $sql);
  if ($result) {
    header('location: displaySalpak.php');
  } else {
    die(mysqli_error($con));
  }
}
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
                  <li><a href="hitter.php">Hitter</a></li>
                  <li><a href="tagasalpak.php">Tagasalpak</a></li>
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
  <form method="POST">
            <div class="form_group">
                <label class="sub_title" for="name">Name</label>
                <input placeholder="Enter your full name" class="form_style" type="text" name="name">
            </div>
            <div class="form_group">
                <label class="sub_title" for="sahod">Sahod</label>
                <input placeholder="Enter sahod" id="sahod" class="form_style" type="number" name="sahod">
            </div>
            <div class="form_group">
                <label class="sub_title" for="nahit">Nasalpakan</label>
                <input placeholder="nasalpakan" id="nasalpakan" class="form_style" type="number" name="nasalpakan">
            </div>
            <div>
            <button type="submit" class="btn" name="submit">Submit</button>
  </form>
  </div>
</body>

</html>