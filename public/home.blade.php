
@extends('layouts.frontend_default')
@section('title', 'Complete IT Solutions')
@section('content')
<div class="slider-one">
	<div class="slider-one__carousel owl-carousel  thm-owl__carousel"
		data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"], "margin": 0, "dots": true, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>
		<div class="item slider-one__slide-1">
			<div class="slider-one__bg" style="background-image: url({{asset('frontend/assets/images/background/slidern.png')}});">
			</div><!-- /.slider-one__bg -->
			<div class="slider-one__line"></div><!-- /.slider-one__line -->
			<div class="slider-one__shape-1"></div><!-- /.slider-one__shape-1 -->
			<div class="slider-one__shape-2"></div><!-- /.slider-one__shape-2 -->
			<div class="slider-one__shape-3"></div><!-- /.slider-one__shape-3 -->
			<div class="container">
				<div class="slider-one__content ">
					<!-- <div class="slider-one__floated lettering-text">technology</div> -->
					<!-- /.slider-one__floated -->
					<!-- <p class="slider-one__text">Welcome to best IT Solutions</p> -->
					<!-- /.slider-one__text -->
					<div class="slider-one__title-wrapper">
						<!-- <h2 class="slider-one__title">Unleashing the Power of Technology  <br>
						- Your Trusted IT Partner</h2> -->
						<!-- /.slider-one__title -->
					</div><!-- /.slider-one__title-wrapper -->
					<div class="slider-one__btns">
						<!-- <a href="{{route('about-us')}}" class="thm-btn slider-one__btn"><span>Learn More</span></a> -->
						<!-- /.thm-btn slider-one__btn -->
					</div><!-- /.slider-one__btns -->
				</div><!-- /.slider-one__content -->
			</div><!-- /.container -->
		</div><!-- /.item -->
		<!-- <div class="item slider-one__slide-2">
			<div class="slider-one__bg" style="background-image: url({{asset('frontend/assets/images/background/slider-1-2.jpg')}});">
			</div>
			<div class="slider-one__line"></div>
			<div class="slider-one__shape-1"></div>
			<div class="slider-one__shape-2"></div>
			<div class="slider-one__shape-3"></div>
			<div class="container">
				<div class="slider-one__content ">
					<div class="slider-one__floated lettering-text">technology</div>
					<div class="slider-one__title-wrapper">
						<h2 class="slider-one__title">Provide IT Solutions <br>
							and Services</h2>
					</div>
					<div class="slider-one__btns">
						<a href="#" class="thm-btn slider-one__btn"><span>Learn More</span></a>
					</div>
				</div>
			</div>
		</div> -->
		<!-- /.item -->
	</div><!-- /.slider-one__carousel -->
</div><!-- /.slider-one -->
<section class="section-padding--bottom section-padding--top about-five">
	<div class="container">
		<div class="row gutter-y-60">
			<div class="col-lg-6">
				<div class="about-five__images">
					<div class="about-five__images__shape"></div><!-- /.about-five__images__shape -->
					<img src="{{asset('frontend/assets/images/resources/about.jpg')}}" class="wow fadeInUp"
						data-wow-duration="1500ms" alt="" style="box-shadow: 0px 5px 10px rgba(0,0,0,0.3);">
					<!-- <img src="{{asset('frontend/assets/images/resources/about-five-1-2.jpg')}}" alt=""> -->
					<!-- <div class="about-five__video">
						<a href="https://www.youtube.com/watch?v=rzfmZC3kg3M" class="video-popup">
							<i class="fa fa-play"></i>
						</a>
					</div> -->
					<!-- /.about-five__video -->
					<!-- <div class="about-five__images__caption count-box wow fadeInUp" data-wow-duration="1500ms">
						<span class="count-text" data-stop="8" data-speed="2500">00</span>
						Years <br>
						Experience
					</div> -->
					<!-- /.about-five__images__caption -->
				</div><!-- /.about-five__images -->
			</div><!-- /.col-lg-6 -->
			<div class="col-lg-6">
				<div class="about-five__content">
					<div class="section-title ">
						<!-- <p class="section-title__text">About Company</p> -->
						<!-- /.section-title__text -->
						<h2 class="section-title__title">About
							Company</h2>
						<!-- /.section-title__title -->
					</div><!-- /.section-title -->
					<div class="about-five__text" style="font-size:18px;font-weight:600;">we are more than just an IT company, we are your strategic technology partner, dedicated to empowering your business with cutting-edge solutions. With a passion for innovation and a commitment to excellence, we aim to transform the way you operate and help you stay ahead in today's ever-evolving digital landscape.</div>
					<!-- /.about-five__text -->
					<!-- <div class="about-five__text">System is a term used to refer to an organized collection
						symbols and processes that may be used to operate on such symbols.</div> -->
					<!-- /.about-five__text -->
					<ul class="about-five__box">
						<li class="about-five__box__item gray-bg">
							<i class="about-five__box__icon icon-consulting"></i>
							<div class="about-five__box__content">
								<h3 class="about-five__box__title"><a href="#">IT
										Consultant</a></h3>
								<p class="about-five__box__text">Smarter Solutions</p>
								<!-- /.about-five__box__text -->
							</div><!-- /.about-five__box__content -->
						</li>
						<li class="about-five__box__item gray-bg">
							<i class="about-five__box__icon icon-chip"></i>
							<div class="about-five__box__content">
								<h3 class="about-five__box__title"><a href="#">IT Specialist</a></h3>
								<p class="about-five__box__text">Faster Solutions</p>
								<!-- /.about-five__box__text -->
							</div><!-- /.about-five__box__content -->
						</li>
					</ul><!-- /.about-five__box -->
					<div class="about-four__meta">
						<div class="about-four__author">
							<img src="{{asset('frontend/assets/images/resources/about-four-author-1.jpg')}}" alt="">
							<div class="about-four__author__content">
								<h3 class="about-four__author__title">Saddam Hussein</h3>
								<!-- /.about-four__author__title -->
								<div class="about-four__author__designation">Founder CEO</div>
								<!-- /.about-four__author__designation -->
							</div><!-- /.about-four__author__content -->
						</div><!-- /.about-four__author -->
						<a href="#" class="thm-btn about-four__btn"><span>Learn More</span></a>
						<!-- /.thm-btn about-four__btn -->
					</div><!-- /.about-four__meta -->
				</div><!-- /.about-five__content -->
			</div><!-- /.col-lg-6 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>
<section
	class=" section-padding--top service-four gray-bg section-padding-xl--bottom section-has-bottom-margin background-repeat-no background-position-top-right"
	style="background-image: url({{asset('frontend/assets/images/shapes/service-four-bg-1-1.png')}});">
	<div class="container">
		<div class="section-title text-center">
			<p class="section-title__text">Popular Services</p><!-- /.section-title__text -->
			<h2 class="section-title__title">We Provide Our Client Best <br>IT Solution Services</h2>
			<!-- /.section-title__title -->
		</div><!-- /.section-title -->
		<div class="owl-carousel thm-owl__carousel thm-owl__carousel--with-shadow service-four__carousel"
			data-owl-options='{"loop": false,
		"autoplay": false,
		"nav": false,
		"navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
		"dots": false,
		"margin": 0,
        "items": 1,
		"smartSpeed": 700,
		"responsive": {
			"0": {
				"margin": 0,
				"items": 1
			},
			"576": {
				"margin": 30,
				"items": 2
			},
			"768": {
				"margin": 30,
				"items": 3
			},
			"992": {
				"margin": 30,
				"items": 3
			},
			"1200": {
				"margin": 30,
				"items": 6
			}
		}}'>
		@foreach ($services->take(6) as $service)
    <div class="item">
        <div class="service-card-three">
            <div class="service-card-three__icon">
                <i class="{{ $service->icon_class }} service-three__list__icon"></i>
            </div><!-- /.service-card-three__icon -->
            <div class="service-card-three__content">
                <h3 class="service-card-three__title"><a href="#">{{ $service->title }}</a></h3><!-- /.service-card-three__title -->
                <div class="service-card-three__text">{{ $service->description }}</div><!-- /.service-card-three__text -->
            </div><!-- /.service-card-three__content -->
        </div><!-- /.service-card-three -->
    </div><!-- /.item -->
@endforeach
		</div><!-- /.owl-carousel -->
	</div><!-- /.container -->
	

</section>
<section class="funfact-one">
	<div class="container">
		<div class="funfact-one__inner wow fadeInUp background-size-cover" data-wow-duration="1500ms"
			style="background-image: url({{asset('frontend/assets/images/shapes/funfact-one-bg.png')}});">
			<ul class="funfact-one__list">
				<li class="funfact-one__list__item">
					<h3 class="funfact-one__list__title count-box">
						<span data-stop="255" data-speed="2500" class="count-text">00</span>
					</h3><!-- /.funfact-one__list__title -->
					<p class="funfact-one__list__text">Business Interogation</p>
					<!-- /.funfact-one__list__text -->
				</li>
				<li class="funfact-one__list__item">
					<h3 class="funfact-one__list__title count-box">
						<span data-stop="325" data-speed="2500" class="count-text">00</span>
					</h3><!-- /.funfact-one__list__title -->
					<p class="funfact-one__list__text">Strategies Planned</p>
					<!-- /.funfact-one__list__text -->
				</li>
				<li class="funfact-one__list__item">
					<h3 class="funfact-one__list__title count-box">
						<span data-stop="569" data-speed="2500" class="count-text">00</span>
					</h3><!-- /.funfact-one__list__title -->
					<p class="funfact-one__list__text">Projects Relased</p>
					<!-- /.funfact-one__list__text -->
				</li>
				<li class="funfact-one__list__item">
					<h3 class="funfact-one__list__title count-box">
						<span data-stop="769" data-speed="2500" class="count-text">00</span>
					</h3><!-- /.funfact-one__list__title -->
					<p class="funfact-one__list__text">Satisfied Clients </p>
					<!-- /.funfact-one__list__text -->
				</li>
			</ul><!-- /.funfact-one__list -->
		</div><!-- /.funfact-one__inner -->
	</div><!-- /.container -->
</section>
<!-- <section class="section-padding--bottom section-padding--top project-one">
	<div class="container">
		<div class="project-one__top">
			<div class="row">
				<div class="col-lg-7">
					<div class="section-title ">
						<p class="section-title__text">Latest Project</p>
						<h2 class="section-title__title">Check We Have Solution <br>Done IT Project</h2>
						
					</div>
				</div>
				<div class="col-lg-5">
					<div class="project-one__top__content">
						<p class="project-one__top__text">Pellentesque Viverra Eget Velit A Tincidunt. Sed
							Mattis Enim Nisl, Sit Amet Malesuada Sapien Pulvinar Ut.</p>
						<div class="project-one__top__btns">
							<a href="#" class="thm-btn project-one__top__btn">
								<span>View All Projects</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="owl-carousel thm-owl__carousel project-one__carousel thm-owl__carousel--with-shadow"
			data-owl-options='{"loop": true,
		"autoplay": true,
		"autoplayTimeout": 5000,
		"autoplayHoverPause": true,
		"nav": true,
		"navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
		"dots": false,
		"margin": 0,
        "items": 1,
		"smartSpeed": 700,
		"responsive": {
			"0": {
				"margin": 0,
				"items": 1
			},
			"768": {
				"margin": 30,
				"items": 2
			},
			"992": {
				"margin": 30,
				"items": 3
			}
		}}'>
			<div class="item">
				<div class="project-card-one">
					<div class="project-card-one__image">
						<img src="{{asset('frontend/assets/images/projects/project-1-1.jpg')}}" alt="">
					</div>
					<div class="project-card-one__content">
						<div class="project-card-one__content__inner">
							<p class="project-card-one__text">IT Technology Solution</p>
							<h3 class="project-card-one__title"><a href="#">Data Recovery
									Analysis</a></h3>
							<a href="#" class="project-card-one__more">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="project-card-one">
					<div class="project-card-one__image">
						<img src="{{asset('frontend/assets/images/projects/project-1-2.jpg')}}" alt="">
					</div>
					<div class="project-card-one__content">
						<div class="project-card-one__content__inner">
							<p class="project-card-one__text">IT Technology Solution</p>
							<h3 class="project-card-one__title"><a href="#">Data Recovery
									Analysis</a></h3>
							<a href="#" class="project-card-one__more">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="project-card-one">
					<div class="project-card-one__image">
						<img src="{{asset('frontend/assets/images/projects/project-1-3.jpg')}}" alt="">
					</div>
					<div class="project-card-one__content">
						<div class="project-card-one__content__inner">
							<p class="project-card-one__text">IT Technology Solution</p>
							<h3 class="project-card-one__title"><a href="#">Data Recovery
									Analysis</a></h3>
							<a href="#" class="project-card-one__more">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="project-card-one">
					<div class="project-card-one__image">
						<img src="{{asset('frontend/assets/images/projects/project-1-4.jpg')}}" alt="">
					</div>
					<div class="project-card-one__content">
						<div class="project-card-one__content__inner">
							<p class="project-card-one__text">IT Technology Solution</p>
							<h3 class="project-card-one__title"><a href="#">Data Recovery
									Analysis</a></h3>
							<a href="#" class="project-card-one__more">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="project-card-one">
					<div class="project-card-one__image">
						<img src="{{asset('frontend/assets/images/projects/project-1-5.jpg')}}" alt="">
					</div>
					<div class="project-card-one__content">
						<div class="project-card-one__content__inner">
							<p class="project-card-one__text">IT Technology Solution</p>
							<h3 class="project-card-one__title"><a href="#">Data Recovery
									Analysis</a></h3>
							<a href="#" class="project-card-one__more">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="project-card-one">
					<div class="project-card-one__image">
						<img src="{{asset('frontend/assets/images/projects/project-1-6.jpg')}}" alt="">
					</div>
					<div class="project-card-one__content">
						<div class="project-card-one__content__inner">
							<p class="project-card-one__text">IT Technology Solution</p>
							<h3 class="project-card-one__title"><a href="#">Data Recovery
									Analysis</a></h3>
							<a href="#" class="project-card-one__more">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->
<section class="black-bg section-padding-lg--top section-padding-lg--bottom cta-two">
	<div class="cta-two__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
		style="background-image: url({{asset('frontend/assets/images/background/Activity.png')}});"></div>
	<div class="container">
		<div class="cta-two__inner">
			<h3 class="cta-two__title">Better IT Solutions And Services
				At Your <span>Fingertips</span></h3><!-- /.cta-two__title -->
			<a href="#" class="thm-btn cta-two__btn"><span>Learn More</span></a>
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
					<div class="testimonials-two__content__text">The trust we have gained worldwide is a testament to the consistent quality we deliver in every project and service we undertake. We pride ourselves on adhering to industry best practices and employing top-tier professionals with expertise in their respective domains. Our unwavering commitment to excellence has earned us recognition as a reliable and proficient IT solutions provider across continents.</div>
					<!-- /.testimonials-two__content__text -->
					<!-- <div class="testimonials-two__content__text">Pellentesque gravida lectus vitae nisi luctus,
						Finibus aliquet ligula ultrices.</div> -->
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
									<h3 class="testimonials-one-card__title">{{$ClientData->name}}</h3>
									<!-- /.testimonials-one-card__title -->
									<p class="testimonials-one-card__designation">{{$ClientData->designation}}</p>
									<p class="testimonials-one-card__designation">{{$ClientData->company_name}}</p>
		
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
<div class="client-carousel client-carousel--two">
	<div class="container">
		<!-- <div class="owl-carousel thm-owl__carousel" data-owl-options='{"loop": true,
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
			</div>
			<div class="item">
				<img src="{{asset('frontend/assets/images/resources/client-1-1.png')}}" alt="">
			</div>
		</div> -->
		<!-- /.thm-owl__carousel -->
	</div>
	<!-- /.container -->
</div>
<!-- /.client-carousel -->
<section class="section-padding--bottom section-padding--top gray-bg background-size-cover"
	style="background-image: url({{asset('frontend/assets/images/shapes/team-home-bg-1-1.jpg')}});">
	<div class="container">
		<div class="section-title text-center">
			<p class="section-title__text">Our Team members</p><!-- /.section-title__text -->
			<h2 class="section-title__title">Our Expert Person to Provide <br> IT Solution Services</h2>
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
							<!-- <div class="team-card-one__social__icon">
								<i class="fa fa-share-alt"></i>
							</div> -->
							<!-- /.team-card-one__social__icon -->
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
<section class=" section-padding--top about-three about-three--home-one">
	<div class="about-three__shape wow fadeInRight" data-wow-duration="1500ms"
		style="background-image: url({{asset('frontend/assets/images/shapes/about-three-s-1.png')}});">
	</div><!-- /.about-three__shape -->
	<div class="container">
		<div class="row gutter-y-60">
			<div class="col-lg-6">
				<div class="about-three__image">
					<img src="{{asset('frontend/assets/images/resources/company.jpg')}}" class="wow fadeInUp"
						data-wow-duration="1500ms" alt="" style="box-shadow: 0px 5px 10px rgba(0,0,0,0.3);width:auto;height:350px">
				</div><!-- /.about-three__image -->
			</div><!-- /.col-lg-6 -->
			<div class="col-lg-6">
				<div class="about-three__content">
					<div class="section-title ">
						<p class="section-title__text">Company Benefits</p><!-- /.section-title__text -->
						<h2 class="section-title__title">Why You Should Choose
							Our Services</h2><!-- /.section-title__title -->
					</div><!-- /.section-title -->
					<div class="about-three__text">Choose Core Tech Info to have custom software solutions for your
						business with the most reasonable price.</div><!-- /.about-three__text -->
					<ul class="about-three__list">
					@foreach($services->take(3) as $serviceData)
							<li class="about-three__list__item">
									<div class="about-three__list__icon">
										<i class="{{$serviceData->icon_class}}"></i>
									</div><!-- /.about-three__list__icon -->
									<div class="about-three__list__content">
										<h3 class="about-three__list__title"><a href="service-cyber-security.html">{{$serviceData->title}}</a></h3><!-- /.about-three__list__title -->
										<p class="about-three__list__text">{{$serviceData->description}}</p><!-- /.about-three__list__text -->
									</div><!-- /.about-three__list__content -->
								</li>
								@endforeach
					</ul><!-- /.about-three__list -->
				</div><!-- /.about-three__content -->
			</div><!-- /.col-lg-6 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>
<section class="section-padding--top section-padding--bottom">
	<div class="container">
		<div class="section-title text-center">
			<p class="section-title__text">Direct from the Blog Posts</p><!-- /.section-title__text -->
			<h2 class="section-title__title">Checkout Our Latest <br>
				News & Articles</h2><!-- /.section-title__title -->
		</div><!-- /.section-title -->
		<div class="row gutter-y-30">
    @foreach ($blogData as $data)
    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
        <div class="blog-card-one">
            <div class="blog-card-one__image">
                <img src="{{ asset('images/blogs/' . $data->image) }}" alt="">
                <a href="#"></a>
            </div><!-- /.blog-card-one__image -->
            <div class="blog-card-one__content">
                <div class="blog-card-one__meta">
                    <div class="blog-card-one__date">
                        <i class="fa fa-calendar-alt" aria-hidden="true"></i>
                        {{ $data->created_at->format('F d, Y') }}
                    </div><!-- /.blog-card-one__date -->
                    <a href="#" class="blog-card-one__category">{{ $data->category }}</a>
                    <!-- /.blog-card-one__category -->
                </div><!-- /.blog-card-one__meta -->
                <h3 class="blog-card-one__title"><a href="#">{{ $data->title }}</a></h3>
				<a href="{{ route('blog_dt',['id' => $data->id] )}}" class="blog-card-one__more">
                    Read More
                    <i class="fa fa-arrow-right"></i>
                </a>
				<!-- /.blog-card-one__more -->
            </div><!-- /.blog-card-one__content -->
        </div><!-- /.blog-card-one -->
    </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
    @endforeach
</div>

	</div><!-- /.container -->
</section>
<section class="cta-one">
	<div class="container">
		<div class="cta-one__inner text-center wow fadeInUp" data-wow-duration="1500ms">
			<div class="cta-one__circle"></div><!-- /.cta-one__circle -->
			<div class="section-title ">
				<p class="section-title__text">Need Any Technology Solution</p><!-- /.section-title__text -->
				<h2 class="section-title__title section-title__title--light">Let’s Work Togather on Project</h2>
				<!-- /.section-title__title -->
			</div><!-- /.section-title -->
			<a href="{{Route('contact-us')}}" class="thm-btn thm-btn--light cta-one__btn"><span>Start Now</span></a>
			<!-- /.thm-btn thm-btn--light cta-one__btn -->
		</div><!-- /.cta-one__inner -->
	</div><!-- /.container -->
</section><!-- /.cta-one -->

@endsection