<!DOCTYPE html>
<html lang="en">
<head>
<title>Course Management | Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('home/styles/bootstrap4/bootstrap.min.css') }}">
<link href="{{ asset('home/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('home/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('home/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('home/plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('home/styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('home/styles/responsive.css') }}">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="{{ asset('home/images/logo.png') }}" alt="">
					<span>course management system</span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="#">home</a></li>
						<li class="main_nav_item"><a href="#">about us</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<a href="{{ route('admin.index') }}">
            <div class="header_side d-flex flex-row justify-content-center align-items-center">
                <span>Go to Admin Dashboard</span>
            </div>
        </a>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>

	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>


	</div>

	<!-- Home -->

	<div class="home">

		<!-- Hero Slider -->
		<div class="hero_slider_container">
			<div class="hero_slider owl-carousel">

				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url({{ asset('home/images/slider_background.jpg') }})"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
						</div>
					</div>
				</div>

				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url({{ asset('home/images/slider_background.jpg') }})"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
						</div>
					</div>
				</div>

				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url({{ asset('home/images/slider_background.jpg') }})"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
						</div>
					</div>
				</div>

			</div>

			<div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
			<div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
		</div>

	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">

			<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">

					<!-- Footer Column - About -->
					<div class="col-lg-6 footer_col">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<img src="{{ asset('home/images/logo.png') }}" alt="">
								<span>course management system</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
	</footer>

</div>

<script src="{{ asset('home/js/jquery-3.2.1.min.js') }}"></script>
<script src="styles/bootstrap4/popper.js') }}"></script>
<script src="styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('home/plugins/greensock/TweenMax.min.js') }}"></script>
<script src="pluginsgreensock/TimelineMax.min.js') }}"></script>
<script src="{{ asset('home/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('home/plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ asset('home/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('home/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('home/plugins/scrollTo/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('home/plugins/easing/easing.js') }}"></script>
<script src="{{ asset('home/js/custom.js') }}"></script>

</body>
</html>
