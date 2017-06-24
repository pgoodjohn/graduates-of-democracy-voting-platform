<?php

include 'scripts.php';
include 'PHPMailer/PHPMailerAutoload.php';

$query = "SELECT * FROM user";
$result = mysqli_query($con, $query);
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'in-v3.mailjet.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'b902bb928d2598014467825e2a9fa25c';                 // SMTP username
$mail->Password = '7a3300a57f12503228049a3736239953';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;                                    // TCP port to connect to
$mail->Subject = 'Graduates Of Democracy Online Voting Platform Login Details';
$mail->setFrom('noreply@graduates.com', 'Graduates Mailer');
$mail->isHTML(true);
while($row = mysqli_fetch_array($result)){
		print_r($row);

		echo '<br>';

		$email = strtolower($row['Email']);

		echo '<b>Email</b>: ' . $email . '<br>';

		$name = strtolower($row['Name']);

		echo '<b>Name</b>: ' . $name .'<br>';

		$token = Generate16CharId();

		echo '<b>Password:</b> ' . $token . '<br>';

		$mail->addAddress($email, ucwords($name));     // Add a recipient

		$mailMessage = '<html><body><h1>Attention!</h1><h3>These are the official voting credentials.</h3><p>In order to access the voting page you will need the following credentials:<br>';
		$mailMessage .= '<b>Name: </b>' . ucwords($name) . '<br>';
		$mailMessage .= '<b>Email: </b>' . $email . '<br>';
		$mailMessage .= '<b>Password: </b>' . $token . '<br>';
		$mailMessage .= 'In order to vote, click <a href="http://bit.ly/graduates2017">here</a> or copy the following link in your address bar: <br> http://bit.ly/graduates2017</p><p>Voting will be open from 10 August 2016, 08:00 CET to 14 August 2016, 23:59 CET.</p>
			<p>Please, do not open the link beforehand.</p></body></html>';

		$mail->Body = $mailMessage;

		if(!$mail->send()) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
		    echo 'Message has been sent';
		}
		
		$encryptedToken = hash('sha512', $token);

		$query = "UPDATE  `User` SET  `Code` =  '$encryptedToken' WHERE  `User`.`Email` ='$email'";

		mysqli_query($con, $query);
}
die();