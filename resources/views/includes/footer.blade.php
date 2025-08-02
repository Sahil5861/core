<!-- footer begin -->
<style>
    html {
        scroll-behavior: smooth;
    }
</style>
<div class="footer footer-2">
    <div class="container">
        <div class="row justify-content-between">

            <div class="col-xl-4 col-lg-4">
                <div class="about-widget">
                    <h3>About {{env('COMPANY_NAME_SHORT')}}</h3>
                    <p>{{env('COMPANY_NAME')}} ({{env('COMPANY_NAME_SHORT')}}) is an IT company specializing in software, web, and app development. We excel in UI/UX, PHP, and iOS, delivering scalable solutions. Our expert team ensures seamless experiences with cutting-edge technology, helping businesses grow and stay competitive in the digital landscape.</p>

                </div>
            </div>

            <div class="col-xl-2 col-lg-2">
                <div class="links-widget">
                    <h3>Company</h3>
                    <ul>
                        {{-- <li>
                            <a href="{{ route('home') }}#our-team">Our Team</a>
                        </li> --}}
                        <li>
                            <a href="{{ route('our-work') }}">Our Projects</a>
                        </li>
                        <li>
                            <a href="{{ route('about-us') }}">About Us</a>
                        </li> 
                        <li>
                            <a href="{{ route('contact-us') }}">Contact Us</a>
                        </li> 
                              
                        <li>
                            <a href="{{ route('service-list') }}">Services</a>
                        </li> 
                    </ul>
                </div>
            </div>

            {{-- <div class="col-xl-2 col-lg-2">
                <div class="links-widget">
                    <h3>Services</h3>
                    {{-- @foreach ($services->whereIn('id', [4, 7, 10]) as $service)
                        <ul>
                            <li>
                                <a href="{{ route('service.details', $service->slug) }}" style="width: 100%;">
                                    {{ $service->title }}
                                </a>
                            </li>
                        </ul>
                    @endforeach
                </div>
            </div> --}}

            <div class="col-xl-2 col-lg-2">
                <div class="links-widget">
                    <h3>Help Center</h3>
                    <ul>
                        {{-- <li>
                            <a href="https://html.themexriver.com/murtes/murtes/index-5.html#">Help centre</a>
                        </li> --}}
                        <li>
                            <a href="mailto:contact@coretechinfo.com?subject=Hello%20There&body=I%20would%20like%20to%20get%20in%20touch." class="email-link">Email Us</a>
                        </li>
                        <li>
                            <a href="{{route('our-work')}}">Customers</a>
                        </li>
                        <li>
                            <a href="https://wa.me/919643044561" class="whatsapp-link" target="_blank">Message Us</a>
                        </li>
                        <li>
                            <a href="{{route('blog')}}">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- footer end -->

<!-- copyright begin -->
<div class="copyright">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-6 col-lg-6 d-xl-flex d-lg-flex d-block align-items-center">
                <div class="cp-area">
                    <p>Copyright © {{date('Y')}} Core Tech Info. All Rights Reserved</p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <!-- Social Links Section -->
                <div class="social-area">
                    <ul style="list-style: none; padding: 0; display: flex; gap: 15px;">
                        <li>
                            <a class="facebook" href="https://www.facebook.com/coretechinfo007/" title="Facebook">
                                <i class="fab fa-facebook-f" style="font-size: 30px; color: #ffffff;"></i>
                            </a>
                        </li>
                        <li>
                            <a class="twitter" href="https://x.com/coretechinfo" title="Twitter (X)">
                                {{-- <i class="fa-brands fa-x-twitter" style="font-size: 30px; color: #000000;"></i> --}}
                                <svg style="margin-top: 5px;" version="1.1" id="svg5" xmlns:svg="http://www.w3.org/2000/svg"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1668.56 1221.19"
                                        style="enable-background:new 0 0 1668.56 1221.19;" xml:space="preserve">
                                    <g id="layer1" transform="translate(52.390088,-25.058597)">
                                        <path id="path1009" d="M283.94,167.31l386.39,516.64L281.5,1104h87.51l340.42-367.76L984.48,1104h297.8L874.15,558.3l361.92-390.99
                                            h-87.51l-313.51,338.7l-253.31-338.7H283.94z M412.63,231.77h136.81l604.13,807.76h-136.81L412.63,231.77z"/>
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="linkedin" href="https://www.linkedin.com/in/coretechinfo-rohini-94b84926a/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" title="LinkedIn">
                                <i class="fab fa-linkedin" style="font-size: 30px; color: #0077B5;"></i>
                            </a>
                        </li>
                        <li>
                            <a class="instagram" href="https://www.instagram.com/coretech.info/" title="Instagram">
                                <i class="fab fa-instagram" style="font-size: 30px; color: #E1306C;"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
  integrity="sha512-7kS1FQyoHMHnR3wwYfORdsQk3HNG1tDSn8fPYfr8igUwKvFcqFi3sxlhzRQPLM/Xf8NLBuAFB97HpJdYeSDjig=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
>

