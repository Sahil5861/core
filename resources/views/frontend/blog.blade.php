{{-- 
@extends('layouts.frontend_default')
{{-- @section('title', 'Blogs') --}}
{{-- @section('section')
		<div class="page-header">
			<div class="page-header__bg"
				style="background-image: url(frontend/assets/images/background/header.jpg);"></div>
			<!-- /.page-header__bg -->
			<div class="container">
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="index.html">Home</a></li>
					<li>Blog</li>
				</ul>
				<h2 class="page-header__title">Blog Page</h2><!-- /.page-header__title -->
			</div><!-- /.container -->
		</div><!-- /.page-header --> --}}


		{{-- <section class="section-padding--top section-padding--bottom">
			<div class="container">
				<div class="row gutter-y-30">
					@foreach($blog_data as $blog_detatils)
					<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms"
						data-wow-delay="000ms">
						<div class="blog-card-one">
							<div class="blog-card-one__image">
	                            <!-- <img src="frontend/assets/images/blog/blog-1-1.jpg" alt=""> -->
								<img src="{{asset('images/blogs/'.$blog_detatils->image)}}" alt="">
								<a href="{{ route('blog_dt',['id' => $blog_detatils->id] )}}"></a>
							</div><!-- /.blog-card-one__image -->
							<div class="blog-card-one__content">
								<div class="blog-card-one__meta">
									<div class="blog-card-one__date">
										<i class="fa fa-calendar-alt" aria-hidden="true"></i>
										{{ $blog_detatils->created_at->format('F d, Y') }}
									</div><!-- /.blog-card-one__date -->
									<a href="{{ route('blog_dt',['id' => $blog_detatils->id] )}}" class="blog-card-one__category">{{$blog_detatils->title}}</a>
									<!-- /.blog-card-one__category -->
								</div><!-- /.blog-card-one__meta -->
								<h3 class="blog-card-one__title"><a href="#">{{$blog_detatils->content}}</a></h3>
								<a href="{{ route('blog_dt',['id' => $blog_detatils->id] )}}" class="blog-card-one__more">
									Read More
									<i class="fa fa-arrow-right"></i>
								</a><!-- /.blog-card-one__more -->
							</div><!-- /.blog-card-one__content -->
						</div><!-- /.blog-card-one -->
					</div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
					@endforeach
				</div><!-- /.row gutter-y-30 -->
			</div><!-- /.container -->
		</section> --}}


	{{-- <div class="mobile-nav__wrapper">
		<div class="mobile-nav__overlay mobile-nav__toggler"></div>
		<!-- /.mobile-nav__overlay -->
		<div class="mobile-nav__content">
			<a href="#" class="mobile-nav__close mobile-nav__toggler">
				<span></span>
				<span></span>
			</a>

			<div class="logo-box">
				<a href="index.html" aria-label="logo image"><img src="assets/images/logo-light.png" width="98"
						height="33" alt="Cretech"></a>
			</div>
			<!-- /.logo-box -->
			<div class="mobile-nav__container"></div>
			<!-- /.mobile-nav__container -->

			<ul class="mobile-nav__contact list-unstyled">
				<li>
					<i class="fa fa-phone"></i>
					<a href="tel:+8898006802">+ 88 ( 9800 ) 6802</a>
				</li>
				<li>
					<i class="fa fa-envelope"></i>
					<a href="mailto:needhelp@company.com">needhelp@company.com</a>
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
@endsection --}}




@extends('layouts.frontend_default')
{{-- <style>
    .owl-carousel .item {
            padding: 5px;
        }

        .card {
            background: #fff;
            border-radius: 10px;            
            text-align: center;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            color: #000;
            transition: 0.3s ease-in-out;
            padding: 20px;
            margin: 0;
        }

        .card-content {
            padding: 15px 0;
        }

        h3 {
            margin: 10px 0 5px;
        }

        p {
            color: inherit;
        }

        .details {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            font-weight: bold;
            /* color: #007bff; */
            color: #007bff;
        }

        .service-crausel .owl-item.center .card {
            background: url('images/map-vector-bg.png') center center no-repeat;
            background-size: cover;
            color: #fff;
            background-color: #007bff;
        }

        .service-crausel .owl-item.center .details {
            color: #fff;
        }

        .service-crausel .owl-nav button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            /* background: rgba(0, 0, 0, 0.5); */
            background-color: #007bff;
            width: 60px; height: 60px;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 20px;
            border-radius: 50%;
            z-index: 10;
            display: block !important;
        }


        .project-crausel .owl-nav button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            /* background-color: #007bff; */
            /* width: 60px; height: 60px; */
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 20px;
            border-radius: 50%;
            z-index: 10;
            display: block !important;
        }

        .service-crausel .owl-nav .owl-prev {
            left: -66px;
            top: 174px;
        }

        .service-crausel .owl-nav .owl-next {
            right: -66px;
            top: 174px;
        }

        .oject-crausel .owl-nav .owl-prev {
            left: 10px;            
        }

        .oject-crausel .owl-nav .owl-next {
            right: 10px;            
        }

        .sevice-card .card-content{
            text-align: left;
            min-height: 13rem;
        }

        .testimonial-card {
            position: relative;
            padding-bottom: 50px; /* Space for image */
            min-height: 20rem;
        }

        .rating i {
            font-size: 1.2rem;
        }        
        .owl-carousel .testimonial-card .testimonial-img{
            width: 50px !important; /* Adjust size */
            height: 50px !important;
            border-radius: 50% !important;
            object-fit: cover;
            margin: 10px;
        }


        

    
    /* .owl-prev i, .owl-next i{
        line-height: 4;
    } */
</style> --}}

<style>
    /* section */
    .cta-section {

    position: relative;
    height: 20rem;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    background-image: url("../images/services.png");
    background-size: cover;
    background-position: center;
    background-attachment: fixed; /* Keeps background fixed */
    color: white;
    overflow: hidden;
}

/* Black Overlay */
.cta-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6); /* Adjust opacity (0.6) as needed */
    z-index: 1;
}

.cta-content {
    max-width: 800px;
    margin: auto;
    text-align: center;        
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    position: relative;
    z-index: 2; /* Ensures content stays above overlay */
}

.cta-title {
    font-size: 2.5rem;
    font-weight: bold;
}

.thm-btn {
    display: inline-block;
    background-color: #ff6600;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    transition: 0.3s;
}

.thm-btn:hover {
    background-color: #cc5200;
}

.ceo-badge {
            position: absolute;
            bottom: 15px;
            left: -15px;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px 10px;
            width: 200px;
            text-align: center;
            border-radius: 8px;
            font-size: 14px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all .3s ease-out;
            cursor: pointer;
            user-select: none;
        }
        .ceo-badge a {
            color: #007bff;
            text-decoration: none;
        }
    .ceo-badge:hover{
        transform: translateX(20%);
    }
        banner-content2 {
      position: absolute;
      z-index: 1; /* Keeps your content above the video */
      top: 75%;
      left: 20px;
      transform: translateY(-50%);
      min-height: 450px;
      height: max-content;
      width: 80%;
      text-align: left;      
      /* background: rgba(0, 0, 0, 0.4); */
      padding: 30px 40px;
      border-radius: 10px;
      color: #fff;
    }

    .typewriter-container {
      display: inline-flex;
      flex-direction: column;
      align-items: baseline;
      gap: 8px;
      margin-top: 10px;
      flex-wrap: wrap;    
      padding: 10px;
      margin-top: 200px;
      min-width:  40vw;
      min-height: 315px;
      /* background: rgba(0, 00, 0, 0.5) */
    }
    .typewriter-container h1{
        font-size: 40px !important;
    }

    .static-text {
      font-weight: bold;
      white-space: nowrap;
    }

    .typewriter-text {
      /* border-right: 2px solid #fff; */
      white-space: nowrap;
      overflow: hidden;
      display: inline-block;
      animation: blink 0.7s infinite;
      line-height: 1.5;
      vertical-align: baseline;
    }

    .banner-btn{
        position: absolute;
        bottom: 20px;
        left: 20px;     
    }


      .fade-in {
        display: inline-block;
        opacity: 0;
        animation: fadeIn 0.4s forwards;
      }

      @keyframes fadeIn {
        to {
            opacity: 1;
            padding: 10px 0 !important;
        }
      }

    @media (max-width: 768px) {
      .banner2 {
        background: url('../images/banner-5.jpg') no-repeat center center/cover;
        justify-content: center;
        padding: 20px;
        text-align: center;
      }

      .banner-content2 {
        
        top: 90%;
        left: 10px;        
        font-size: 24px;
        padding: 20px;
      }
      .banner-content2 h1{
        font-size: 24px !important;
      }

    }

    /* *{
        margin: 0;
        padding: 0;
    }

    section{
        position:relative;
        width: 100%;
        height: 5vh;
        background: #000000;
    }

    section .wave{
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100px;
        background: url(images/blogs/wave.png);
        background-size: 1000px 100px;
    }

    section .wave.wave1{
        animation: animate-1 30s linear infinite;
        z-index: 1000;
        opacity: 1;
        animation-delay: 0s;
        bottom: 0;
    }

    @keyframes animate-1{
        0%{
            background-position-x: 0;
        }
        100%{
            background-position-x: 1000px;
        }
    }


    section .wave.wave2{
        animation: animate-2 20s linear infinite;
        z-index: 999;
        opacity: 0.7;
        animation-delay: -3s;
        bottom: 10px;
    }

    @keyframes animate-2{
        0%{
            background-position-x: 0;
        }
        100%{
            background-position-x: -1000px;
        }
    }
    section .wave.wave3{
        animation: animate-3 10s linear infinite;
        z-index: 998;
        opacity: 0.5;
        animation-delay: -2s;
        bottom: 15px;
    }

    @keyframes animate-3{
        0%{
            background-position-x: 0;
        }
        100%{
            background-position-x: 1000px;
        }
    }
    section .wave.wave4{
        animation: animate-4 5s linear infinite;
        z-index: 997;
        opacity: 0.3;
        animation-delay: -1s;
        bottom: 20px;
    }

    @keyframes animate-4{
        0%{
            background-position-x: 0;
        }
        100%{
            background-position-x: 1000px;
        }
    } */
     .bg-video{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 0;
    }
    .video-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(107, 95, 175, 0.5); /* #6B5FAF with 50% opacity */
        z-index: 1;
    }
 

</style>

@section('section')
<!-- breadcrumb begin -->
<div class="breadcrumb-murtes" style="background: url(../images/blogs/whiteBG.jpg) center center no-repeat">
    <video autoplay muted loop playsinline class="bg-video">
      <source src="{{asset('images/blogs/blog_banner-video.mp4')}}" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="video-overlay"></div>
    <div class="container">
       <div class="row">
            <div class="col-xl-6 col-lg-6 d- xl-flex d-lg-flex d-block align-items-center">
                <div class="typewriter-container">
                    <h1 class="static-text"style="color:#000000">Dive into Fresh Insights</h1> 
                     <h1 class="typewriter-text" id="typewriter"></h1> 
                </div> 
                <div>
                     <img src="{{ asset('/images/blogs/blog-banner-icon.png') }}" alt="" style="width: 40vw; margin-right: 5%;">
                </div>
                {{-- <div class="breadcrumb-content">
                    <h2 style="width: 1100px; font-weight: 400; font-size: 2em">We craft smart, human-focused IT solutions to drive business success.</h2> --}}
                    <ul>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const phrases = @json($blogs_name);

    let currentPhraseIndex = 0;
    let currentCharIndex = 0;
    const typeSpeed = 50;
    const eraseSpeed = 50;
    const delayBetweenPhrases = 2000;
    


    const typewriterElement = document.getElementById("typewriter");

    function type() {
      const currentPhrase = phrases[currentPhraseIndex];
      if (currentCharIndex < currentPhrase.length) {
        const span = document.createElement('span');
        const char = currentPhrase.charAt(currentCharIndex);
        span.innerHTML = char === " " ? "&nbsp;" : char;
        span.classList.add('fade-in');
        typewriterElement.appendChild(span);
        currentCharIndex++;
        setTimeout(type, typeSpeed);
      } else {
        setTimeout(erase, delayBetweenPhrases);
      }
    }

    function erase() {
      if (currentCharIndex > 0) {
        typewriterElement.textContent = typewriterElement.textContent.slice(0, -1);
        currentCharIndex--;
        setTimeout(erase, eraseSpeed);
      } else {
        currentPhraseIndex = (currentPhraseIndex + 1) % phrases.length;
        setTimeout(type, 300);
      }      
    }

    // Start the typewriter effect
    type();
</script>
<!-- breadcrumb end -->

<!-- about begin -->
{{-- <div class="about-page-about">
    <div class="container">
        <div class="row justify-content-xl-between justify-content-lg-between justify-content-center">
            <div class="col-xl-5 col-lg-5 col-md-10">
                <div class="part-text">
                    <h2>Preparing for your
                            success, we provide
                            truly prominent IT
                            solutions.</h2>
                    <p>We are more than just an IT company; we are your strategic technology partner, committed to empowering your business with innovative and advanced solutions. Driven by a passion for excellence and a dedication to continuous innovation, we strive to transform your operations and ensure you remain at the forefront of today’s rapidly evolving digital landscape.</p>

                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{asset('images/ceo.jpg')}}" alt="Saddam Husain" width="150">
                        </div>
                        <div class="col-lg-6" style="display:  xl-flex d-lg-flex d-block align-items-center">; flex-direction:column; justify-content:center;">
                            <h5>Saddam Husain</h5>
                            <h6>Founder CEO</h6>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-10">
                <div class="part-img">
                    <img class="img-full" src="{{asset('images/company.png')}}" alt="">
                </div>
            </div>            
        </div>
    </div>
</div> --}}


<!-- service begin -->

<!-- service end -->

<!-- service list begin -->
{{-- <div class="service-2 service-4 service-list-service-page">
    <div class="container">
        <div class="row no-gutters service-list-row">

            @foreach ($services as $key => $service)                
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-servcie">
                        <div class="left">
                            <div class="number">{{$key + 1}}</div>
                        </div>
                        <div class="right">
                            <h3 class="service-title" style="height: 70px;">{{$service->title}}</h3>
                            <p class="service-content">{{$service->description}}</p>
                            <a href="https://html.themexriver.com/murtes/murtes/service.html#" class="service-details-button">details <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>            
            @endforeach
        </div>
    </div>
</div> --}}
    <!-- service list end -->

    <!-- choosing reason begin -->
<!-- choosing reason end -->
{{-- <section>
        <div class="wave wave1"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
        <div class="wave wave4"></div>
</section> --}}

@include('includes.wave')

<div class="blog blog-3" style="padding-bottom:100px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-10 col-md-8">
                <div class="section-title-2 text-center">
                    <h2>Deep Dives into the Stories, Strategies, and Trends Driving the Digital World</h2>
                    <p>Tips & Trends to Stay Ahead</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($blogData as $blog)                
                <div class="col-xl-4 col-lg-4 col-md-6 aos-init mb-4">
                    <div class="card blog-card" style="min-height: 30.5rem;">
                        <img src="{{ asset('images/blogs/'.$blog->image) }}" class="card-img-top" alt="Blog Image" style="height: 247px; width: auto; object-fit: cover;">
                        <div class="card-body">
                            <h3 class="card-title">{{$blog->title}}</h3>                            
                            <p class="card-text">{{ \Illuminate\Support\Str::words($blog->content, 10, '...') }}</p>
                            
                        </div>
                        <div class="card-meta card-footer d-flex justify-content-between align-items-center p-3">
                            <span><i class="fas fa-user"></i> By {{$blog->name}}</span>
                            <span><i class="far fa-calendar-alt"></i> 20.05.2019</span>
                        </div>            
                    </div>
                </div>                             
            @endforeach

            {{-- data-aos="fade-up" data-aos-offset="300"
                data-aos-duration="2000" data-aos-easing="ease-in-sine" --}}
            
        </div>
    </div>



@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function(){
        $(".service-crausel, .testiminial-crausel").owlCarousel({
            items: 3,
            loop: true,
            margin: 5,            
            autoplay: true,
            autoplayTimeout: 3000,
            center: true,  
            nav: true,  // Hides navigation arrows
            dots: false, // Hides pagination dots          
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

        $(".project-crausel").owlCarousel({
            items: 3,
            loop: true,
            margin: 5,            
            autoplay: true,
            autoplayTimeout: 3000,
            // center: true,  
            nav: false,  // Hides navigation arrows
            dots: false, // Hides pagination dots          
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });
        
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(".service-crausel .owl-nav button span").forEach(span => {
            if (span.textContent.trim() === "›") {
                span.innerHTML = '<i class="fas fa-arrow-right"></i>'; // Right arrow icon
            } else if (span.textContent.trim() === "‹") {
                span.innerHTML = '<i class="fas fa-arrow-left"></i>'; // Left arrow icon
            }
        });
    });
    </script>
    
@endsection

