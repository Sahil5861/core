
<!-- <div class="footer-main section-padding--bottom footer-main--top-padding"> // on home page used -->

<style type="text/css">
   .error,.error-msg-news{
      color: red;
   }
   .success-msg-news{
      color: green;
   }
</style>

<div class="footer-main section-padding--bottom section-padding--top">
	<div class="container">
		<div class="row gutter-y-30">
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="footer-widget footer-widget--about">
					<a href="{{url('/')}}" class="footer-widget__logo">
						<img src="{{asset('frontend/assets/images/favicons/cti-file-01.png')}}" width="150" height="80" alt="Cretech">
					</a>
					<p class="footer-widget__text">We work with a passion of taking challenges and creating new
						ones in advertising sector.</p><!-- /.footer-widget__text -->

					@if( isset($setting) && !empty($setting))
					<ul class="footer-widget__social">
						<li><a href="{{$setting->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
						<li><a href="{{$setting->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="{{$setting->linkedin}}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
						<li><a href="{{$setting->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
					</ul><!-- /.footer-widget__social -->
					@endif

				</div><!-- /.footer-widget -->
			</div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="footer-widget footer-widget--links">
					<h3 class="footer-widget__title">Solutions</h3><!-- /.footer-widget__title -->
					<ul class="footer-widget__links">
						<!-- <li>
							<a href="#">Cyber Security</a>
						</li> -->
						{{-- <li>
							<a href="#">Website Development</a>
						</li>
						<li>
							<a href="#">Mobile App Development</a>
						</li>
						<li>
							<a href="#">Hybrid App Development</a>
						</li> --}}

						@foreach ($services as $service)
							<li><a href="#">{{$service->title}}</a></li>
						@endforeach

						<!-- <li>
							<a href="{{route('about-us')}}">About Us</a>
						</li> -->
					</ul><!-- /.footer-widget__links -->
				</div><!-- /.footer-widget -->
			</div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="footer-widget footer-widget--newsletter">
					<h3 class="footer-widget__title">Subscribe</h3><!-- /.footer-widget__title -->
					<p class="footer-widget__text">Sign up to receive the latest articles</p>
					<!-- /.footer-widget__text -->

					<form id="newsletter" action="{{route('news-letter-save')}}" class="footer-widget__newsletter " > <!-- mc-form -->
						@csrf
						<input type="email" name="news_email" required placeholder="Enter Your Email">
						<button class="thm-btn footer-widget__newsletter__btn"><span>Register</span></button>
						<p class="success-msg-news"></p>
                  		<p class="error-msg-news"></p>
					</form>


					<div class="mc-form__response"></div><!-- /.mc-form__response -->
				</div><!-- /.footer-widget -->
			</div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="footer-widget footer-widget--contact">
					<h3 class="footer-widget__title">Contact</h3><!-- /.footer-widget__title -->
					<ul class="footer-widget__contact">
						@if( isset($setting) && !empty($setting))
						<li>
							<i class="fa fa-phone"></i>
							<a href="tel:+91{{$setting->mobile}}">+91 {{$setting->mobile}}</a>
						</li>
						<li>
							<i class="fa fa-envelope"></i>
							<a href="mailto:{{$setting->email}}">{{$setting->email}}</a>
						</li>
						<li>
							<i class="fa fa-map-marker-alt"></i>
							{{$setting->address}}
						</li>
						@endif
					</ul><!-- /.footer-widget__contact -->
				</div><!-- /.footer-widget -->
			</div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.footer-main -->



