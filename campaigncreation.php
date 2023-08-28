<?php

  require 'config.php';
  if(empty($_SESSION["id"])){
    header("Location: signinup.php");

  }


  if(isset($_POST["createcampaign"])){
    
    $stmt = $conn->prepare("INSERT INTO campaign (userID, title, description, goalAmount, currentAmount, statusID, currency, categoryID, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("isssisiss", $id, $title, $description, $goal, $currentAmount, $statusID, $currency, $category, $image);

$id = $_SESSION['id'];
$title = $_POST["title"];
$goal = $_POST["goal"];
$currentAmount = 0; // Default value for currentAmount
$statusID = 1; // Default value for statusID
$currency = $_POST["currency"];
$category = $_POST["category"];
$image = $_POST["imagelink"];
$description =  $_POST["description"]; // Cleaned description here

$stmt->execute();

echo "<script> alert('Campaign Created Successfully'); </script>";

$stmt->close();

     
  }
  

?>

 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Create Campaign</title>
   <link rel="stylesheet" href="campaigncreation.css">
 </head>
 <body>
   <?php include('header-footer/headeruser.php'); ?>


  <!-- <form action="" method="POST" class='form'> -->
    <form class = "form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <p class='field required'>
    <label class='label required' for='name'>Campaign Title</label>
    <input class='text-input' id='name' name='title' required type='text' placeholder="A brief and catchy title for the campaign">
  </p>
  
  <p class='field required'>
    <label class='label' for='login'>Goal</label>
    <input class='text-input' id='login' name='goal' required type='number' min = "0" placeholder="The amount of money the campaign is aiming to raise">
  </p>

  <div class='field'>
    <label class='label'>Currency</label>
    <ul class='checkboxes'>
      <li class='checkbox'>
        <input class='checkbox-input' id='choice-0' name='currency' type='radio' value='$'>
        <label class='checkbox-label' for='choice-0'>USD</label>
      </li>
      <li class='checkbox'>
        <input class='checkbox-input' id='choice-1' name='currency' type='radio' value='€'>
        <label class='checkbox-label' for='choice-1'>EUR</label>
      </li>
      <li class='checkbox'>
        <input class='checkbox-input' id='choice-2' name='currency' type='radio' value='৳'>
        <label class='checkbox-label' for='choice-2'>BDT</label>
      </li>
      <li class='checkbox'>
        <input class='checkbox-input' id='choice-3' name='currency' type='radio' value='£'>
        <label class='checkbox-label' for='choice-3'>GBP</label>
      </li>
      
    </ul>
  </div>
  <div class='field'>
    <label class='label'>Category</label>
    <ul class='options'>
      <li class='option'>
        <input class='option-input' id='option-0' name='category' type='radio' value='1'>
        <label class='option-label' for='option-0'>Charity</label>
      </li>
      <li class='option'>
        <input class='option-input' id='option-1' name='category' type='radio' value='2'>
        <label class='option-label' for='option-1'>Creative</label>
      </li>
      <li class='option'>
        <input class='option-input' id='option-2' name='category' type='radio' value='3'>
        <label class='option-label' for='option-2'>Artist & Content Creators</label>
      </li>
      
    </ul>
  </div>
  <p class='field'>
    <label class='label' for='about'>Description</label>
    <textarea class='textarea' cols='50' id='about' name='description' rows='4' placeholder="A detailed description of the campaign that explains the purpose, goals, and how the funds raised will be used."></textarea>
  </p>

  <p class='field required'>
    <label class='label' for='login'>Image Link</label>
    <input class='text-input' id='login' name='imagelink' required type='text' placeholder="Place a link of your image">
  </p>

  <p class='field half'>
    <label class='label' for='image'>Upload Image</label>
        <input type="file" id="image" name="image" accept="image/*">

  

  </p> 
   <p class='field half'>
    <button class='button' type='submit' name="createcampaign">Create Campaign</button>
  </p>

  

</form>


 </body>
 </html>