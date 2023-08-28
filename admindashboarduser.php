<?php 
   require 'config.php';
  if(empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    header("Location: signinup.php");
  }

  $sql = "SELECT title, goalAmount, currentAmount FROM campaign ORDER BY currentAmount DESC LIMIT 8";
  $result = mysqli_query($conn, $sql);

 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="admindashboard.css">
    <title>Admin - Users</title>

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
        <span class="dashboard">Users</span>
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
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Active Campaigns</div>
            <div class="number">
              <?php
        $query = "SELECT COUNT(*) AS count FROM campaign";
        $result = mysqli_query($conn, $query);
        $data = mysqli_fetch_assoc($result);
        echo number_format($data['count']);
    ?>
            </div>
            <!-- <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div> -->
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Amount Raised</div>
            <div class="number">$0</div>
            <!-- <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div> -->
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Number of Donations</div>
            <div class="number">0</div>
            <!-- <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div> -->
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Average Donation Amount</div>
            <div class="number">$0</div>
            <!-- <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Down From Today</span>
            </div> -->
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Recent Donations</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Date</li>
             <!--  <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li> -->
            </ul>
            <ul class="details">
            <li class="topic">Donor</li>
           <!--  <li><a href="#">Alex Doe</a></li>
            <li><a href="#">David Mart</a></li>
            <li><a href="#">Roe Parter</a></li>
            <li><a href="#">Diana Penty</a></li>
            <li><a href="#">Martin Paw</a></li>
            <li><a href="#">Doe Alex</a></li>
            <li><a href="#">Aiana Lexa</a></li> -->
            
             
          </ul>
          <ul class="details">
            <li class="topic">Status</li>
          <!--   <li><a href="#">Delivered</a></li>
            <li><a href="#">Pending</a></li>
            <li><a href="#">Returned</a></li>
            <li><a href="#">Delivered</a></li>
            <li><a href="#">Pending</a></li>
            <li><a href="#">Returned</a></li>
            <li><a href="#">Delivered</a></li>
 -->             
          
          </ul>
          <ul class="details">
            <li class="topic">Amount</li>
            <!-- <li><a href="#">$204.98</a></li>
            <li><a href="#">$24.55</a></li>
            <li><a href="#">$25.88</a></li>
            <li><a href="#">$170.66</a></li>
            <li><a href="#">$56.56</a></li>
            <li><a href="#">$44.95</a></li>
            <li><a href="#">$67.33</a></li> -->
             
            
          </ul>
          </div>
          <!-- <div class="button">
            <a href="#">See All</a>
          </div> -->
        </div>
        <div class="top-sales box">
          <div class="title">Top Funded Campaigns</div>
          <ul class="top-sales-details">
            
      
          <li>
            <a href="#">
              <span class="product">Addidas Running Shoe</span>
            </a>
            <span class="price">$2345</span>
          </li>

          <?php
      while($row = mysqli_fetch_assoc($result)) {
        $title = $row['title'];
        $goal = $row['goalAmount'];
    ?>
      <li>
        <a href="#">
          <span class="product"><?php echo $title; ?></span>
        </a>
        <span class="price">$<?php echo $goal; ?></span>
      </li>
    <?php } ?>

          </ul>
        </div>
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

