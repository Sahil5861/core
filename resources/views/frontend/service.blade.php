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
        

</style>
@section('section')
<!-- breadcrumb begin -->
<div class="breadcrumb-murtes" style="background: url(../images/about_us.png)">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="breadcrumb-content">
                    <h2>Our Services</h2>
                    <ul>
                        <li><a href="https://html.themexriver.com/murtes/murtes/about.html#">Home</a></li>
                        <li>Service</li>
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


<!-- service begin -->
<div class="service-service-page">
    <div class="container">
        <div class="row justify-content-xl-between justify-content-lg-between justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-9">
                <div class="part-img">
                    <img src="{{asset('images/service-7.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-9">
                <div class="part-text">
                    <h2>We run all kinds of IT
                        services that vow your
                        success</h2>
                    <p>We help transform the world most important businesses into
                        that anticipate the agile unpredtable adapt rapidly disruption
                        with high potential and high ambition.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- service end -->

<!-- service list begin -->
<div class="service-2 service-4 service-list-service-page">
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
</div>
<!-- service list end -->

<!-- choosing reason begin -->
<div class="choosing-reason-2 choosing-reason-service-page">
    <div class="container this-container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-8">
                <div class="section-title-2 text-center">
                    <h2>How we work?<br>and provide services!</h2>
                    <p>But I must explain to you how all this mistaken denouncing
                            praising pain was born and I will give you</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 aos-init" data-aos="new-animation" data-aos-delay="250" data-aos-duration="500">
                <div class="single-reason">
                    <div class="part-head">
                        <span class="number">01</span>
                    </div>
                    <div class="part-body">
                        <h3>Meeting with
                                the customer
                                </h3>
                        {{-- <p>Collecting event old above shy bed favour income has stuff.</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 aos-init" data-aos="new-animation" data-aos-delay="250" data-aos-duration="1000">
                <div class="single-reason">
                    <div class="part-head">
                        <span class="number">02</span>
                    </div>
                    <div class="part-body">
                        <h3>Work hard on
                                the project</h3>
                        {{-- <p>Collecting event old above shy bed favour income has stuff.</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 aos-init" data-aos="new-animation" data-aos-delay="250" data-aos-duration="1500">
                <div class="single-reason">
                    <div class="part-head">
                        <span class="number">03</span>
                    </div>
                    <div class="part-body">
                        <h3>We finish the
                                project</h3>
                        {{-- <p>Collecting event old above shy bed favour income has stuff.</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 aos-init" data-aos="new-animation" data-aos-delay="250" data-aos-duration="2000">
                <div class="single-reason">
                    <div class="part-head">
                        <span class="number">04</span>
                    </div>
                    <div class="part-body">
                        <h3>Successfully
                                launch project</h3>
                        {{-- <p>Collecting event old above shy bed favour income has stuff.</p>  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- choosing reason end -->





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

