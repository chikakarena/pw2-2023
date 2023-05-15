<?php
include "database.php";
?>
<!doctype html>
<html class="no-js" lang="en">
<?php
include_once "components/header.php" 
?>
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		
	
		<!--welcome-hero start -->
		<?php
		include_once "components/hero.php"
		?>
		<!--/.welcome-hero-->
		<!--welcome-hero end -->

					<!-- top-area Start -->
					<!-- Start Navigation -->

				        <!-- Start Top Search -->
						<?php
						include_once "components/navbar.php"
						?>
						<!-- /.top-area-->
			<!-- top-area End -->
			<!--feature start -->
			<?php
			include_once "components/kategori.php"
			?>
			<!--/.feature-->
			<!--feature end -->

		<!--new-arrivals start -->
		<?php
		include_once "components/newarrival.php"
		?>
		<!--/.new-arrivals-->
		<!--new-arrivals end -->

		<!--blog start -->
		<?php
		include_once "components/Member.php"
		?>
		<!--blog end -->

		<!--footer start-->
		<?php
		include_once "components/footer.php"
		?>
		<!--footer end-->
		
		<!--skrip start-->
        <?php
		include_once "components/scrip.php"
		?>
		<!--skrip end-->
    </body>
	
</html>