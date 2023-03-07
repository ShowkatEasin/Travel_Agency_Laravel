
<!DOCTYPE html>
<html>
<head>
	<title>Packages-HelloBizer</title>
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{asset('Frontend')}}/css/all.css">
	<link rel="stylesheet" type="text/css" href="{{asset('Frontend')}}/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('Frontend')}}/css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="{{asset('Frontend')}}/css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="{{asset('Frontend')}}/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="{{asset('Frontend')}}/css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="{{asset('Frontend')}}/css/jquery.rateyo.css"/>
	<!-- <link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" /> -->
	<!-- <link rel="stylesheet" type="text/css" href="css/meanmenu.min.css"> -->
	<link rel="stylesheet" type="text/css" href="{{asset('Frontend')}}/inner-page-style.css">
	<link rel="stylesheet" type="text/css" href="{{asset('Frontend')}}/style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
			<!-- Top header Close -->
			<div class="main-header">
				<div class="container">
					<div class="logo-wrap" itemprop="logo">
						<img src="{{asset('Frontend')}}/images/site-logo.png" alt="Logo Image">
						<!-- <h1>Education</h1> -->
					</div>
					<div class="nav-wrap">
						<nav class="nav-desktop">
							<ul class="menu-list">
								<li><a href="{{ URL:: to('/home')}}">Home</a></li>
								<li><a href="{{ URL:: to('/packages')}}">Packages</a></li>
								<li><a href="{{ URL:: to('/about')}}">About</a></li>
								<li><a href="{{ URL:: to('/blogs')}}">Blogs</a></li>
								<li><a href="{{ URL:: to('/contact')}}">Contact</a></li>
									<!-- 	</li>
									</ul>
								</li> -->
							</ul>
						</nav>
						<div id="bar">
							<i class="fas fa-bars"></i>
						</div>
						<div id="close">
							<i class="fas fa-times"></i>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Header Close -->
		<div class="page-heading">
			<div class="container">
				<h2>popular Packages</h2>
			</div>
		</div>
		<!-- Popular courses End -->
		<div class="learn-courses">
			<div class="container">
				<div class="courses">
					<div class="owl-one owl-carousel">
						<div class="box-wrap" itemprop="event" itemscope itemtype="">
							<div class="img-wrap" itemprop="image"><img src="{{asset('Frontend')}}/images/packages-pic.jpg" alt="courses picture"></div>
								<button href="" class="learn-desining-banner" itemprop="name">Maldives</button>
							<div class="box-body" itemprop="description">	
								<p>The summer holidays are almost over in most countries, and the end of the year is approaching fast.</p>
								<section itemprop="time">
									<p><span>Duration:</span> 4 Days</p>
									<p><span>Cost:</span> 136000 BDT</p>
									<a type="button" href="getdetails.html" class="btn btn-success">Get Details</a>
								</section>
							</div>
						</div>

						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap"  itemprop="image"><img src="{{asset('Frontend')}}/images/packages2-pic.jpg" alt="courses picture"></div>
								<button href="#" class="learn-desining-banner" itemprop="name">Thailand</button>
							<div class="box-body" itemprop="description">
								<p>The summer holidays are almost over in most countries, and the end of the year is approaching fast.</p>
								<section itemprop="time">
									<p><span>Duration:</span> 4 Days</p>
									<p><span>Cost:</span> 136000 BDT</p>
									<a type="button" href="getdetails.html" class="btn btn-success">Get Details</a>
								</section>
							</div>
						</div>
						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap"  itemprop="image"><img src="{{asset('Frontend')}}/images/packages3-pic.jpg" alt="courses picture"></div>
								<button href="#" class="learn-desining-banner" itemprop="name">Nepal</button>
							<div class="box-body" itemprop="description">
								<p>The summer holidays are almost over in most countries, and the end of the year is approaching fast.</p>
								<section itemprop="time">
									<p><span>Duration:</span> 4 Days</p>
									<p><span>Cost:</span> 136000 BDT</p>
									<a type="button" href="getdetails.html" class="btn btn-success">Get Details</a>
								</section>
							</div>
						</div>
						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap"  itemprop="image"><img src="{{asset('Frontend')}}/images/packages4-pic.jpg" alt="courses picture"></div>
								<button href="#" class="learn-desining-banner" itemprop="name">Turkey</button>
							<div class="box-body" itemprop="description">
								<p>The summer holidays are almost over in most countries, and the end of the year is approaching fast.</p>
								<section itemprop="time">
									<p><span>Duration:</span> 4 Days</p>
									<p><span>Cost:</span> 136000 BDT</p>
									<a type="button" href="getdetails.html" class="btn btn-success">Get Details</a>
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<footer class="page-footer">
			<div class="footer-first-section">
				<div class="container">
						

				</div>
			</div>
			<!-- End of box-Wrap -->
			<div class="footer-second-section">
				<div class="container">
					<hr class="footer-line">
					<ul class="social-list">
						<li><a href=""><i class="fab fa-facebook-square"></i></a></li>
						<li><a href=""><i class="fab fa-instagram"></i></a></li>
						<li><a href=""><i class="fab fa-skype"></i></a></li>
						<li><a href=""><i class="fab fa-youtube"></i></a></li>

					</ul>
					<hr class="footer-line">
				</div>
			</div>
			<div class="footer-last-section">
				<div class="container">
					<p>HelloBizer &copy; Your Travel Partner <span> | </span> Thank you </p>
				</div>
			</div>
		</footer>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="{{asset('Frontend')}}/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="{{asset('Frontend')}}/js/lightbox.js"></script>
	<script type="text/javascript" src="{{asset('Frontend')}}/js/all.js"></script>
	<script type="text/javascript" src="{{asset('Frontend')}}/js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="{{asset('Frontend')}}/js/owl.carousel.js"></script>
	<script type="text/javascript" src="{{asset('Frontend')}}/js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="{{asset('Frontend')}}/js/jquery.rateyo.js"></script>
	<!-- <script type="text/javascript" src="js/jquery.mmenu.all.js"></script> -->
	<!-- <script type="text/javascript" src="js/jquery.meanmenu.min.js"></script> -->
	<script type="text/javascript" src="{{asset('Frontend')}}/js/custom.js"></script>
</body>
</html>