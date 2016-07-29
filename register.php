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
					<h3>Register a new user in the GoD platform</h3>
				</div> <!--PANEL HEADER-->
				<form data-toggle="validator" role="form" method="POST" action="php/register.php">
					<div class="form-group has-feedback">
						<label for="name" class="control-label">Insert the name:</label>
						<input type="text" class="form-control" data-error="Please insert your name." name="name" id="name" required>
						<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
						<div class="help-block with-errors"></div>
					</div><!--FORM GROUP NAME-->
					<div class="form-group has-feedback">
						<label for="email" class="control-label">Insert the email address:</label>
						<input type="email" class="form-control" data-error="Please insert a valid email address." name="email" id="email" required>
						<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
						<div class="help-block with-errors"></div>
					</div><!--FORM GROUP NAME-->
					<div class="form-group has-feedback">
						<label for="code" class="control-label">Insert the secret key</label>
						<input type="password" class="form-control"ata-error="Please, insert the secret key to proceed." name="code" id="code" required>
						<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
						<div class="help-block with-errors"></div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-default" type="submit" id="button" name="submit" value="continue">Continue</button>			
						</form>
					</div><!--MODAL FOOTER-->
		</div>
		<div class="col-sm-2"></div>
	</div>

	<?php include_once("footer.php");?>
</body>
</html>
