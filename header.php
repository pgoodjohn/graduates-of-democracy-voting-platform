<style>
	.myh2{
		margin: 0 0 0 0; /*CLASS USED TO FIX THE POSITION OF THE LOGO IN THE NAVBAR */
	}
	.img-responsive2{ /*CLASS USED TO FIX THE DIMENSIONS OF THE LOGO IN THE NAVBAR */
		margin-top: 5px;
		max-height: 40px;
		width: auto;
		display: block;
	}
</style>

<!--NAVBAR-->
<!--MAIN NAVIGATION BAR OF THE WEBSITE -->
<nav class="navbar navbar-default">
	<script src="css/bootstrap-hover-dropdown.js"></script>
	<div class="container-fluid"> <!-- NAVBAR RESPONSIVE CONTAINER -->
		<div class="navbar-header"> <!--NAVBAR HEADER -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<myh2 class="brand brand-name navbar-left">
				<a href="index.php"><img class="img-responsive2" src="pictures/logo.png"></a>
			</myh2>
		</div> <!-- NAVBAR HEADER -->
		<div class="collapse navbar-collapse" id="myNavbar"> <!--COLLAPSED NAVBAR / MOBILE -->
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php">Home</a></li>
			</ul>
		</div> <!--COLLAPSE NAVBAR -->
	</div> <!--RESPONSIVE HEADER -->
</nav>
