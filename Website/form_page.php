<html>
<title>Form Page</title>
<body>

<?php
	$name=$_POST['name'];
	$visitor_email=$_POST['email'];
	$message=$_POST['message'];
?>
<?php
	$email_from='yourname@yourwebsite.com';
	$email_subject="New Form Submission";
	$email_body="You have received a new message from the user $name.\n. Here is the message: \n $message.";
?>
<?php
	$to="kathleen.kasel@tracegains.com";
	$headers="From: $email_from \r\n";
	mail($to,$email_subject,$email_body,$headers);
?>
<?p
	function IsInjected($str) {
		$injections=array(
			'(\n+)',
			'(\r+)',
			'(\t+)',
			'(%0A+)',
			'(%0D+)',
			'(%08+)',
			'(%09+)'			
		);
		$inject=join('|', $injections);
		$inject="/$inject/i";
		
		if(preg_match($inject,$str)){
			return true;
		}
		else{
			return false;
		}
	}
	if(IsInjected($visitor_email)){
		echo "Bad email value!";
		exit;
	}
?>
	
</body>
</html>