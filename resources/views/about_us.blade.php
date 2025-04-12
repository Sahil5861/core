
@extends('layouts.frontend_default')
@section('title', 'About Us')

@section('content')
<div class="page-header">
	<div class="page-header__bg"
		style="background-image: url({{asset('frontend/assets/images/background/header.jpg')}});"></div>
	<!-- /.page-header__bg -->
	<div class="container">
		<ul class="thm-breadcrumb list-unstyled">
			<li><a href="{{url('/')}}">Home</a></li>
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
					<!-- <img src="{{asset('frontend/assets/images/resources/about-four-1-1.jpg')}}" class="wow fadeInUp"
						data-wow-duration="1500ms" alt=""> -->
					<img src="{{asset('frontend/assets/images/resources/about.jpg')}}" class="wow fadeInUp"
						data-wow-duration="1500ms" alt="" style="box-shadow: 0px 5px 10px rgba(0,0,0,0.3);">
				</div><!-- /.about-four__image -->
			</div><!-- /.col-lg-6 -->
			<div class="col-lg-6">
				<div class="about-four__content">
					<div class="section-title ">
						<!-- <p class="section-title__text">About Company</p> -->
						<!-- /.section-title__text -->
						<h2 class="section-title__title">About Company</h2>
					</div><!-- /.section-title -->
					<div class="about-four__text" style="font-size:18px;font-weight:600;">
						We are more than just an IT company; we are your strategic technology partner, committed to empowering your business with innovative and advanced solutions. Driven by a passion for excellence and a dedication to continuous innovation, we strive to transform your operations and ensure you remain at the forefront of today’s rapidly evolving digital landscape.
					</div>
					<!-- /.about-four__text -->
					<div class="about-four__meta">
						<div class="about-four__author">
							<img src="{{asset('frontend/assets/images/resources/ceo.jpg')}}" alt="" style="width:100px;height:130px;">
							<div class="about-four__author__content">
								<h3 class="about-four__author__title">Saddam Hussein</h3>
								<!-- /.about-four__author__title -->
								<div class="about-four__author__designation">Founder CEO</div>
								<!-- /.about-four__author__designation -->
							</div><!-- /.about-four__author__content -->
						</div><!-- /.about-four__author -->
						<a href="{{Route('contact-us')}}" class="thm-btn about-four__btn"><span>Learn More</span></a>
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
			<h2 class="section-title__title">Our Experts Provide IT Solutions</h2>
			<!-- /.section-title__title -->
		</div><!-- /.section-title -->
		<div class="row gutter-y-30">
		@foreach($team as $TeamData)
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="team-card-one wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
					<div class="team-card-one__image">
						<img src="{{asset('images/our_teams/'.$TeamData->image)}}" alt="">
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
						<h3 class="team-card-one__title"><a href="#">{{$TeamData->name}}</a></h3>
						<!-- /.team-card-one__title -->
						<p class="team-card-one__designation">{{$TeamData->designation}}</p><!-- /.team-card-one__designation -->
					</div><!-- /.team-card-one__content -->
				</div><!-- /.team-card-one -->
			</div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
			@endforeach	
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>
<section class="black-bg section-padding-lg--top section-padding-lg--bottom cta-two">
	<div class="cta-two__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
		style="background-image: url({{asset('frontend/assets/images/background/Activity.png')}});"></div>
	<div class="container">
		<div class="cta-two__inner">
			<h3 class="cta-two__title">Better IT Solutions And Services
				At Your <span>Fingertips</span></h3><!-- /.cta-two__title -->
			<a href="#" class="thm-btn cta-two__btn"><span>LEarn More</span></a>
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
					<div class="testimonials-two__content__text">The trust we have gained worldwide is a testament to the consistent quality we deliver in every project and service we undertake. We pride ourselves on adhering to industry best practices and employing top-tier professionals with expertise in their respective domains. Our unwavering commitment to excellence has earned us recognition as a reliable and proficient IT solutions provider across continents.
					</div>
					<!-- /.testimonials-two__content__text -->
					<a href="#" class="thm-btn testimonials-two__content__btn"><span>View All
							feedbacks</span></a><!-- /.thm-btn testimonials-two__content__btn -->
				</div><!-- /.testimonials-two__content -->
			</div><!-- /.col-lg-5 -->
			<div class="col-lg-7">
				<div class="testimonials-two__items">
					<div class="row gutter-y-30">
					@foreach($clients as $ClientData)
						<div class="col-lg-12">
							<div class="testimonials-one-card">
								<div class="testimonials-one-card__image">
									<img src="{{asset('images/our_clients/'.$ClientData->image)}}" alt=" " style="width:200px;">
								</div><!-- /.testimonials-one-card__image -->
								<div class="testimonials-one-card__content">
									<div class="testimonials-one-card__text">{{$ClientData->description}}</div>
									<!-- /.testimonials-one-card__text -->
									<h3 class="testimonials-one-card__title">{{$ClientData->company_name}}</h3>
									<!-- /.testimonials-one-card__title -->
									<p class="testimonials-one-card__designation">{{$ClientData->designation}}</p>
									<!-- /.testimonials-one-card__designation -->
									<i class="icon-right-quote testimonials-one-card__icon"></i>
								</div><!-- /.testimonials-one-card__content -->
							</div><!-- /.testimonials-one-card -->
						</div>
						<!-- /.col-lg-6 -->
						@endforeach

					</div><!-- /.row -->
				</div><!-- /.testimonials-two__items -->
			</div><!-- /.col-lg-7 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>

<!-- /.client-carousel -->

@endsection