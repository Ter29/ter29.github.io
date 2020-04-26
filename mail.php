<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];
	$body = "from: $name($mail)\n $message";
	$to = "qvercus1965@gmail.com";
	if (mail($to, $subject, $body)){
		echo("<p>Emeil successfully sent!</p>");
	}else{
		echo("<p>Emeil delivery failde...</p>");
	}
