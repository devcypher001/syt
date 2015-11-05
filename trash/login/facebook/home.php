<?php
/*
Author: Shahrukh Khan
Website: http://www.thesoftwareguy.in
Date: 18 August, 2013
*/
require_once("configure.php");
if (!isset($_SESSION["user_id"]) && $_SESSION["user_id"] == "" ) {
	// check if session expired
	redirectURL(SITE_URL);
}
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<div id="container">
<div id="body">
    <div class="mainTitle" >User Information</div>
    <div style="text-align:center;">
        <a href="<?php echo $logoutURL; ?>"><img src="fb_logout.png" width="72" height="21" border="0" alt="Facebook Logout" /></a>   <br><br>
    </div>
	<?php  
	// uncomment to see all details of user
	#debugResults($user_profile);
	?> 
    <div class="resultRow">
        <strong>Name:</strong> <?php echo stripslashes($user_profile["name"]); ?>
    </div>
    <div class="resultRow">
        <strong>Profile Pic:</strong> <img src="https://graph.facebook.com/<?php echo $userID; ?>/picture">
    </div>
    <div class="resultRow">
        <strong>Gender:</strong> <?php echo stripslashes($user_profile["gender"]); ?>
    </div>
    <div class="resultRow">
        <strong>Email:</strong> <?php echo stripslashes($user_profile["email"]); ?>
    </div>
    <div class="resultRow">
        <strong>Profile Link:</strong> <a href="<?php echo stripslashes($user_profile["link"]); ?>" target="_blank"><?php echo stripslashes($user_profile["link"]); ?></a>
    </div>
   
    
    <?php
	  try {
		// fetch user details.
		$user_friends = $facebook->api('/me/friends/');
		#debugResults($user_friends);	
	  } catch (FacebookApiException $e) {
		#debugResults($e);
	  }
	?>
    
   
</div>
</div>

</body>
</html>