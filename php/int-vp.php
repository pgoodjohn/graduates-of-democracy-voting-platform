<?php

include_once 'scripts.php';

if(!CheckLogin()){
	header("Location:../index.php");
	exit;
}

print_r($_POST);
echo '<br>';
$_SESSION['int-vp'] = $_POST['int-vp'];

print_r($_SESSION);

header("Location:../struct.php");
exit;

?>
