
@extends('layouts.frontend_default')
@section('title', 'Blogs')
@section('content')
		<div class="page-header">
			<div class="page-header__bg"
				style="background-image: url(frontend/assets/images/background/header.jpg);"></div>
			<!-- /.page-header__bg -->
			<div class="container">
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="index.html">Home</a></li>
					<li>Blog</li>
				</ul>
				<h2 class="page-header__title">Blog Page</h2><!-- /.page-header__title -->
			</div><!-- /.container -->
		</div><!-- /.page-header -->


		<section class="section-padding--top section-padding--bottom">
			<div class="container">
				<div class="row gutter-y-30">
					@foreach($blog_data as $blog_detatils)
					<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms"
						data-wow-delay="000ms">
						<div class="blog-card-one">
							<div class="blog-card-one__image">
	                            <!-- <img src="frontend/assets/images/blog/blog-1-1.jpg" alt=""> -->
								<img src="{{asset('images/blogs/'.$blog_detatils->image)}}" alt="">
								<a href="{{ route('blog_dt',['id' => $blog_detatils->id] )}}"></a>
							</div><!-- /.blog-card-one__image -->
							<div class="blog-card-one__content">
								<div class="blog-card-one__meta">
									<div class="blog-card-one__date">
										<i class="fa fa-calendar-alt" aria-hidden="true"></i>
										{{ $blog_detatils->created_at->format('F d, Y') }}
									</div><!-- /.blog-card-one__date -->
									<a href="{{ route('blog_dt',['id' => $blog_detatils->id] )}}" class="blog-card-one__category">{{$blog_detatils->title}}</a>
									<!-- /.blog-card-one__category -->
								</div><!-- /.blog-card-one__meta -->
								<h3 class="blog-card-one__title"><a href="#">{{$blog_detatils->content}}</a></h3>
								<a href="{{ route('blog_dt',['id' => $blog_detatils->id] )}}" class="blog-card-one__more">
									Read More
									<i class="fa fa-arrow-right"></i>
								</a><!-- /.blog-card-one__more -->
							</div><!-- /.blog-card-one__content -->
						</div><!-- /.blog-card-one -->
					</div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
					@endforeach
				</div><!-- /.row gutter-y-30 -->
			</div><!-- /.container -->
		</section>


	<div class="mobile-nav__wrapper">
		<div class="mobile-nav__overlay mobile-nav__toggler"></div>
		<!-- /.mobile-nav__overlay -->
		<div class="mobile-nav__content">
			<a href="#" class="mobile-nav__close mobile-nav__toggler">
				<span></span>
				<span></span>
			</a>

			<div class="logo-box">
				<a href="index.html" aria-label="logo image"><img src="assets/images/logo-light.png" width="98"
						height="33" alt="Cretech"></a>
			</div>
			<!-- /.logo-box -->
			<div class="mobile-nav__container"></div>
			<!-- /.mobile-nav__container -->

			<ul class="mobile-nav__contact list-unstyled">
				<li>
					<i class="fa fa-phone"></i>
					<a href="tel:+8898006802">+ 88 ( 9800 ) 6802</a>
				</li>
				<li>
					<i class="fa fa-envelope"></i>
					<a href="mailto:needhelp@company.com">needhelp@company.com</a>
				</li>
				<li>
					<i class="fa fa-map-marker-alt"></i>
					88 Broklyn Golden Road Street <br> New York. USA
				</li>
			</ul><!-- /.mobile-nav__contact -->
			<ul class="mobile-nav__social">
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
			</ul><!-- /.mobile-nav__social -->



		</div>
		<!-- /.mobile-nav__content -->
	</div>
	<!-- /.mobile-nav__wrapper -->

	<div class="search-popup">
		<div class="search-popup__overlay search-toggler"></div>
		<!-- /.search-popup__overlay -->
		<div class="search-popup__content">
			<form action="#">
				<label for="search" class="sr-only">search here</label><!-- /.sr-only -->
				<input type="text" id="search" placeholder="Search Here..." />
				<button type="submit" aria-label="search submit" class="thm-btn">
					<span><i class="icon-magnifying-glass"></i></span>
				</button>
			</form>
		</div>
		<!-- /.search-popup__content -->
	</div>
	<!-- /.search-popup -->

	<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
@endsection