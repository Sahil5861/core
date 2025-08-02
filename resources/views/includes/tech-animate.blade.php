<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technology Carousel with Bouncing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>
        @media (min-width: 1200px){
            .container-fluid {
                min-height: 40vh;
                padding: 0px 0 !important;
            }
             .tech-carousel {
                padding: 0px 0  !important;
            }
        }
        body {
            font-family: Arial, sans-serif;
           
            margin: 0;
            padding: 0;
        }

        .container-fluid {
            min-height: 40vh;
            padding: 50px 0;
        }

        .section-title h2 {
            color: black;
            font-weight: bold;
            margin-bottom: 50px;
           
            font-size: 2.5rem;
        }

        .tech-carousel {
            padding: 40px 0;
        }

        .tech-item {
            text-align: center;
            padding: 10px;
        }

        .tech-logo {
            width: 80px;
            height: 80px;
            object-fit: contain;
            transition: all 0.3s ease;
          
        }

        .tech-name {
            color: black;
            font-weight: 600;
            margin-top: 10px;
          
            font-size: 0.9rem;
        }

        /* Bounce phase styling */
        .owl-item.bounce-start .tech-logo {
            filter: drop-shadow(0 3px 6px rgba(0,0,0,0.15)) brightness(1.1);
        }

        .owl-item.bounce-start .tech-name {
            color: black;
            font-size: 1.05em;
        }

        .owl-item.bounce-peak .tech-logo {
            filter: drop-shadow(0 6px 120px rgba(0,0,0,0.25)) brightness(1.3);
        }

        .owl-item.bounce-peak .tech-name {
            color: black;
            font-size: 1.2em;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.4);
        }

        .owl-item.bounce-end .tech-logo {
            filter: drop-shadow(0 3px 6px rgba(0,0,0,0.1.5)) brightness(1.1);
        }

        .owl-item.bounce-end .tech-name {
            color: black;
            font-size: 1.05em;
        }

        /* Default state for items outside bounce zone */
        .owl-item:not(.bounce-start):not(.bounce-peak):not(.bounce-end) .tech-logo {
            opacity: 0.7;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
        }

        .owl-item:not(.bounce-start):not(.bounce-peak):not(.bounce-end) .tech-name {
            opacity: 0.7;
        }

        /* Carousel container styling */
        .owl-carousel .owl-stage-outer {
            overflow: visible;
            padding: 20px 0;
        }

        /* Ensure smooth transitions */
        .owl-item {
            transition: all 0.3s ease;
        }
    </style>
</head>
<body>
    <div class="container-fluid my-5">
        <!-- Technologies Used Carousel -->
        <div class="section-title">
            <h2 class="text-center">Technologies We Use</h2>
        </div>
        <div class="tech-carousel owl-carousel owl-theme mt-4">
            <div class="tech-item">
                <img src="https://img.icons8.com/color/150/000000/android-os.png" class="tech-logo" alt="Android"/>
                <p class="tech-name">Android</p>
            </div>
            <div class="tech-item">
                <img src="https://img.icons8.com/color/100/python--v1.png" class="tech-logo" alt="Python"/>
                <p class="tech-name">Python</p>
            </div>
            <div class="tech-item">
                <img src="https://img.icons8.com/ios-filled/100/fa314a/laravel.png" class="tech-logo" alt="Laravel"/>
                <p class="tech-name">Laravel</p>
            </div>
            <div class="tech-item">
                <img src="https://img.icons8.com/color/150/000000/html-5--v1.png" class="tech-logo" alt="HTML"/>
                <p class="tech-name">HTML</p>
            </div>
            <div class="tech-item">
                <img src="https://img.icons8.com/color/150/000000/javascript--v1.png" class="tech-logo" alt="JS"/>
                <p class="tech-name">JS</p>
            </div>
            <div class="tech-item">
                <img src="https://img.icons8.com/color/150/000000/css3.png" class="tech-logo" alt="CSS"/>
                <p class="tech-name">CSS</p>
            </div>
            <div class="tech-item">
                <img src="https://img.icons8.com/color/150/000000/kotlin.png" class="tech-logo" alt="Kotlin"/>
                <p class="tech-name">Kotlin</p>
            </div>
            <div class="tech-item">
                <img src="https://img.icons8.com/color/150/000000/firebase.png" class="tech-logo" alt="Firebase"/>
                <p class="tech-name">Firebase</p>
            </div>
            <div class="tech-item">
                <img src="https://img.icons8.com/color/150/000000/github.png" class="tech-logo" alt="GitHub"/>
                <p class="tech-name">GitHub</p>
            </div>
            <div class="tech-item">
                <img src="https://img.icons8.com/color/150/000000/figma.png" class="tech-logo" alt="Figma"/>
                <p class="tech-name">Figma</p>
            </div>
            <div class="tech-item">
                <img src="https://img.icons8.com/color/100/000000/nextjs.png" class="tech-logo" alt="Next.js"/>
                <p class="tech-name">Next.js</p>
            </div> 
            <div class="tech-item">
                <img src="https://img.icons8.com/color/100/000000/ionic.png" class="tech-logo" alt="Ionic"/>
                <p class="tech-name">Ionic</p>
            </div> 
            <div class="tech-item">
                <img src="https://img.icons8.com/?size=100&id=71257&format=png&color=000000" class="tech-logo" alt="Angular"/>
                <p class="tech-name">Angular</p>
            </div>
            <div class="tech-item">
                <img src="https://img.icons8.com/?size=100&id=20821&format=png&color=000000" class="tech-logo" alt="iOS"/>
                <p class="tech-name">iOS</p>
            </div> 
            <div class="tech-item">
                <img src="https://img.icons8.com/?size=100&id=NfbyHexzVEDk&format=png&color=000000" class="tech-logo" alt="React"/>
                <p class="tech-name">React</p>
            </div> 
            <div class="tech-item">
                <img src="https://img.icons8.com/?size=100&id=UGYn5TapNioV&format=png&color=000000" class="tech-logo" alt="PHP"/>
                <p class="tech-name">PHP</p>
            </div> 
            <div class="tech-item">
                <img src="https://img.icons8.com/?size=100&id=5pu47piHKg1I&format=png&color=000000" class="tech-logo" alt="Flutter"/>
                <p class="tech-name">Flutter</p>
            </div> 
            <div class="tech-item">
                <img src="https://img.icons8.com/?size=100&id=YYYhFVbH4vFv&format=png&color=000000" class="tech-logo" alt="React Native"/>
                <p class="tech-name">React Native</p>
            </div> 
            <div class="tech-item">
                <img src="https://img.icons8.com/?size=100&id=XH8DlMsSOmWT&format=png&color=000000" class="tech-logo" alt="Swift"/>
                <p class="tech-name">Swift</p>
            </div>               
            <div class="tech-item">
                <img src="https://img.icons8.com/?size=100&id=nKPTBtE1Kt27&format=png&color=000000" class="tech-logo" alt="Android TV"/>
                <p class="tech-name">Android TV</p>
            </div> 
            <div class="tech-item">
                <img src="https://img.icons8.com/?size=100&id=13677&format=png&color=000000" class="tech-logo" alt="Photoshop"/>
                <p class="tech-name">Photoshop</p>
            </div> 
            <div class="tech-item">
                <img src="https://img.icons8.com/?size=100&id=4M86yFQrNLMF&format=png&color=000000" class="tech-logo" alt="Cloud"/>
                <p class="tech-name">Cloud</p>
            </div> 
            <div class="tech-item">
                <img src="https://img.icons8.com/?size=100&id=FHRVnLAgki9h&format=png&color=000000" class="tech-logo" alt="IT"/>
                <p class="tech-name">IT</p>
            </div> 
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            const carousel = $(".tech-carousel").owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplaySpeed: 1000,
                smartSpeed: 1000,
                dots: false,
                nav: false,
                center: true,
                stagePadding: 0,
                responsive: {
                    0: { items: 3 },
                    600: { items: 5 },
                    1000: { items: 7 }
                }
            });

            // Function to calculate bounce animation based on position
            function updateItemAnimations() {
                const pageWidth = $(window).width();
                const quarter = pageWidth * 0.25;
                const half = pageWidth * 0.5;
                const threeQuarter = pageWidth * 0.75;

                $('.owl-item').each(function() {
                    const $item = $(this);
                    const $techItem = $item.find('.tech-item');
                    
                    // Get item position relative to viewport
                    const itemLeft = $item.offset().left;
                    const itemCenter = itemLeft + ($item.width() / 2);
                    
                    // Reset classes
                    $item.removeClass('bounce-start bounce-peak bounce-end');
                    
                    // Apply bounce stages based on position
                    if (itemCenter >= quarter && itemCenter <= threeQuarter) {
                        if (itemCenter >= quarter && itemCenter < half) {
                            // 25% to 50% - Rising phase
                            const progress = (itemCenter - quarter) / (half - quarter);
                            const translateY = -20 * progress; // Rise up to -20px
                            const scale = 1 + (0.3 * progress); // Scale up to 1.3
                            
                            $techItem.css({
                                'transform': `translateY(${translateY}px) scale(${scale})`,
                                'transition': 'none'
                            });
                            $item.addClass('bounce-start');
                            
                        } else if (itemCenter >= half && itemCenter <= threeQuarter) {
                            // 50% to 75% - Falling phase
                            const progress = (itemCenter - half) / (threeQuarter - half);
                            const translateY = -20 + (20 * progress); // Fall from -20px to 0px
                            const scale = 1.3 - (0.3 * progress); // Scale down from 1.3 to 1
                            
                            $techItem.css({
                                'transform': `translateY(${translateY}px) scale(${scale})`,
                                'transition': 'none'
                            });
                            
                            if (progress > 0.8) {
                                $item.addClass('bounce-end');
                            } else {
                                $item.addClass('bounce-peak');
                            }
                        }
                    } else {
                        // Outside bounce zone - normal state
                        $techItem.css({
                            'transform': 'translateY(0px) scale(1)',
                            'transition': 'transform 0.3s ease'
                        });
                    }
                });
            }

            // Update animations on carousel events
            carousel.on('translate.owl.carousel', function(event) {
                updateItemAnimations();
            });
            
            carousel.on('translated.owl.carousel', function(event) {
                updateItemAnimations();
            });
            
            carousel.on('initialized.owl.carousel', function(event) {
                setTimeout(updateItemAnimations, 100);
            });

            // Update on window resize
            $(window).on('resize', function() {
                setTimeout(updateItemAnimations, 100);
            });

            // Continuous animation update during autoplay
            setInterval(updateItemAnimations, 50);

            // Initial animation setup
            setTimeout(updateItemAnimations, 500);
        });
    </script>
</body>
</html>