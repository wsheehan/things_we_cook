<?php

	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);
	$email = $request->author;
	$comment = $request->comment;
	$quantity = $request->quantity;
	$address = $request->address;
	$address2 = $request->address2;
	$name = $request->name;
	$url = $request->url;
	$radio = $request->radio;
	
	// in case PHP testing is necessary
	// $email = $_POST["email"];
	// $comment = $_POST["comment"];
	// $url = $_POST["url"];
	// $name = $_POST["name"];
	// $quantity = $_POST["quantity"];
	// $address = $_POST["address"];
	// $address2 = $_POST["address2"];

	
	
	$from = 'webmaster@thethingswecook.com'; // this email address must be created in cPanel
		
	$to = 'green.hope.farm@valley.net'; // this email address should be the recipient of the emails
	
	// the following is the email markup--can be customized
	$subject = "New Cookbook Order!";
	$mailer_body = "New message from " .  $email . "\n\n" . "You can reply directly to this email. Here is the message:" . "\n\n" . "Cookbook order by:" . $name . "\n" . $address . "\n" . $address2 . "\n\n" . "Quantity: " . $quantity . "\n\n" . $radio . "\n\n" . $comment;
	$headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $email . "\r\n" . 'X-Mailer: PHP/' . phpversion();
	
	 
	if(isset($url) && $url != '') {
     	echo '<h2>No SPAM please.</h2>';
		exit();
  	} else if($mailer_body && $email) {
     	echo '<h2>Thank you for your inquiry!</h2>';
		if(mail($to, $subject, $mailer_body, $headers)) {
			echo "Success!";
		} else {
			echo "Fail!";
		};
  	} else {
		exit();	
	};
		
	
?>