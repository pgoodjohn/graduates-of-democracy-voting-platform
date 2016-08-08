<?php

include_once 'scripts.php';

if(!CheckLogin()){
	header("Location:../index.php");
	exit;
}

print_r($_POST);
echo '<br>';
$_SESSION['struct'] = $_POST['struct'];

print_r($_SESSION);

header("Location:../editor.php");
exit;

?>
