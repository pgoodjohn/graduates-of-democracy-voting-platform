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
					<h3>Graduates of Democracy Online Voting Platform</h1>
				</div> <!--PANEL HEADER-->
				<form data-toggle="validator" role="form" method="POST" action="php/login.php">
					<div class="form-group has-feedback">
						<label for="name" class="control-label">Insert your name:</label>
						<input type="text" class="form-control" data-error="Please insert your name" name="name" id="name" required>
						<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
						<div class="help-block with-errors"></div>
					</div><!--FORM GROUP NAME-->
					<div class="form-group has-feedback">
						<label for="email" class="control-label">Insert your email address:</label>
						<input type="email" class="form-control" data-error="Please insert a valid email address" name="email" id="email" required>
						<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
						<div class="help-block with-errors"></div>
					</div><!--FORM GROUP NAME-->
					<div class="form-group has-feedback">
						<label for="code" class="control-label">Insert your voting token</label>
						<input type="text" class="form-control"ata-error="The lenght of the code does not correspond" name="code" id="code" required>
						<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
						<div class="help-block with-errors"></div>
					</div>
					<div class="form-group">
						<p>
							Dear Graduate of Democracy,<br>
Until July 10, 2017 you can vote for the new board of the Graduates of Democracy 2017/18. Seven people will be elected, and you have a maximum of 7 votes to give. You can vote only one candidate, or you can vote up to 7 different candidates.<br>
Please contact Cecilia Passaniti (<a href="mailto:vp.ext.graduatesofdemocracy@gmail.com">vp.ext.graduatesofdemocracy@gmail.com</a>) if you have any question.<br>
The 2016/2017 Board of the Graduates of Democracy<br>
						</p>
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
