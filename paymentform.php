<?php  
require 'config.php';
    $campaignID = $_GET['campaignID'];
    
    if(empty($_SESSION["id"])){
      // $id = $_SESSION["id"];
      header("Location: signinup.php");
    }

    $userID = $_SESSION["id"];

    $sql = "SELECT * FROM user_info WHERE id = '$userID'";
$result = mysqli_query($conn, $sql);
$userDetails = mysqli_fetch_assoc($result);

    //print_r($user);

    mysqli_close($conn);

    if(isset($_POST["nextscene"])){
    $paymentMethod = $_POST['radio-98'];
    $donationAmount = $_POST['donationAmount'];
    header("Location: paymentinfo.php?campaignID=$campaignID&paymentMethod=$paymentMethod&donationAmount=$donationAmount");
}

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		.group:after {
  content: "";
  display: block;
  clear: both;
}

.landing-page {
  width: 882px;
  margin: 100px auto 0;  
}

.landing-page *,
.landing-page *:before,
.landing-page *:after {
	-webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box; 
}

.landing-page .module {
	border: 1px solid rgb(219, 219, 219);
	border-radius: 4px;
	float: left;
	padding: 2em;
	width: 48%;
}

.landing-page .module > *:last-child,
.landing-page .module > *:last-child > *:last-child,
.landing-page .module > *:last-child > *:last-child > *:last-child {
	margin: 0;
	padding: 0;
}

.landing-page .note {	
	background-color: rgb(236, 248, 236);
	border: 1px dashed;	
	border-radius: 4px;	
	color: rgb(115, 136, 96);
	font-family: georgia;	
	font-size: .9em;
	font-style: italic;
	margin: 20px auto;
	padding: 2em;
}

.form-appointment {
	padding: 2em;
	background-color: rgb(239, 252, 239);
	border-radius: 4px;
	border: 1px solid rgb(130, 228, 130);
	box-shadow: 2px 2px 4px 0px rgba(0, 0, 0, 0.1);
	font-family: 'PT Sans', Arial, sans-serif;
	margin: 20px auto;
}

.form-appointment input[type=text],
.form-appointment input[type=email],
.form-appointment input[type=tel],
.form-appointment textarea {	
	border: 1px solid rgb(153, 202, 129);
	border-radius: .2em;	
	font-family: 'PT Sans', Arial, sans-serif;
	font-size: 1.1em;
	padding: .4em 1em;
	margin: 0 0 .8em;
	width: 100%;
  box-shadow: 0 0 8px rgba(0,0,0,.08) inset;
}

.form-appointment input[type=text],
.form-appointment input[type=email],
.form-appointment input[type=tel],
.form-appointment input[type=submit],
.form-appointment textarea {	
	-webkit-transition: all .2s ease-in-out;
	   -moz-transition: all .2s ease-in-out;
	        transition: all .2s ease-in-out;
}

.form-appointment input[type=text]:active,
.form-appointment input[type=text]:focus,
.form-appointment input[type=email]:active,
.form-appointment input[type=email]:focus,
.form-appointment input[type=tel]:active,
.form-appointment input[type=tel]:focus,
.form-appointment textarea:active,
.form-appointment textarea:focus {	
  outline: 0;
  box-shadow: 0 0 6px rgb(176, 226, 188);
}

.form-appointment textarea {
	height: 160px;
}

.form-appointment input[type=submit] {
	background-color: rgb(118, 207, 118);
	border: 1px solid rgb(134, 189, 134);
	border-radius: 4px;
	color: rgb(255, 255, 255);
	cursor: pointer;
	font-family: inherit;
	font-size: 1.4em;
	padding: 10px 18px;
}

.form-appointment input[type=submit]:hover {
	background-color: white;
	color: rgb(118, 207, 118);
}

.form-appointment .wpcf7-list-item-label {
	color: rgb(130, 178, 136);
}

span.wpcf7-list-item {
	display: block;
	margin-left: -.02em;
}

	</style>
</head>
<body>
	   <?php include('header-footer/headeruser.php'); ?>
			<div class="landing-page"><div class="form-appointment"><div class="wpcf7" id="wpcf7-f560-p590-o1">


	                <form class = "form" method="POST"> 

			<div style="display: none;">
			<input type="hidden" name="_wpcf7" value="560">
			<input type="hidden" name="_wpcf7_version" value="3.5">
			<input type="hidden" name="_wpcf7_locale" value="">
			<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f560-p590-o1">
			<input type="hidden" name="_wpnonce" value="dbb28877d5">
			</div>

			<div class="group">

			<div style="width: 48%; float: left;">
			<span class="wpcf7-form-control-wrap text-680"><input type="text" name="text-680" value="" size="45" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" placeholder="<?php  echo htmlspecialchars($userDetails['name']); ?>"></span><br>
			<span class="wpcf7-form-control-wrap email-680"><input type="email" name="email-680" value="" size="45" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" placeholder="<?php  echo htmlspecialchars($userDetails['email']); ?>"></span><br>
			<span class="wpcf7-form-control-wrap tel-630"><input type="tel" name="tel-630" value="" size="45" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" placeholder="<?php  echo htmlspecialchars($userDetails['phone']); ?>"></span><br>
			<span class="wpcf7-form-control-wrap textarea-398"><textarea name="textarea-398" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Special notes, concerns, or requirements"></textarea></span></div>

			<div style="width: 48%; float: right;">
				<span class="wpcf7-form-control-wrap donation-amount">
    <span class="currency">$</span>
    <input type="number" min = "0" name="donationAmount" value="" size="45" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required" aria-required="true" placeholder="Donation Amount" style="height: 40px; width: 300px;">
</span><br>

			<h4>Select payment method: </h4>
			<p><span class="wpcf7-form-control-wrap radio-98"><span class="wpcf7-form-control wpcf7-radio"><span class="wpcf7-list-item"><label>
				<input type="radio" name="radio-98" value="Card">&nbsp;<span class="wpcf7-list-item-label">Card</span></label></span><span class="wpcf7-list-item"><label>
					<input type="radio" name="radio-98" value="MFS">&nbsp;<span class="wpcf7-list-item-label">MFS</span></label></span></span></span></p>
			</div>

			<!-- <div style="text-align: center; padding-top: 2em; border-top: 1px solid rgb(153, 202, 129); margin-top: 1em;"><input type="submit" style="margin-top: 10em;" value="Proceed to Payment" class="wpcf7-form-control wpcf7-submit"><img class="ajax-loader" src="http://www.professionalaudiologicalservices.com/wp-content/plugins/contact-form-7/images/ajax-loader.gif" alt="Sending ..." style="visibility: hidden;"></div> -->

			<div style="text-align: center; padding-top: 2em; border-top: 1px solid rgb(153, 202, 129); margin-top: 1em;" class="mt-5 text-right"><button class="btn btn-primary profile-button" type='submit' name="nextscene">Proceed to Payment</button></div>

			  <div class="wpcf7-response-output wpcf7-display-none"></div></form></div></div></div>
</body>
</html>