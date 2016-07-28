<?php

include_once 'scripts.php';

if(!CheckLogin()){
	header("Location:../index.php");
	exit;
}

print_r($_POST);
echo '<br>';
$_SESSION['presidency'] = $_POST['presidency'];

print_r($_SESSION);

header("Location:../ext-vp.php");
exit;



?>
