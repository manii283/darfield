<!DOCTYPE html>
<html lang="en">
<head>
	<?php $title='index-page';
	include "inc-head.php"?>
</head>
<body>

	<!-- Start preloader -->
	<div id="preloader">
		<label>Loading</label>
	</div>
	<!-- End preloader -->
    
	<header>
		<?php include "inc-header.php"?>
	</header>

	<!--banner-->
	<?php include "inc-banner.php"?> 
    
	<!--order-section-->
	 <?php include "inc-order-selection.php"?>

	<!--specility-->
	<?php include "inc-specility.php"?>
	
	<!--spcial-menu-->
	<?php include "inc-special-menu.php"?>
	
	<!--online-booking-->
	<?php include "inc-online-booking.php"?>
	
	<!--chef-->
	<?php include "inc-chef.php"?>

	<!--news-->
	<?php include "inc-news.php"?>
	
	<!--customer-->
	<?php include "inc-customer.php"?>

	<!--about-pizzon-->
	<?php include "inc-about-pizzon.php"?>
	
	<div class="top-scrolling">
		<a href="#header" class="scrollTo"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
	</div>

	<!--footer-->
    <footer>
		<?php include "inc-footer.php"?>
    </footer>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>

</body>
</html>