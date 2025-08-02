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
        font-size: 40px;
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
   .fixed-blog-panel {
        position: absolute; /* initial absolute position */
        right: 10vw;
        width: 250px;
        max-height: 80vh;
        overflow-y: auto;
        background: #fff;
        border-radius: 8px 0 0 8px;
        padding: 15px;
        box-shadow: -4px 0 15px rgba(0,0,0,0.1);
        z-index: 100;
    }



    .fixed-blog-panel h4 {
        font-size: 1.25rem;
        margin-bottom: 10px;
        text-align: center;
    }

    .blog-cards {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .blog-card {
        display: flex;
        align-items: center;
        gap: 10px;
        border-radius: 5px;
        padding: 8px;
        border: 1px solid #eee;
        text-decoration: none;
        color: inherit;
        transition: background-color 0.3s ease;
    }

    .blog-card:hover {
        background-color: #f9f9f9;
    }

    .blog-card img {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 5px;
    }

    .blog-card-content h5 {
        font-size: 1rem;
        margin: 0;
    }

    .blog-card-content span {
        font-size: 0.85rem;
        color: #555;
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
        .typewriter-container {
            min-height: 13vh !important;
            margin-top: 10vh !important;
            margin-bottom: 1vh !important;
            max-width: 80vw !important;
        }
        .head-text {
            font-size: 1.1rem !important;
        }
        .head-sub-text {
            font-size: 1rem !important;
        }
        .head-head {
            padding-left: 8px !important;
        }
        .project {
            padding: 0px 0px !important;
        }
        .card-img-top {
            padding-top: 10px;
        }
        
        /* Blog banner specific responsive styles */
        .breadcrumb-murtes .col-xl-6 {
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
        }
        .breadcrumb-murtes .static-text {
            font-size: 1.1rem !important;
        }
        .breadcrumb-murtes .typewriter-container {
            flex: 1 !important;
            margin-right: 15px !important;
        }
        .breadcrumb-murtes img {
            width: 25vw !important;
            margin-right: 0 !important;
            flex-shrink: 0 !important;
        }
    }



    /* Desktop Sticky Sidebar */
    .fixed-blog-panel {
        position: absolute;
        right: 10vw;
        width: 250px;
        max-height: 80vh;
        overflow-y: auto;
        background: #fff;
        border-radius: 8px 0 0 8px;
        padding: 15px;
        box-shadow: -4px 0 15px rgba(0,0,0,0.1);
        z-index: 100;
    }

    .fixed-blog-panel h4 {
        font-size: 1.25rem;
        margin-bottom: 10px;
        text-align: center;
    }

    .blog-cards {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .blog-card {
        display: flex;
        align-items: center;
        gap: 10px;
        border-radius: 5px;
        padding: 8px;
        border: 1px solid #eee;
        text-decoration: none;
        color: inherit;
        transition: background-color 0.3s ease;
    }

    .blog-card:hover {
        background-color: #f9f9f9;
    }

    .blog-card img {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 5px;
    }

    .blog-card-content h5 {
        font-size: 1rem;
        margin: 0;
    }

    .blog-card-content span {
        font-size: 0.85rem;
        color: #555;
    }

    /* Mobile Blog Section - Compact Version */
    .mobile-blog-section {
        display: none;
        padding: 30px 0;
        background: #f8f9fa;
    }

    .mobile-blog-section h4 {
        font-size: 1.25rem;
        margin-bottom: 15px;
        text-align: center;
        color: #333;
    }

    .mobile-blog-cards {
        display: flex;
        flex-direction: column;
        gap: 10px;
        max-width: 400px;
        margin: 0 auto;
    }

    .mobile-blog-card {
        display: flex;
        align-items: center;
        gap: 12px;
        background: #fff;
        border-radius: 6px;
        padding: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        text-decoration: none;
        color: inherit;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .mobile-blog-card:hover {
        transform: translateY(-1px);
        box-shadow: 0 3px 12px rgba(0,0,0,0.15);
        text-decoration: none;
        color: inherit;
    }

    .mobile-blog-card img {
        width: 65px;
        height: 65px;
        object-fit: cover;
        border-radius: 6px;
        flex-shrink: 0;
    }

    .mobile-blog-card-content {
        flex: 1;
    }

    .mobile-blog-card-content h5 {
        font-size: 1rem;
        margin: 0 0 5px 0;
        font-weight: 600;
        line-height: 1.3;
    }

    .mobile-blog-card-content span {
        font-size: 0.85rem;
        color: #666;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        /* Hide desktop sticky sidebar */
        .fixed-blog-panel {
            display: none !important;
        }
        
        /* Show mobile blog section */
        .mobile-blog-section {
            display: block;
        }
        
        /* Adjust main blog section for mobile */
        #blogSection {
            padding-bottom: 30px;
        }
        
        /* Even more compact on very small screens */
        .mobile-blog-cards {
            max-width: 350px;
            gap: 8px;
        }
        
        .mobile-blog-card {
            padding: 8px;
            gap: 10px;
        }
        
        .mobile-blog-card img {
            width: 55px;
            height: 55px;
        }
        
        .mobile-blog-card-content h5 {
            font-size: 0.95rem;
        }
        
        .mobile-blog-card-content span {
            font-size: 0.8rem;
        }
    }

    @media (min-width: 769px) {
        /* Ensure mobile section is hidden on desktop */
        .mobile-blog-section {
            display: none !important;
        }
    }
 

</style>

@section('section')
<!-- breadcrumb begin -->
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
            <div class="col-xl-6 col-lg-6 d-xl-flex d-lg-flex d-block align-items-center head-head">
                <div class="typewriter-container">
                    <h1 class="static-text head-text" style="color:#000000">Dive into Fresh Insights</h1>
                     <h1 class="typewriter-text head-text" id="typewriter"></h1>
                </div>
                <div>
                     <img src="{{ asset('/images/blogs/blog-banner-icon.png') }}" alt="" style="width: 40vw; margin-right: 5%;">
                </div>
                <ul>
                </ul>
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

<!-- Main Blog Section -->
<!-- Main Blog Section -->
<div id="blogSection" class="blog blog-3" style="padding-bottom:100px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-10 col-md-8">
                <div class="section-title-2 text-center">
                    <h2>Deep Dives into the Stories, Strategies, and Trends Driving the Digital World</h2>
                    <p>Tips & Trends to Stay Ahead</p>
                </div>
            </div>
        </div>
        <div id="blogList" class="row">
            @foreach ($blogData as $blog)                
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 aos-init mb-4">
                    <div class="card blog-card">
                        <a href="{{ route('blog-details', $blog->slug) }}" class="d-block blog-image-link">
                            <div class="blog-image-container">
                                <img
                                    src="{{ asset('images/blogs/' . $blog->image) }}"
                                    alt="Blog Image"
                                    class="blog-image"
                                />
                            </div>
                        </a>
                        <div class="card-body">
                            <a href="{{ route('blog-details', $blog->slug) }}" class="blog-title-link">
                                <h3 class="card-title">{{$blog->title}}</h3>
                            </a>
                             <div class="card-meta d-flex align-items-center">
                                <span class="meta-item"><i class="fas fa-user"></i> By {{$blog->name}}</span>
                                <span class="meta-item"><i class="far fa-calendar-alt"></i> {{ $blog->created_at->format('M d, Y') }}</span>
                            </div>                          
                            <p class="card-text">{{ \Illuminate\Support\Str::words($blog->content, 29, '...') }}</p>
                        </div>                    
                    </div>
                </div>                            
            @endforeach
        </div>
    </div>
</div>

<style>
    /* Specific styling for main blog section only */
    #blogSection .blog-card {
        border: 1px solid #eee;
        border-radius: 12px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
        background: #fff;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    }
    
    #blogSection .blog-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }
    
    #blogSection .blog-image-link {
        text-decoration: none;
    }
    
    #blogSection .blog-title-link {
        text-decoration: none;
        color: inherit;
    }
    
    #blogSection .blog-title-link:hover {
        color: #007bff;
        text-decoration: none;
    }
    
    /* Desktop Layout (Horizontal) */
    @media (min-width: 769px) {
        #blogSection .blog-card {
            display: flex;
            flex-direction: row !important;
            min-height: 15.5rem;
        }
        
        #blogSection .blog-image-container {
            width: 280px;
            height: 250px;
            overflow: hidden;
            flex-shrink: 0;
        }
        
        #blogSection .blog-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        #blogSection .blog-card:hover .blog-image {
            transform: scale(1.05);
        }
        
        #blogSection .card-body {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }
        
        #blogSection .card-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
            font-weight: 600;
            line-height: 1.3;
        }
        
        #blogSection .card-meta {
            padding: 0 !important;
            border-top: 0px !important;
            margin-bottom: 15px;
            display: flex;
            flex-direction: row;
        }
        
        #blogSection .meta-item {
            font-size: 12px !important;
            color: #666 !important;
            margin-right: 15px;
            display: flex;
            align-items: center;
        }
        
        #blogSection .meta-item i {
            margin-right: 5px;
        }
        
        #blogSection .card-text {
            font-size: 0.95rem;
            line-height: 1.6;
            color: #555;
            flex-grow: 1;
        }
    }
    
    /* Mobile Layout (Vertical Cards) */
    @media (max-width: 768px) {
        #blogSection .blog-card {
            display: flex;
            flex-direction: column !important;
            margin-bottom: 20px;
            max-width: 100%;
        }
        
        #blogSection .blog-image-container {
            width: 100%;
            height: 200px;
            overflow: hidden;
        }
        
        #blogSection .blog-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        #blogSection .blog-card:hover .blog-image {
            transform: scale(1.05);
        }
        
        #blogSection .card-body {
            padding: 20px;
            display: flex;
            flex-direction: column;
        }
        
        #blogSection .card-title {
            font-size: 1.3rem;
            margin-bottom: 12px;
            font-weight: 600;
            line-height: 1.4;
            color: #333;
        }
        
        #blogSection .card-meta {
            padding: 0 !important;
            border-top: 0px !important;
            margin-bottom: 12px;
            display: flex;
            flex-direction: column;
            align-items: flex-start !important;
        }
        
        #blogSection .meta-item {
            font-size: 13px !important;
            color: #666 !important;
            margin-right: 0;
            margin-bottom: 5px;
            display: flex;
            align-items: center;
        }
        
        #blogSection .meta-item:last-child {
            margin-bottom: 0;
        }
        
        #blogSection .meta-item i {
            margin-right: 8px;
            width: 12px;
        }
        
        #blogSection .card-text {
            font-size: 0.9rem;
            line-height: 1.6;
            color: #555;
        }
        
        /* Single column layout for mobile */
        #blogSection #blogList .col-12 {
            margin-bottom: 0;
        }
        
        /* Ensure full width on mobile */
        #blogSection #blogList [class*="col-"] {
            padding-left: 15px;
            padding-right: 15px;
        }
    }
</style>
<!-- Sticky Sidebar for Desktop -->
<div id="sidePanel" class="fixed-blog-panel">
    <h4>Latest Blogs</h4>
    <div class="blog-cards">
        @foreach($blogData->take(10) as $data)
            <a href="{{ route('blog-details', $data->slug) }}" class="blog-card">
                <img src="{{ asset('images/blogs/' . $data->image) }}" alt="{{ $data->title }}">
                <div class="blog-card-content">
                    <h5>{{ $data->title }}</h5>
                    <span>{{ $data->created_at->format('F d, Y') }}</span>
                </div>
            </a>
        @endforeach
    </div>
</div>

<!-- Mobile Blog Section (appears below main blog section) -->
<div id="mobileBlogSection" class="mobile-blog-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4>Latest Blogs</h4>
                <div class="mobile-blog-cards">
                    @foreach($blogData->take(2) as $data)
                        <a href="{{ route('blog-details', $data->slug) }}" class="mobile-blog-card">
                            <img src="{{ asset('images/blogs/' . $data->image) }}" alt="{{ $data->title }}">
                            <div class="mobile-blog-card-content">
                                <h5>{{ $data->title }}</h5>
                                <span>{{ $data->created_at->format('F d, Y') }}</span>
                            </div>
                        </a>
                    @endforeach
                </div>
                
                <h4 style="margin-top: 30px;">Trending Blogs</h4>
                <div class="mobile-blog-cards">
                    @foreach($blogData->take(2) as $data)
                        <a href="{{ route('blog-details', $data->slug) }}" class="mobile-blog-card">
                            <img src="{{ asset('images/blogs/' . $data->image) }}" alt="{{ $data->title }}">
                            <div class="mobile-blog-card-content">
                                <h5>{{ $data->title }}</h5>
                                <span>{{ $data->created_at->format('F d, Y') }}</span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')
<script>
    // Only run sticky behavior on desktop
    if (window.innerWidth > 768) {
        window.addEventListener('scroll', function() {
            const sidePanel = document.getElementById('sidePanel');
            const blogList = document.getElementById('blogList');
            
            if (!sidePanel || !blogList) return;
            
            const sidePanelHeight = sidePanel.offsetHeight;
            const blogListRect = blogList.getBoundingClientRect();
            const scrollY = window.scrollY;
            const topOffset = 100;
            
            // Absolute positions relative to document top
            const blogListTop = blogListRect.top + scrollY;
            const blogListBottom = blogListRect.bottom + scrollY;
            
            if (scrollY + topOffset < blogListTop) {
                // Scroll is above blogList top — lock sidebar at blogList top (absolute)
                sidePanel.style.position = 'absolute';
                sidePanel.style.top = blogListTop + 'px';
            }
            else if (scrollY + topOffset + sidePanelHeight > blogListBottom) {
                // Scroll is below blogList bottom — lock sidebar at blogList bottom (absolute)
                sidePanel.style.position = 'absolute';
                sidePanel.style.top = (blogListBottom - sidePanelHeight) + 'px';
            }
            else {
                // Sidebar fixed inside blogList vertical bounds
                sidePanel.style.position = 'fixed';
                sidePanel.style.top = topOffset + 'px';
            }
        });
    }
    
    // Handle window resize
    window.addEventListener('resize', function() {
        const sidePanel = document.getElementById('sidePanel');
        if (window.innerWidth <= 768) {
            // Reset position styles on mobile
            if (sidePanel) {
                sidePanel.style.position = '';
                sidePanel.style.top = '';
            }
        }
    });
</script>

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

