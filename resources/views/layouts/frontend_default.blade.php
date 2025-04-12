<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body>
	@include('includes.header')

	@yield('section')
	@include('includes.footer')

	<script src="{{asset('frontend/assets/js/jquery-3.4.0.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>    
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>    
    <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>    
    <script src="{{asset('frontend/assets/js/jquery.magnific-popup.js')}}"></script>    
    <script src="{{asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/counter-us-activate.js')}}"></script>    
    <script src="{{asset('frontend/assets/js/jquery.waypoints.js')}}"></script>
    <script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>    
    <script src="{{asset('frontend/assets/js/aos.js')}}"></script>    
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>


	@yield('js')
</body>
</html>