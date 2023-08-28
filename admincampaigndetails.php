<?php  
require 'config.php';
    $campaignID = $_GET['campaignID'];
    
    if(empty($_SESSION["id"])){
      // $id = $_SESSION["id"];
      header("Location: signinup.php");
    }

    $sql = "SELECT campaign.*, status.status FROM campaign JOIN status ON campaign.statusID = status.statusID WHERE campaignID = '$campaignID'";

    $result = mysqli_query($conn, $sql);

    $campaign = mysqli_fetch_assoc($result);
    $status = $campaign['status'];

    if (isset($_POST['suspend_campaign'])) {
      $query = "UPDATE campaign SET statusID = (SELECT statusID FROM status WHERE status = 'Suspended') WHERE campaignID = $campaignID;";
      mysqli_query($conn, $query);
      header("Location: admincampaigndetails.php?campaignID=$campaignID");
    }
    else if (isset($_POST['activate_campaign'])) {
      $query = "UPDATE campaign SET statusID = (SELECT statusID FROM status WHERE status = 'Active') WHERE campaignID = $campaignID;";
      mysqli_query($conn, $query);
      header("Location: admincampaigndetails.php?campaignID=$campaignID");
    }

    //print_r($user);

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
        <h1><?php  echo htmlspecialchars($campaign['title']); ?></h1>
        <h2><?php  echo htmlspecialchars($campaign['currency']); ?><?php  echo htmlspecialchars($campaign['currentAmount']); ?> raised out of <?php  echo htmlspecialchars($campaign['currency']); ?><?php  echo htmlspecialchars($campaign['goalAmount']); ?></h2>
        <div class="description">
          <p><?php  echo htmlspecialchars($campaign['description']); ?></p>
         
        </div>
            
          <div class="progress" style="width: 700px; margin: 10px;">
            <div id="dynamic" class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
              <span id="current-progress"></span>
            </div>
          </div>
          <form action="" method="post">
            <?php
              if ($status == "Active") {
                echo '<button class="add-to-cart" name="suspend_campaign">Suspend</button>';
              } else if ($status == "Suspended") {
                echo '<button class="add-to-cart" name="activate_campaign">Activate</button>';
              }
            ?>
          </form>
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