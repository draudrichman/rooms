<?php 

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap');

*{
	margin: 0;
	padding: 0;
	font-family: 'Ubuntu', sans-serif;
	text-decoration: none;
	box-sizing: border-box;
	list-style: none;
}


.navbar{
	width: 100%;
	height: 60px;
	background: #090f1b;
	padding: 0 25px;
	left: 0;
}


.navbar .inner_navbar{
	display: flex;
	align-items: center;
	justify-content: space-between;
	width: 100%;
	height: 100%;
}

.navbar .hamburger{
	display: none;
}

.navbar .logo a{
	font-weight: 700;
	font-size: 24px;
	letter-spacing: 3px;
	color: #fff;
}

.navbar .logo a span{
	color: #7645d9;
}

.navbar .menu ul{
	display: flex;
}

.navbar .menu ul li a{
	width: 120px;
	margin-right: 10px;
	display: block;
	text-align: center;
	padding: 10px;
	border-radius: 25px;
	color: #fff;
	text-transform: uppercase;
	font-size: 14px;
	letter-spacing: 2px;
	transition: all 0.2s ease;
}

.navbar .menu ul li:last-child a{
	margin-right: 0;	
}

.navbar .menu ul li a:hover{
	background: #7645d9;
}


@media (max-width: 992px){
	.navbar{
		height: 100px;
		padding: 12px;
	}
	.navbar .inner_navbar{
		flex-direction: column;
	}
	.main_container{
		margin-top: 100px;
	}
}

@media (max-width: 728px){
	.navbar{
		height: 60px;
	}
	.navbar .inner_navbar{
		flex-direction: row;
	}
	.main_container{
		margin-top: 60px;
	}
	.navbar .menu ul{
		position: absolute;
		top: 60px;
		left: 0;
		display: block;
		background: #090f1b;
		width: 100%;
	}
	.navbar .menu ul li{
		padding: 10px;
	}
	.navbar .menu ul li a{
		width: 100%;
		padding: 12px;
	}
	.navbar .hamburger{
		display: block;
		position: absolute;
		top: 15px;
		right: 25px;
		font-size: 24px;
		color: #fff;
		cursor: pointer;
		transition: all 0.2s ease;
	}
	.navbar .hamburger:hover{
		color: #5bd485;
	}
	.navbar .menu{
		display: none;
	}
	.navbar .menu.active{
		display: block;
	}
	.main_container .content .item_wrap{
		width: 100%;
	}
}

/* Style the input field */
input[type=search] {
  width: 250px;
  padding: 5px;
  border: 2px solid #ccc;
  border-radius: 20px;
  outline: none;
  font-size: 16px;
  font-family: Arial, sans-serif;
  transition: width 0.4s ease-in-out;
}

/* Style the search button */
button[type=submit] {
  background-color: #7645d9;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 20px;
  cursor: pointer;
  transition: background-color 0.4s ease-in-out;
}

/* When the input field gets focus, change its width and style the search button */
input[type=search]:focus {
  width: 300px;
  border-color: #4CAF50;
  box-shadow: 0 0 8px 0 #4CAF50;
}

input[type=search]:focus + button[type=submit] {
  background-color: #333;
}

.search-container input[type="text"] {
  width: 300px;
  height: 35px;
  padding: 10px;
  font-size: 16px;
  border: none;
  border-radius: 20px;
  background-color: #f2f2f2;
}

	</style>
</head>
<body>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

	<div class="wrapper2">
		<div class="navbar">
			<div class="inner_navbar">
				<div class="logo">
					<a href="homepage.php">Raise <span>Up</span></a>
				</div>

				<div class="search-container">
<form action="discovercampaigns.php" method="get">
<input type="text" name="searchTerm" placeholder="Search...">
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>

				<div class="menu">
					<ul>
						<li><a href="homepage.php" class="active">Home &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
						<li><a href="discovercampaigns.php">Discover Campaigns</a></li>
						<li><a href="campaigncreation.php">Create Campaign</a></li>
						<li><a href="profile.php">My Account</a></li>
						<li><a href="logout.php">Logout &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
					</ul>
				</div>
			</div>
			<div class="hamburger">
				<i class="fas fa-bars"></i>
			</div>
		</div>
	</div>
</body>
</html>
