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
                    <p>{{env('COMPANY_NAME')}} ({{env('COMPANY_NAME_SHORT')}}) is an IT company specializing in software, web, and app development. We excel in DevOps, UI/UX, PHP, and iOS, delivering scalable solutions. Our expert team ensures seamless experiences with cutting-edge technology, helping businesses grow and stay competitive in the digital landscape.</p>

                </div>
            </div>

            <div class="col-xl-2 col-lg-2">
                <div class="links-widget">
                    <h3>Company</h3>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}#our-team">Our Team</a>
                        </li>
                        <li>
                            <a href="{{ route('our-work') }}">Our Projects</a>
                        </li>
                        <li>
                            <a href="{{ route('about-us') }}">About Us</a>
                        </li> 
                        <li>
                            <a href="{{ route('contact-us') }}">Contact Us</a>
                        </li>                        
                    </ul>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2">
                <div class="links-widget">
                    <h3>Services</h3>
                    <ul>
                        <li><a  href="{{route('services')}}">Android App Development</a></li>
                        <li><a  href="{{route('services')}}">Hybrid App Development</a></li>
                        <li><a  href="{{route('services')}}">Web Development</a></li>
                        <li><a  href="{{route('services')}}">TV App Development</a></li>
                        <li><a  href="{{route('services')}}">Cloud Solution Service</a></li>
                        <li><a  href="{{route('services')}}">iOS App Development</a></li>
                        <li><a  href="{{route('services')}}">UI/UX Design</a></li>
                        <li><a  href="{{route('services')}}">DevOps Service</a></li>   
                    </ul>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2">
                <div class="links-widget">
                    <h3>Help Center</h3>
                    <ul>
                        <li>
                            <a href="https://html.themexriver.com/murtes/murtes/index-5.html#">Help centre</a>
                        </li>
                        <li>
                            <a href="https://html.themexriver.com/murtes/murtes/index-5.html#">Email Us</a>
                        </li>
                        <li>
                            <a href="https://html.themexriver.com/murtes/murtes/index-5.html#">Customers</a>
                        </li>
                        <li>
                            <a href="https://html.themexriver.com/murtes/murtes/index-5.html#">Message Us</a>
                        </li>
                        <li>
                            <a href="https://html.themexriver.com/murtes/murtes/index-5.html#">Blog</a>
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
                <div class="social-area">
                    <ul>
                        <li>
                            <a class="facebook" href="https://html.themexriver.com/murtes/murtes/index-5.html#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a class="twitter" href="https://html.themexriver.com/murtes/murtes/index-5.html#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a class="skype" href="https://html.themexriver.com/murtes/murtes/index-5.html#"><i class="fab fa-skype"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- copyright end -->