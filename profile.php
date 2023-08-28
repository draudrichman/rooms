<?php 
	
	require 'config.php';
  	
  	if(empty($_SESSION["id"])){
    	// $id = $_SESSION["id"];
    	header("Location: signinup.php");
  	}

  	$id = $_SESSION['id'];

  	$sql = "SELECT * FROM user_info WHERE id = '$id'";

  	$result = mysqli_query($conn, $sql);

  	$user = mysqli_fetch_assoc($result);

  	//print_r($user);

  	mysqli_close($conn);


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
   background-color: #f3f3f3;
}

.wrapper{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 1200px;
  height: 400px;
  display: flex;
  box-shadow: 0 1px 20px 0 rgba(69,90,100,.08);
}

.wrapper .left{
  width: 35%;
  background: linear-gradient(110.6deg, rgb(184, 142, 252) 2.2%, rgb(104, 119, 244) 100.2%);
  padding: 30px 25px;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  text-align: center;
  color: #fff;
}

.wrapper .left img{
  border-radius: 5px;
  margin-bottom: 10px;
}

.wrapper .left h4{
  margin-bottom: 10px;
}

.wrapper .left p{
  font-size: 12px;
}

.wrapper .right{
  width: 65%;
  background: #fff;
  padding: 30px 25px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
}

.wrapper .right .info,
.wrapper .right .projects{
  margin-bottom: 25px;
}

.wrapper .right .info h3,
.wrapper .right .projects h3{
    margin-bottom: 15px;
    padding-bottom: 5px;
    border-bottom: 1px solid #e0e0e0;
    color: #353c4e;
  text-transform: uppercase;
  letter-spacing: 5px;
}

.wrapper .right .info_data,
.wrapper .right .projects_data{
  display: flex;
  justify-content: space-between;
}

.wrapper .right .info_data .data,
.wrapper .right .projects_data .data{
  width: 45%;
}

.wrapper .right .info_data .data h4,
.wrapper .right .projects_data .data h4{
    color: #353c4e;
    margin-bottom: 5px;
}

.wrapper .right .info_data .data p,
.wrapper .right .projects_data .data p{
  font-size: 13px;
  margin-bottom: 10px;
  color: #919aa3;
}

.wrapper .social_media ul{
  display: flex;
}

.wrapper .social_media ul li{
  width: 45px;
  height: 45px;
  background: linear-gradient(to right,#01a9ac,#01dbdf);
  margin-right: 10px;
  border-radius: 5px;
  text-align: center;
  line-height: 45px;
}


.pulse {
    position: absolute;
  top: 20%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: none;
  border: 2px solid;
  font: inherit;
  line-height: 1;
  margin: 0.5em;
  padding: 1em 2em;
}

.pulse:hover,
.pulse:focus {
  -webkit-animation: pulse 1s;
          animation: pulse 1s;
  box-shadow: 0 0 0 2em transparent;
}

@-webkit-keyframes pulse {
  0% {
    box-shadow: 0 0 0 0 var(--hover);
  }
}

@keyframes pulse {
  0% {
    box-shadow: 0 0 0 0 var(--hover);
  }
}
.close:hover,
.close:focus {
  box-shadow: inset -3.5em 0 0 0 var(--hover), inset 3.5em 0 0 0 var(--hover);
}

.raise:hover,
.raise:focus {
  box-shadow: 0 0.5em 0.5em -0.4em var(--hover);
  transform: translateY(-0.25em);
}
.pulse {
  --color: #A020F0;
  --hover: #A020F0;
}


    </style>
    
</head>
<body>
 <?php include('header-footer/headeruser.php'); ?> 
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="buttons">
 <form action="updateprofile.php" method="post">

  <button class="pulse">Edit Profile</button>
  </form>

</div>

<div class="wrapper">
    <div class="left">
        <img src="<?php  echo htmlspecialchars($user['image']); ?>" alt="user" height="150">
        <h4><?php  echo htmlspecialchars($user['name']); ?></h4>
         <p><?php  echo htmlspecialchars($user['username']); ?></p>
    </div>
    <div class="right">
        <div class="info">
            <h3>Information</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Organization</h4>
                    <p><?php  echo htmlspecialchars($user['organization']); ?></p>
                 </div>
                 <div class="data">
                   <h4>Address</h4>
                    <p><?php  echo htmlspecialchars($user['address']); ?></p>
              </div>

            </div>

        </div>
      
      <div class="projects">
            <h3>Contact</h3>
            <div class="projects_data">
                 <div class="data">
                    <h4>Email</h4>
                    <p><?php  echo htmlspecialchars($user['email']); ?></p>
                 </div>
                 <div class="data">
                   <h4>Phone</h4>
                    <p><?php  echo htmlspecialchars($user['phone']); ?></p>
              </div>
            </div>
        </div>
      
    </div>
</div>

</body>
</html>
