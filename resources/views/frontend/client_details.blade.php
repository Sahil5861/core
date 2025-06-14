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

</style>
@section('section')
<!-- breadcrumb begin -->
<div class="breadcrumb-murtes" style="background: url(../images/ak_banner.png) center center no-repeat">
    <div class="container">
       <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="typewriter-container">\
                    <h1 class="static-text"style="color:#fff">Ak Builtrade pvt. ltd.</h1>        
                   
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


<div class="service-service-page">
    <div class="container">
        <div class="row justify-content-xl-between justify-content-lg-between justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-9">
                <div class="part-img">
                    <img src="{{asset('images/project/ak4.png')}}" alt="">
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-9">
                <div class="part-text">
                    <h2>Ak Builtrade pvt. ltd.</h2>
                    <p>About this app Ak Buildtrade- Brand of packaged raw material seller. Protect our environment of Delhi & NCR from pollution. Assured high quality. We are a manufacturer of open and packaged building materials such as Sand, Dust, Aggregate, etc. We supply material to Distributors and retailers. Our packaged material is designed keeping the environment in mind. Our Specialities: safe & clean environment, no wastage, Assured high quality, easy to handle & use. Build a strong future with us.</p>
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
      <div class="container p-3 w-50">
        <div class="row justify-content-center">
            <div class="col-lg-2 text-center">
                <img src="https://img.icons8.com/ios-filled/100/fa314a/laravel.png" class="tech-logo" alt="Laravel"/> 
                <p class="tech-name mt-2">Laravel</p>
            </div>
            <div class="col-lg-2 text-center">
                <img src="https://img.icons8.com/color/150/000000/html-5--v1.png" class="tech-logo" alt="HTML"/>
                <p class="tech-name mt-2">HTML</p>
            </div>
            <div class="col-lg-2 text-center">
                <img src="https://img.icons8.com/color/150/000000/javascript--v1.png" class="tech-logo" alt="JS"/>
                <p class="tech-name mt-2">JS</p>
            </div>
            <div class="col-lg-2 text-center">
                <img src="https://img.icons8.com/color/150/000000/css3.png" class="tech-logo" alt="CSS"/>
                <p class="tech-name mt-2">CSS</p>
            </div>
        </div>
    </div>
</div>



<div class="support support-3" style="padding: 20px 0">
    <div class="container">
        <div class="row justify-content-between">

            <div class="col-xl-5 col-lg-5 d-xl-flex d-lg-flex d-block align-items-center">
                <div class="part-text">
                    <span class="phone-number">{{env('COMPANY_PHONE')}}</span>
                    <p>We’re available 24/7!
                        Get in touch for a detailed analysis and thorough assessment of your plan.</p>

                    <a href="#" class="support-button">Contact now <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="part-cta">
                    <a href="{{route('contact-us')}}" class="cta-button">REACH OUT NOW</a>
                    <h2>Obtain further information by
                         contacting with our experienced 
                         IT staff.</h2>
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

