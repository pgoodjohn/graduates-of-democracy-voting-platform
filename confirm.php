<?php
	include 'php/scripts.php';
	if(!CheckLogin()){
		header("Location:index.php");
		exit;
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
					<h3> Confirm your votes</h1>
				</div> <!--PANEL HEADER-->
				<form data-toggle="validator" role="form" method="POST" action="php/confirm.php">
					<div class="container-fluid">
					<p>Pesident: <b><?php print_r(getPresidentById($_SESSION['presidency']));?></b></p>
						<p>Vice-Precident for Internal Communications: <b><?php print_r(getInternalVPById($_SESSION['int-vp']));?></b></p>
						<p>Vice-President for External Communications: <b><?php print_r(getExternalVPById($_SESSION['ext-vp']));?></b></p>
						<p>Editor-In-Chief: <b><?php print_r(getEditorInChiefById($_SESSION['editor']));?></b></p>
						<p>Directors of Communications: <b><?php print_r(getDirectorOfCommunicationsById($_SESSION['editor']));?></b></p>
						<p>Treasurer: <b><?php print_r(getTreasurerById($_SESSION['editor']));?></b></p>
					</div>
					<div class="modal-footer">
						<button class="btn btn-default" type="submit" id="button" name="submit" value="continue">Confirm</button>			
						</form>
					</div><!--MODAL FOOTER-->
		</div>
		<div class="col-sm-2"></div>
	</div>

	<?php include_once("footer.php");?>
</body>
</html>
