@extends('layouts.frontend_default')
@section('title', 'Projects')
@section('content')
<!-- {{asset('')}} -->
<!-- <h1>Projects</h1> -->
<!-- main menu -->
<style>
	.project-card-one__image-wrapper {
		width: 100%;
		height: 200px;
		/* Set the desired height for your images */
		overflow: hidden;
		/* Ensure images don't exceed the defined dimensions */
	}

	.project-card-one__image-wrapper img {
		width: 100%;
		object-fit: contain;
		height: 100%;
	}

	.project-card-one__image {
		transition: .3s linear;
	}

	.project-card-one {
		cursor: pointer;
		transition: .3s linear;
		border: 1px solid #1113;
	}

	.project-card-one:hover .project-card-one__image {
		transform: scale(1.1);
	}

	.box_shadow {
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		/* box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.2) 0px 15px 12px; */
	}

	@media (max-width: 480px) {

		.project-card-one {
			padding: 20px !important;
		}
	}
</style>
<div class="page-header">
	<div class="page-header__bg"
		style="background-image: url({{asset('frontend/assets/images/background/header.jpg')}})" ;></div>
	<!-- /.page-header__bg -->
	<div class="container">
		<ul class="thm-breadcrumb list-unstyled">
			<li><a href="index.html">Home</a></li>
			<li>Projects</li>
		</ul>
		<h2 class="page-header__title">Projects</h2><!-- /.page-header__title -->
	</div><!-- /.container -->
</div>
<!-- page header -->
<section class="section-padding--bottom section-padding--top">
	<div class="container">
		<div class="row gutter-y-30">
			@foreach($project as $projectdata)
				<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-duration="1500ms"
					data-wow-delay="000ms"
					style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
					<div class="project-card-one box_shadow p-4">
						<!-- <div class="project-card-one__image">
										<img src="{{asset('images/project/'.$projectdata->image)}}" alt="">
									</div> -->
						<div class="project-card-one__image project-card-one__image-wrapper">
							<img src="{{asset('images/project/' . $projectdata->image)}}" alt="">
						</div>
						<!-- /.project-card-one__image -->
						<div class="project-card-one__content">
							<div class="project-card-one__content__inner">
								<!-- <p class="project-card-one__text">IT Technology Solution</p> -->
								<h3 style="color:#fff;">{{$projectdata->title}}
									<a href="{{ route('/project-detail', ['id' => $projectdata->id]) }}">
								</h3><!-- /.project-card-one__title -->
								<!-- <a href="project-details.html" class="project-card-one__more"> -->
								<a href="{{ route('/project-detail', ['id' => $projectdata->id]) }}"
									class="project-card-one__more">
									<i class="fa fa-angle-right"></i>
								</a><!-- /.project-card-one__more -->
							</div><!-- /.project-card-one__content__inner -->
						</div><!-- /.project-card-one__content -->
					</div><!-- /.project-card-one -->
				</div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
			@endforeach

		</div><!-- /.row gutter-y-30 -->
	</div><!-- /.container -->
</section>

@endsection