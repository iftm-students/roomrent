<?php

include 'init.php';
$success = false;
$msg = "";
$dialog_type = "";

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$desc = $_POST['desc'];

	$qry = "INSERT INTO contacts (name,email,des) VALUES ('$name','$email','$desc')";
	$res = mysqli_query($con, $qry);
	if ($res) {
		$success = true;
		$dialog_type = "alert alert-success";
		$msg = "Your query has been sent.";
	} else {
		$success = true;
		$dialog_type = "alert alert-danger";
		$msg = "Some Error Occured";
	}
}

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Luxe &mdash; 100% Free Fully</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />



</head>

<body>

	<?php include 'navbar.php'; ?>

	<!-- end:fh5co-header -->
	<div class="fh5co-parallax" style="background-image: url(images/f1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
						<h1 class="text-center">Contact Us</h1>
						<p>Made with love by the fine folks at <a href="http://freehtml5.co">YORR TEAM</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-contact-section">
		<div class="row">
			<div class="col-md-6">
				<div id="map" class="fh5co-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224368.39371440222!2d77.25804182109499!3d28.516983404443188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5a43173357b%3A0x37ffce30c87cc03f!2sNoida%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1613018800190!5m2!1sen!2sin" width="700" height="723" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-12">
					<h3>Our Address</h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					<ul class="contact-info">
						<li><i class="ti-map"></i>198 West 21th Street, Suite 721 New York NY 10016</li>
						<li><i class="ti-mobile"></i>+ 1235 2355 98</li>
						<li><i class="ti-envelope"></i><a href="#">info@yoursite.com</a></li>
						<li><i class="ti-home"></i><a href="#">www.yoursite.com</a></li>
					</ul>
				</div>
				<div class="col-md-12">
					<div class="row">
						<form action="contact.php" method="POST" onclick="return myfun()">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" name="name" id="name" placeholder="Name">
									<span class="font-weight-bold text-danger" id="name_error"></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" name="email" id="email" placeholder="Email">
									<span class="font-weight-bold text-danger" id="email_error"></span>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea class="form-control" name="desc" id="desc" cols="30" rows="7" placeholder="Message"></textarea>
									<span class="font-weight-bold text-danger" id="desc_error"></span>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<?php

									if ($success) { ?>
										<div class="<?php echo $dialog_type; ?>"><strong><?php echo $msg; ?></strong></div>
									<?php } ?>
									<input type="submit" name="submit" value="Send Message" class="btn btn-primary">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


	<?php include 'footer.php'; ?>

	</div>
	<!-- END fh5co-wrapper -->
	<?php include 'links.php'; ?>

	<script>
		if (window.history.replaceState) {
			window.history.replaceState(null, null, window.location.href);
		}


		function myfun() {
			var name = document.getElementById('name').value;
			var email = document.getElementById('email').value;
			var desc = document.getElementById('desc').value;

			if (name == "") {
				document.getElementById('name_error').innerHTML = "Please Fill Username";
				return false;
			}
			if (!isNaN(name)) {
				document.getElementById('name_error').innerHTML = "Please Fill Alphabets";
				return false;
			}
			if (email == "") {
				document.getElementById('email_error').innerHTML = "Please Fill Email";
				return false;
			}

			if (email.indexOf('@') <= 0) {
				document.getElementById('email_error').innerHTML = "Invalid email";
				return false;
			}

			if ((email.charAt(email.length - 4) != '.') && (email.charAt(email.length - 3) != '.')) {
				document.getElementById('email_error').innerHTML = "Invalid email";
				return false;
			}
			if (desc == "") {
				document.getElementById('desc_error').innerHTML = "Please Fill Your Query";
				return false;
			}
			if (desc.length<=50) {
				document.getElementById('desc_error').innerHTML = "Please Fill Minimum 50 Characters";
				return false;
			}
		}
	</script>

</body>

</html>