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
      padding: 20px;
      margin-top: 200px;
      min-height: 315px;
      /* background: rgba(0, 00, 0, 0.5) */
    }
    .typewriter-container h1{
        font-size: 45px !important;
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


    @media only screen and (min-width: 320px) and (max-width: 575px) {
        .header-3 {
            position: fixed !important;
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
        font-size: 20px !important;
      }
      .service-service-page .part-text {
        margin-left: 0px !important;
      }
      .technology-row {
        flex-wrap: nowrap !important;
      }
      .service-service-page .part-text h2 {
        font-size: 34px !important;
        line-height: 1em !important;
      }
      .our-role {
        padding: 10px 0px !important;
      }



    }






     .bg-video{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.2;
        object-fit: cover;
        z-index: 0;
    }
    section{
        position:relative;
        width: 100%;
        height: 0vh;
        background: #000000;
    }

    section .wave{
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100px;
        background: url(../images/blogs/wave.png);
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
    }
    .video-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 16%;

        /* New gradient background */
        background: linear-gradient(
            to bottom,
            rgba(107, 95, 175, 0.854) 0%,
            rgba(107, 95, 175, 0.203) 100%
        );
        z-index: 1;
    }
    .service-service-page {
        position: relative;
        overflow: hidden;
    }

    .service-service-page .video-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .service-service-page .video-background video {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .service-service-page .video-background .video-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width:100%;
        height:100%;
        
        z-index:1;
    }

    .service-service-page .container {
        position: relative;
        z-index: 2;
    }



</style>
</div>

 <div class="video-overlay"></div>
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


<!-- service begin -->

<!-- service end -->
<div class="service-service-page">
    <div class="video-background">
        <video autoplay muted loop playsinline>
            <source src="{{asset('images/service_banner.mp4')}}" type="video/mp4">
        </video>
        <div class="video-overlay"></div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-5 col-md-9">
                <div class="part-text text-center">
                    <h2>{{$service->title}}</h2>
                    <p style="color: black;">{{$service->content}}</p>
                </div>
            </div>
        </div>  
    </div>
</div>
<section>
        <div class="wave wave1"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
        <div class="wave wave4"></div>
</section>
<div class="container-fluid my-5">
    <!-- Technologies Used Carousel -->
    <div class="section-title">
        <h2 class="text-center">Technologies Used to Achieve Perfection in {{$service->title}}</h2>
      </div>

      <?php 
        $technologia = explode(',', $service->technology);
      ?>
      <div class="container p-3 w-50">
        <div class="row justify-content-center technology-row"> 

            @foreach ($technologia as $tech)
            <?php 
                $techdata = \App\Models\Technology::where('name', $tech)->first();
            ?>
            <div class="col-lg-2 text-center">
                <img src="{{$techdata->image}}" class="tech-logo" alt="{{$techdata->name}}"/> 
                <p class="tech-name mt-2">{{$techdata->name}}</p>
            </div>    
            @endforeach
        </div>
    </div>
</div>
<div class="service-service-page our-role p-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-5 col-md-9">
                <div class="part-text text-center">
                    <h2>Our Role in Achieving Your Business Goals</h2>
                    <p>{{$service->our_role}}</p>
                </div>
            </div>
        </div>  
    </div>
</div>

@include('includes.contact-form')



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

