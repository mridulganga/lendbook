<?php
include ('./func.php');
?>

<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<?php echo getHead("Lendbook | Home"); ?>
<body>
  	<div id="container">
	<?php echo getHeader(getNav(),getNavMob());?>
	
<!-- Start Content -->


    <!-- Start Purchase Section -->
    <div class="section purchase">
      <div class="container">

        <!-- Start Video Section Content -->
        <div class="section-video-content text-center">

          <!-- Start Animations Text -->
          <h1 class="fittext wite-text uppercase tlt">
                      <span class="texts">
                        <span>Lend Books</span>
                        <span>Sell AudioBooks</span>
                        <span>Request Services</span>
                        <span>Sell Books</span>
                        <span>Sell Ebooks</span>
                      </span>
                        on LendBook <br/>One Place for all your books, in the most innovative way.
                    </h1>
          <!-- End Animations Text -->

          <!-- Start Buttons -->
          <a href="about.php" class="btn-system btn-large"><i class="fa fa-tasks"></i> About</a>
        </div>
        <!-- End Section Content -->
      </div>
      <!-- .container -->
    </div>
    <!-- End Purchase Section -->
<!-- End Content -->

<?php echo getFooter();?>
	</div>


</body>
</html>