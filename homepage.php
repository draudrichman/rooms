<?php 
   require 'config.php';
 ?>


<!DOCTYPE html>
<html>
<head>
    <title>Raise Up Homepage</title>
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

@import url('https://fonts.googleapis.com/css2?family=Rancho&display=swap');

:root {
    --primary: #094b65;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    overflow-x: hidden;
    background: #fff;
    min-height: 100vh;
}

#header {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    padding: 30px 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
}

#header .logo {
    color: var(--primary);
    font-weight: 700;
    font-size: 2em;
    text-decoration: none;
}

#header ul {
    display: flex;
    justify-content: center;
    align-items: center;
}

#header ul li {
    list-style: none;
    margin-left: 20px;
}

#header ul li a {
    text-decoration: none;
    padding: 6px 15px;
    color: var(--primary);
    border-radius: 20px;
}

#header ul li a:hover,
#header ul li a.active {
    background: var(--primary);
    color: #fff;
}

section {
    position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

section::before {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100px;
    background: linear-gradient(to top, var(--primary), transparent);
    z-index: 10;
}

section img {
    position: absolute;
    top: 0px;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    pointer-events: none;
}

section #text {
    position: absolute;
    color: var(--primary);
    font-size: 10vw;
    text-align: center;
    line-height: .55em;
    font-family: 'Rancho', cursive;
    transform: translatey(-50%);
}

section #text span {
    font-size: .20em;
    letter-spacing: 2px;
    font-weight: 400;
}

#btn {
    text-decoration: none;
    display: inline-block;
    padding: 8px 30px;
    background: #fff;
    color: var(--primary);
    font-size: 1.2em;
    font-weight: 500;
    letter-spacing: 2px;
    border-radius: 40px;
    transform: translatey(100px);
}

.sec {
    position: relative;
    padding: 100px;
    background: var(--primary);
}

.sec h2 {
    font-size: 3.5em;
    color: #fff;
    margin-bottom: 10px;
}

.sec p {
    font-size: 1em;
    color: #fff;
}

footer {
    position: relative;
    padding: 0px 100px;
    background: var(--primary);
}

footer a {
    text-decoration: none;
    color: #fff;
}
    </style>
</head>
<body>
    <header id="header">
        <a href="homepage.php" class="logo">
          <img src="imgsrc/Raiseup.png" alt="Raise Up logo" width="100">
        </a>
        <ul>
            <li><a href="homepage.php" class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="discovercampaigns.php">Discover Campaigns</a></li>
            <li><a href="campaigncreation.php">Start a Campaign</a></li>
            <li><a href="profile.php">Profile</a></li>

            <?php
              // Start session
              // Check if user is logged in
              if (isset($_SESSION["id"])) {
                // If user is logged in, show "Log Out" link
                echo '<li><a href="logout.php">Log Out</a></li>';
              } else {
                // If user is not logged in, show "Sign In" link
                echo '<li><a href="signinup.php">Sign In</a></li>';
              }
              ?>
            <!-- <li><a href="signinup.php">Sign In</a></li> -->

        </ul>
    </header>
    
    <Section>
        <h2 id="text"><span>Empowering Dreams</span><br>Together</h2>
        
        <img src="https://user-images.githubusercontent.com/65358991/170092504-132fa547-5ced-40e5-ab64-ded61518fac2.png" id="bird1">
        <img src="https://user-images.githubusercontent.com/65358991/170092542-9747edcc-fb51-4e21-aaf5-a61119393618.png" id="bird2">
        <img src="https://user-images.githubusercontent.com/65358991/170092559-883fe071-eb4f-4610-8c8b-a037d061c617.png" id="forest">
                
        <img src="https://user-images.githubusercontent.com/65358991/170092605-eada6510-d556-45cc-b7fa-9e4d1d258d26.png" id="rocks">
        <img src="https://user-images.githubusercontent.com/65358991/170092616-5a70c4af-2eed-496f-bde9-b5fcc7142a31.png" id="water">
    </Section>
    
    <div class="sec" id="about">
        <h2>About </h2>
        <p>Raise Up is not just any crowdfunding platform. We are a community-driven platform that empowers passionate individuals to bring their innovative ideas to life. Our mission is to provide a platform where users can fund their passion projects, connect with like-minded individuals, and create something that can truly make a difference in the world. Whether it's a film, a book, a new invention, or a social initiative, we believe that everyone should have the opportunity to pursue their dreams and create something meaningful. That's why we have created a platform that not only makes it easy to raise funds but also provides the necessary support and resources to turn those dreams into reality.
<br><br>
At Raise Up, we are dedicated to promoting creativity, innovation, and community engagement. Our platform offers a unique opportunity for individuals to showcase their ideas, connect with backers, and bring their passion projects to life. Join us today and be a part of our vibrant community of dreamers and doers!<br><br>
We believe in transparency and accountability, and we are committed to ensuring that every donation is used for its intended purpose. With Raise Up, you can be confident that your contributions are making a meaningful difference in the world.

Join us in our mission to create a more just and equitable world. Whether you're looking to support a cause close to your heart or you're a nonprofit looking to raise funds, Raise Up is here to help you make a difference.
</p>
    </div>
    
    <footer>
        <a href=""></a>
    </footer>
    
    <script>
        let text = document.getElementById('text');
        let bird1 = document.getElementById('bird1');
        let bird2 = document.getElementById('bird2');
        let btn = document.getElementById('btn');
        let rocks = document.getElementById('rocks');
        let forest = document.getElementById('forest');
        let water = document.getElementById('water');
        let header = document.getElementById('header');
        
        window.addEventListener('scroll', function() {
            let value = window.scrollY;
            
            text.style.top = 50 + value * -.1 + '%';
            bird2.style.top = value * -1.5 + 'px';
            bird2.style.left = value * 2 + 'px';
            bird1.style.top = value * -1.5 + 'px';
            bird1.style.left = value * -5 + 'px';
            btn.style.marginTop = value * 1.5 + 'px';
            rocks.style.top = value * -.12 + 'px';
            forest.style.top = value * .25 + 'px';
            header.style.top = value * .5 + 'px';
        })
    </script>
    
</body>
</html>