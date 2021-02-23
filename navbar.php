<?php
	error_reporting(0);
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<style>
	
	.btn{
  border: 3px solid white;
  background-color: transparent;
  color: white;
  padding: 10px 10px;
  font-size: 18px;
  cursor: pointer;
  margin-left:1%;
  display:inline-block;
  border-radius: 25px;
}
.btn:hover{
	color:blue;
	background-color: #4CAF50;
}

.log{
	border: none;
	font-size: 20px;
	margin-left:78%;
	color:orange;
}


	</style>
</head>
<body>

<!-- ---------------------------------------     NAVBAR   --------------------------------------------------------- -->
<div id="fh5co-wrapper">
	<div id="fh5co-page">
	<div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.php">YORR</a></h1>
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a class="active" href="index.php">Home</a></li>
							<li><a href="about.php">about</a></li>
							<!-- <li><a href="services.php">Services</a></li>			 -->
							<li>
                                <a href="rooms.php" class="fh5co-sub-ddown">Rooms</a>
								<ul class="fh5co-sub-menu">
								 	<li><a href="#">Single Room</a></li>
								 	<li><a href="#">Double Room</a></li>
									<li>
										<a href="#" class="fh5co-sub-ddown">King Room</a>
										<!-- <ul class="fh5co-sub-menu">
											<li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">Build</a></li>
											<li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">Work</a></li>										
										</ul> -->
									</li>
									<li><a href="#">Queen Room</a></li> 
								</ul>
							</li>
							<li><a href="contact.php">Contact</a></li>
							<?php
								if(isset($_SESSION['uid']))
								{?>
									<li><a href="profile.php">Account</a></li>
									<?php
								}?>
						</ul>
					</nav>
				</div>
			</div>
			
		</header>
	<?php
	if(!isset($_SESSION['uid']))
	{?>
		<a href="login.php" class="log btn">Sign In</a>
		<a href="register.php" class="btn">Create Account</a><?php
	}
	?>
	</div>
</body>
</html>