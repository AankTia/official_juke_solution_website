<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>JUKe Solutions</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
	
	<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
</head>
<body>
	<!-- wrapper -->
	<div id="wrapper">
		<!-- header -->
		<?php include 'header.php' ?>
		<!-- end of header -->
		
		<!-- slider-holder -->
		<?php include 'slider.php' ?>
		<!-- end of slider-holder -->
		
		<!-- shell -->
		<div class="shell">
			<!-- main -->
			<div class="main">
				<section class="cols">
                      <?php 
					    $act=$_GET['act'];
						
						if ($act=='about') {
						  include 'content/about.php';
						} else if($act=='solution_services') {
							include 'content/solution_services.php';
						} else if($act=='support') {
							include 'content/support.php';
						} else if($act=='partner') {
							include 'content/partner.php';
						} else if($act=='contact_us') {
							include 'content/contact_us.php';
						}
					  ?>									
					<div class="cl">&nbsp;</div>
				</section>
			</div>
			<!-- end of main -->
		</div>
		<!-- end of shell -->
		<div id="footer-push"></div>
	</div>
	<!-- wrapper -->

	<!-- footer -->
	<?php include 'footer.php' ?>
	<!-- end of footer -->
</body>
</html>