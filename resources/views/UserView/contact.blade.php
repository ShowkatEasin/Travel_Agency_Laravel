<!DOCTYPE html>
<html>
<head>
	<title>Blogs-HelloBizer</title>
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
       

		<section class="contact-page-section">
			<div class="container">
				<div class="people-info-wrap">
					<h2>leave us your info</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
					<form>
						<span>
						<input type="text" placeholder="Full Name*" class="input- name">
						<input type="email" placeholder="Email*" class="input- email">
						</span>
						<input type="text" placeholder="Subject*" class="input- subject">
						<input type="text" placeholder="Message*" class="input- subject">
							
						</textarea>
						<input type="submit" value="submit now">
					</form>
				</div>

				<div class="contact-info">
					<h2>contact info</h2>
					<ul class="contact-list">
						<li><i class="fas fa-location-arrow"></i> 
							<span>
								<p>Gongabu, Kathmandu, Nepal</p>
							    <p>(Opposite to Aatmagyan Prachar sangh)</p>
							</span>
						</li>
						<li><i class="fas fa-phone"></i>
							<span> 
								<p>Phone: 016204888, Mobile: 9813639131</p>
								<p>Fax:7838478387</p>
							</span>
						</li>
						<li><i class="fas fa-envelope"></i>
							<span>
								<p>info@labtheme.com</p>
							</span>
						</li>
					</ul>
					
				</div>
			</div>
		</section>

		<section class="map-section">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.5733087899557!2d85.31323458697706!3d27.730457718152763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1920ba20a0d5%3A0x3ea7459e8ab1371f!2sSpyders+Lab!5e0!3m2!1sen!2snp!4v1547705422844" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
		</section>

		<section class="query-section">
			<div class="container">
				<p>Any Queries? Ask us a question at<a href="tel:+9779813639131"><i class="fas fa-phone"></i> +977 9813639131</a></p>
			</div>
		</section>
		<!-- End of Query Section -->
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
						        <li><a href="{{ URL:: to('/home')}}">Home</a></li>
								<li><a href="{{ URL:: to('/packages')}}">Packages</a></li>
								<li><a href="{{ URL:: to('/about')}}">About</a></li>
								<li><a href="{{ URL:: to('/blogs')}}">Blogs</a></li>
								<li><a href="{{ URL:: to('/contact')}}">Contact</a></li>
						
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