<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Title -->
        <title>PT. Danau Emas Gadai Jatim- Cabang Banyuwangi</title>
		
		<!-- Favicon -->
        <link rel="icon" href="{{ asset('user/img/logo-pt.png')}}">
		
		<!-- Google Fonts -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css')}}">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="{{ asset('user/css/nice-select.css')}}">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{ asset('user/css/font-awesome.min.css')}}">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="{{ asset('user/css/icofont.css')}}">
		<!-- Slicknav -->
		<link rel="stylesheet" href="{{ asset('user/css/slicknav.min.css')}}">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('user/css/owl-carousel.css')}}">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="{{ asset('user/css/datepicker.css')}}">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('user/css/animate.min.css')}}">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{ asset('user/css/magnific-popup.css')}}">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="{{ asset('user/css/normalize.css')}}">  
        <link rel="stylesheet" href="{{ asset('user/style.css')}}">
        <link rel="stylesheet" href="{{ asset('user/css/responsive.css')}}">

    </head>
    <body>
	
		<!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                {{-- <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="12 6 15 6"></polyline>
                        <polyline id="front" points="12 6 15 6"></polyline>
                    </svg>
                </div> --}}
            </div>
        </div>
        <!-- End Preloader -->
	
		<!-- Header Area -->
		<header class="header" >
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-5 col-12">
							<!-- Contact -->
							<ul class="top-link">
								<li><a href="{{ route('user.about') }}">About</a></li>
								{{-- <li><a href="#">Berita</a></li> --}}
								<li><a href="{{ route ('user.contact')}}">Contact</a></li>
								<li><a href="{{ route('user.faq') }}">FAQ</a></li>
							</ul>
							<!-- End Contact -->
						</div>
						<div class="col-lg-6 col-md-7 col-12">
							<!-- Top Contact -->
							<ul class="top-contact">
								<li><i class="fa fa-phone"></i><a href="https://api.whatsapp.com/send?phone=6281357769681" target="_blank">+62 Nomor di ganti</a></li>
								<li><i class="fa fa-envelope"></i><a href="mailto:Danauemascabangbanyuwangi1@gmail.com" >Email di ganti</a></li>
							</ul>
							<!-- End Top Contact -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="/"><img src="{{ asset('user/img/danauemas.png')}}" alt="#" height="50%" width="200px" ></a> 
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li><a href="/">Home</a>  
												{{-- class="active" --}}
											</li>
											<li><a href="{{ route('user.about')}}">About</a></li>
											<li><a href="{{ route('user.berita')}}">Berita</a></li>											
											<li><a href="#">Our Team<i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="{{ route('user.team')}}">Team all</a></li>
												</ul>
											</li>
											<li><a href="{{ route('user.contact')}}">Contact Us</a></li>
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							<div class="col-lg-2 col-12">
								<div class="get-quote">
									<a href="{{ route('login') }}" class="btn">Login For Staff</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
		
        @yield('user')

		@if(@session('success'))
		<div class="alert alert-success">{{ session('success') }}</div>
		@endif
		
		<!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>About Us</h2>
								<p>Lorem ipsum dolor sit am consectetur adipisicing elit do eiusmod tempor incididunt ut labore dolore magna.</p>
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-google-plus"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-vimeo"></i></a></li>
									<li><a href="#"><i class="icofont-pinterest"></i></a></li>
								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Quick Links</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Services</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Our Cases</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Other Links</a></li>	
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Consuling</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Finance</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Testimonials</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>	
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Open Hours</h2>
								<p>Lorem ipsum dolor sit ame consectetur adipisicing elit do eiusmod tempor incididunt.</p>
								<ul class="time-sidual">
									<li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
									<li class="day">Saturday <span>9.00-18.30</span></li>
									<li class="day">Monday - Thusday <span>9.00-15.00</span></li>
								</ul>
							</div>
						</div>
						{{-- <div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Newsletter</h2>
								<p>subscribe to our newsletter to get allour news in your inbox.. Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
								<form action="{{ route('subscribe') }}" method="POST" target="_blank" class="newsletter-inner">
									@csrf
									<input type="email" id="email" name="email" placeholder="Email Address" class="common-input" required>
									<button type="submit" class="button"><i class="icofont icofont-paper-plane"></i></button>
								</form>
							</div>
						</div> --}}
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2018  |  All Rights Reserved by <a href="https://www.wpthemesgrid.com" target="_blank">wpthemesgrid.com</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->
		
		<!-- jquery Min JS -->
        <script src="{{ asset('user/js/jquery.min.js')}}"></script>
		<!-- jquery Migrate JS -->
		<script src="{{ asset('user/js/jquery-migrate-3.0.0.js')}}"></script>
		<!-- jquery Ui JS -->
		<script src="{{ asset('user/js/jquery-ui.min.js')}}"></script>
		<!-- Easing JS -->
        <script src="{{ asset('user/js/easing.js')}}"></script>
		<!-- Color JS -->
		<script src="{{ asset('user/js/colors.js')}}"></script>
		<!-- Popper JS -->
		<script src="{{ asset('user/js/popper.min.js')}}"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="{{ asset('user/js/bootstrap-datepicker.js')}}"></script>
		<!-- Jquery Nav JS -->
        <script src="{{ asset('user/js/jquery.nav.js')}}"></script>
		<!-- Slicknav JS -->
		<script src="{{ asset('user/js/slicknav.min.js')}}"></script>
		<!-- ScrollUp JS -->
        <script src="{{ asset('user/js/jquery.scrollUp.min.js')}}"></script>
		<!-- Niceselect JS -->
		<script src="{{ asset('user/js/niceselect.js')}}"></script>
		<!-- Tilt Jquery JS -->
		<script src="{{ asset('user/js/tilt.jquery.min.js')}}"></script>
		<!-- Owl Carousel JS -->
        <script src="{{ asset('user/js/owl-carousel.js')}}"></script>
		<!-- counterup JS -->
		<script src="{{ asset('user/js/jquery.counterup.min.js')}}"></script>
		<!-- Steller JS -->
		<script src="{{ asset('user/js/steller.js')}}"></script>
		<!-- Wow JS -->
		<script src="{{ asset('user/js/wow.min.js')}}"></script>
		<!-- Magnific Popup JS -->
		<script src="{{ asset('user/js/jquery.magnific-popup.min.js')}}"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

		<script src="https://maps.google.com/maps/api/js?key=AWNVXaacmoDrNYbs5"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('user/js/bootstrap.min.js')}}"></script>
		<!-- Main JS -->
		<script src="{{ asset('user/js/main.js')}}"></script>
		<script>
    $(document).ready(function(){
        $(".unit-slider").owlCarousel({
            loop: true,
            margin: 10,
            dots: true, // Enable dots navigation
            nav: false, // Disable next and prev buttons
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    });
		</script>
    </body>
</html>