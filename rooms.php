<?php
include 'init.php';
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<?php include 'links.php'; ?>
	<title>Rooms in yorr</title>
</head>
<body>
	

<div class="fh5co-parallax" style="background-image: url(images/f1.jpg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
				<div class="fh5co-intro fh5co-table-cell">
					<h1 class="text-center">YORR Rooms</h1>
					<p>Made with love by the fine folks at <a href="http://freehtml5.co">YORR TEAM</a></p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Body Start Here -->

<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 col-lg-3">
			<!-- Filters Column Start Here -->
			<div class="filters">
			<h1 class="mt-4 mb-0 font-weight-bold">Filters</h1>
			</div>
			<div class="location mt-3">
					<h5>Popular Location in moradabad</h5>
			</div>

		</div>
		<div class=" col-sm-10 col-md-9 col-lg-9 ">
			<h3 class="mt-4 mb-0 font-weight-bold">Tittle Of Location And Rooms</h3>
			<hr style="border:1px solid lightgrey;">
			<div class="row">
				<div class="col-sm-10 col-md-6 col-lg-6">

					<!-- Carousel Start Here -->
					<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active img-fluid">
								<img src="images/f1.jpg" class="d-block w-100" alt="Image1">
							</div>
							<!-- <div class="carousel-item img-fluid">
								<img src="images/c2.jpg" class="d-block w-100" alt="Image2">
							</div> -->
							<div class="carousel-item img-fluid">
								<img src="images/c1.jpg" class="d-block w-100" alt="Image3">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
					<!-- Carousel End Here -->
				</div>
				<div class="col-sm-10 col-md-6 col-lg-6">
					<div>
						<h3 class="mb-3">SPOT ON 40934 New Ahuja Guest House.</h3>
						<h4>Near Bus Stand, Budh Bazaar, Moradabad</h4>
					</div>
					<div class="Rating">
						Five Start Ratings
					</div>
					<div class="price">
						<h2 class="text-danger mt-5 mb-0">&#8377;840 </h2>
						<strike>&#8377;1266</strike> 
						<h5 class="text-warning">54% off</h5>
						<p>Per room per night</p>
					</div>
					<div class="row">
						<div class="container-fluid">
							<div class="col-md-4 col-lg-4">

							</div>
							<div class="col-md-4 col-lg-4">
								<div class="buttons">
									<button class="btn btn-info rounded-0">View Details</button>

								</div>
							</div>
							<div class="col-md-4 col-lg-4">
								<div class="buttons">

									<button class="btn btn-success rounded-0">Book Now</button>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<hr>
		</div>
	</div>
</div>
<?php
include 'footer.php';

?>
</body>
</html>