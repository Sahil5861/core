@extends('layouts.frontend_default')
<style>
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

    .banner2 {
      position: relative;
      width: 100%;
      height: 100vh;
      overflow: hidden;
      /* display: flex;
      align-items: flex-end;
      justify-content: flex-start; */      
      position: relative;
    }
    
    .bg-video{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 0;
    }

    .banner-content2 {
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
      /* background: rgba(0, 00, 0, 0.5) */
    }
    .typewriter-container h1{
        font-size: 60px !important;
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

        

    
    /* .owl-prev i, .owl-next i{
        line-height: 4;
    } */
</style>
@section('section')
<!-- banner begin -->
{{-- <div class="banner-5">
    <div class="circle">
        <img src="{{asset('images/home-circle.png')}}" alt="">
    </div>
    <div class="container">
        <div class="row justify-content-xl-end justify-content-lg-center  justify-content-center">
            <div class="col-xl-5 col-lg-8 col-md-8">
                <div class="banner-content">
                    <h1>Custom IT
                        Solutions for
                        your business</h1>                    
                    <p>Collecting event old above shy bed noisy sister
                        favour income has stuff rapid since.</p>
                    <div class="buttons">
                        <a href="#"class="banner-button btn-murtes">Explor more <i class="fas fa-long-arrow-alt-right"></i></a>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="banner2">
    <video autoplay muted loop playsinline class="bg-video">
      <source src="{{asset('images/home_video.mp4')}}" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  
    <div class="banner-content2">      
      <div class="typewriter-container">
        <p>"Turning Ideas Into Digital Realities"</p>
        <h1 class="static-text">Custom IT Solutions</h1>
        <h1 class="static-text">For</h1>
        <h1 class="typewriter-text" id="typewriter"></h1>
      </div>      
    </div>
  </div>
  


<script>
    const phrases = [
      "Android App Developement",
      "Hybrid App Developement",
      "Web Developement",
      "TV App Development",
      "Cloud Solution Service",
      "iOS App Development",
      "UI/UX Design",
      "DevOps Service"
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

<!-- banner end -->

<!-- about begin -->
<div class="about-5">
    <div class="container">
        <div class="row justify-content-xl-between justify-content-lg-between justify-content-center">
            <div class="col-xl-6 col-lg-10 col-md-10">
                <div class="part-text">
                    <h2>
                        <span class="special">
                            MORE THAN 9 YRARS OF EXPERIENCE
                        </span>
                        IN TURNING IDEAS INTO DIGITAL REALITIES
                    </h2>
                    <p>- With over 12 years of industry expertise, our IT solutions company 
                        specializes in turning innovative ideas into robust digital realities. 
                        We partner with businesses to deliver tailored technology solutions that
                         enhance performance, scalability, and success. Whether it's software develo
                         pment, cloud integration, or digital transformation, we bring visions to life 
                         with precision and passion.</p>
                    <p>- At the heart of our journey lies a commitment to innovation and excellence.
                         For more than a decade, we've empowered businesses to thrive in the digital
                          age by crafting solutions that align seamlessly with their goals. Our team
                           transforms challenges into opportunities, ensuring every project is a step
                            toward a smarter, more connected future. Together, we redefine what's possible.</p>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="part-img">
                    <img class="main-img aos-init aos-animate"
                        src="{{asset('images/about-3.jpg')}}" alt=""
                        data-aos="fade" data-aos-offset="300" data-aos-duration="1000"
                        data-aos-easing="ease-in-sine">
                    <img class="overlap-img aos-init aos-animate"
                        src="{{asset('images/about-3-small.jpg')}}"
                        alt="" data-aos="fade-left" data-aos-offset="300" data-aos-duration="1200"
                        data-aos-easing="ease-in-sine">
                    <a href="https://www.youtube.com/watch?v=NU9Qyic_mX0" class="play-button mfp-iframe"><i
                            class="fa fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about end -->

<!-- statics begin -->
<div class="statics statics-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 aos-init" data-aos="new-animation" data-aos-delay="100"
                data-aos-duration="500">
                <div class="single-statics">
                    <span class="number"><span class="counter">9</span>+</span>
                    <span class="title">Years of experience</span>
                    <div class="bg-icon">
                        <img src="{{asset('images/timetable.svg')}}"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 aos-init" data-aos="new-animation" data-aos-delay="100"
                data-aos-duration="1000">
                <div class="single-statics">
                    <span class="number"><span class="counter">{{$project->count()}}</span>+</span>
                    <span class="title">Total project</span>
                    <div class="bg-icon">
                        <img src="{{asset('images/contract.svg')}}"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 aos-init" data-aos="new-animation" data-aos-delay="100"
                data-aos-duration="1500">
                <div class="single-statics">
                    <span class="number"><span class="counter">35</span>+</span>
                    <span class="title">Winning awards</span>
                    <div class="bg-icon">
                        <img src="{{asset('images/trophy.svg')}}"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 aos-init" data-aos="new-animation" data-aos-delay="100"
                data-aos-duration="2000">
                <div class="single-statics">
                    <span class="number"><span class="counter">{{$clients->count()}}</span>+</span>
                    <span class="title">Happy clients</span>
                    <div class="bg-icon">
                        <img src="{{asset('images/happiness.svg')}}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- statics end -->

<!-- service begin -->
<div class="service-2 service-4">
    <div class="container">
        <div class="this-section-title">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-lg-6">
                    <h2>We creating solutions<br>
                        for your organization</h2>
                </div>
                <div class="col-xl-5 col-lg-5 d-xl-flex d-lg-flex d-block align-items-center">
                    <p>But I must explain to you how all this mistaken denouncing
                        praising pain was born and because those who do not know.</p>
                </div>
            </div>
        </div>

        <div class="owl-carousel service-crausel owl-theme">
            @foreach ($services as $item)                
                <div class="item">
                    <div class="card sevice-card">
                        <div class="card-content">
                            <h3>{{$item->title}}</h3>
                            <p>{{$item->description}}</p>
                            <a href="#" class="details">details →</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- service end -->

<!-- team begin -->
<div class="team-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-8">
                <div class="section-title-2 text-center">
                    <h2>Say hello to our skilled and dedicated team!</h2>
                    <p>Our team is made up of talented and driven individuals 
                        who work together to achieve exceptional results.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($team as $item)                
                <div class="col-xl-3 col-lg-3 col-sm-6 aos-init" data-aos="murtes-animation" data-aos-offset="300"
                    data-aos-duration="500" data-aos-easing="ease-in-sine">
                    <div class="single-member">
                        <div class="part-img">
                            <img src="{{asset('images/our_teams/'.$item->image)}}"
                                alt="">
                            <div class="content-on-img">
                                <span class="name">{{$item->name}}</span>
                                <span class="position">{{$item->designation}}</span>
                                <div class="social">
                                    <ul>
                                        <li> <a href="#"><i class="fab fa-facebook-f"></i></a></li>

                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>

                                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            @endforeach
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="team-bouttons">
                    <h2>We are hiring!</h2>
                    <p>Join Our Innovative Team And Help Us Shape The Future!</p>
                    <a href="#" class="btn-murtes-3">Join our team</a>                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- team end -->

<!-- support begin -->
<div class="support support-3" style="padding: 20px 0">
    <div class="container">
        <div class="row justify-content-between">

            <div class="col-xl-5 col-lg-5 d-xl-flex d-lg-flex d-block align-items-center">
                <div class="part-text">
                    <span class="phone-number">{{env('COMPANY_PHONE')}}</span>
                    <p>We’re available 24/7!
                        Contact to require a detailed analysis and assessment of your plan.</p>

                    <a href="#" class="support-button">Contact now <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="part-cta">
                    <a href="#" class="cta-button">REACH OUT NOW</a>
                    <h2>Obtain further information by
                         contacting with our experienced 
                         IT staff.</h2>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- support end -->

<!-- project begin -->
<div class="project project-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-10 col-md-8">
                <div class="section-title-2">
                    <span class="subtitle  text-center" style="text-align: center">OUR PORTFOLIO</span>
                    <h2 class="">A Glimpse of Our Unique, Trendy & Profitable Enterprise Solutions</h2>
                    <p>Have a sneak peek at some of our recent work delivered to our
                         esteemed global clients belonging to various industry verticals. 
                         Get a feel for the innovative, quality-rich product you will 
                         receive when you collaborate with JPLoft as your trusted 
                         technology partner for your web and app development project.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid this-container">
        <div class="part-project">
            <div class="owl-carousel project-crausel owl-theme owl-loaded owl-drag">
                @foreach ($project as $item)                    
                    <div class="item">                        
                        <div class="card project-card" style="min-height: 30.4rem;">
                            <img src="{{asset('images/project/'.$item->image)}}" width="200" height="200" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">{{$item->title}}</h5>
                              <p class="card-text">
                                {{ \Illuminate\Support\Str::words($item->description, 10, '...') }}
                            </p>                            
                              <a href="#" class="btn btn-primary">details →</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
<!-- project end -->

<!-- testimonial begin -->
{{-- <div class="testimonial">
    <div class="container">
        <div class="this-section-title">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-lg-7 col-md-8">
                    <h2>What our customers say
                        about us.</h2>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-8 d-xl-flex d-lg-flex d-block align-items-center">
                    <p>All the Lorem Ipsum generators on the Internet tend to
                        predefined chunks as necessary, making this the first true.</p>
                </div>
            </div>
        </div>
        <div class="owl-carousel testiminial-crausel owl-theme">            
            @foreach ($clients as $client)                
                <div class="card testimonial-card">
                    <div class="rating">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$client->name}}</h5>                        
                        <p class="card-text">
                            {{ \Illuminate\Support\Str::words($client->description, 25, '...') }}                            
                        </p>                    
                    </div>
                    <img src="{{asset('images/our_clients/'.$client->image)}}" alt="John Deu" class="testimonial-img">
                </div>                           
            @endforeach
        </div>
    </div>
</div> --}}
<!-- testimonial end -->

<!-- blog begin -->
<div class="blog blog-3" style="padding: 0; padding-bottom:100px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-10 col-md-8">
                <div class="section-title-2 text-center">
                    <h2>Read our article<br>
                        tips and news</h2>
                    <p>But I must explain to you how all this mistaken denouncing
                        praising pain was born and I will give you</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($blogData as $blog)                
                <div class="col-xl-4 col-lg-4 col-md-6 aos-init mb-4">
                    <div class="card blog-card" style="min-height: 30.5rem;">
                        <img src="{{asset('images/blogs/'.$blog->image)}}" class="card-img-top" alt="Blog Image">
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
            <div class="col-xl-4 col-lg-4 col-md-6 aos-init">
                <div class="small-contact">
                    <h3>Have any project
                        in your mind?</h3>
                    <p>All the Lorem Ipsum generators the
                        necessa making this first.</p>
                    <form>
                        <input type="text" placeholder="Name here">
                        <input type="email" placeholder="Email here">
                        <button type="submit">Contact Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog end -->
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

