<!DOCTYPE html>
<html>
<head>
	<title>Graduates of Democrcy Online Voting Platform</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>

	<?php include_once("header.php");?>

	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="panel panel-warning">
				<div class="panel panel-heading text-center">
					<h4>Error!</h4>
				</div>
				<?php if($_GET['err_type'] == 1){
					echo '<p align="center">The email you entered was not found in the database</p>';
				}
				?>
				<?php if($_GET['err_type'] == 2){
					echo '<p align="center">The code you entered is not correct</p>';
				}
				?>
				<?php if($_GET['err_type'] == 3){
					echo '<p align="center">I\'m sorry, but it seems this user has already voted</p>';
				}
				?>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div>


	<?php include_once("footer.php");?>
</body>
</html>
