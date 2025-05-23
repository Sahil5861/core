
@extends('layouts.frontend_default')
@section('title', 'About Us')
@section('content')

<div class="page-header">
	<div class="page-header__bg"
		style="background-image: url({{asset('frontend/assets/images/background/page-header-bg-1-1.jpg')}});"></div>
	<!-- /.page-header__bg -->
	<div class="container">
		<ul class="thm-breadcrumb list-unstyled">
			<li><a href="../../index.html">Home</a></li>
			<li>About</li>
		</ul>
		<h2 class="page-header__title">About Us</h2><!-- /.page-header__title -->
	</div><!-- /.container -->
</div><!-- /.page-header -->
<section class="about-four section-padding--top">
	<div class="container">
		<div class="row gutter-y-60">
			<div class="col-lg-6">
				<div class="about-four__image">
					<img src="{{asset('frontend/assets/images/resources/about-four-1-1.jpg')}}" class="wow fadeInUp"
						data-wow-duration="1500ms" alt="">
				</div><!-- /.about-four__image -->
			</div><!-- /.col-lg-6 -->
			<div class="col-lg-6">
				<div class="about-four__content">
					<div class="section-title ">
						<p class="section-title__text">About Company</p><!-- /.section-title__text -->
						<h2 class="section-title__title">The World’s Networking
							Company</h2><!-- /.section-title__title -->
					</div><!-- /.section-title -->
					<div class="about-four__text">Since from 2000 Building Your Better IT Solution The
						definition of business is an occupation or trade & the purchase and sale of products Our
						Mission & Vision Voice and Data System are crucial to the success.</div>
					<!-- /.about-four__text -->
					<div class="about-four__meta">
						<div class="about-four__author">
							<img src="{{asset('frontend/assets/images/resources/about-four-author-1.jpg')}}" alt="">
							<div class="about-four__author__content">
								<h3 class="about-four__author__title">Michele Morrone</h3>
								<!-- /.about-four__author__title -->
								<div class="about-four__author__designation">Founder CEO</div>
								<!-- /.about-four__author__designation -->
							</div><!-- /.about-four__author__content -->
						</div><!-- /.about-four__author -->
						<a href="../../html/cretech/services-1.html" class="thm-btn about-four__btn"><span>Learn More</span></a>
						<!-- /.thm-btn about-four__btn -->
					</div><!-- /.about-four__meta -->
				</div><!-- /.about-four__content -->
			</div><!-- /.col-lg-6 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>
<section class="section-padding--bottom section-padding--top">
	<div class="container">
		<div class="section-title text-center">
			<p class="section-title__text">Our Team members</p><!-- /.section-title__text -->
			<h2 class="section-title__title">Our Expert Person to Provide <br> IT Solution Services</h2>
			<!-- /.section-title__title -->
		</div><!-- /.section-title -->
		<div class="row gutter-y-30">
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="team-card-one wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
					<div class="team-card-one__image">
						<img src="{{asset('frontend/assets/images/team/team-2-1.jpg')}}" alt="">
						<div class="team-card-one__social">
							<ul class="team-card-one__social__links">
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							</ul><!-- /.team-card-one__social__links -->
							<div class="team-card-one__social__icon">
								<i class="fa fa-share-alt"></i>
							</div><!-- /.team-card-one__social__icon -->
						</div><!-- /.team-card-one__social -->
					</div><!-- /.team-card-one__image -->
					<div class="team-card-one__content">
						<h3 class="team-card-one__title"><a href="#">Michelle Monaghan</a></h3>
						<!-- /.team-card-one__title -->
						<p class="team-card-one__designation">Designer</p><!-- /.team-card-one__designation -->
					</div><!-- /.team-card-one__content -->
				</div><!-- /.team-card-one -->
			</div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="team-card-one wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
					<div class="team-card-one__image">
						<img src="{{asset('frontend/assets/images/team/team-2-2.jpg')}}" alt="">
						<div class="team-card-one__social">
							<ul class="team-card-one__social__links">
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							</ul><!-- /.team-card-one__social__links -->
							<div class="team-card-one__social__icon">
								<i class="fa fa-share-alt"></i>
							</div><!-- /.team-card-one__social__icon -->
						</div><!-- /.team-card-one__social -->
					</div><!-- /.team-card-one__image -->
					<div class="team-card-one__content">
						<h3 class="team-card-one__title"><a href="#">Jessica Brown</a></h3>
						<!-- /.team-card-one__title -->
						<p class="team-card-one__designation">Manager</p><!-- /.team-card-one__designation -->
					</div><!-- /.team-card-one__content -->
				</div><!-- /.team-card-one -->
			</div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="team-card-one wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
					<div class="team-card-one__image">
						<img src="{{asset('frontend/assets/images/team/team-2-3.jpg')}}" alt="">
						<div class="team-card-one__social">
							<ul class="team-card-one__social__links">
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							</ul><!-- /.team-card-one__social__links -->
							<div class="team-card-one__social__icon">
								<i class="fa fa-share-alt"></i>
							</div><!-- /.team-card-one__social__icon -->
						</div><!-- /.team-card-one__social -->
					</div><!-- /.team-card-one__image -->
					<div class="team-card-one__content">
						<h3 class="team-card-one__title"><a href="#">Kevin Martin</a></h3>
						<!-- /.team-card-one__title -->
						<p class="team-card-one__designation">Developer</p><!-- /.team-card-one__designation -->
					</div><!-- /.team-card-one__content -->
				</div><!-- /.team-card-one -->
			</div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="team-card-one wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
					<div class="team-card-one__image">
						<img src="{{asset('frontend/assets/images/team/team-2-4.jpg')}}" alt="">
						<div class="team-card-one__social">
							<ul class="team-card-one__social__links">
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							</ul><!-- /.team-card-one__social__links -->
							<div class="team-card-one__social__icon">
								<i class="fa fa-share-alt"></i>
							</div><!-- /.team-card-one__social__icon -->
						</div><!-- /.team-card-one__social -->
					</div><!-- /.team-card-one__image -->
					<div class="team-card-one__content">
						<h3 class="team-card-one__title"><a href="#">Sarah Albert</a></h3>
						<!-- /.team-card-one__title -->
						<p class="team-card-one__designation">Director</p><!-- /.team-card-one__designation -->
					</div><!-- /.team-card-one__content -->
				</div><!-- /.team-card-one -->
			</div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>
<section class="black-bg section-padding-lg--top section-padding-lg--bottom cta-two">
	<div class="cta-two__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
		style="background-image: url({{asset('frontend/assets/images/background/cta-two-bg-1-1.jpg')}});"></div>
	<div class="container">
		<div class="cta-two__inner">
			<h3 class="cta-two__title">Better IT Solutions And Services
				At Your <span>Fingertips</span></h3><!-- /.cta-two__title -->
			<a href="../../html/cretech/contact.html" class="thm-btn cta-two__btn"><span>LEarn More</span></a>
			<!-- /.thm-btn cta-two__btn -->
		</div><!-- /.cta-two__inner -->
	</div><!-- /.container -->
</section>
<section
	class="section-padding--bottom section-padding--top testimonials-two background-repeat-no background-position-top-center"
	style="background-image: url({{asset('frontend/assets/images/shapes/testi-bg-1-1.png')}});">
	<div class="container">
		<div class="row gutter-y-60">
			<div class="col-lg-5">
				<div class="testimonials-two__content">
					<div class="section-title ">
						<p class="section-title__text">Our clients</p><!-- /.section-title__text -->
						<h2 class="section-title__title">We Are Trusted
							Worldwide Peoples</h2><!-- /.section-title__title -->
					</div><!-- /.section-title -->
					<div class="testimonials-two__content__text">Sed ut perspiciatis unde omnis natus error sit
						voluptatem accusa ntium doloremque laudantium totam rem aperiamea queipsa quae abillo
						inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
					<!-- /.testimonials-two__content__text -->
					<div class="testimonials-two__content__text">Pellentesque gravida lectus vitae nisi luctus,
						Finibus aliquet ligula ultrices.</div><!-- /.testimonials-two__content__text -->
					<a href="../../html/cretech/about.html" class="thm-btn testimonials-two__content__btn"><span>View All
							feedbacks</span></a><!-- /.thm-btn testimonials-two__content__btn -->
				</div><!-- /.testimonials-two__content -->
			</div><!-- /.col-lg-5 -->
			<div class="col-lg-7">
				<div class="testimonials-two__items">
					<div class="row gutter-y-30">
						<div class="col-lg-12">
							<div class="testimonials-one-card">
								<div class="testimonials-one-card__image">
									<img src="{{asset('frontend/assets/images/resources/testi-1-1.jpg')}}" alt="">
								</div><!-- /.testimonials-one-card__image -->
								<div class="testimonials-one-card__content">
									<div class="testimonials-one-card__text">On the other hand denounc with
										ghteo
										indignation and dislike men who so beguiled and demoralized the charms
										of
										pleasure
										the momen blinded by desire cannot foresee the pain and trouble.</div>
									<!-- /.testimonials-one-card__text -->
									<h3 class="testimonials-one-card__title">Michal Rahul</h3>
									<!-- /.testimonials-one-card__title -->
									<p class="testimonials-one-card__designation">Ul - UX Designer</p>
									<!-- /.testimonials-one-card__designation -->
									<i class="icon-right-quote testimonials-one-card__icon"></i>
								</div><!-- /.testimonials-one-card__content -->
							</div><!-- /.testimonials-one-card -->
						</div><!-- /.col-lg-6 -->
						<div class="col-lg-12">
							<div class="testimonials-one-card">
								<div class="testimonials-one-card__image">
									<img src="{{asset('frontend/assets/images/resources/testi-1-2.jpg')}}" alt="">
								</div><!-- /.testimonials-one-card__image -->
								<div class="testimonials-one-card__content">
									<div class="testimonials-one-card__text">On the other hand denounc with
										ghteo
										indignation and dislike men who so beguiled and demoralized the charms
										of
										pleasure
										the momen blinded by desire cannot foresee the pain and trouble.</div>
									<!-- /.testimonials-one-card__text -->
									<h3 class="testimonials-one-card__title">Jessica Brown</h3>
									<!-- /.testimonials-one-card__title -->
									<p class="testimonials-one-card__designation">Ul - UX Designer</p>
									<!-- /.testimonials-one-card__designation -->
									<i class="icon-right-quote testimonials-one-card__icon"></i>
								</div><!-- /.testimonials-one-card__content -->
							</div><!-- /.testimonials-one-card -->
						</div><!-- /.col-lg-6 -->
					</div><!-- /.row -->
				</div><!-- /.testimonials-two__items -->
			</div><!-- /.col-lg-7 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>
<div class="client-carousel client-carousel--two">
	<div class="container">
		<div class="owl-carousel thm-owl__carousel" data-owl-options='{"loop": true,
		"autoplay": true,
		"autoplayTimeout": 5000,
		"autoplayHoverPause": true,
		"nav": true,
		"navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
		"dots": false,
		"margin": 30,
        "items": 2,
		"smartSpeed": 700,
		"responsive": {
			"0": {
				"margin": 30,
				"items": 2
			},
			"375": {
				"margin": 30,
				"items": 2
			},
			"575": {
				"margin": 30,
				"items": 3
			},
			"767": {
				"margin": 50,
				"items": 4
			},
			"991": {
				"margin": 40,
				"items": 5
			},
			"1199": {
				"margin": 80,
				"items": 5
			}
		}}'>
			<div class="item">
				<img src="{{asset('frontend/assets/images/resources/client-1-1.png')}}" alt="">
			</div><!-- /.item -->
			<div class="item">
				<img src="{{asset('frontend/assets/images/resources/client-1-1.png')}}" alt="">
			</div><!-- /.item -->
			<div class="item">
				<img src="{{asset('frontend/assets/images/resources/client-1-1.png')}}" alt="">
			</div><!-- /.item -->
			<div class="item">
				<img src="{{asset('frontend/assets/images/resources/client-1-1.png')}}" alt="">
			</div><!-- /.item -->
			<div class="item">
				<img src="{{asset('frontend/assets/images/resources/client-1-1.png')}}" alt="">
			</div><!-- /.item -->
			<div class="item">
				<img src="{{asset('frontend/assets/images/resources/client-1-1.png')}}" alt="">
			</div><!-- /.item -->
			<div class="item">
				<img src="{{asset('frontend/assets/images/resources/client-1-1.png')}}" alt="">
			</div><!-- /.item -->
			<div class="item">
				<img src="{{asset('frontend/assets/images/resources/client-1-1.png')}}" alt="">
			</div><!-- /.item -->
			<div class="item">
				<img src="{{asset('frontend/assets/images/resources/client-1-1.png')}}" alt="">
			</div><!-- /.item -->
			<div class="item">
				<img src="{{asset('frontend/assets/images/resources/client-1-1.png')}}" alt="">
			</div><!-- /.item -->
			<div class="item">
				<img src="{{asset('frontend/assets/images/resources/client-1-1.png')}}" alt="">
			</div><!-- /.item -->
			<div class="item">
				<img src="{{asset('frontend/assets/images/resources/client-1-1.png')}}" alt="">
			</div><!-- /.item -->
			<div class="item">
				<img src="{{asset('frontend/assets/images/resources/client-1-1.png')}}" alt="">
			</div><!-- /.item -->
			<div class="item">
				<img src="{{asset('frontend/assets/images/resources/client-1-1.png')}}" alt="">
			</div><!-- /.item -->
			<div class="item">
				<img src="{{asset('frontend/assets/images/resources/client-1-1.png')}}" alt="">
			</div><!-- /.item -->
			<div class="item">
				<img src="{{asset('frontend/assets/images/resources/client-1-1.png')}}" alt="">
			</div><!-- /.item -->
			<div class="item">
				<img src="{{asset('frontend/assets/images/resources/client-1-1.png')}}" alt="">
			</div><!-- /.item -->
			<div class="item">
				<img src="{{asset('frontend/assets/images/resources/client-1-1.png')}}" alt="">
			</div><!-- /.item -->
			<div class="item">
				<img src="{{asset('frontend/assets/images/resources/client-1-1.png')}}" alt="">
			</div><!-- /.item -->
			<div class="item">
				<img src="{{asset('frontend/assets/images/resources/client-1-1.png')}}" alt="">
			</div><!-- /.item -->
		</div><!-- /.thm-owl__carousel -->
	</div><!-- /.container -->
</div><!-- /.client-carousel -->

@endsection