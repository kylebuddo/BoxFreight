<?php

if (isset($_POST['contact_name']) && isset($_POST['contact_phoneno']) && isset($_POST['contact_email']) && isset($_POST['contact_message'])) {

	$contact_name = $_POST['contact_name'];
	$contact_phoneno = $_POST['contact_phoneno'];
	$contact_email = $_POST['contact_email'];
	$contact_message = $_POST['contact_message'];

	
	if (!empty($contact_name) && !empty($contact_phoneno) && !empty($contact_email) && !empty($contact_message)) {

		if (strlen($contact_name) > 30 || strlen($contact_email) > 65 || strlen($contact_message) > 1200){

			

		}
		else
		{
			$to = 'buddokyle@gmail.com';
			$subject = 'enquiry email';
			$body = $contact_name."\n".$contact_phoneno."\n".$contact_message;
			$headers = 'From: '.$contact_email;

			if (@mail($to, $subject, $body, $headers)) {
				echo 'thanks for contacting us';
			}
			else
			{
				echo 'sorry, your email was unable to send at this time';
			}
		}

	}
	else
	{
		echo 'all fields required';
	}
}

?>