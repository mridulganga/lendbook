<?php
include_once ("db.php");
	function getHead($pagetitle="LendBook"){
		$html = '<head>
				  <title>'.$pagetitle.'</title>
				  <meta charset="utf-8">

				  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

				  <meta name="description" content="LendBook The Book Lending Website">
				  <meta name="author" content="LendBook Team">

				  <link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css" media="screen">
				  <link rel="stylesheet" href="asset/css/font-awesome.min.css" type="text/css" media="screen">
				  <link rel="stylesheet" type="text/css" href="asset/css/slicknav.css" media="screen">
				  <link rel="stylesheet" type="text/css" href="asset/css/style.css" media="screen">
				  <link rel="stylesheet" type="text/css" href="asset/css/responsive.css" media="screen">
				  <link rel="stylesheet" type="text/css" href="asset/css/animate.css" media="screen">

				  <!-- Color CSS Styles  -->
				  <link rel="stylesheet" type="text/css" href="asset/css/colors/red.css" title="red" media="screen" />
				  <link rel="stylesheet" type="text/css" href="asset/css/colors/jade.css" title="jade" media="screen" />
				  <link rel="stylesheet" type="text/css" href="asset/css/colors/green.css" title="green" media="screen" />
				  <link rel="stylesheet" type="text/css" href="asset/css/colors/blue.css" title="blue" media="screen" />
				  <link rel="stylesheet" type="text/css" href="asset/css/colors/beige.css" title="beige" media="screen" />
				  <link rel="stylesheet" type="text/css" href="asset/css/colors/cyan.css" title="cyan" media="screen" />
				  <link rel="stylesheet" type="text/css" href="asset/css/colors/orange.css" title="orange" media="screen" />
				  <link rel="stylesheet" type="text/css" href="asset/css/colors/peach.css" title="peach" media="screen" />
				  <link rel="stylesheet" type="text/css" href="asset/css/colors/pink.css" title="pink" media="screen" />
				  <link rel="stylesheet" type="text/css" href="asset/css/colors/purple.css" title="purple" media="screen" />
				  <link rel="stylesheet" type="text/css" href="asset/css/colors/sky-blue.css" title="sky-blue" media="screen" />
				  <link rel="stylesheet" type="text/css" href="asset/css/colors/yellow.css" title="yellow" media="screen" />

				  <!-- Margo JS  -->
				  <script type="text/javascript" src="asset/js/jquery-2.1.4.min.js"></script>
				  <script type="text/javascript" src="asset/js/jquery.migrate.js"></script>
				  <script type="text/javascript" src="asset/js/modernizrr.js"></script>
				  <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
				  <script type="text/javascript" src="asset/js/jquery.fitvids.js"></script>
				  <script type="text/javascript" src="asset/js/owl.carousel.min.js"></script>
				  <script type="text/javascript" src="asset/js/nivo-lightbox.min.js"></script>
				  <script type="text/javascript" src="asset/js/jquery.isotope.min.js"></script>
				  <script type="text/javascript" src="asset/js/jquery.appear.js"></script>
				  <script type="text/javascript" src="asset/js/count-to.js"></script>
				  <script type="text/javascript" src="asset/js/jquery.textillate.js"></script>
				  <script type="text/javascript" src="asset/js/jquery.lettering.js"></script>
				  <script type="text/javascript" src="asset/js/jquery.easypiechart.min.js"></script>
				  <script type="text/javascript" src="asset/js/jquery.nicescroll.min.js"></script>
				  <script type="text/javascript" src="asset/js/jquery.parallax.js"></script>
				  <script type="text/javascript" src="asset/js/mediaelement-and-player.js"></script>
				  <script type="text/javascript" src="asset/js/jquery.slicknav.js"></script>
				  

				  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
				  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

				</head>';
		return $html;
	}
	
	function getTopBar(){
		$html = '      <!-- Start Top Bar -->
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <!-- Start Contact Info -->
              <ul class="contact-details">
                <li><a href="#"><i class="fa fa-map-marker"></i> NIE, Mysore</a> </li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> lendbook@gmail.com</a> </li>
                <li><a href="#"><i class="fa fa-phone"></i> +91 912 345 6789</a> </li>
              </ul>
              <!-- End Contact Info -->
            </div>
            <div class="col-md-6">
              <!-- Start Social Links -->
              <ul class="social-list">
                <li> <a class="vimeo itl-tooltip" data-placement="bottom" title="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a> </li>
                <li> <a class="skype itl-tooltip" data-placement="bottom" title="Skype" href="#"><i class="fa fa-skype"></i></a> </li>
              </ul>
              <!-- End Social Links -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Top Bar -->';
		return $html;
	}

	function getHeader($navHTML="",$navMOB=""){
		$html = '<div class="hidden-header"></div>
    <header class="clearfix">
	'.getTopBar().'
      <!-- Start Header ( Logo & Naviagtion ) -->
      <div class="navbar navbar-default navbar-top">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="index.php"><img alt="" src="asset/images/lendbook.png"></a>
          </div>

          <div class="navbar-collapse collapse">
            <!-- Stat Search -->
            <div class="search-side"> <a class="show-search"><i class="fa fa-search"></i></a>
              <div class="search-form">
                <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                  <input type="text" value="" name="s" id="s" placeholder="Search the site..."> </form>
              </div>
            </div>
            <!-- End Search -->
            <!-- Start Navigation List -->
            '.$navHTML.'
            <!-- End Navigation List -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        '.$navMOB.'
      </div>
      <!-- End Header ( Logo & Naviagtion ) -->
    </header>
    <!-- End Header -->';
		return $html;
	}
	function getNav(){
		if (isLoggedin()){
			$usermenu = '<li><a href="user.php?action=profile">'.$_SESSION["name"].'</a><ul class="dropdown">
                  <li><a href="user.php?action=userbooks">My Books</a></li>
                  <li><a href="books.php?action=add">Add Book</a></li>
                  <li><a href="user.php?action=profile">Profile</a></li>
                  <li><a href="#">Settings</a></li>
                  <li><a href="user.php?action=logout">Logout</a></li>
                </ul></li>';
			}
			else
				$usermenu = '<li><a href="user.php?action=login" ><div class="btn-system btn-small">Login</div></a></li>
							<li><a href="user.php?action=signup" ><div class="btn-system btn-small">Sign UP</div></a></li>';

		$html = '<ul class="nav navbar-nav navbar-right">

              <li><a href="index.php" >Home</a></li>
              <li><a href="books.php" >Books</a></li>
              <li><a href="#" >Services</a></li>
              <li><a href="about.php">About</a></li>
              '.$usermenu.'

            </ul>';
		return $html;
	}
	function getNavMob(){
		$html = '<ul class="wpb-mobile-menu">

              <li><a href="index.php" style="padding-top: 20px; padding-bottom: 20px;">Home</a></li>
              <li><a href="books.php" style="padding-top: 20px; padding-bottom: 20px;">Books</a></li>
              <li><a href="#" style="padding-top: 20px; padding-bottom: 20px;">Services</a></li>
              <li><a href="#" style="padding-top: 20px; padding-bottom: 20px;">About</a></li>

            </ul>';
		return $html;
	}
	function getFooter(){
		$html = '<!-- Start Footer -->
	    <footer>
	      <div class="container">
	        <div class="row footer-widgets">

	          <!-- Start Subscribe & Social Links Widget -->
	          <div class="col-md-3">
	            <div class="footer-widget mail-subscribe-widget">
	              <h4>Get in touch<span class="head-line"></span></h4>
	              <p>Join our mailing list to stay up to date and get notices about our new releases!</p>
	              <form class="subscribe">
	                <input type="text" placeholder="mail@example.com">
	                <input type="submit" class="btn-system" value="Send">
	              </form>
	            </div>
	            <div class="footer-widget social-widget">
	              <h4>Follow Us<span class="head-line"></span></h4>
	              <ul class="social-icons">
	                <li>
	                  <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
	                </li>
	                <li>
	                  <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
	                </li>
	                <li>
	                  <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
	                </li>

	              </ul>
	            </div>
	          </div>
	          <!-- .col-md-3 -->
	          <!-- End Subscribe & Social Links Widget -->


	          <!-- Start Twitter Widget -->
	          <div class="col-md-3">
	            <div class="footer-widget twitter-widget">
	              <h4>Twitter Feed<span class="head-line"></span></h4>
	              <ul>
	                <li>
	                  <p><a href="#">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.</p>
	                  <span>28 February 2014</span>
	                </li>
	                <li>
	                  <p><a href="#">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.An Fusce eleifend aliquet nis application.</p>
	                  <span>26 February 2014</span>
	                </li>

	              </ul>
	            </div>
	          </div>
	          <!-- .col-md-3 -->
	          <!-- End Twitter Widget -->

	          <!-- Start Contact Widget -->
	          <div class="col-md-3">
	            <div class="footer-widget contact-widget">
	              <h4><img src="asset/images/lendbook-footer.png" class="img-responsive" alt="Footer Logo" /></h4>
	              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
	              <ul>
	                <li><span>Phone Number:</span> +01 234 567 890</li>
	                <li><span>Email:</span> company@company.com</li>

	              </ul>
	            </div>
	          </div>
	          <!-- .col-md-3 -->
	          <!-- End Contact Widget -->


	        </div>
	        <!-- .row -->

	        <!-- Start Copyright -->
	        <div class="copyright-section">
	          <div class="row">
	            <div class="col-md-6">
	              <p>&copy; 2016 LendBook - All Rights Reserved</p>
	            </div>
	            <div class="col-md-6">
	              <ul class="footer-nav">
	                <li><a href="#">Sitemap</a></li>
	                <li><a href="#">Privacy Policy</a></li>
	                <li><a href="about.php#contact">Contact</a></li>
	              </ul>
	            </div>
	          </div>
	        </div>
	        <!-- End Copyright -->

	      </div>
	    </footer>
	    <!-- End Footer -->
	    <a href="#" class="back-to-top" style="display: none;"><i class="fa fa-angle-up"></i></a>
		<script type="text/javascript" src="asset/js/script.js"></script> ';
		return $html;
	}

	function contactForm(){
		$html = '<form role="form" class="contact-form" id="contact-form" method="post">

	<div class="form-group">
    	<div class="controls">
                  <input type="text" placeholder="Name" name="name">
        </div>
	</div>
	<div class="form-group">
    	<div class="controls">
                  <input type="text" placeholder="Email" name="email">
        </div>
	</div>
	<div class="form-group">
    	<div class="controls">
                  <input type="text" placeholder="Subject" name="subject">
        </div>
	</div>
	<div class="form-group">
    	<div class="controls">
                  <textarea rows="7" placeholder="Message" name="message"></textarea>
        </div>
	</div>

    <button type="submit" id="submit" class="btn-system btn-large">Send</button>
    <div id="success" style="color:#34495e;"></div>
	</form>';
	return $html;
	}

	function addBookForm(){
		$html='
		<style>
		.fileupload{position:relative; overflow:hidden; margin:10px;}
		input.upload{position:absolute; top:0; right:0; margin:0; padding:0; 
					font-size:20px; cursor: pointer; opacity:0; filter: alpha(opacity=0);}
		</style>
		<form enctype="multipart/form-data" role="form" class="contact-form" id="contact-form" method="post" action="addbook.php">
              <div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Book Title" name="title">
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Author" name="author">
                </div>
               </div>
                <div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Publisher" name="pub">
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <textarea placeholder="Description" name="desc"></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <div class="btn-system btn-large fileupload"><span>Upload Book Cover</span>
                  <input type="file" name="coverfile" id="coverfile" class="upload"></div>
                  <p id="filename"></p>
                  <script>
                  	document.getElementById("coverfile").onchange = function () {
                  		document.getElementById("filename").innerHTML = this.value;
                  	};
                  </script>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Price" name="price" id="price">
                </div>
              </div>
              <input type="hidden" name="type" value="book">
              <button type="submit" name="submit" id="submit" class="btn-system btn-large">Add Book</button>
              </form>';
              return $html;
	}

	function addeBookForm(){
		$html='
		<style>
		.fileupload{position:relative; overflow:hidden; margin:10px;}
		input.upload{position:absolute; top:0; right:0; margin:0; padding:0; 
					font-size:20px; cursor: pointer; opacity:0; filter: alpha(opacity=0);}
		</style>
		<form  enctype="multipart/form-data" role="form" class="contact-form" id="contact-form" method="post" action="addbook.php">
              <div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Book Title" name="title">
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Author" name="author">
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Publisher" name="pub">
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <textarea placeholder="Description" name="desc"></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <div class="btn-system btn-large fileupload"><span>Upload Book Cover</span>
                  <input type="file" placeholder="Book Cover" name="coverfile2" id="coverfile2" class="upload"></div>
                  <p id="filename2"></p>
                  <script>
                  	document.getElementById("coverfile2").onchange = function () {
                  		document.getElementById("filename2").innerHTML = this.value;
                  	};
                  </script>
                  </div>
                </div>
                <div class="form-group">
                <div class="controls">
                  <div class="btn-system btn-large fileupload"><span>Upload eBook PDF</span>
                  <input type="file" placeholder="eBook PDF File" name="extrafile" id="extrafile" class="upload"></div>
                  <p id="filename3"></p>
                  <script>
                  	document.getElementById("extrafile").onchange = function () {
                  		document.getElementById("filename3").innerHTML = this.value;
                  	};
                  </script>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Price" name="price">
                </div>
              </div>
              <input type="hidden" name="type" value="ebook">
              
              <button type="submit" id="submit" name="submit" class="btn-system btn-large">Add eBook</button>
              </form>';
              return $html;
	}
	function addAudioBookForm(){
		$html='
		<style>
		.fileupload{position:relative; overflow:hidden; margin:10px;}
		input.upload{position:absolute; top:0; right:0; margin:0; padding:0; 
					font-size:20px; cursor: pointer; opacity:0; filter: alpha(opacity=0);}
		</style>
		<form enctype="multipart/form-data" role="form" class="contact-form" id="contact-form" method="post" action="addbook.php">
              <div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Book Title" name="title">
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Author" name="author">
                </div>
              </div>
               <div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Publisher" name="pub">
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <textarea placeholder="Description" name="desc"></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <div class="btn-system btn-large fileupload"><span>Upload Book Cover</span>
                  <input type="file" placeholder="Book Cover" name="coverfile3" id="coverfile" class="upload"></div>
                  <p id="filename4"></p>
                  <script>
                  	document.getElementById("coverfile3").onchange = function () {
                  		document.getElementById("filename4").innerHTML = this.value;
                  	};
                  </script>
                </div>
                </div>
                <div class="form-group">
                <div class="controls">
                  <div class="btn-system btn-large fileupload"><span>Upload AudioBook</span>
                  <input type="file" placeholder="AudioBook File" name="extrafile2" id="extrafile" class="upload"></div>
                  <p id="filename5"></p>
                  <script>
                  	document.getElementById("extrafile2").onchange = function () {
                  		document.getElementById("filename5").innerHTML = this.value;
                  	};
                  </script>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Price" name="price">
                </div>
              </div>
              <input type="hidden" name="type" value="audiobook">
              <input type="hidden" name="action" value="add">
              <button type="submit" id="submit" class="btn-system btn-large">Add AudioBook</button>
              </form>';
              return $html;
	}

	function getBookForms(){
		$html='<div class="col-md-8">
      <div class="tabs-section">

<!-- Nav Tabs -->
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tab-1" data-toggle="tab">Add Book</a></li>
                <li><a href="#tab-2" data-toggle="tab">Add Ebook</a></li>
                <li><a href="#tab-3" data-toggle="tab">Add AudioBook</a></li>
              </ul>

<!-- Tab Panels -->

              <div class="tab-content">
                <!-- Tab Content 1 -->
                <div class="tab-pane fade in active" id="tab-1">
                  '.addBookForm().'
                </div>
                <!-- Tab Content 2 -->
                <div class="tab-pane fade" id="tab-2">
                  '.addeBookForm().'
                </div>
                <!-- Tab Content 3 -->
                <div class="tab-pane fade" id="tab-3">.
                  '.addAudioBookForm().'
                </div>
              </div>
      <!-- End Tab Panels -->
      </div>
          </div>';
          return $html;
	}

	function loginForm(){
		$html = '<div class="col-md-5" style="margin:60px auto; float:none;">
		'.blockTitle("Log In").'
		<form action="user.php" method="post" class="contact-form" id="contact-form"> 
			<div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="email" name="email">
                </div>
              </div>
            <div class="form-group">
                <div class="controls">
                  <input type="password" placeholder="Password" name="pass">
                </div>
              </div>
              <input type="hidden" name="action" id="action" value="login">
              <button type="submit" id="submit" class="btn-system btn-large">Login</button>
		</form>
		</div>';
		return $html;
	}

	function signupForm(){
		$html = '<div class="col-md-5" style="margin:60px auto; float:none;">
		'.blockTitle("Sign UP").'
		<form action="user.php" method="post" class="contact-form" id="contact-form"> 
		<div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Name" name="name">
                </div>
              </div>
			<div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Email" name="email">
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Mobile" name="mobile">
                </div>
              </div>
            <div class="form-group">
                <div class="controls">
                  <input type="password" placeholder="Password" name="pass">
                </div>
              </div>
              <input type="hidden" name="action" id="action" value="signup">
              <button type="submit" id="submit" class="btn-system btn-large">Signup</button>
		</form>
		</div>';
		return $html;
	}

	function pageTitle($title , $struct){
		$html = '<div class="page-banner no-subtitle">
	      <div class="container">
	        <div class="row">
	          <div class="col-md-6">
	            <h2>'.$title.'</h2>
	          </div>
	          <div class="col-md-6">
	            <div class="breadcrumbs" style="float:right;">'.$struct.'</div>
	          </div>
	        </div>
	      </div>
	    </div>';
	    return $html;
	}

	function blockTitle($title,$size=1){
		return '<h'.$size.' class="classic-title"><span>'.$title.'</span></h'.$size.'>';
	}

	function renderBooks($result){
		$html = '<div class="row pricing-tables"><div style="float:none; margin:0 auto; overflow:hidden;">';
		while($row = $result->fetch_assoc()){
		$other = '';
		if (isLoggedin()){
			if($_SESSION["id"]==getBookOwner($row["id"]))
				$other = '<li><a href="books.php?action=remove&id='.$row["id"].'" class="btn-system btn-small">Remove</a></li>';
		}
			$html.='<div class="col-md-2">
			<div class="pricing-table">
			<a href="books.php?action=single&id='.$row["id"].'">
			<img src="'.getFilename($row["coverfile"]).'">
			</a>
			<div class="plan-list">
			<ul>
			<li><strong>'.$row["Title"].'</strong></li>
			<li> '.$row["Author"].'</li>
			<li><a href="#" class="btn-system btn-small"><strong>&#8377;'.$row["price"].'</strong></a></li>
			'.$other.'
			</ul>
			</div>
			</div>
			</div><div style="float:left; min-height:450px; width:0.01px;">&nbsp;</div>';
		}
		$html.='</div></div>';
		return $html;
	}


	function renderBook($book){
		$other="";
		if (isLoggedin()){
			if($_SESSION["id"]==getBookOwner($_GET["id"]))
				$other = '<a href="books.php?action=edit&id='.$book["id"].'" class="btn-system btn-small">Edit Book</a>
				<a href="books.php?action=remove&id='.$book["id"].'" class="btn-system btn-small">Remove Book</a><br><br><br>';
		}
		
		$html = '<div class="project-page row">
		<div class="project-media col-md-4">
		<img src="'.getFilename($book["coverfile"]).'">
		</div>
		
		<div class="project-content col-md-5">

		'.$other.blockTitle("Description",4).'
		<p>'.$book["Desc"].'</p>
		'.blockTitle("Details",4).'
		<p>
			<strong>Author : </strong>'.$book["Author"].'<br><br>
			<strong>Publisher : </strong>'.$book["Publisher"].'<br><br>
			<strong>Type : </strong>'.$book["Type"].'<br><br>
			<strong>Owner : </strong>'.getUsername($book["userid"]).'<br><br>
			<strong>Price : &#8377;</strong>'.$book["price"].'<br><br>
			
		</p>
		</div>
		
		<div class="project-content col-md-3">'.blockTitle("Pricing").'
		<p>
		   <strong>Offer Price : &#8377;</strong>'.(round($book["price"]*.7,-1)-1).'<br><br>
		   <button class="btn-system btn-large">Buy Now</button><br>
		</p>
		</div>

		</div>';
		return $html;
	}

		function editBookForm($id){
			$book = getBook($id);
		$html='
		<style>
		.fileupload{position:relative; overflow:hidden; margin:10px;}
		input.upload{position:absolute; top:0; right:0; margin:0; padding:0; 
					font-size:20px; cursor: pointer; opacity:0; filter: alpha(opacity=0);}
		</style>
		<form enctype="multipart/form-data" role="form" class="contact-form" id="contact-form" method="post" action="addbook.php">
              <div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Book Title" name="title" value="'.$book["Title"].'">
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Author" name="author" value="'.$book["Author"].'">
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Publisher" name="pub" value="'.$book["Publisher"].'">
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <textarea placeholder="Description" name="desc">'.$book["Desc"].'"</textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                <input type="checkbox" name="covercheck" id="covercheck" value="0"> Change Cover ?<br>
                  <div class="btn-system btn-large fileupload"><span>Upload Book Cover</span>
                  <input type="file" name="coverfile" id="coverfile" class="upload"></div>
                  <p id="filename"></p>
                  <script>
                  	document.getElementById("coverfile").onchange = function () {
                  		document.getElementById("filename").innerHTML = this.value;
                  	};
                  </script>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Price" name="price" id="price" value="'.$book["price"].'">
                </div>
              </div>
              <input type="hidden" name="type" value="book">
              <input type="hidden" name="id" value="'.$id.'">
              <button type="submit" name="edit" id="edit" class="btn-system btn-large">Update Book</button>
              </form>';
              return $html;
	}

	function editeBookForm($id){
		$book = getBook($id);
		$html='
		<style>
		.fileupload{position:relative; overflow:hidden; margin:10px;}
		input.upload{position:absolute; top:0; right:0; margin:0; padding:0; 
					font-size:20px; cursor: pointer; opacity:0; filter: alpha(opacity=0);}
		</style>
		<form enctype="multipart/form-data" role="form" class="contact-form" id="contact-form" method="post" action="addbook.php">
              <div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Book Title" name="title" value="'.$book["Title"].'">
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Author" name="author" value="'.$book["Author"].'">
                </div>
              </div>
             <div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Publisher" name="pub" value="'.$book["Publisher"].'">
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <textarea placeholder="Description" name="desc">'.$book["Desc"].'"</textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                <input type="checkbox" name="covercheck" id="covercheck" value="0">Change Cover ?<br>
                  <div class="btn-system btn-large fileupload"><span>Upload Book Cover</span>
                  <input type="file" placeholder="Book Cover" name="coverfile2" id="coverfile2" class="upload"></div>
                  <p id="filename2"></p>
                  <script>
                  	document.getElementById("coverfile2").onchange = function () {
                  		document.getElementById("filename2").innerHTML = this.value;
                  	};
                  </script>
                  </div>
                </div>
                <div class="form-group">
                <div class="controls">
                <input type="checkbox" name="extracheck" id="extracheck" value="0">Change Ebook ?<br>
                  <div class="btn-system btn-large fileupload"><span>Upload eBook PDF</span>
                  <input type="file" placeholder="eBook PDF File" name="extrafile" id="extrafile" class="upload"></div>
                  <p id="filename3"></p>
                  <script>
                  	document.getElementById("extrafile").onchange = function () {
                  		document.getElementById("filename3").innerHTML = this.value;
                  	};
                  </script>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Price" name="price" id="price" value="'.$book["price"].'">
                </div>
              </div>
              <input type="hidden" name="type" value="ebook">
              <input type="hidden" name="id" value="'.$id.'">
              <button type="submit" name="edit" id="edit" class="btn-system btn-large">Update eBook</button>
              </form>';
              return $html;
	}
	function editAudioBookForm($id){
		$book = getBook($id);
		$html='
		<style>
		.fileupload{position:relative; overflow:hidden; margin:10px;}
		input.upload{position:absolute; top:0; right:0; margin:0; padding:0; 
					font-size:20px; cursor: pointer; opacity:0; filter: alpha(opacity=0);}
		</style>
		<form enctype="multipart/form-data" role="form" class="contact-form" id="contact-form" method="post" action="addbook.php">
              <div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Book Title" name="title" value="'.$book["Title"].'">
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Author" name="author" value="'.$book["Author"].'">
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Publisher" name="pub" value="'.$book["Publisher"].'">
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <textarea placeholder="Description" name="desc">'.$book["Desc"].'"</textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                <input type="checkbox" name="covercheck" id="covercheck" value="0">Change Cover ?<br>
                  <div class="btn-system btn-large fileupload"><span>Upload Book Cover</span>
                  <input type="file" placeholder="Book Cover" name="coverfile3" id="coverfile" class="upload"></div>
                  <p id="filename4"></p>
                  <script>
                  	document.getElementById("coverfile3").onchange = function () {
                  		document.getElementById("filename4").innerHTML = this.value;
                  	};
                  </script>
                </div>
                </div>
                <div class="form-group">
                <div class="controls">
                <input type="checkbox" name="extracheck" id="extracheck" value="0">Change AudioBook ?<br>
                  <div class="btn-system btn-large fileupload"><span>Upload AudioBook</span>
                  <input type="file" placeholder="AudioBook File" name="extrafile2" id="extrafile" class="upload"></div>
                  <p id="filename5"></p>
                  <script>
                  	document.getElementById("extrafile2").onchange = function () {
                  		document.getElementById("filename5").innerHTML = this.value;
                  	};
                  </script>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Price" name="price" id="price" value="'.$book["price"].'">
                </div>
              </div>
              <input type="hidden" name="type" value="audiobook">
              <input type="hidden" name="id" value="'.$id.'">
              <button type="submit" name="edit" id="edit" class="btn-system btn-large">Update AudioBook</button>
              </form>';
              return $html;
	}

	function BookEditForm($id){
		$book = getBook($id);
		if ($book["Type"]=="book")
			$html = editBookForm($id);
		elseif ($book["Type"]=="ebook") {
			$html = editeBookForm($id);
		}
		elseif ($book["Type"]=="audiobook") {
			$html = editAudioBookForm($id);
		}
		return $html;
	}

?>