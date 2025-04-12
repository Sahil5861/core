<!DOCTYPE html>
<html lang="en">
	<style>
		:root{
			/* --cretech-primary: #6a2dec; */
			--cretech-primary: #7066ad;
			--cretech-primary-rgb: 106, 46, 237;
			/* --cretech-secondary: #9c2ede; */
			--cretech-secondary: #6254a4;
		}
	</style>
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
				<p class="topbar__text">Welcome to IT Solutions & Services</p><!-- /.topbar__text -->
				<ul class="topbar__info">
					@if(isset($setting) && !empty($setting))
					<li>
						<i class="fa fa-envelope"></i>
						<a href="mailto:{{$setting->email}}">{{$setting->email}}</a>
					</li>
					@endif
					<li>
						<i class="fa fa-map-marker"></i>
						@if( isset($setting) && !empty($setting))
						{{$setting->address}}
						@endif
						<!-- Flat no 62 3rd floor, Pocket 25, Sector 24, Rohini, Delhi 110085 -->
					</li>
				</ul><!-- /.topbar__info -->
				<ul class="topbar__social">
					@if(isset($setting) && !empty($setting))
					<li><a href="{{$setting->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
					<li><a href="{{$setting->facebook}}" target="_blank"><i class="fab fa-facebook"></i></a></li>
					<li><a href="{{$setting->linkedin}}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
					<li><a href="{{$setting->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
					@endif
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
				@if( isset($setting) && !empty($setting))
				<li>
					<i class="fa fa-phone"></i>
					<a href="tel:+91{{$setting->mobile}}">+91 {{$setting->mobile}}</a>
				</li>
				@endif

				@if( isset($setting) && !empty($setting))
				<li>
					<i class="fa fa-envelope"></i>
					<a href="mailto:{{$setting->email}}">{{$setting->email}}</a>
				</li>
				@endif

				@if( isset($setting) && !empty($setting))
				<li>
					<i class="fa fa-map-marker-alt"></i>
					{{$setting->address}}
				</li>
				@endif
			</ul><!-- /.mobile-nav__contact -->

			@if( isset($setting) && !empty($setting))
			<ul class="mobile-nav__social">
				<li><a href="{{$setting->twitter}}" ><i class="fab fa-twitter"></i></a></li>
				<li><a href="{{$setting->facebook}}" ><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="{{$setting->linkedin}}" ><i class="fab fa-linkedin"></i></a></li>
				<li><a href="{{$setting->instagram}}" ><i class="fab fa-instagram"></i></a></li>
			</ul><!-- /.mobile-nav__social -->
			@endif
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


	<!-- news letter from start -->
	<script type="text/javascript">
	   if ($("#newsletter").length) {
	      $("#newsletter").validate({
	         // initialize the plugin
	         rules: {
	            email: {
	               required: true,
	               email: true
	            },
	         },
	         submitHandler: function (form) {
	            // sending value with ajax request
	            $('.preloader').show();
	            $.post(
	               $(form).attr("action"),
	               $(form).serialize(),
	               function (response) {
	                  $('.preloader').hide();
	                  var res = JSON.parse(response);
	                  if(res.status){
	                     $('.success-msg-news').text();
	                     $('.success-msg-news').append(res.message);
	                     $(form).find('input[type="email"]').val("");
	                  }else{
	                     $('.error-msg-news').text();
	                     $('.error-msg-news').append(res.message);
	                  }                  
	               }
	            );
	            return false;
	         }
	      });
	   }
	</script>
	<!-- news letter from end -->

	@yield('js_script')
	</body>
</html>