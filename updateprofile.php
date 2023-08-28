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

    //Updating the profile
    if(isset($_POST["updateprofile"])){

        $id = $_SESSION["id"];
        $username = $_POST["username"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $organization = $_POST["organization"];
        $phone = $_POST["phone"];
        $image = $_POST["image"];

        $query = "UPDATE user_info SET username = '$username', name = '$name', email = '$email', address = '$address', organization = '$organization', phone = '$phone', image = '$image' WHERE id = '$id'";

        if (mysqli_query($conn, $query)) {
        echo "<script> alert('Data updated successfully'); </script>";
        } else {
            echo "<script> alert('Data update failed'); </script>";
        }
        echo '<meta http-equiv="refresh" content="0">';
        header("Location: profile.php");
    }

  	mysqli_close($conn);


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Profile</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
                    body {
              background: #7645d9;
            }

            .form-control:focus {
              box-shadow: none;
              border-color: #7645d9;
            }

            .profile-button {
              background: #7645d9;
              box-shadow: none;
              border: none;
            }

            .profile-button:hover {
              background: #682773;
            }

            .profile-button:focus {
              background: #682773;
              box-shadow: none;
            }

            .profile-button:active {
              background: #682773;
              box-shadow: none;
            }

            .back:hover {
              color: #682773;
              cursor: pointer;
            }

    </style>

	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Press+Start+2P&display=swap" rel="stylesheet">

</head>
<body>
<?php include('header-footer/headeruser.php'); ?>

	<div class="container rounded bg-white mt-5">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img src="<?php  echo htmlspecialchars($user['image']); ?>" alt="user" height="150"><span class="font-weight-bold"><?php  echo htmlspecialchars($user['name']); ?></span><span class="text-black-50"><?php  echo htmlspecialchars($user['email']); ?></span></div>
            </div>
            <div class="col-md-8">
                <form class = "form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <a href="homepage.php" class="d-flex flex-row align-items-center back">
                            <i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                            <h6>Back to home</h6>
                        </a>

                        <h6 class="text-right">Edit Profile</h6>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><input type="text" class="form-control" id="name" name = "name" placeholder="Full Name" value="<?php  echo htmlspecialchars($user['name']); ?>"></div>
                        <div class="col-md-6"><input type="text" class="form-control" id="username" name = "username" placeholder="Username" value="<?php  echo htmlspecialchars($user['username']); ?>"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><input type="text" class="form-control" id="email" name = "email" placeholder="Email" value="<?php  echo htmlspecialchars($user['email']); ?>"></div>
                        <div class="col-md-6"><input type="number" class="form-control" id="phone" name = "phone" placeholder="Phone" value="<?php  echo htmlspecialchars($user['phone']); ?>"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><input type="text" class="form-control" id="organization" name = "organization"placeholder="Organization" value="<?php  echo htmlspecialchars($user['organization']); ?>"></div>
                        <div class="col-md-6"><input type="text" class="form-control" id="address" name = "address" placeholder="Address" value="<?php  echo htmlspecialchars($user['address']); ?>"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><input type="text" class="form-control" id="image" name = "image"placeholder="Image Link" value="<?php  echo htmlspecialchars($user['image']); ?>"></div>
            
                    </div>
                    
                    <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type='submit' name="updateprofile">Save Profile</button></div>
                </div>
                                    </form>

            </div>
        </div>
    </div>
</body>
</html>
