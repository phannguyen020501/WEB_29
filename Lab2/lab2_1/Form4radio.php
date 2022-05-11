<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Receiving Input</title>
</head>
<body>
	<font size=5>Thank You: Got Your Input.</font>
	<?php 
		$email = $_POST['email'];
		$contact = $_POST['contact'];

		print("<br>Your email address is $email");
		print("<br>Contact preference is $contact");
	 ?>
</body>
</html>