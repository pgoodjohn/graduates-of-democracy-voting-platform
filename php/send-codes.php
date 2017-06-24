<?php

include 'scripts.php';

$query = "SELECT * FROM User";
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_array($result)){
		print_r($row);

		echo '<br>';

		$email = strtolower($row['Email']);

		echo '<b>Email</b>: ' . $email . '<br>';

		$name = strtolower($row['Name']);

		echo '<b>Name</b>: ' . $name .'<br>';

		$token = Generate16CharId();

		echo '<b>Password:</b> ' . $token . '<br>';

		$mailMessage = '<html><body><h1>Attention!</h1><h3>These are the official voting credentials.</h3><p>In order to access the voting page you will need the following credentials:<br>';
		$mailMessage .= '<b>Name: </b>' . ucwords($name) . '<br>';
		$mailMessage .= '<b>Email: </b>' . $email . '<br>';
		$mailMessage .= '<b>Password: </b>' . $token . '<br>';
		$mailMessage .= 'In order to vote, click <a href="bit.ly/graduatesOfDemocracy2016">here</a> or copy the following link in your address bar: <br> bit.ly/graduatesOfDemocracy2016</p><p>Voting will be open from 10 August 2016, 08:00 CET to 14 August 2016, 23:59 CET.</p>
			<p>Please, do not open the link beforehand.</p></body></html>';

		$mailObject = 'Graduates Of Democracy Online Voting Platform Login Details';

		$mailHeaders = "From: registration@graduatesofdemocracy.com\r\n";
		$mailHeaders .= "MIME-Version: 1.0\r\n";
		$mailHeaders .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		if(mail($email, $mailObject, $mailMessage, $mailHeaders)){
			print_r($mailMessage);
		} else{
			echo 'failure!';
		}
		
		$encryptedToken = hash('sha512', $token);

		$query = "UPDATE  `User` SET  `Code` =  '$encryptedToken' WHERE  `User`.`Email` ='$email'";

		mysqli_query($con, $query);
}
die();