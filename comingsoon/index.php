<?php

if(isset($_POST['submit'])){
	$email = $_POST['email'];
    $to = "nicolalazzari@gmail.com"; // email address
    $from = "info@nicolabs.co.uk"; // this is the sender's Email address
    $subject = "Keep in touch...";
    // Compose a simple HTML email message
    $message = "New keep in touch subscriber: please email " . $email . " when ready!";
    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    // Create email headers
    $headers .= 'From: '.$from."\r\n".'Reply-To: '.$from."\r\n" .'X-Mailer: PHP/' . phpversion();
	// Check if email has been entered and is valid
	if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$confirmMsg = 'Please enter a valid email address';
	}
	// If there are no errors, send the email
	if ( !$confirmMsg ) {
		if (mail ($to,$subject,$message,$headers)) {
		$confirmMsg = "<div class=\"alert alert-info\" role=\"alert\">Thanks for joining! We'll keep in touch.</div>";
	} else {
		$confirmMsg = "<div class=\"alert alert-info\" role=\"alert\">Please enter a valid email address.</div>";
	}
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Coming Soon</title>
<link href="tools/style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="tools/font-awesome/css/font-awesome.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="tools/jquery.min.js"></script> 
<link href="https://file.myfontastic.com/n6vo44Re5QaWo8oCKShBs7/icons.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat');
</style>
</head>
<body>
<div class="transy"></div>
<div class="wrapper">
	<div class="centered">
		<div class="header">
			<img class="logo" width="340" src="images/logo.svg" alt="nicolabs">
			<p class="line1">- design & development -</p>
		</div>
		
		<div class="content">
				<p>I'm working on something very interesting!</p>
		</div>
		
		
		

		
		<div class="form">
			<p>Be notified, I just need your email address.</p>
			<div class="mainform">
                <form method="post" action="index.php">
				<div class="field"><input type="email" class="form-control" id="email" name="email" placeholder="your email here" value="<?php echo htmlspecialchars($_POST['email']); ?>"></div>
				<div class="submit"><input class="submit" type="submit" name="submit" value="Okay" /></div>		
                </form>
			</div>
		</div>
		<div style="clear:both;"></div>
					<div class="message-status">
          		<?php print ($confirmMsg);?>
		 	</div>
		
		
		<div class="social">
		<p>
			<a href="#"><span class="socicon-pinterest"></span></a>
			<a href="#"><span class="socicon-instagram"></span></a>
			<a href="#"><span class="socicon-twitter"></span></a>
			<a href="#"><span class="socicon-facebook"></span></a>
		</p>
		</div>
	</div>
</div>

	
	


</body>
</html>
