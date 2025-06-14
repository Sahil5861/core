<nav class="main-menu sticky-header">
	<div class="container-fluid">
		<div class="main-menu__logo">
			<a href="{{url('/')}}">
				<img src="{{asset('frontend/assets/images/logo-dark.png')}}" width="98" height="33" alt="Cretech">
			</a>
		</div><!-- /.main-menu__logo -->
		<ul class="main-menu__list">
			<li><a href="{{url('/')}}">Home</a></li>

			<!-- <li class="menu-item-has-children">
				<a href="index.html">Home</a>
				<ul>
					<li><a href="index.html">Home One</a></li>
					<li><a href="html/cretech/index-2.html">Home Two</a></li>
					<li><a href="html/cretech/index-3.html">Home Three</a></li>
					<li class="menu-item-has-children"><a href="index.html">Header Styles</a>
						<ul>
							<li><a href="index.html">Header One</a></li>
							<li><a href="html/cretech/index-2.html">Header Two</a></li>
							<li><a href="html/cretech/index-3.html">Header Three</a></li>
						</ul>
					</li>
				</ul>
			</li> -->
			<li class="menu-item-has-children">
				<a href="#">Pages</a>
				<ul>
					<li><a href="{{route('about-us')}}">About Us</a></li>
					<li><a href="html/cretech/team.html">Our Team</a></li>
				</ul>
			</li>
			<li class="menu-item-has-children">
				<a href="html/cretech/services-1.html">Services</a>
				<ul>
					<li><a href="html/cretech/services-1.html">Services 01</a></li>
					<li><a href="html/cretech/services-2.html">Services 02</a></li>
					<li><a href="html/cretech/service-cyber-security.html">Cyber Security</a></li>
					<li><a href="html/cretech/service-it-management.html">IT Management</a></li>
					<li><a href="html/cretech/service-qa-testing.html">QA & Testing</a></li>
					<li><a href="html/cretech/service-infrastructure-plan.html">Infrastructure Plan</a></li>
					<li><a href="html/cretech/service-it-consultent.html">IT Consultent</a></li>
				</ul>
			</li>
			<li class="menu-item-has-children">
				<a href="html/cretech/projects.html">Projects</a>
				<ul>
					<li><a href="html/cretech/projects.html">Projects</a></li>
					<li><a href="html/cretech/project-details.html">Projects Details</a></li>
				</ul>
			</li>
			<li class="menu-item-has-children">
				<a href="html/cretech/blog.html">Blog</a>
				<ul>
					<li><a href="html/cretech/blog.html">Blog</a></li>
					<li><a href="html/cretech/blog-details.html">Blog Details</a></li>
				</ul>
			</li>
			<li><a href="html/cretech/contact.html">Contact</a></li>
		</ul><!-- /.main-menu__list -->
		<div class="main-menu__right">
			<a href="#" class="mobile-nav__toggler">
				<span></span>
				<span></span>
				<span></span>
			</a>
			<a href="#" class="search-toggler">
				<i class="icon-magnifying-glass"></i>
			</a><!-- /.search-toggler -->
			<a href="tel:+919643044561" class="main-menu__cta">
				<i class="fa fa-phone-alt"></i>
				<span class="main-menu__cta__text">
					<b>+91 9643044561 </b>
					Call Anytime
				</span><!-- /.main-menu__cta__text -->
			</a><!-- /.main-menu__cta -->
		</div><!-- /.main-menu__right -->
	</div><!-- /.container-fluid -->
</nav><!-- /.main-menu -->