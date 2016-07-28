<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'graduatesOfDemocracy');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Failed to connect to the database, died with error:');
if (!$con) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
//$db=mysql_select_db(DB_NAME, $con) or die('Failed to select the database, died with error: ' . mysql_error());
$db=mysqli_select_db($con, DB_NAME) or die('Failed to select the database, died with error: ' . mysqli_error());

session_start();
?>
