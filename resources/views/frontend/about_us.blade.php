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
    background-image: url("../images/laptop-2620118_1280.jpg");
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

    .tech-carousel .item{
        padding: 10px 0px;
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


    .animate-up-down{
        animation: animate-up-down 2s infinite;        
    }

    @keyframes animate-up-down{
        0% {
            transform: translateY(0);
        }
        50%{
            transform: translateY(10px);
        }
        100%{
            transform: translateY(0);
        }
    }
        

</style>
@section('section')
<!-- breadcrumb begin -->
<div class="breadcrumb-murtes" style="background: url(../images/about_us.png)">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="breadcrumb-content">
                    <h2>About us</h2>
                    <ul>
                        <li><a href="https://html.themexriver.com/murtes/murtes/about.html#">Home</a></li>
                        <li>About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
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
                        <div class="col-lg-6" style="display: flex; flex-direction:column; justify-content:center;">
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



<section class="container my-2">
    <div class="row align-items-center bg-white">
        <!-- Left Side Content -->
        <div class="col-md-8">
            <h6 class="text-primary fw-semibold">About Company</h6>
            <h2 class="fw-bold">About Company</h2>
            <p class="text-muted">
                We are more than just an IT company; we are your strategic technology partner, committed to empowering your business with innovative and advanced solutions. Driven by a passion for excellence and a dedication to continuous innovation, we strive to transform your operations and ensure you remain at the forefront of today’s rapidly evolving digital landscape..
            </p>
            <a href="#" class="btn btn-primary">Join Our Team</a>
        </div>

        <!-- Right Side Image -->
        <div class="col-md-4 position-relative">
            <img src="{{asset('images/'.env('CEO_IMAEG'))}}" alt="CEO" class="img-fluid rounded" width="400">
            <div class="ceo-badge">
                <strong>Mr.{{env('CEO_NAME')}}</strong> <br>
                <a href="#">CEO - {{env('COMPANY_NAME')}}</a>
            </div>
        </div>
    </div>
</section>
<!-- about end -->



<!-- choosing reason begin -->
<div class="container mb-3">
    <div class="choosing-reason-about-page">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="single-reason">
                    <h3>What We Do?</h3>
                    <p>We are a freelance IT company that provides innovative solutions and develops customized systems tailored to our clients' needs. Our expertise spans various industries, ensuring businesses can operate efficiently with cutting-edge technology.</p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="single-reason">
                    <h3>Our Mission & Vision</h3>
                    <p>Our mission is to empower businesses by leveraging technology to drive growth and efficiency. We envision a future where businesses can seamlessly adapt to new challenges with agile, scalable, and secure IT solutions.</p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="single-reason">
                    <h3>Who We Are?</h3>
                    <p>We are a team of passionate developers, designers, and IT experts dedicated to delivering high-quality solutions. Our team specializes in various programming languages, frameworks, and IT tools to build scalable and reliable systems.</p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="single-reason">
                    <h3>Our Team Members</h3>
                    <p>Our team consists of experienced professionals who collaborate to bring innovative ideas to life. From software developers to project managers, we ensure seamless execution of projects, prioritizing efficiency, security, and client satisfaction.</p>
                </div>
            </div>
        </div>
    </div>
</div>



<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h3 class="cta-title">Better IT Solutions And Services At Your <span>Fingertips</span></h3>            
        </div>
    </div>
</section>
<!-- choosing reason end -->

{{-- <section class="container tech my-4 p-3">    
    <h2 class="text-center">Our Technology</h2>

    <div class="tech-carousel owl-carousel owl-theme mt-3">
        <div class="item"><img src="icons/html.png" alt="HTML"></div>
        <div class="item"><img src="icons/css.png" alt="CSS"></div>
        <div class="item"><img src="icons/js.png" alt="JavaScript"></div>
        <div class="item"><img src="icons/python.png" alt="Python"></div>
        <div class="item"><img src="icons/php.png" alt="PHP"></div>
        <div class="item"><img src="icons/laravel.png" alt="Laravel"></div>
        <div class="item"><img src="icons/nextjs.png" alt="Next.js"></div>
        <div class="item"><img src="icons/flutter.png" alt="Flutter"></div>
      </div>
</section> --}}


<!-- about-details begin -->
<div class="about-details">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-10">
                <div class="part-text">
                    <h2 class="first-child">Early Formative Years</h2>
                    <p>We help transform the world's most important businesses into vigorous,
                            that anticipate the agile unpredictable, adapt rapidly to disruption and
                            opposition. We work with clients who not hide from the future but want
                            with high potential and high ambition.</p>
                    <p>We help transform the world's most important businesses into vigorous,
                            that anticipate the agile unpredictable, adapt and rapidly to disruption
                            with high potential high ambitio</p>
                    <h2>The Growth Trajectory</h2>
                    <p>We help transform the world's most important businesses into vigorous,
                            that anticipate the agile unpredictable, adapt rapidly to disruption and
                            opposition. We work with clients who not hide from the future but want
                            with high potential and high ambition.</p>
                    <p>We help transform the world's most important businesses into vigorous,
                            that anticipate the agile unpredictable, adapt and rapidly to disruption
                            with high potential high ambitio</p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-10">
                <div class="part-img">
                    <img src="{{asset('images/about_growth.jpg')}}" alt="" width="200" height="600">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about-details end -->



<!-- support begin -->
<div class="support support-3">
    <div class="container">
        <div class="row justify-content-xl-between justify-content-lg-between justify-content-center">
            
            <div class="col-xl-5 col-lg-5 col-md-8 d-xl-flex d-lg-flex d-block align-items-center">
                <div class="part-text">
                    <span class="phone-number">{{env('COMPANY_PHONE')}}</span>
                    <p>But I must explain to you how all this mistaken
                        denouncing praising pain was born and via us
                        passing pain was born give you.</p>
                    
                    <a href="https://html.themexriver.com/murtes/murtes/about.html#" class="support-button">Contact now <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="part-cta">
                    <a href="https://html.themexriver.com/murtes/murtes/about.html#" class="cta-button">CALL FOR ADVICE NOW</a>
                    <h2>To make requests
                        for further information,
                        contact us via our social
                        channels.</h2>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- support end -->




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
    $(document).ready(function(){
        $(".tech-carousel").owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 2000, // Continuous loop without pause
            autoplaySpeed: 2500, // Controls transition smoothness
            smartSpeed: 2500,
            dots: false,
            nav: false,
            slideTransition: 'linear',
            responsive: {
                0: { items: 3 },
                600: { items: 5 },
                1000: { items: 7 }
            }
        });

    })
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

