<?php 
   require 'config.php';
  if(empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    header("Location: signinup.php");
  }

  $campaignID = isset($_GET['campaignID']) ? $_GET['campaignID'] : "";

  $sql = "SELECT campaignID, title, goalAmount, currentAmount FROM campaign ORDER BY currentAmount DESC LIMIT 15";
  $result = mysqli_query($conn, $sql);

  $sql = "SELECT donation.*, user_info.name 
            FROM donation 
            JOIN user_info 
            ON donation.userID = user_info.id 
            WHERE donation.campaignID = '$campaignID' 
            ORDER BY donation.amount DESC";
  $result2 = mysqli_query($conn, $sql);

 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="admindashboard.css">
    <title>Admin - Payments</title>

   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <span class="logo_name">&nbsp;&nbsp;&nbsp;&nbsp;RaiseUp</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="admindashboard.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        
        <li>
          <a href="admindashboardcampaigns.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Campaigns</span>
          </a>
        </li>
        <li>
          <a href="admindashboarduser.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Users</span>
          </a>
        </li>
        <li>
          <a href="admindashboardpayment.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Payments</span>
          </a>
        </li>
        
        
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Payments</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Admin</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
     
      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Recent Donations</div>
          <div class="sales-details">


  <ul class="details">
    <li class="topic">Date</li>
    <?php while($row = mysqli_fetch_assoc($result2)) { ?>
      <li><a href="#"><?php echo date('d M Y', strtotime($row['createdAt'])); ?></a></li>
    <?php } ?>
  </ul>



  <ul class="details">
  <li class="topic">Donor Name</li>
  <?php
    mysqli_data_seek($result2, 0);
    while($row = mysqli_fetch_assoc($result2)) {
      $donorname = $row['name'];
  ?>
    <li><?php echo $donorname; ?></li>
  <?php } ?>
</ul>

<ul class="details">
  <li class="topic">Amount</li>
  <?php
    mysqli_data_seek($result2, 0);
    while($row = mysqli_fetch_assoc($result2)) {
      $amount = $row['amount'];
  ?>
    <li><?php echo $amount; ?></li>
  <?php } ?>
</ul>


</div>

        
      </div>
      <div class="top-sales box">
          <div class="title">Top Funded Campaigns</div>
          <ul class="top-sales-details">
            
          <?php
      while($row = mysqli_fetch_assoc($result)) {
        $title = $row['title'];
        $goal = $row['currentAmount'];
    ?>
      <li>
<a href="admindashboardpayment.php?campaignID=<?php echo $row['campaignID']; ?>">
          <span class="product"><?php echo $title; ?></span>
        </a>
        <span class="price">$<?php echo $goal; ?></span>
      </li>
    <?php } ?>

          </ul>
        </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

