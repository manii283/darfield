<!DOCTYPE html>
<html lang="en">
<head>
	<?php $title= "reservation-page";
	include "inc-head.php"?>
</head>
<body>

	<!-- Start preloader -->
		<div id="preloader">
			<label>Loading</label>
		</div>
	<!-- End preloader -->

	<!--header-->
	<?php include "inc-header.php"?>

	
	<section class="page-banner" style="background: #121619 url(images/blog-6.jpg) no-repeat center / cover;">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="page-title">
						<h1 class="page-headding">reservation</h1>
						<ul>
							<li><a href="index.html" class="page-name">Home</a></li>
							<li>Reservation</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="online-booking reservation pt-100">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="headding-part text-center">
						<p class="headding-sub">Make Online Reservation</p>
						<h2 class="headding-title text-uppercase font-weight-bold">Book a table</h2>
					</div>
				</div>
			</div>
			<form>
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6">
						<div class="form-group">
							<select name="sources" class="custom-select sources form-control" data-placeholder="Hour">
								   <option value="profile">Hour</option>
								   <option value="word">minute</option>
								   <option value="hashtag">second</option>
							</select>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6">
						<div class="form-group">
							<select name="sources" class="custom-select sources form-control" data-placeholder="Number Of People">
								   <option value="profile">1</option>
								   <option value="word">2</option>
								   <option value="hashtag">3</option>
							</select>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Pick a Date" required>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Phone Number " required>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" id="name" placeholder="Name" required>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" id="email" placeholder="Email Address" required>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Coments" required>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 text-center">
						<input type="submit" name="submit" value="Book a table" class="table-book">
					</div>
				</div>
			</form>
		</div>
	</section>

	<div class="top-scrolling">
		<a href="#header" class="scrollTo"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
	</div>

	<!--footer-->
	<?php include "inc-footer.php"?>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>

</body>
</html>