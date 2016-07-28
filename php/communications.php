<?php

include_once 'scripts.php';

if(!CheckLogin()){
	header("Location:../index.php");
	exit;
}

print_r($_POST);
echo '<br>';
$_SESSION['communications'] = $_POST['communications'];

print_r($_SESSION);

header("Location:../treasurer.php");
exit;



?>
