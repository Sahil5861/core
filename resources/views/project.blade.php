
@extends('layouts.frontend_default')
@section('title', 'Projects')
@section('content')
<style>
  .heading {
    color: black; /* Updated to black */
    font-family: 'Overpass', sans-serif;
    text-align: center;
    margin-top: 20px;
  }
  
  .container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    /* max-width: 1000px; */    
    margin: 0 auto;
    padding: 20px;
    gap: 20px;
  }
  
  .container .card {
    position: relative;
    flex: 0 0 calc(25% - 20px);
    max-width: calc(25% - 20px);
    background-color: white; /* Updated to white */
    overflow: hidden; /* Added to hide overflowing image on zoom */
    color: black; /* Added to ensure text is black */
    text-align: center; /* Center align the text */
    margin-bottom: 20px; /* Add margin at the bottom for spacing */
  }
  
  .container .card a {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    text-decoration: none;
    width: 100%;
    height: 100%;
    position: relative;
  }
  
  .container .card h3 {
    color: black;
    font-family: 'Overpass', sans-serif;
    font-size: 16px;
    margin-top: 12px;
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: rgba(255, 255, 255, 0.8);
    padding: 8px;
    box-sizing: border-box;
    opacity: 0;
    transition: opacity 0.3s ease;
    pointer-events: none; /* Prevent text from interfering with hover */
  }
  
  .container .card:hover h3 {
    opacity: 1;
  }
  
  .container .card img {
    width: 100%;
    height: auto;
    object-fit: cover;
    transition: transform 0.3s ease;
  }
  
  .container .card:hover img {
    transform: scale(1.1);
    opacity: 0.8;
  }
  
  .container .card:hover h3 {
    opacity: 1;
  }
  /* end */
  .slider-container {
    position: relative;
    width: 100vw;
    height: 500px; /* Adjust the height as needed */
    overflow: hidden;
    top:-10px;
    left:-8px;
  }
  
  .slider-container::before {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('frontend/assets/images/background/theader_pink.png') no-repeat center top / cover;
    z-index: -1;
  }
  
  .slider-text {
    position: absolute;
    top: 45%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: white;
    font-size: 24px;
    font-weight: bold;
  }
  
  /* end */
  .card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px; /* Add left and right padding */
    height: 250px;
  }
  
  .card {
    width: calc(25% - 20px); /* Adjust the space between cards */
    background-color: #f5f5f5;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    overflow: hidden;
  }
  
  .card:nth-child(1) {
    background-image: linear-gradient( 135deg, #3C8CE7 10%, #00EAFF 100%);
  }
  
  .card:nth-child(2) {
    background: #FF5F6D;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to bottom, #FFC371, #FF5F6D);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to bottom, #FFC371, #FF5F6D); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  }
  
  .card:nth-child(3) {
    background-image: linear-gradient( 135deg, #81FBB8 10%, #28C76F 100%);
  }
  
  .card:nth-child(4) {
    background-image: linear-gradient( 135deg, #FAB2FF 10%, #1904E5 100%);
  }
  
  .card-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100%;
    padding: 20px;
    text-align: center;
  }
  
  .card-content:hover img {
    background-color: rgba(0, 0, 0, 0.2); /* Change the background color of the image on hovering */
  }
  
  .card-content h3 {
    margin: 0;
    font-size: 18px;
    margin-bottom: 50px;
  }
  
  .round-circle {
    width: 100px;
    height: 100px;
    background-color: black;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    margin-bottom: 20px;
  }
  
  .round-circle img {
    max-width: 75%;
    max-height: 75%;
    object-fit: contain;
    border-radius: 50%;
    transition: background-color 0.3s ease;
  }
  
  @media (max-width: 768px) {
    .card {
      width: calc(50% - 10px);
    }
  }
  
  /* end */
  
  
  
  </style>
		<div class="page-header">
			<div class="page-header__bg"
				style="background-image: url(frontend/assets/images/background/page-header-bg-1-1.jpg);"></div>
			<!-- /.page-header__bg -->
			<div class="container">
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="index.html">Home</a></li>
					<li>Project</li>
				</ul>
				<h2 class="page-header__title">Project Page</h2><!-- /.page-header__title -->
			</div><!-- /.container -->
		</div><!-- /.page-header -->
        <div class="heading"><h3 style="color:#fff;">Our Projects</h3></div>
  <div class="container">
    @foreach($project as $projectdata)
    <div class="card">
        <a href="{{ route('/project-detail', ['id' => $projectdata->id]) }}">
        <img src="{{asset('images/project/'.$projectdata->image)}}" alt="" style="box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);">
        <h3>{{$projectdata->title}}</h3>
      </a>
    </div>
    @endforeach
    <!-- Add more cards here -->
  </div>
 @endsection