<?php
	include_once 'php/scripts.php';
	if(!CheckLogin()){
		header("Location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Graduates of Democrcy Online Voting Platform</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/validator.js"></script>
	<style>
		.form-group{
			margin-left: 12.5%;
			margin-right: 12.5%;
		}
	</style>
</head>
<body>
	<?php include_once("header.php");?>
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="panel panel-info">
				<div class="panel panel-heading text-center">
					<h3>Director of Communications</h3>
				</div> <!--PANEL HEADER-->
				<form data-toggle="validator" role="form" method="POST" action="php/communications.php">
				<!-- DYNAMIC CANDIDATES CREATION -->
					<?php
						$query = "SELECT * FROM DirectorOfCommunications WHERE 1";
						$result = mysqli_query($con, $query);
						while($row = mysqli_fetch_array($result)){
							echo '<div class="form-group">';
							echo '<input type="radio" name="presidency" id="' . $row['UserId'] . " value="' . $row['UserId'] . " required>';
							echo '<label for="' . $row['UserId'] . '" class="control-label">' . $row['Name'] . '</label>';
							echo '</div>';
						}
					?>
					<div class="modal-footer">
						<button class="btn btn-default" type="submit" id="button" name="submit" value="continue">Submit and continue</button>
						</form>
					</div><!--MODAL FOOTER-->
		</div>
		<div class="col-sm-2"></div>
	</div>

	<?php include_once("footer.php");?>
</body>
</html>
