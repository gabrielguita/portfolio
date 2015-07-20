<?php

 
// Here we get all the information from the fields sent over by the form.
 
	//$index = 1;
	$name = isset($_POST['name']) ? $_POST['name'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$message = isset($_POST['message']) ? $_POST['message'] : '';

$to = 'hello@gabrielguita.com';
$subject = 'gabrielguita.com';
$message = 'FROM: '.$name.'\nEmail: '.$email.'\nMessage: '.$message;
$headers = 'From: hello@gabrielguita.com' . "\r\n";
 
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
//var_dump($name);
//var_dump($email);
//var_dump($message);
mail($to, $subject, $message, $headers); //This method sends the mail.
echo "Your email was sent! zzz"; // success message
}else{
echo "Invalid Email, please provide an correct email.zzzf";
}

 

?>