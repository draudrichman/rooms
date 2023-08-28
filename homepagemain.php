<?php 
   require 'config.php';
  if(empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    header("Location: signinup.php");
  }

  $sql = 'SELECT title, description, goalAmount FROM campaign';

  $result = mysqli_query($conn, $sql);

  $campaigns = mysqli_fetch_all($result, MYSQLI_ASSOC);

  mysqli_free_result($result);

  // close connection
  mysqli_close($conn);


 ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
    *,
*::before,
*::after { 
  box-sizing: border-box;
}

html {
  background-color: #f0f0f0;
}

body {
  color: #999999;
  font-family: 'Roboto','Helvetica Neue', Helvetica, Arial, sans-serif;
  font-style: normal;
  font-weight: 400;
  letter-spacing: 0;
  padding: 1rem;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  -moz-font-feature-settings: "liga" on;
}

img {
  height: auto;
  max-width: 100%;
  vertical-align: middle;
}

.btn {
  background-color: white;
  border: 1px solid #cccccc;
  color: #696969;
  padding: 0.5rem;
  text-transform: lowercase;
}

.btn--block {
  display: block;
  width: 100%;
}
 
.cards {
  display: flex;
  justify-content: center;
}

.cards__item {
  display: inline-block;
  padding: 1rem;
  vertical-align: top;
}

@media (min-width: 40rem) {
  .cards__item {
    width: 50%;
  }
}

@media (min-width: 56rem) {
  .cards__item {
    width: 33.3333%;
  }
}

.card {
  width: 300px;
  height: 500px;
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0,0,0,0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.card:hover .card__image {
  filter: contrast(100%);
}

.card__content {
  height: 200px; /* Set a fixed height for the card content */
  display: flex;
  flex-direction: column;
  padding: 1rem;
}

.card__image {
  height: 70%;
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
  filter: contrast(70%);
  overflow: hidden;
  position: relative;
  transition: filter 0.5s cubic-bezier(.43,.41,.22,.91);
}



.card__image::before {
  content: "";
  display: block;
  padding-top: 56.25%; /* 16:9 aspect ratio */
}

@media (min-width: 40rem) {
  .card__image::before {
    padding-top: 66.6%; /* 3:2 aspect ratio */
  }
}

.card__image--flowers {
  background-image: url(https://unsplash.it/800/600?image=82);
}

.card__image--river {
  background-image: url(https://unsplash.it/800/600?image=11);
}

.card__image--record {
  background-image: url(https://unsplash.it/800/600?image=39);
}

.card__image--fence {
  background-image: url(https://unsplash.it/800/600?image=59);
}

.card__title {
  color: #696969;
  font-size: 1.25rem;
  font-weight: 300;
  letter-spacing: 2px;
  text-transform: uppercase;
}

.card__text {
  flex: 1 1 auto;
  font-size: 0.

  </style>
  <title></title>
</head>
<body>
  <ul class="cards">
  <?php foreach($campaigns as $campaign){ ?>
    <li class="cards__item">
      <div class="card">
        <div class="card__image card__image--fence"></div>
        <div class="card__content">
          <div class="card__title"><?php echo htmlspecialchars($campaign['title']); ?></div>
          <p class="card__text"><?php echo htmlspecialchars($campaign['goalAmount']); ?></p>
          <button class="btn btn--block card__btn">Button</button>
        </div>
      </div>
    </li>
  <?php } ?>
</ul>


</body>
</html>