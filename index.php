<?php

  require 'config.php';

  if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM user_info WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
  }
  else{
    header("Location: signinup.php");
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <link rel = "stylesheet" type = "text/css" href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
      form{
        height: 260px;
        max-width: 440px;
        margin: 20px auto;
        padding: 20px;
      }
    </style>
  </head>
  <body class="grey lighten-3">
    <form class="white">
      <h3 class="center">Welcome <?php echo $row["username"]; ?></h3>
      <h6 class="center"><?php echo "Name: " . $row["name"]; ?></h6>
      <h6 class="center"><?php echo "Email: " . $row["email"]; ?></h6>
      <br>
      <div class="center">
        <a href="logout.php", class="btn brand z-depth-1">Logout</a>
      </div>
    </form>
  </body>
</html>
