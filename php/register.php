<?php
	include_once 'scripts.php'; 

	function Generate16CharId(){
		/*GENERATE RANDOM TOKEN FUNCTION
			*USING PHP 7.0 RANDOM FUNCTION GENERATES A CRYPTOGRAPHIC KEY TO BE USED AS A TOKEN FOR THE LOGIN
			*THE FUNCTION RETURNS A BINARY STRING SO IT GETS CONVERTED WITH THE BIN2HEX FUNCTION
			*THE GENERATED SALT IS 16 CHARACHTERS LONG
		*/
		try {
			$string = random_bytes(8);
		} catch (TypeError $e) {
			// Well, it's an integer, so this IS unexpected.
			die("An unexpected error has occurred");
		} catch (Error $e) {
			// This is also unexpected because 32 is a reasonable integer.
			die("An unexpected error has occurred");
		} catch (Exception $e) {
			// If you get this message, the CSPRNG failed hard.
			die("Could not generate a random string. Is our OS secure?");
		}
		$string = bin2hex($string);
		return $string;
	}
	

	function createUserRow($name, $email, $token){
		global $con;
		
		/* create a prepared statement */
		if($stmt = mysqli_prepare($con, "INSERT INTO `User` (`UserId`, `Email`, `Name`, `Code`, `HasVoted`) VALUES (?, ?, ?, ?, 0)")){
			/* bind parameters for markers */
			if(!mysqli_stmt_bind_param($stmt, "isss", $null, $email, $name, $token)){
				$error = "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error . '<br>';
			}
			/* execute query */
			if(!mysqli_stmt_execute($stmt)){
				$error = "Execute failed: (" . $stmt->errno . ") " . $stmt->error . '<br>';
			}
			/* closes statement and frees $stmt variable*/
			mysqli_stmt_close($stmt);
		}
		else{
			$error = "Preparing statement failed: (" . $stmt->errno . ") " . $stmt->error . '<br>';
		}
	}

	//This variable is the secret key that is used to add users to the database and send them the email.
	//It should be known only by the external part that is in charge of the database in order to avoid any frauds
	$secretKey = '';
	
	$email = '';
	$name = '';
	$token = '';

	if($_POST['code'] === $secretKey){
		print_r($_POST);

		echo '<br>';

		$email = strtolower($_POST['email']);

		echo '<b>Email</b>: ' . $email . '<br>';

		$name = strtolower($_POST['name']);

		echo '<b>Name</b>: ' . $name .'<br>';

		$token = Generate16CharId();

		echo '<b>Token:</b> ' . $token . '<br>';

		$mailMessage = '<html><body><p>In order to access the voting page you will need the following credentials:<br>';
		$mailMessage .= '<b>Name: </b>' . ucwords($name) . '<br>';
		$mailMessage .= '<b>Email: </b>' . $email . '<br>';
		$mailMessage .= '<b>Token: </b>' . $token . '<br>';
		$mailMessage .= 'In order to vote, click <a href="bit.ly/graduatesOfDemocracy2016">here</a> or paste the following link in your address bar: <br> bit.ly/graduatesOfDemocracy2016</p></body></html>';

		$mailObject = 'Graduates Of Democracy Online Voting Platform Login Details';

		$mailHeaders = "From: noreply@graduatesofdemocracy.com\r\n";
		$mailHeaders .= "MIME-Version: 1.0\r\n";
		$mailHeaders .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		mail($email, $mailObject, $mailMessage, $mailHeaders);
		
		$encryptedToken = hash('sha512', $token);

		createUserRow($name, $email, $encryptedToken);
		
		header("Location:../register.php");
		exit;

	} else{
		echo '<br>Your code appears to be wrong, sorry!';
		echo '<br>Go <a href="../register.php">back</a> to the register page.';
	}

?>
