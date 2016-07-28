<?php

include_once 'scripts.php';

if(!CheckLogin()){
	header("Location:../index.php");
	exit;
}

print_r($_POST);
echo '<br>';
$_SESSION['treasurer'] = $_POST['treasurer'];

print_r($_SESSION);

header("Location:../confirm.php");
exit;

?>
