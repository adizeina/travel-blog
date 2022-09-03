<?php
 
if (isset($_POST["submit"])){
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['email'];
	$message= $_POST['message'];


	$mailTo = "zeina.adi@mail.utoronto.ca";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an email from ".$name.".\n\n".$message;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: thankyoupage.php?mailsent");  //will appear in the url, WHERE to redirect someone after email has been sent. Try this later on Location: contactform-thank-you.html

}