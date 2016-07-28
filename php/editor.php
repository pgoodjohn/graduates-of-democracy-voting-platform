<?php

include_once 'scripts.php';

if(!CheckLogin()){
	header("Location:../index.php");
	exit;
}

print_r($_POST);
echo '<br>';
$_SESSION['editor'] = $_POST['editor'];

print_r($_SESSION);

header("Location:../communications.php");
exit;



?>
