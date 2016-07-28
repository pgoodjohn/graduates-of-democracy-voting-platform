<?php
	include_once("scripts.php");

	function logAccess($email){
		global $con;
		$logfile = "Logs/access.log";
		$ip = getClientIp(); 
		$d = strtotime("now");
		$txt = "[" . date('j-M-Y G:i:s', $d) . "] createUserRow() on [php/register.php]: User logged in with email: " . $email . " from location:" . $ip . PHP_EOL;	
		file_put_contents($logfile, $txt, FILE_APPEND);
	}

	$email = $_POST['email'];

	echo $email . '<br>';

	$code = $_POST['code'];

	echo $code . '<br>';

	if(findEmailInDatabase($email)){
		header("Location:../error.php?err_type=1");
		exit;
	}

	$UserId = getUserIdByEmail($email);

	echo $UserId . '<br>';

	$name = getNameByUserId($UserId);

	if($name != strtolower($_POST['name'])){
		header("Location:../error.php?err_type=4");
		exit;
	}

	$token = getUniqueIdByUserId($UserId);

	echo $token . '<br>';

	if($code != $token){
		header("Location:../error.php?err_type=2");
		exit;
	}


	$hasVoted = getHasVotedByUserId($UserId);

	if($hasVoted == 1){
		//TODO LOG THAT TRIED TO VOTE AGAIN
		header("Location:../error.php?err_type=3");
		exit;
	}

	logAccess($email);

	$_SESSION['User'] = $UserId;
	print_r($_SESSION);
	header("Location:../presidency.php");
	exit;
	
?>
