<?php

include_once 'scripts.php';

if(!CheckLogin()){
	header("Location:../index.php");
	exit;
}

print_r($_POST);
echo '<br>';
$_SESSION['ext-vp'] = $_POST['ext-vp'];

print_r($_SESSION);

header("Location:../int-vp.php");
exit;

?>
