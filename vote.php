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
					<h3>Candidates</h3>
				</div> <!--PANEL HEADER-->
				<form data-toggle="validator" role="form" method="POST" action="php/vote.php">
				<!-- DYNAMIC CANDIDATES CREATION -->
					<?php
						$query = "SELECT * FROM candidates";
						$result = mysqli_query($con, $query);
						while($row = mysqli_fetch_array($result)){
							echo '<div class="form-group">';
							echo '<input class="candidate" type="checkbox" name="candidate[]" id="' . $row['id'] . "\" value=\"" . $row['id'] . '">';
							echo '<label for="' . $row['id'] . '" class="control-label">' . ucwords($row['name']) . '</label>';
							echo '</div>';
						}
					?>
					<div class="modal-footer">
						<button class="btn btn-default" type="submit" id="button" name="submit" value="continue">Submit and continue</button>			
					</div><!--MODAL FOOTER-->
		</div>
		<div class="col-sm-2"></div>
	</div>

	<?php include_once("footer.php");?>
</body>
<script>
$('input[type=checkbox]').on('change', function (e) {
    if ($('input[type=checkbox]:checked').length > 7) {
        $(this).prop('checked', false);
        alert("You are allowed to select a max of 7 candidates!");
    }
});
</script>
</html>
