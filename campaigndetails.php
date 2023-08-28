<?php  
require 'config.php';
    $campaignID = $_GET['campaignID'];
    
    if(empty($_SESSION["id"])){
      $id = $_SESSION["id"];
      header("Location: signinup.php");
    }

    $sql = "SELECT * FROM campaign WHERE campaignID = '$campaignID'";

    $result = mysqli_query($conn, $sql);

    $campaign = mysqli_fetch_assoc($result);

    //print_r($user);

    $username = ""; // Initialize the username variable
    $userID = $_SESSION["id"];
    $sql = "SELECT username FROM user_info WHERE id = '$userID'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $username = $row["username"];
    }

    mysqli_close($conn);

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
      <link rel="stylesheet" type="text/css" href="campaigndetails.css">

</head>
<body>
 
  <nav class="flex-nav">
  <div class="container">
    <div class="grid menu">
      <div class="column-xs-8 column-md-6">
        <p id="highlight">Raise Up</p>
      </div>
      <div class="column-xs-4 column-md-6">
        <a href="#" class="toggle-nav">Menu <i class="ion-navicon-round"></i></a>
        <ul>
          <li class="nav-item"><a href="homepage.php">Home</a></li>
          <li class="nav-item"><a href="discovercampaigns.php">Discover Campaigns</a></li>
          <li class="nav-item"><a href="profile.php">My Account</a></li>
          <li class="nav-item"><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<main>
  <div class="container">
    <div class="grid second-nav">
      <div class="column-xs-12">
        <nav>
          <ol class="breadcrumb-list">
            <li class="breadcrumb-item"><a href="discovercampaigns.php">Discover Campaigns</a></li>
            <li class="breadcrumb-item active"><?php  echo htmlspecialchars($campaign['title']); ?></li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="grid product">
      <div class="column-xs-12 column-md-7">
        <div class="product-gallery">
          <div class="product-image">
            <img class="active" src="<?php  echo htmlspecialchars($campaign['image']); ?>">
          </div>
          
        </div>
      </div>
      <div class="column-xs-12 column-md-5">
        <h6><?php echo date('M d, Y', strtotime($campaign['createdAt'])); ?></h6>
        <h1><?php  echo htmlspecialchars($campaign['title']); ?></h1>
        <h2><?php echo htmlspecialchars($campaign['currency']) . htmlspecialchars($campaign['currentAmount']) . " raised out of " . htmlspecialchars($campaign['currency']) . htmlspecialchars($campaign['goalAmount']); ?></h2>
        <div class="description">
          <p><?php  echo htmlspecialchars($campaign['description']); ?></p>
         
        </div>
            
          <div class="progress" style="width: 700px; margin: 10px;">
            <div id="dynamic" class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
              <span id="current-progress"></span>
            </div>
          </div>
          <form action="paymentform.php?campaignID=<?php echo $campaignID;?>" method="post">

        <button class="add-to-cart">Contribute</button>
  </form>
  <a href="http://localhost:3000/chat.html?username=<?php echo urlencode($username); ?>&room=<?php echo urlencode($campaignID); ?>">
  <button class="add-to-cart" style="margin-top: 10px;">Join Discussion</button>
</a>

      </div>
    </div>
  </div>
</main>
<footer>
  <div class="grid">
    <div class="column-xs-12">
      <p class="copyright">&copy; Copyright 2023 <a href="" title=""  target="">Raise Up</a></p>
    </div>
  </div>
</footer>

</body>
</html>