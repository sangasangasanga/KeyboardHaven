<?php 
	// include('lib/mailgun/src/Mailgun.php');

	// $mail = new PHPMailer;


	// $mail->isSMTP();                                      // Set mailer to use SMTP
	// $mail->Host = 'smtp.mailgun.org';                     // Specify main and backup SMTP servers
	// $mail->SMTPAuth = true;                               // Enable SMTP authentication
	// $mail->Username = 'postmaster@YOUR_DOMAIN_NAME';   // SMTP username
	// $mail->Password = 'secret';                           // SMTP password
	// $mail->SMTPSecure = 'tls';                            // Enable encryption, only 'tls' is accepted

	// $mail->From = 'YOU@YOUR_DOMAIN_NAME';
	// $mail->FromName = 'Mailer';
	// $mail->addAddress('bar@example.com');                 // Add a recipient

	// $mail->WordWrap = 50;                                 // Set word wrap to 50 characters

	// $mail->Subject = 'Hello';
	// $mail->Body    = 'Testing some Mailgun awesomness';

	// if(!$mail->send()) {
	//     echo 'Message could not be sent.';
	//     echo 'Mailer Error: ' . $mail->ErrorInfo;
	// } else {
	//     echo 'Message has been sent';
	// }

	# Include the Autoloader (see "Libraries" for install instructions)

	// include('lib/mailgun/src/Mailgun.php');
	// include('lib\mailgun\src\HttpClient\HttpClientConfigurator.php');
	// include('lib\mailgun\src\Api\HttpApi.php');

	// include('lib\mailgun\src\Api\Message.php');
	
	require 'vendor/autoload.php';
	use Mailgun\Mailgun;
	# Instantiate the client.
	$mgClient = new Mailgun('cafb8afb619764588d14aaea725f3fc5-bbbc8336-36de38b9');
	$domain = "KeyboardHaven.com";
	# Make the call to the client.
	$result = $mgClient->sendMessage($domain, array(
		'from'	=> 'patrick<mailgun@KeyboardHaven.com>',
		'to'	=> 'msndocument@hotmail.com',
		'subject' => 'Hello',
		'text'	=> 'Testing some Mailgun awesomness!'
	));

?>