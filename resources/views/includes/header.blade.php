<div class="header-3">
    <div class="container this-container">
        <div class="row">
            <div class="col-xl-2 col-lg-3 d-xl-flex d-lg-flex d-block align-items-center">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-7 d-xl-block d-lg-block d-flex align-items-center">
                        <div class="logo">
                            <a href="https://html.themexriver.com/murtes/murtes/index-3.html">
                                {{-- <img src="{{asset('frontend/assets/images/favicons/cti-file-01.png')}}" alt=""> --}}
                                <img src="{{asset('frontend/assets/images/logo.png')}}" alt="" width="180px">
                            </a>
                        </div>
                    </div>
                    <div class="col-5 d-xl-none d-lg-none d-block">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-9">
                <div class="mainmenu">
                    <nav class="navbar navbar-expand-lg">

                        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button> -->
                        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item dropdown {{ request()->is('/') ? 'active' : '' }}">
                                        <a class="nav-link dropdown-toggle" href="https://html.themexriver.com/murtes/murtes/about.html#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Home
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="https://html.themexriver.com/murtes/murtes/index.html">Home One</a>
                                        <a class="dropdown-item" href="https://html.themexriver.com/murtes/murtes/index-2.html">Home Two</a>
                                        <a class="dropdown-item" href="https://html.themexriver.com/murtes/murtes/index-3.html">Home Three</a>
                                        <a class="dropdown-item" href="https://html.themexriver.com/murtes/murtes/index-4.html">Home Four</a>
                                        <a class="dropdown-item" href="https://html.themexriver.com/murtes/murtes/index-5.html">Home Five</a>
                                        </div>
                                    </li>
                                    <li class="nav-item {{ request()->routeIs('about-us') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{route('about-us')}}">About</a>
                                    </li>                                        

                                    <li class="nav-item {{ request()->routeIs('services') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{route('services')}}">Service</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Team</a>
                                    </li>
                                    
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="https://html.themexriver.com/murtes/murtes/about.html#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="https://html.themexriver.com/murtes/murtes/blog.html">Blog</a>
                                            <a class="dropdown-item" href="https://html.themexriver.com/murtes/murtes/blog-details.html">Blog Details</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://html.themexriver.com/murtes/murtes/contact.html">Contact</a>
                                    </li>
                                </ul>
                        </div>
                    </nav>
                </div>
            </div>            
        </div>
    </div>
</div>