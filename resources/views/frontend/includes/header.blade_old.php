<nav class="main-menu sticky-header">
	<div class="container-fluid">
		<div class="main-menu__logo">
			<a href="{{url('/')}}">
				<img src="{{asset('frontend/assets/images/favicons/cti-file-01.png')}}" width="150" height="80" alt="Cretech">
			</a>
		</div><!-- /.main-menu__logo -->
		<ul class="main-menu__list">
			<li><a href="{{url('/')}}">Home</a></li>
			<li><a href="{{route('services')}}">Services</a></li>
			<li><a href="{{route('about-us')}}">About us</a></li>
			<!-- <li><a href="{{route('projects')}}">Projects</a></li> -->
			<li><a href="{{route('contact-us')}}">Contact</a></li>
			<li class="menu-item-has-children">
				<a href="{{route('blog')}}">Blog</a>
			</li>			
			<li class="menu-item-has-children">
				<a href="{{route('projects')}}">Project</a>
			</li>	

		</ul><!-- /.main-menu__list -->
		<div class="main-menu__right">
			<a href="#" class="mobile-nav__toggler">
				<span></span>
				<span></span>
				<span></span>
			</a>			
			@if( isset($setting) && !empty($setting))
			<a href="tel:+91{{$setting->mobile}}" class="main-menu__cta">
				<i class="fa fa-phone-alt"></i>
				<span class="main-menu__cta__text">
					<b>+91 {{$setting->mobile}} </b>
					Call Anytime
				</span><!-- /.main-menu__cta__text -->
			</a><!-- /.main-menu__cta -->
			@endif	
		</div><!-- /.main-menu__right -->
	</div><!-- /.container-fluid -->
</nav><!-- /.main-menu -->