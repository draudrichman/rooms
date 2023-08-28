<?php

  require 'config.php';
  if(!empty($_SESSION["id"])){
    header("Location: homepage.php");
  }

  // Checking Signin
  
  if(isset($_POST["signinsubmit"])){
  
    $usernameemail = $_POST["signinusernameemail"];
    $password = $_POST["signinpassword"];
    $result = mysqli_query($conn, "SELECT user_info.id, user_info.name, user_info.username, user_info.email, user_info.password, user_info.organization, user_info.address, roles.roleName FROM user_info, roles WHERE user_info.roleID = roles.roleID AND (username = '$usernameemail' OR email = '$usernameemail')");
    $row = mysqli_fetch_assoc($result);
    
    if(mysqli_num_rows($result) > 0){
    
      if($password == $row['password']){
        $_SESSION["login"] = true;
        $_SESSION["id"] = $row["id"];

        if ($row['roleName'] == "Admin") {
            header("Location: admindashboard.php");
        }
        else {
            header("Location: homepage.php");
            

        }
      }
      else{
        echo "<script> alert('Wrong Password'); </script>";
      }
    }
    else{
      echo "<script> alert('User Not Registered'); </script>";
    }
  }


  // Checking Sign Up

  if(isset($_POST["signupsubmit"])){
    
    $name = $_POST["signupname"];
    $username = $_POST["signupusername"];
    $email = $_POST["signupemail"];
    $password = $_POST["signuppassword"];
    $confirmpassword = $_POST["signupconfirmpassword"];
    $role = $_POST['signup_role'];
    $duplicate = mysqli_query($conn, "SELECT * FROM user_info WHERE username = '$username' OR email = '$email'");

  
    if(mysqli_num_rows($duplicate) > 0){
      echo "<script> alert('Username or Email Has Already Taken'); </script>";
    }
    else{
      if($password == $confirmpassword){
        
        // $query = "INSERT INTO user_info VALUES('','$name','$username','$email','$password')";
        $query = "INSERT INTO user_info (name, username, email, password, roleID) SELECT '$name', '$username', '$email', '$password', roleID FROM roles WHERE roleName = '$role'";
        
        mysqli_query($conn, $query);
      
        echo "<script> alert('Registration Successful'); </script>";
      }
      else{
        echo "<script> alert('Password Does Not Match'); </script>";
      }
    }
  }

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>Sign In/Sign Up</title>
 </head>

 <body>
    <div>
        <a href="homepage.php">
            <img src="imgsrc//Raiseup-4.png" alt="Raise Up Logo" width="200" height="200" href>
        </a>
    </div>

<div class="container" id="container">
    <!-- SIGN UP DIV -->
    <div class="form-container sign-up-container">
        <form action="" method="POST">
            <h1>Create Account</h1>
            <input type="text" name="signupname" id = "signupname" required value="" placeholder="Name" />
            <input type="text" name="signupusername" id = "signupusername" required value="" placeholder="Username" />
            <input type="email" name="signupemail" id = "signupemail" required value="" placeholder="Email" />
            <input type="password" name="signuppassword" id = "signuppassword" required value="" placeholder="Password" />
            <input type="password" name="signupconfirmpassword" id = "signupconfirmpassword" required value="" placeholder="Confirm Password" />
            <!-- <input type="text" name="signup_role" id = "signup_role" required value="" placeholder="Role" /> -->
            <select name="signup_role" id="signup_role" class="signup_role_dropdown" required>
                <option value="">Select a role</option>
                <option value="Donor">Donor</option>
                <option value="Fundraiser">Fundraiser</option>
            </select>
            <button type="submit" name="signupsubmit" class = "signupsubmitbutton">Sign Up</button>
        </form>
    </div>

    <!-- SIGN IN DIV -->
    <div class="form-container sign-in-container">
        <form action="" method="POST">
            <h1>Sign in</h1>
            <input type="text" name="signinusernameemail" id = "signinusernameemail" required value="" placeholder="Email or Username" />
            <input type="password" name="signinpassword" id = "signinpassword" required value="" placeholder="Password" />
            <a href="#">Forgot your password?</a>
            <button type="submit" name="signinsubmit">Sign In</button>
        </form>
    </div>

    <!-- SIDE PANEL DIV -->
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To access all the amazing projects and campaigns on our site, please sign in here</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Don't have an account yet? No problem, sign up and start contributing to the causes you care about today.</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});
</script>

</body>
</html>






