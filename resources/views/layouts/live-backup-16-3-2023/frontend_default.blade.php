<!DOCTYPE html>
<html lang="en">
	@include('includes.head')
	<!-- @section('title', 'Home') -->
<body class="custom-cursor">
	<div class="custom-cursor__cursor"></div>
	<div class="custom-cursor__cursor-two"></div>
	<div class="preloader">
		<div class="preloader__circle"></div>
	</div>
	<div class="page-wrapper">
		<div class="topbar">
			<div class="container-fluid">
				<p class="topbar__text">Welcome to IT Solutions & Services HTML Template</p><!-- /.topbar__text -->
				<ul class="topbar__info">
					<li>
						<i class="fa fa-envelope"></i>
						<a href="mailto:contact@coretechinfo.com">contact@coretechinfo.com</a>
					</li>
					<li>
						<i class="fa fa-map-marker"></i>
						Flat no 62 3rd floor, Pocket 25, Sector 24, Rohini, Delhi 110085
					</li>
				</ul><!-- /.topbar__info -->
				<ul class="topbar__social">
					<li><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li><a href="#"><i class="fab fa-facebook"></i></a></li>
					<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
					<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				</ul><!-- /.topbar__social -->
			</div><!-- /.container-fluid -->
		</div><!-- /.topbar -->
		
		@include('includes.header')

		<!-- page content start -->
        @yield('content')
        <!-- page content end -->


		<!-- footer main start -->
		@include('includes.footer')
		<!-- footer main end -->


		<div class="footer-bottom">
			<div class="container">
				<p>&copy; All Copyright <span class="dynamic-year"></span> by CoreTechInfo</p>
			</div><!-- /.container -->
		</div><!-- /.footer-bottom -->

	</div><!-- /.page-wrapper -->
	<div class="mobile-nav__wrapper">
		<div class="mobile-nav__overlay mobile-nav__toggler"></div>
		<!-- /.mobile-nav__overlay -->
		<div class="mobile-nav__content">
			<a href="#" class="mobile-nav__close mobile-nav__toggler">
				<span></span>
				<span></span>
			</a>
			<div class="logo-box">
				<a href="index.html" aria-label="logo image"><img src="{{asset('frontend/assets/images/logo-light.png')}}" width="98"
						height="33" alt="Cretech"></a>
			</div>
			<!-- /.logo-box -->
			<div class="mobile-nav__container"></div>
			<!-- /.mobile-nav__container -->
			<ul class="mobile-nav__contact list-unstyled">
				<li>
					<i class="fa fa-phone"></i>
					<a href="tel:+91 9643044561">+91 9643044561</a>
				</li>
				<li>
					<i class="fa fa-envelope"></i>
					<a href="mailto:needhelp@company.com">contact@coretechinfo.com</a>
				</li>
				<li>
					<i class="fa fa-map-marker-alt"></i>
					88 Broklyn Golden Road Street <br> New York. USA
				</li>
			</ul><!-- /.mobile-nav__contact -->
			<ul class="mobile-nav__social">
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
			</ul><!-- /.mobile-nav__social -->
		</div>
		<!-- /.mobile-nav__content -->
	</div>
	<!-- /.mobile-nav__wrapper -->
	<div class="search-popup">
		<div class="search-popup__overlay search-toggler"></div>
		<!-- /.search-popup__overlay -->
		<div class="search-popup__content">
			<form action="#">
				<label for="search" class="sr-only">search here</label><!-- /.sr-only -->
				<input type="text" id="search" placeholder="Search Here..." />
				<button type="submit" aria-label="search submit" class="thm-btn">
					<span><i class="icon-magnifying-glass"></i></span>
				</button>
			</form>
		</div>
		<!-- /.search-popup__content -->
	</div>
	<!-- /.search-popup -->
	<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
	<!-- plugins js -->
	<script src="{{asset('frontend/assets/vendors/jquery/jquery-3.6.0.min.js')}}"></script>
	<script src="{{asset('frontend/assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('frontend/assets/vendors/jquery-validation/jquery.validate.min.js')}}"></script>
	<script src="{{asset('frontend/assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="{{asset('frontend/assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
	<script src="{{asset('frontend/assets/vendors/wow/wow.js')}}"></script>
	<script src="{{asset('frontend/assets/vendors/jarallax/jarallax.min.js')}}"></script>
	<script src="{{asset('frontend/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('frontend/assets/vendors/lettering-js/jquery.lettering.js')}}"></script>
	<script src="{{asset('frontend/assets/vendors/youtube-popup/youtube-popup.jquery.js')}}"></script>
	<!-- template js -->
	<script src="{{asset('frontend/assets/js/cretech.js')}}"></script>

	</body>
</html>