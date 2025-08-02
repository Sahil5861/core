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
      max-width: 70vw;
      max-height: 30px;
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
      .banner{
        height: 35vh !important;
      }
      .video-wrapper {
        height: 25vh !important;
      }
      .banner .content .styled-title{
        font-size: 2.5em !important;
        text-align: center !important;
        font-family: 'ICA Rubrik', sans-serif !important;
        line-height: 1em !important;
        color: #0000002d !important;
        position: relative !important;
        white-space: wrap !important;
        mix-blend-mode: difference !important;
        width: 72vw;
      }
      .service-service-page .part-text {
        margin-left: 0px !important;
      }



    }
     .video-container {
        position: relative;
        width: 100vw;
        height: 100vh;
        /* Center the video if needed */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Styles */

    /* Parent container with background color */
    .video-wrapper {
        position: relative;
        width: 100vw;
        height: 70vh;
        background-color: #000; /* Background for rest of the area */
        overflow: hidden;
    }

    .bg-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            height: 100%;
            object-fit: cover;
            clip-path: polygon(0% 0%, 100% 0%, 50% 100%, 0% 100%);
    }
    .bg-video-2 {
        position: absolute;
        top: 0;
        right: 0;
        width: 50%;
        height: 100%;
        object-fit: cover;
        clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 50% 100%);
    }
    .bg-video-3 {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        clip-path: polygon(50% 0%, 50% 0%, 100% 100%, 25% 100%);
    }


     .video-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(107, 95, 175, 0); /* #6B5FAF with 50% opacity */
        z-index: 1;
    }
    .banner {
        position: relative;
        height: 100vh;
        background: transparent /* Optional, for contrast */
    }

    .banner .content {
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .banner .content .styled-title {
        font-family: 'ICA Rubrik', sans-serif;
        font-size: 8em;
        line-height: 1em;
        color: #0000002d;
        position: relative;
        white-space: nowrap;

        /* This makes text color adapt based on background */
        mix-blend-mode: difference;
    }


    .banner .content .styled-title::after {
        position: absolute;
        inset: 0 0 0 0;
        content: attr(data-content);
        z-index: 2;
        -webkit-text-stroke: 2px #d2d2d2;
        color: transparent;
    }
    .banner:after {
        position: absolute !important;
        content: '' !important;
        left: 0 !important;
        top: 0 !important;
        width: 100% !important;
        height: 100% !important;
        opacity: 0.1 !important;
        background: #222222 !important;;
        opacity: .45 !important;
        z-index: -1 !important;
    }


</style>

@section('section')
<!-- breadcrumb begin -->
<div class="breadcrumb-murtes" style="background: url(../images/our_clients/client_banner.mp4) center center no-repeat">
    <div class="video-wrapper">
    <video autoplay muted loop playsinline class="bg-video">
        <source src="{{asset('images/our_clients/client_banner.mp4')}}" type="video/mp4">
    </video>
    <video autoplay muted loop playsinline class="bg-video-3">
        <source src="{{asset('images/our_clients/client_banner_2.mp4')}}" type="video/mp4">
    </video>
    <video autoplay muted loop playsinline class="bg-video-2">
        <source src="{{asset('images/our_clients/client_banner.mp4')}}" type="video/mp4">
    </video>
    <div class="banner">
        <div class="content">
            <h1 data-content="{{$client->title}}" class="styled-title">
                {{$client->title}}
            </h1>
        </div>
    </div>
</div>

</div>



</div>
<script>
    const phrases = [
      "Innovative Tech Solutions",
      "Scalable Digital Systems",
      "Secure Cloud Infrastructure",
      "Agile Development Processes",
      "Reliable IT Services",
      "Visionary Software Engineering",
      "Efficient Data Management",
      "Cutting-Edge Web Solutions"
    ];

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
<style>
    p img {
        width: auto;
    }
    
    .part-text img {
        max-width: 80% !important;
        width: auto !important; /* Changed from fixed width */
        height: auto !important;
        display: block !important;
        margin: 15px auto !important; /* This alone should center the image */
        /* Removed problematic positioning properties */
    }
    
    @media (max-width: 768px) {
        .part-text img {
            max-width: 75% !important;
            width: auto !important; /* Keep auto for better responsiveness */
        }
    }
    
    /* Additional fix for TinyMCE generated content */
    .part-text p img {
        max-width: 80% !important;
        width: auto !important;
        height: auto !important;
        display: block !important;
        margin: 15px auto !important;
    }
    
    @media (max-width: 768px) {
        .part-text p img {
            max-width: 75% !important;
        }
    }
</style>
<div class="service-service-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-10 mx-auto">
                <div class="part-text text-center">
                    <h2>{{ $client->title }}</h2>
                    <p>{!! $client->description !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid my-5">
    <!-- Technologies Used Carousel -->
    <div class="section-title">
        <h2 class="text-center">Technologies Used to Achieve Perfection in This Project</h2>
    </div>
    <?php
        $technologia = explode(',', $client->projectTechnology);
    ?>
    <div class="container p-3 w-50">
        <div class="row justify-content-center g-2">
            @foreach ($technologia as $tech)
            <?php
                $techdata = \App\Models\Technology::where('name', $tech)->first();
            ?>
            <div class="col-4 col-sm-3 col-md-3 col-lg-2 text-center mb-3">
                <div class="tech-item">
                    <img src="{{$techdata->image}}" class="tech-logo" alt="{{$client->projectTechnology}}"/>
                    <p class="tech-name mt-2 text-center">{{$techdata->name}}</p>
                </div>
            </div>    
            @endforeach
        </div>
    </div>
</div>

<style>
/* Additional CSS to prevent overlapping */
.tech-item {
    padding: 8px;
    min-height: 120px; /* Adjust based on your needs */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.tech-logo {
    max-width: 50px;
    max-height: 50px;
    object-fit: contain;
}

.tech-name {
    font-size: 0.75rem;
    word-wrap: break-word;
    overflow-wrap: break-word;
    hyphens: auto;
    margin-top: 6px !important;
    line-height: 1.1;
    text-align: center;
}

/* Responsive adjustments */
@media (max-width: 576px) {
    .tech-name {
        font-size: 0.7rem;
        line-height: 1.0;
    }
    
    .tech-logo {
        max-width: 40px;
        max-height: 40px;
    }
    
    .tech-item {
        min-height: 90px;
        padding: 5px;
    }
    
    .container.w-50 {
        width: 90% !important; /* Give more space on mobile */
    }
}

@media (max-width: 380px) {
    .tech-name {
        font-size: 0.65rem;
    }
    
    .tech-logo {
        max-width: 35px;
        max-height: 35px;
    }
    
    .tech-item {
        min-height: 80px;
        padding: 3px;
    }
}
</style>

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

