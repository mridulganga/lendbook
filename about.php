<?php
include ('./func.php');
?>

<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<?php echo getHead("Lendbook | About"); ?>
<body>
  	<div id="container">
	<?php echo getHeader(getNav(),getNavMob());?>

<?php echo pageTitle("About Us","Home / About Us");?>

<!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="page-content">
          <div class="col-md-8">
            <h1 class="classic-title"><span>About Us</span></h1>
            <?php echo newline(10);?>
          </div>


          <div class="col-md-8" id="contact">
            <h1 class="classic-title"><span>Contact Us</span></h1>
            <?php echo contactForm();?>
          </div>
          <div class="col-md-4">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Address</span></h4>

            <!-- Some Info -->
            <p>LendBook is a Startup of The National Institute of Engineering, Mysore.</p>

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:10px;"></div>

            <!-- Info - Icons List -->
            <ul class="icons-list">
              <li><i class="fa fa-globe">  </i> <strong>Address:</strong> The National Institute of Engineering, Mysore.</li>
              <li><i class="fa fa-envelope-o"></i> <strong>Email:</strong> admin@lendbook.com</li>
              <li><i class="fa fa-mobile"></i> <strong>Phone:</strong> +91 912 345 6789</li>
            </ul>

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:15px;"></div>

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Working Hours</span></h4>

            <!-- Info - List -->
            <ul class="list-unstyled">
              <li><strong>Monday - Friday</strong> - 9am to 5pm</li>
              <li><strong>Saturday</strong> - 9am to 2pm</li>
              <li><strong>Sunday</strong> - Closed</li>
            </ul>

          </div>
        </div>
      </div>
    </div>
<!-- End Content -->

<?php echo getFooter();?>
	</div>
<a href="#" class="back-to-top" style="display: none;"><i class="fa fa-angle-up"></i></a>

<script type="text/javascript" src="asset/js/script.js"></script>

</body>
</html>