
<!DOCTYPE html>
<html>
<head>
	<title>HelloBizer</title>
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{asset('Frontend')}}/css/all.css">
	<link rel="stylesheet" type="text/css" href="{{asset('Frontend')}}/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('Frontend')}}/css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="{{asset('Frontend')}}/css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="{{asset('Frontend')}}/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="{{asset('Frontend')}}/css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="{{asset('Frontend')}}/css/jquery.rateyo.css"/>
	 <link rel="stylesheet" type="text/css" href="{{asset('Frontend')}}/css/jquery.mmenu.all.css" />
	 <link rel="stylesheet" type="text/css" href="{{asset('Frontend')}}/css/meanmenu.min.css"> 
	<link rel="stylesheet" type="text/css" href="{{asset('Frontend')}}/inner-page-style.css">
	<link rel="stylesheet" type="text/css" href="{{asset('Frontend')}}/style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div id="page" class="site" itemscope itemtype="http://schema.org/LocalBusiness">
		<header class="site-header">
			<div class="top-header">
				<div class="container">
					<div class="top-header-left">
						<div class="top-header-block">
							<a href="mailto:info@educationpro.com" itemprop="email"><i class="fas fa-envelope"></i> info@educationpro.com</a>
						</div>
						<div class="top-header-block">
							<a href="tel:+9779813639131" itemprop="telephone"><i class="fas fa-phone"></i> +977 9813639131</a>
						</div>
					</div>
					<div class="top-header-right">
						<div class="social-block">
							<ul class="social-list">
								<li><a href=""><i class="fab fa-viber"></i></a></li>
								<li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
								<li><a href=""><i class="fab fa-facebook-square"></i></a></li>
								<li><a href=""><i class="fab fa-facebook-messenger"></i></a></li>
								<li><a href=""><i class="fab fa-twitter"></i></a></li>
								<li><a href=""><i class="fab fa-skype"></i></a></li>
							</ul>
						</div>
						<div class="login-block">
							<a href="">Login /</a>
							<a href="">Register</a>
						</div>
					</div>
				</div>
			</div>
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
								<li><a href="http://127.0.0.1:5500/index.html">Home</a></li>
								<li><a href="http://127.0.0.1:5500/packages.html">Packages</a></li>
								<li><a href="http://127.0.0.1:5500/about.html">About</a></li>
								<li><a href="http://127.0.0.1:5500/blogs.html">Blogs</a></li>
								<li><a href="http://127.0.0.1:5500/contact.html">Contact</a></li>
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
		<div class="banner">
			<div class="owl-four owl-carousel" itemprop="image">
				<img src="{{asset('Frontend')}}/images/page-banner.jpg" alt="Image of Bannner">
				<img src="{{asset('Frontend')}}/images/page-banner2.jpg" alt="Image of Bannner">
				<img src="{{asset('Frontend')}}/images/page-banner3.jpg" alt="Image of Bannner">
			</div>
			<div class="container" itemprop="description">
				<h1>welcome to HelloBizer</h1>
				<h3>With our advance search feature you can now find the trips for you...</h3>
			</div>
			 <div id="owl-four-nav" class="owl-nav"></div>
		</div>
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
		<!-- Learn courses End -->
		
		<!-- About Section start -->
		<section class="whyUs-section">
			<div class="container">
				<div class="featured-points">
					<ul>
						<li><i class="fas fa-book"></i> Good Behavior with Tourist</li>
						<li><i class="fas fa-money-check-alt"></i> affordable Cost</li>
						<li><i class="fas fa-chalkboard-teacher"></i>  experienced Gaid</li>
						<li> <i class="fas fa-book"></i> Tourisy Secuirity</li>
					</ul>
				</div>
				<div class="whyus-wrap">
					<h1>About Us</h1>
					<p itemprop="description">Online travel agencies can be used by the general public for leisure travel, and by organizations for business travel. The platforms differ in what they offer, but the premise remains the same: to facilitate travel and its associated admin and costs.
						Hotels, airlines, and car hire companies pay online travel agencies to appear on their website. On the other hand, the advantage for the service provider is the added visibility that OTAs can provide.
						
						OTAs work by providing a streamlined approach to all things travel. It involves the customer accessing a website or platform on which they’re offered a wide variety of travel options from a number of different travel and accommodation providers. </p>

					<a href="#" class="read-more-btn">read more</a>
				</div>
			</div>
		</section>
		  <!-- Blogs section start -->
		  <section class="page-heading">
			<div class="container">
				<h2>latest Blogs</h2>
			</div>
		</section>
		<section class="latest-news">
			<div class="container" itemprop="event" itemscope itemtype=" http://schema.org/Event">
				<div class="owl-two owl-carousel">
					<div class="news-wrap" itemprop="event">
						<div class="news-img-wrap" itemprop="image">
							<img src="{{asset('Frontend')}}/images/latest-new-img.jpg" alt="Latest News Images">
						</div>
						<div class="news-detail" itemprop="description">
							<a href=""><h1>Blogs In Dubai</h1></a>
							<h2 itemprop="startDate">By Admin | 20 Dec. 2018</h2>

							<p>Orientation Programme for new sffs Students. Orientatin Programmes for new Students.. Orientatin Programmes for new Students</p>
						</div>
					</div>

					<div class="news-wrap" itemprop="event">
						<div class="news-img-wrap" itemprop="image">
							<img src="{{asset('Frontend')}}/images/latest2-new-img.jpg" alt="Latest News Images">
						</div>
						<div class="news-detail" itemprop="description">
							<a href=""><h1>Blogs in Nepal</h1></a>
							<h2 itemprop="startDate">By Admin | 20 Dec. 2018</h2>

							<p>Orientation Programme for new sffs Students. Orientatin Programmes for new Students.. Orientatin Programmes for new Students</p>
						</div>
					</div>

					<div class="news-wrap" itemprop="event">
						<div class="news-img-wrap" itemprop="image">
							<img src="{{asset('Frontend')}}/images/latest3-new-img.jpg" alt="Latest News Images">
						</div>
						<div class="news-detail" itemprop="description">
							<a href=""><h1>Blogs in Thailand</h1></a>
							<h2 itemprop="startDate">By Admin | 20 Dec. 2018</h2>

							<p>Orientation Programme for new sffs Students. Orientatin Programmes for new Students.. Orientatin Programmes for new Students</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Blog section CLosed -->

		

		<!-- Contact section start -->

		<section class="page-heading">
			<div class="container">
				<h2>Contact Us</h2>
			</div>
		</section>
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
						
						<input type="email" placeholder="Email*" class="input- subject">

                        <input type="text" placeholder="Subject*" class="input- subject">
							
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
	<script type="text/javascript" src="{{asset('Frontend')}}/js/all.js"></script>
	<script type="text/javascript" src="{{asset('Frontend')}}/js/lightbox.js"></script>
	<script type="text/javascript" src="{{asset('Frontend')}}/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="{{asset('Frontend')}}/js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="{{asset('Frontend')}}/js/owl.carousel.js"></script>
	<script type="text/javascript" src="{{asset('Frontend')}}/js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="{{asset('Frontend')}}/js/jquery.rateyo.js"></script>
	<!-- <script type="text/javascript" src="js/jquery.mmenu.all.js"></script> -->
	<!-- <script type="text/javascript" src="js/jquery.meanmenu.min.js"></script> -->
	<script type="text/javascript" src="{{asset('Frontend')}}/js/custom.js"></script>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>