<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'info@mffc-wiesbaden.de'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "Anfrage MFFC  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "Sie haben eine Kontaktanfrage erhalten.\n\n"."Hier sind die Details:\n\nName: $name\n\nTelefon: $phone\n\nEmail: $email_address\n\nNachricht:\n$message";
$headers = "From: noreply@mffc-wiesbaden.de\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>