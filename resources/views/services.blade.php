@extends('layouts.frontend_default')
@section('title', 'Services')
@section('content')

<!-- <h1>Services</h1> -->
<!-- main menu -->
<div class="page-header">
	<div class="page-header__bg"
		style="background-image: url({{asset('frontend/assets/images/background/header.jpg')}})" ;></div>
	<!-- /.page-header__bg -->
	<div class="container">
		<ul class="thm-breadcrumb list-unstyled">
			<li><a href="index.html">Home</a></li>
			<li>Services</li>
		</ul>
		<h2 class="page-header__title">Services</h2><!-- /.page-header__title -->
	</div><!-- /.container -->
</div>
<!-- page header -->
<section class="section-padding--top section-padding--bottom about-two">
	<div class="container">
		<div class="row gutter-y-60">
			<div class="col-lg-6">
				<div class="about-two__content">
					<div class="section-title ">
						<!-- <p class="section-title__text">HOW CAN HELP YOU</p> -->
						<!-- /.section-title__text -->
						<h2 class="section-title__title">Our Services</h2><!-- /.section-title__title -->
					</div><!-- /.section-title -->
					<div class="about-two__text">
						<!-- We understand that the key to success lies in propelling your business towards sustainable growth. As your strategic partner, we offer a comprehensive suite of business solutions designed to optimize operations, enhance efficiency, and unlock new opportunities. Whether you are a budding startup or an established enterprise, our tailored solutions cater to your unique needs, empowering you to achieve remarkable growth and stay ahead in a competitive landscape. -->
						Welcome to CoreTechInfo, where innovation meets excellence. We specialize in a comprehensive
						range of IT development services tailored to meet the evolving needs of businesses across
						industries. Our team of seasoned professionals is dedicated to delivering cutting-edge solutions
						that drive growth, efficiency, and success.
					</div><!-- /.about-two__text -->
					<ul class="about-two__list">
						@foreach($services as $service)
							<li style="padding:10px">
								{{$service['title']}}
							</li>
						@endforeach								
					</ul><!-- /.about-two__list -->
					<!-- /.thm-btn about-two__btn -->
				</div><!-- /.about-two__content -->
			</div><!-- /.col-lg-6 -->
			<div class="col-lg-6">
				<div class="about-two__image">
					<img src="{{asset('frontend/assets/images/resources/services.jpg')}}"
						style="width:100%;box-shadow:0px 29px 38px rgba(0,0,0,0.30),0 15px 12px rgba(0,0,0,0.22);border-radius:20px;"
						alt="" class="wow fadeInUp animated" data-wow-duration="1500ms"
						style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
				</div><!-- /.about-two__image -->
			</div><!-- /.col-lg-6 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>
<section class="section-padding--top section-padding--bottom service-three black-bg"
	style="background-image: url({{asset('frontend/assets/images/background/service-1-bg-1.jpg')}})">
	<div class="container">
		<div class="service-three__block">
			<div class="row">
				<div class="col-lg-7">
					<div class="section-title">
						<!-- <p class="section-title__text">What We offier</p> -->
						<!-- /.section-title__text -->
						<h2 class="section-title__title section-title__title--light">Help you Overcome your
							Technology Challenges</h2>
						<!-- /.section-title__title -->
					</div><!-- /.section-title -->
				</div><!-- /.col-lg-7 -->
				<div class="col-lg-5">
					<!-- <div class="service-three__block__text">Accusa ntium doloremque laudantium totam rem
								aperiamea
								queipsa quae abillo inventore veritatis.</div> -->
					<!-- /.service-three__block__text -->
				</div><!-- /.col-lg-5 -->
			</div><!-- /.row -->
		</div><!-- /.service-three__block -->
		<div class="row">
			@foreach($services as $service)
				<div class="col-lg-3 col-md-6 col-sm-12 service-three__list">
					<div class="col-sm-12 service-three__list__item wow fadeInUp animated p-3" data-wow-duration="1500ms" data-wow-delay="{{ $loop->index * 100 }}ms"
						style="visibility: visible; animation-duration: 1500ms; animation-delay: {{ $loop->index * 100 }}ms; animation-name: fadeInUp;">
						<i class="{{ $service->icon_class }} service-three__list__icon"></i>
						<h3 class="service-three__list__title"><a href="#">{{ $service->title }}</a></h3>
					</div>
				</div>
			@endforeach
		</div>
		<!-- /.service-three__list -->
	</div><!-- /.container -->
</section>
<section class="section-padding--bottom section-padding--top about-three">
	<div class="about-three__shape wow fadeInRight animated" data-wow-duration="1500ms"
		style="background-image: url({{asset('frontend/assets/images/shapes/about-three-s-1.png')}}); visibility: visible; animation-duration: 1500ms; animation-name: fadeInRight;">
	</div><!-- /.about-three__shape -->
	<div class="container">
		<div class="row gutter-y-60">
			<div class="col-lg-6">
				<div class="about-three__image">
					<img src="{{asset('frontend/assets/images/resources/company.jpg')}}"
						style="box-shadow:0px 29px 38px rgba(0,0,0,0.30),0 15px 12px rgba(0,0,0,0.22);border-radius:20px;"
						class="wow fadeInUp animated" data-wow-duration="1500ms" alt=""
						style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
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
						@foreach($services as $serviceData)
							<li class="about-three__list__item">
								<div class="about-three__list__icon">
									<i class="{{$serviceData->icon_class}}"></i>
								</div><!-- /.about-three__list__icon -->
								<div class="about-three__list__content">
									<h3 class="about-three__list__title"><a
											href="service-cyber-security.html">{{$serviceData->title}}</a></h3>
									<!-- /.about-three__list__title -->
									<p class="about-three__list__text">{{$serviceData->description}}</p>
									<!-- /.about-three__list__text -->
								</div><!-- /.about-three__list__content -->
							</li>
						@endforeach
						<!-- <li class="about-three__list__item">
									<div class="about-three__list__icon">
										<i class="icon-group"></i>
									</div>
									<div class="about-three__list__content">
										<h3 class="about-three__list__title"><a href="team.html">Expert Team Members</a>
										</h3>
										<p class="about-three__list__text">Services address a range of simply free text
											application and infrastructure needs.</p>	
									</div>
								</li> -->
					</ul><!-- /.about-three__list -->
				</div><!-- /.about-three__content -->
			</div><!-- /.col-lg-6 -->

		</div><!-- /.row -->
	</div><!-- /.container -->
</section>

@endsection